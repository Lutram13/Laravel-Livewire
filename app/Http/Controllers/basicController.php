<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class basicController extends Controller
{
    public function student(Request $request)
    {
        return view('pages.admin.basic.student');
    }

    public function customer(Request $request)
    {
        return view('pages.admin.basic.customer');
    }
}
