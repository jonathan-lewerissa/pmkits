<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
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
        $mhs = Mahasiswa::orderBy('nrp', 'asc')->paginate(10);
//        $mhs = Mahasiswa::all();
        return view('mahasiswa.index', compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mhs = new Mahasiswa();
        $mhs['name'] = $request->name;
        $mhs['nrp'] = $request->nrp;
        $mhs['username'] = $request->username;
        $mhs['jk'] = $request->jk;
        $mhs['asal'] = $request->asal;
        $mhs['tgl_lahir'] = $request->tgl_lahir;
        $mhs['alamat_sby'] = $request->alamat_sby;
        $mhs['alamat_asal'] = $request->alamat_asal;
        $mhs['gereja'] = $request->gereja;
        $mhs['no_hp'] = $request->no_hp;
        $mhs['line_id'] = $request->line_id;
        $mhs['talenta'] = $request->talenta;
        $mhs['kehadiran_pj'] = 0;
        $mhs['kehadiran_pd'] = 0;
        $mhs['kehadiran_rapat'] = 0;
        $mhs->save();
        return redirect('mahasiswa');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mhs = Mahasiswa::findorfail($id);
        return view('mahasiswa.edit', compact('mhs'));
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
        $mhs = Mahasiswa::findorfail($id);
        $mhs['name'] = $request->name;
        $mhs['nrp'] = $request->nrp;
        $mhs['username'] = $request->username;
        $mhs['jk'] = $request->jk;
        $mhs['asal'] = $request->asal;
        $mhs['tgl_lahir'] = $request->tgl_lahir;
        $mhs['alamat_sby'] = $request->alamat_sby;
        $mhs['alamat_asal'] = $request->alamat_asal;
        $mhs['gereja'] = $request->gereja;
        $mhs['no_hp'] = $request->no_hp;
        $mhs['line_id'] = $request->line_id;
//        $mhs['talenta'] = $request->talenta;
        $mhs->save();
        return view('mahasiswa.edit', compact('mhs'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mhs = Mahasiswa::findorfail($id);
        $mhs->delete();
        return redirect()->back();
    }
}
