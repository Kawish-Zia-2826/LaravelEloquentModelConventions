<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //     $flights =Flight::whereHas('contact',function ($query){
    //         $query->where('email','like','a%');
    //     }
    //     )->get();
    //     // $flights =Flight::find(1);
    //             return $flights;



     $flights =Flight::with('contact')->get();
            return $flights;


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    //     $add  = Flight::create([
    //     'name' => 'Flight 1',
    //     'city' => 'novida 1',
    //     'age'=>32
            

    //     ]);

    //     $add->contact()->create([
    //         'email' => 'abdcd@gmail.com'
    // ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
