<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('accounting.index');
    }

    public function report()
    {
        return view('accounting.report');
    } 

    public function graph()
    {
        return view('accounting.graph');
    }

    public function extra()
    {
        return view('accounting.extra');
    }
}
