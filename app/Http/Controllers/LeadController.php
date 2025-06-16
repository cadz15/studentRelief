<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    //
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

        Lead::create($validated);

        return redirect()->back()->with('success', 'Lead successfully saved!');
    }
}
