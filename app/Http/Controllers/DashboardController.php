<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Alumni;
use App\Dosenkaryawan;
use App\Pengurus;
use App\Event;
use App\PersekutuanDoa;

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
        if(Auth::check()){
            $mhs = Mahasiswa::count();
            $alumni = Alumni::count();
            $doskar = Dosenkaryawan::count();
            $pengurus = Pengurus::count();
            $event = Event::count();
            $pd = PersekutuanDoa::count();
            
            $user = Auth::user();
            return view("dashboard")->with('user',$user)->with('mhs',$mhs)->with('alumni',$alumni)->with('doskar',$doskar)->with('pengurus',$pengurus)->with('event',$event)->with('pd',$pd);
        }        
    }
}
