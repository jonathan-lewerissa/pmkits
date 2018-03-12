<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $renungan = DB::table('Renungans')->orderBy('date', 'DESC')->first();
        $pj = DB::table('Persekutuan_jumats')->orderBy('date','ASC')->first();
        return view('welcome', compact('renungan','pj'));
    }
}
