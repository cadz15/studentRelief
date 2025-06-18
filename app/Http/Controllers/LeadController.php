<?php

namespace App\Http\Controllers;

use App\Exports\LeadsExport;
use App\Models\Lead;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
        $users = User::all();

        dd("hello", $users);

        Lead::create($validated);

        return redirect()->back()->with('success', 'Lead successfully saved!');
    }

    public function export()
    {
        return Excel::download(new LeadsExport, 'studentleads.xlsx');
    }
}
