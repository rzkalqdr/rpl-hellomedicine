<?php

namespace App\Http\Controllers;

use App\Models\RumahSakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RumahSakitController extends Controller
{
    public function index()
    {
        $rumahsakit = DB::table('rumahsakit')->get();

        return view('adminView/dashboardRumahSakit', ['rumahsakit' => $rumahsakit]);
    }
}