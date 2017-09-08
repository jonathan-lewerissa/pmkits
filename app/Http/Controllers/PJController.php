<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersekutuanJumat;
use App\Absensi;

class PJController extends Controller
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
        $pj = PersekutuanJumat::paginate(20, ['*'], 'pj_page');
        $absensi = Absensi::where('id_event','LIKE','pj%')->paginate(10, ['*'], 'absensi_page');
        $absensi->setPageName('absensi_page');
        return view('pj', compact('pj'))->with('absensi', $absensi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $pj = PersekutuanJumat::paginate(20, ['*'], 'pj_page');
        $ids = 'pj'.$id;
//        echo $ids;
        $absensi = Absensi::where('id_event','LIKE',$ids)->paginate(10, ['*'], 'absensi_page');
        $absensi->setPageName('absensi_page');
//        dd($absensi);
        return view('pj', compact('pj'))->with('absensi', $absensi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
