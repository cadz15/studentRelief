<?php

namespace App\Http\Controllers;

use App\Exports\LeadsExport;
use App\Models\Lead;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;
use Maatwebsite\Excel\Facades\Excel;

class LeadController extends Controller
{
    //
    public function index()
    {
        $leads = Lead::latest()->paginate(15);

        // Pass the data to Inertia and format the created_at field directly here
        $leads->getCollection()->transform(function ($lead) {
            $lead->full_name = $lead->first_name . ' ' . $lead->last_name;
            $lead->formatted_date = Carbon::parse($lead->created_at)->format('M d, Y');
            return $lead;
        });

        return Inertia::render('Dashboard', [
            'leads' => $leads
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:500'],
            'email' => ['required', 'email', 'max:255'],
            'phone_number' => ['required', 'digits:10'],
            'enrolled' => ['required', 'in:yes,no'],
        ]);

        $lead = Lead::create($validated);


        try
        {
            $responses = Http::post(env('GOOGLE_SHEET_POST'), [
                'full_name' => $lead?->full_name,
                'address' => $lead?->address,
                'email' => $lead?->email,
                'phone_number' => $lead?->phone_number,
                'enrolled' => $lead?->enrolled,
                'date' => Carbon::parse($lead?->created_at)->format('M d, Y')
            ]);

            // Check if the request was successful
        if ($responses->successful()) {
            // You can log the response or do further processing
            return response()->json(['message' => 'Data sent successfully']);
        } else {
            // Handle the error case
            return response()->json(['message' => 'Failed to send data to Google Sheets', 'error' => $responses->body()]);
        }
            
        }catch(Exception $e) {

           
        }

        return redirect()->back()->with('success', 'Lead successfully saved!');
    }

    public function export()
    {
        return Excel::download(new LeadsExport, 'studentleads.xlsx');
    }


    public function getFile($filename)
    {
        $path = storage_path('app/public/uploads/' . $filename);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path);
    }
}
