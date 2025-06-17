<?php

namespace App\Exports;

use App\Models\Lead;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;

class LeadsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $leads = Lead::select(['first_name', 'last_name', 'email', 'address', 'phone_number', 'enrolled', 'created_at'])
             ->latest()
             ->cursor()
             ->map(function ($lead) {
                 return [
                     'full_name' => $lead->first_name . ' ' . $lead->last_name,
                     'email' => $lead->email,
                     'address' => $lead->address,
                     'phone_number' => $lead->phone_number,
                     'enrolled' => $lead->enrolled,
                     'formatted_date' => $lead->created_at->format('M d, Y'),
                 ];
             });

        return $leads;
    }
}
