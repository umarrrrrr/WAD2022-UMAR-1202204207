<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showroom;

class ShowroomtController extends Controller
{
    public function index()
    {
        $showrooms=Showroom::orderBy('id', 'desc')->get();
        return view('showroom.ListCar', compact('showrooms'));
    }

    public function create()
    {
        return view('showroom.AddCar');
    }

    public function store(Request $request)
    {
        $imgName  = $request->img_path->getClientOriginalName();
        $request->img_path->move(public_path('image'), $imgName);

        Showroom::create([
            'name' => $request -> name,
            'owner' => $request -> owner,
            'brand' => $request -> brand,
            'purchase_date' => $request -> purchase_date,
            'description' => $request -> description,
            'image' => $imgName,
            'status' => $request -> status
        ]);

        return redirect('/showroom');
    }
}
