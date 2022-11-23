<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
       $this->middleware('role:admin');
    }


    public function index()
    {
        return view('admin.admin');
        //echo Auth::user()->role;
    }
}
