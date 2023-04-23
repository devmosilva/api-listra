<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();

        return response()->json([
            'vehicles' => $vehicles
        ], 200 );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->validate([
        //     'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'city' => 'required|string',
        //     'brand' => 'required|string',
        //     'model' => 'required|string',
        //     'description' => 'required|string',
        //     'year' => 'required|integer',
        //     'mileage' => 'required|integer',
        //     'transmission_type' => 'required|string',
        //     'store_phone' => 'required|string',
        //     'price' => 'required|numeric',
        // ]));
        
        $vehicle = new Vehicle([
            'id' => Str::uuid(),
            'photo' => $request->input('photo'),
            'city' => $request->input('city'),
            'make' => $request->input('make'),
            'model' => $request->input('model'),
            'description' => $request->input('description'),
            'year' => $request->input('year'),
            'mileage' => $request->input('mileage'),
            'transmission_type' => $request->input('transmission_type'),
            'store_phone' => $request->input('store_phone'),
            'price' => $request->input('price'),
        ]);
    
        $vehicle->save();
    
        return response()->json(['message' => 'Vehicle created successfully!', 'vehicle' => $vehicle], 201);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
