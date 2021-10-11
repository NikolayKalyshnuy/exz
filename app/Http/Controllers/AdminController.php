<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if (session('user') == 'admin')
            return view('admin.admin');
        return redirect()->action("\App\Http\Controllers\InstructionController@index");
    }
}
