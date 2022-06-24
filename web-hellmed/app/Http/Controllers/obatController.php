<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class obatController extends Controller
{
    public function index() {
        return view('homepage_obat', [
            'barang' => Barang::all()
        ]);
    }
}
