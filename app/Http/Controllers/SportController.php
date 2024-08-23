<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sport;
class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Sports = Sport::all();
        return response()->json ($Sports);
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
        $validatedData = $request ->validate(["name"=>"required|string|max:255",
                                              "category"=>"nullable|string",]);

        $sport=Sport::create($validatedData);

        return  response()->json($sport, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sports = Sport::find($id);

        if(!$sports){
            return response()->json(["message" => "Sport not found"],404);
        }

        return response()->json($sports);
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
        $sports = Sport::find($id);

        if(!$sports){
            return response()->json(["message" => "Sport not found"],404);
        } 

        $validatedData = $request ->validate(["name"=>"required|string|max:255",
                                              "category"=>"nullable|string",]);

        $sports->update($validatedData);
        return response()->json($sports,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sports = Sport::find($id);
        if(!$sports){
        return response()->json(["message"=>"Sport not found"],404);
        }

        $sports->delete();

        return response()->json(["message"=>"Sport deleted sucessfully"],200);
    }
}