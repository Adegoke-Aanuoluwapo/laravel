<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuitarsController extends Controller
{
    private static function getData()
    {
        return [
            ['id' => 1, 'name' => 'Amenrican Standard Strat', 'brand' => 'Feeder'],
            ['id' => 2, 'name' => 'Starla S2', 'brand' => 'RRS'],
            ['id' => 3, 'name' => 'Explorer', 'brand' => 'Gibson'],
            ['id' => 4, 'name' => 'talman', 'brand' => 'Ibanez']
        ];
    }
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response;
     */
   
    public function index()
    {
        //
        return view('guitars.index', ['guitars' => self::getData(), 'userInput' => '<script>alert("Hello")</script>'
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
