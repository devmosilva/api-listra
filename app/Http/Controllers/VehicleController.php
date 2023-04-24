<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
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

        $vehicles = Cache::remember('vehicleList', now()->addMinutes(20), function () {
            return Vehicle::all();
        });

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

        $validator = Validator::make($request->all(), [
            'photo' => 'required|string',
            'city' => 'required|string',
            'make' => 'required|string',
            'model' => 'required|string',
            'description' => 'required|string',
            'year' => 'required|integer',
            'mileage' => 'required|integer',
            'transmission_type' => 'required|string',
            'store_phone' => 'required|string',
            'price' => 'required|numeric',
        ]);
    
        if($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        try {
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
    
            Cache::forget('vehicleList');

            return response()->json(['message' => 'Vehicle created successfully!', 'vehicle' => $vehicle], 201);
        
        } catch (\Throwable $th) {

            return response()->json(['error' => 'Failed to create vehicle. Please try again.'], 400);

        }
    }
}
