<?php

namespace App\Http\Controllers;

use App\Models\Disponibility;
use Illuminate\Http\Request;

class DisponibilityController extends Controller
{
    public function read(Request $request, $id)
        {
            $disponibility = Disponibility::with('park')->findOrFail($id);
            return response()->json($disponibility);
        }
    /**
     * Summary of readAll
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function readAll(Request $request)
        {
            $disponibilitys = Disponibility::with('park')->get();
            return response()->json($disponibilitys, 200);
        }
}


