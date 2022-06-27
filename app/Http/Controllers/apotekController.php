<?php

namespace App\Http\Controllers;

use App\Models\Apotek;
use Illuminate\Http\Request;

class apotekController extends Controller
{
    public function index() {
        return view('homepage_apotek', [
            'apotek' => Apotek::all()
        ]);
    }
}
