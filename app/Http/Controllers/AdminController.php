<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    //
    public function siteSetting()
    {
        $siteSetting = SiteSetting::first();
        return Inertia::render('Admin/SiteSettings', [
            'siteSetting' => $siteSetting,
        ]);
    }
}
