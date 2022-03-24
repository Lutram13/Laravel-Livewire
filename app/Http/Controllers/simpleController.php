<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class simpleController extends Controller
{

    public function quickStart(Request $request)
    {
        return view('pages.admin.simple.quick-start');
    }

    public function hello(Request $request)
    {
        return view('pages.admin.simple.hello');
    }

    public function hellos(Request $request)
    {
        return view('pages.admin.simple.hellos');
    }
}
