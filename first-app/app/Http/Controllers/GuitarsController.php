<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guitar;

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
    public function store(Request $request)
    {
        $request->validate([
            'guitar-name'=> 'required',
        'brand' => 'required',
        'year' => ['required', 'integer'],
        ]);

        $guitar = new Guitar( );
        $guitar-> name = strip_tags($request->input('guitar-name'));
        $guitar->brand = strip_tags($request->input('brand'));
        $guitar->year_made = strip_tags($request->input('year'));

        $guitar->save();
        return redirect()->route('guitars.index');
        //
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($guitar)
    {
        //GET
        $record = Guitar::find($guitar);
        $guitars = self::getData();
        $index = array_search($guitar, array_column($guitars, 'id'));
        if($index ===false){
            abort(404);
        }
        return view('guitars.show', [
            'guitar' => $guitars[$index]
        ]);
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
