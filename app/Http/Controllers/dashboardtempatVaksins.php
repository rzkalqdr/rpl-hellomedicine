<?php

namespace App\Http\Controllers;

use App\Models\tempatVaksin;
use Illuminate\Http\Request;

class dashboardtempatVaksins extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // index tempat vaksin
        return view('dashboardAdmin.tempatVaksins.index', [
            'tempatVaksin' => tempatVaksin::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // create tempatVaksin
        return view('dashboardAdmin.tempatVaksins.create', [
            'tempatVaksin' => tempatVaksin::all()
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
        // store data tempatVaksin
        $validatedData = $request->validate([
            'namaTempatVaksin' => 'required|max:255',
            'alamatVaksin' => 'required|max:255',
            'linkgmaps' => 'required|max:255',
        ]);

        tempatVaksin::create($validatedData);

        return redirect('/dashboard/tempatVaksin')->with('success', 'Tempat Vaksin add Successfully!');
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
        // edit data tempatVaksin
        $tempatVaksin = tempatVaksin::findOrFail($id);
        return view('dashboardAdmin.tempatVaksins.edit', [
            'tempatVaksin' => $tempatVaksin
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
        //update tempatVaksin data
        $validatedData = $request->validate([
            'namaTempatVaksin' => 'required|max:255',
            'alamatVaksin' => 'required|max:255',
            'linkgmaps' => 'required|max:255',
        ]);

        tempatVaksin::where('idVaksin', $id)
            ->update($validatedData);

        return redirect('/dashboard/tempatVaksin')->with('success', 'Tempat Vaksin update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete tempatVaksin data
        tempatVaksin::destroy($id);
        return redirect('/dashboard/tempatVaksin')->with('success', 'Tempat Vaksin delete successfully!');
    }
}
