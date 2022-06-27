<?php

namespace App\Http\Controllers;

use App\Models\tempatVaksin;
use Illuminate\Http\Request;

class tempatVaksinController extends Controller
{
    public function index()
    {
        return view('homepage_tempatvaksin', [
            'tempatVaksin' => tempatVaksin::all()
        ]);
    }
}
