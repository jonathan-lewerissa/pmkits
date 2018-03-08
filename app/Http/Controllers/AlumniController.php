<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Alumni;

class AlumniController extends Controller
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
        $user = Auth::user();
        $alumni = Alumni::paginate(10);
        return view('alumni.index',compact('alumni'))->with('user',$user);
//        return view('alumni.index')->with('alumni',$alumni);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumni = new Alumni();
        $alumni['name'] = $request->name;
        $alumni['email'] = $request->email;
        $alumni['jk'] = $request->jk;
        $alumni['asal'] = $request->asal;
        $alumni['tgl_lahir'] = $request->tgl_lahir;
        $alumni['alamat'] = $request->alamat;
        $alumni['gereja'] = $request->gereja;
        $alumni['no_hp'] = $request->no_hp;
        $alumni['pekerjaan'] = $request->pekerjaan;
        $alumni['tempat_kerja'] = $request->tempat_kerja;
        $alumni['asal_fakultas'] = $request->asal_fakultas;
        $alumni['asal_departemen'] = $request->asal_departemen;
        $alumni['angkatan'] = $request->angkatan;
        $alumni->save();
        return view('alumni.index',compact('alumni'))->with('user',$user);
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
        $alumni = Alumni::findorfail($id);
        return view('alumni.edit',compact('alumni'));
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
        $alumni = Alumni::findorfail($id);
        $alumni['name'] = $request->name;
        $alumni['email'] = $request->email;
        $alumni['jk'] = $request->jk;
        $alumni['asal'] = $request->asal;
        $alumni['tgl_lahir'] = $request->tgl_lahir;
        $alumni['alamat'] = $request->alamat;
        $alumni['gereja'] = $request->gereja;
        $alumni['no_hp'] = $request->no_hp;
        $alumni['pekerjaan'] = $request->pekerjaan;
        $alumni['tempat_kerja'] = $request->tempat_kerja;
        $alumni['asal_fakultas'] = $request->asal_fakultas;
        $alumni['asal_departemen'] = $request->asal_departemen;
        $alumni['angkatan'] = $request->angkatan;
        $alumni->save();
        return view('alumni.edit',compact('alumni'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumni = Alumni::findorfail($id);
        $alumni->delete();
        return redirect()->back();
    }
}
