<?php

namespace App\Http\Controllers;

use App\Models\RumahSakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->ajax()) {
            return view('near-places');
        }

        $rs = RumahSakit::select(['idRS', 'namaRS'])
            ->when($request->longitude and $request->latitude, function ($query) use ($request) {
                $query->addSelect(DB::raw("ST_Distance_Sphere(
                        POINT(".$request->longitude.", ".$request->latitude."), POINT(longitude, latitude)
                    ) as distance"))
                        ->orderBy('distance');
            })
            ->when($request->namaRS, function ($query, $namaRS) {
                $query->where('namaRS', 'like', '%'.$namaRS.'%');
            })
            ->take(9)
            ->get();
        
        return response()->json([
            'rs' => $rs,
        ]);
    }
}
