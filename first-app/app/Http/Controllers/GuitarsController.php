<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guitar;
use App\Http\Requests\GuitarformRequest;

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
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
       // return view('index');
       return view('guitars.index', [
        'guitars' =>Guitar::all(), 
        'userInput'=> '<script>alert("Hello")</script>'
       ]);
      
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('guitars.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(GuitarformRequest $request)
    {
        //POST
        $data = $request->validated();
        Guitar::create($data);
        return redirect()->route('guitars.index');
        //
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Guitar $guitar)
    {
        //GET
        
       
        
        return view('guitars.show', [
            'guitar' => Guitar::findOrFail($guitar)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Guitar $guitar)
    {
        //
        return view('guitars.edit', [
            'guitar' => $guitar
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GuitarformRequest $request, Guitar $guitar)
    {
        //
        $data = $request->validated();
        $guitar ->update($data);
      
       
        return redirect()->route('guitars.show', $guitar->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
