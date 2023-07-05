<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Park;

class ParkController extends Controller
{
    public function read(Request $request, $id)
        {
            $park = Park::with('disponibilitys')->findOrFail($id);
            return response()->json($park);
        }
    public function readAll(Request $request)
        {
            $parks = Park::with('disponibilitys')->get();
            return response()->json($parks, 200);
        }

}
