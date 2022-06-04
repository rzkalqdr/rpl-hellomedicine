<?php

namespace App\Http\Controllers;

use App\Models\RumahSakit;
use Illuminate\Http\Request;
use Whoops\Run;

class rumahSakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboardAdmin.rumahsakit.index', [
            'rumahsakit' => RumahSakit::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardAdmin.rumahsakit.create', [
            'rumahsakit' => RumahSakit::all()
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
            'namaRS' => 'required|max:255',
            'alamatRS' => 'required|max:255',
        ]);

        RumahSakit::create($validatedData);
  
        return redirect('/dashboard/rumahsakit')->with('success', 'Rumah Sakit add Successfully!');
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
     * @param  \App\Models\RumahSakit  $rumahsakit
     * @return \Illuminate\Http\Response
     */
    public function edit(RumahSakit $rumahsakit)
    {
        return view('dashboardAdmin.rumahsakit.edit', [
            'rumahsakit' => $rumahsakit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RumahSakit  $rumahsakit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RumahSakit $rumahsakit)
    {
        $validatedData = $request->validate([
            'namaRS' => 'required',
            'alamatRS' => 'required',
        ]);

         RumahSakit::where('idRS', $rumahsakit->idRS)
            ->update($validatedData);

        return redirect('/dashboard/rumahsakit')->with('success', 'Rumah Sakit update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RumahSakit  $rumahsakit
     * @return \Illuminate\Http\Response
     */
    public function destroy(RumahSakit $rumahsakit)
    {
        RumahSakit::destroy($rumahsakit->idRS);

        return redirect('/dashboard/rumahsakit')->with('success', 'Rumah Sakit has been deleted!');
    }
}
