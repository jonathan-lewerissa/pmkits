<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Dosenkaryawan;

class DosenkaryawanController extends Controller
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
        $dsn = Dosenkaryawan::paginate(10);
        return view('dosenkaryawan.index',compact('dsn'))->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosenkaryawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dsn = new Dosenkaryawan();
        $dsn['name'] = $request->name;
        $dsn['pekerjaan'] = $request->pekerjaan;
        $dsn['fakultas'] = $request->fakultas;
        $dsn['departemen'] = $request->departemen;
        $dsn['email'] = $request->email;
        $dsn['jk'] = $request->jk;
        $dsn['asal'] = $request->asal;
        $dsn['tgl_lahir'] = $request->tgl_lahir;
        $dsn['alamat'] = $request->alamat;
        $dsn['gereja'] = $request->gereja;
        $dsn['no_hp'] = $request->no_hp;
        $dsn->save();
        return view('dosenkaryawan.index',compact('dsn'))->with('user',$user);
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
        $dsn = Dosenkaryawan::findorfail($id);
        return view('dosenkaryawan.edit',compact('dsn'));
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
        $dsn = Dosenkaryawan::findorfail($id);
        $dsn['name'] = $request->name;
        $dsn['pekerjaan'] = $request->pekerjaan;
        $dsn['fakultas'] = $request->fakultas;
        $dsn['departemen'] = $request->departemen;
        $dsn['email'] = $request->email;
        $dsn['jk'] = $request->jk;
        $dsn['asal'] = $request->asal;
        $dsn['tgl_lahir'] = $request->tgl_lahir;
        $dsn['alamat'] = $request->alamat;
        $dsn['gereja'] = $request->gereja;
        $dsn['no_hp'] = $request->no_hp;
        $dsn->save();
        return view('dosenkaryawan.edit',compact('dsn'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doskar=Dosenkaryawan::findorfail($id);
        $doskar->delete();
        return redirect()->back();
        
    }
}
