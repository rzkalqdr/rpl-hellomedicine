<?php

namespace App\Http\Controllers;

use App\Models\Apotek;
use Illuminate\Http\Request;

class dashboardApotekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboardAdmin.apotek.index', [
            'apotek' => Apotek::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardAdmin.apotek.create', [
            'apotek' => Apotek::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namaApotek' => 'required|max:255',
            'alamatApotek' => 'required|max:255',
        ]);

        Apotek::create($validatedData);
  
        return redirect('/dashboard/apotek')->with('success', 'Apotek add Successfully!');
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
     * @param  \App\Models\Apotek  $apotek
     * @return \Illuminate\Http\Response
     */
    public function edit(Apotek $apotek)
    {
        return view('dashboardAdmin.apotek.edit', [
            'apotek' => $apotek
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apotek  $apotek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apotek $apotek)
    {
        $validatedData = $request->validate([
            'namaApotek' => 'required',
            'alamatApotek' => 'required',
        ]);

         Apotek::where('idApotek', $apotek->idApotek)
            ->update($validatedData);

        return redirect('/dashboard/apotek')->with('success', 'Apotek update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apotek  $apotek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apotek $apotek)
    {
        Apotek::destroy($apotek->idApotek);

        return redirect('/dashboard/apotek')->with('success', 'Apotek has been deleted!');
    }
}
