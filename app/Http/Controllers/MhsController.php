<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mahasiswa;
use App\User;

class MhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $mhs = mahasiswa::findorfail($id);
        $mhs['name'] = $request->name;
        $mhs['nrp'] = $request->nrp;
        $mhs['email'] = $request->email;
        $mhs['jk'] = $request->jk;
        $mhs['asal'] = $request->asal;
        $mhs['tgl_lahir'] = $request->tgl_lahir;
        $mhs['alamat_sby'] = $request->alamat_sby;
        $mhs['alamat_asal'] = $request->alamat_asal;
        $mhs['gereja'] = $request->gereja;
        $mhs['no_hp'] = $request->no_hp;
        $mhs['line_id'] = $request->line_id;
//        $mhs['talenta'] = $request->talenta;
//        $mhs['kehadiran_pj'] = $request->kehadiran_pj;
//        $mhs['kehadiran_pd'] = $request->kehadiran_pd;
//        $mhs['kehadiran_rapat'] = $request->kehadiran_rapat;
        $mhs->save();
        return redirect()->back()->with('alert', 'Data Updated!');
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
        $user = User::where('username', $id)->delete();
        $mhs = mahasiswa::where('nrp', $id)->delete();
        return redirect()->back()->with('alert', 'Data Deleted!');
    }
}
