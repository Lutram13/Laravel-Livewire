<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard.dashboard-index');
    }
}
