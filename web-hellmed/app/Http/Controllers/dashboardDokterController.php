<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\User;
use Illuminate\Http\Request;

class dashboardDokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboardAdmin.dokter.index', [
            'dokter' => Dokter::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('dashboardAdmin.dokter.create')->with('user', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store data Dokter
        $dokter = new Dokter;
        $dokter->idUser = $request->idUser;
        $dokter->namaDokter = $request->namaDokter;
        $dokter->Spesialisasi = $request->Spesialisasi;
        $dokter->NomorSTR = $request->NomorSTR;
        $dokter->save();

        return redirect('/dashboard/dokter')->with('success', 'Dokter add Successfully!');
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
        //edit data Dokter
        $dokter = Dokter::find($id);
        $user = User::all();
        return view('dashboardAdmin.dokter.edit', [
            'dokter' => $dokter,
            'user' => $user
        ]);
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
        //Update data Dokter
        $dokter = Dokter::find($id);
        $dokter->idUser = $request->idUser;
        $dokter->namaDokter = $request->namaDokter;
        $dokter->Spesialisasi = $request->Spesialisasi;
        $dokter->NomorSTR = $request->NomorSTR;
        $dokter->save();

        return redirect('/dashboard/dokter')->with('success', 'Dokter update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete data Dokter
        $dokter = Dokter::find($id);
        $dokter->delete();

        return redirect('/dashboard/dokter')->with('success', 'Dokter delete successfully!');
    }
}
