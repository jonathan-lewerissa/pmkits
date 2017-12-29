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
            $user = Auth::user()->name;
            if($user=='admin'){
                $mhs = Mahasiswa::count();
                $alumni = Alumni::count();
                $doskar = Dosenkaryawan::count();
                $pengurus = Pengurus::count();
                $event = Event::count();
                $pd = PersekutuanDoa::count();
                
                $mhss = mahasiswa::orderBy('nrp')->get();
                $update = mahasiswa::where('updated_at','!=',null)->count();

                // 2013
                $all2013 = mahasiswa::where('nrp','like','__13%')->get();
                $up2013 = $all2013->where('updated_at','!=',null)->count();
                // 2014
                $all2014 = mahasiswa::where('nrp','LIKE','__14%')->get();
                $up2014 = $all2014->where('updated_at','!=',null)->count();
                // 2015
                $all2015 = mahasiswa::where('nrp','LIKE','__15%')->get();
                $up2015 = $all2015->where('updated_at','!=',null)->count();
                // 2016
                $all2016 = mahasiswa::where('nrp','LIKE','__16%')->get();
                $up2016 = $all2016->where('updated_at','!=',null)->count();
                // 2017
                $all2017 = mahasiswa::where('nrp','LIKE','____17%')->get();
                $up2017 = $all2017->where('updated_at','!=',null)->count();

                $user = Auth::user();
                return view("/dashboard")->with('user',$user)->with('mhs',$mhs)->with('alumni',$alumni)->with('doskar',$doskar)->with('pengurus',$pengurus)->with('event',$event)->with('pd',$pd)->with('mhss',$mhss)->with('update',$update)->with('up2013',$up2013)->with('all2013',$all2013->count())->with('up2014',$up2014)->with('all2014',$all2014->count())->with('up2015',$up2015)->with('all2015',$all2015->count())->with('up2016',$up2016)->with('all2016',$all2016->count())->with('up2017',$up2017)->with('all2017',$all2017->count());
            }
            else if($user=='alumni'){
                $alumni = alumni::paginate(10);
                return view('user/alumni')->with('alumni',$alumni);
            }
            else{
                $mhs = mahasiswa::where('NRP','=',Auth::user()->username)->first();
                return view('user/mhs')->with('mhs',$mhs);
            }
        }    
    }
    
    public function change_password(Request $request)
    {
        $id = $request->nrp;
        $pass = $request->password;
//        echo $id.' '.$pass;
//        dd($request);
        $user = User::where('username',$id)->update(['password' => bcrypt($pass)]);
                
        return redirect()->route('home')->with('alert', 'Password Updated!');
    }
    
    public function search(Request $request)
    {
//        dd($request);
        $name = $request->name;
        $nrp = $request->nrp;
        
        $alumni = alumni::paginate(10);
        
        $mhs = mahasiswa::where('NRP','LIKE','%'.$nrp.'%')->where('NAME','LIKE','%'.$name.'%')->paginate(10);
        $mhss = mahasiswa::all();
        $update = mahasiswa::where('updated_at','!=',null)->count();
            
        // 2013
        $all2013 = mahasiswa::where('nrp','like','__13%')->get();
        $up2013 = $all2013->where('updated_at','!=',null)->count();
        // 2014
        $all2014 = mahasiswa::where('nrp','LIKE','__14%')->get();
        $up2014 = $all2014->where('updated_at','!=',null)->count();
        // 2015
        $all2015 = mahasiswa::where('nrp','LIKE','__15%')->get();
        $up2015 = $all2015->where('updated_at','!=',null)->count();
        // 2016
        $all2016 = mahasiswa::where('nrp','LIKE','__16%')->get();
        $up2016 = $all2016->where('updated_at','!=',null)->count();
        // 2017
        $all2017 = mahasiswa::where('nrp','LIKE','____17%')->get();
        $up2017 = $all2017->where('updated_at','!=',null)->count();
        
        return view('home')->with('alumni',$alumni)->with('mhs',$mhs)->with('mhss',$mhss)->with('update',$update)->with('up2013',$up2013)->with('all2013',$all2013->count())->with('up2014',$up2014)->with('all2014',$all2014->count())->with('up2015',$up2015)->with('all2015',$all2015->count())->with('up2016',$up2016)->with('all2016',$all2016->count())->with('up2017',$up2017)->with('all2017',$all2017->count());
    }
}
