<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();
        if(Auth::check()){
            return view("dashboard")->with('user',$user);
        }
        
    }

    public function logout()
    {
        if(Auth::check()){
            Auth::logout();
            return route("login");
        }
    }
}
