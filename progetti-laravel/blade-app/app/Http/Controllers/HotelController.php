<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        return view('hotels.index', [
            'hotels' => Hotel::get()
        ]);
    }

    public function delete(Request $request, $id)
    {
        $hotel = Hotel::where('id', '=', $id)->firstOrFail();
        $hotel->delete();
        return view('hotels.feedback.deleted');
    }

    public function create()
    {
        return view('hotels.create');
    }

    public function save(Request $request)
    {
        $hotel = new Hotel();
        $hotel->name = $request->input('name');
        $hotel->stars = $request->input('stars');
        $hotel->address = $request->input('address');
        $hotel->save();

        return view('hotels.feedback.created');

    }

}