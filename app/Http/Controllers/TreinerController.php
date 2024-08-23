<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TreinerModel;
class TreinerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $treiner = TreinerModel::all();
        return response()->json ($treiner);
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
        $validatedData = $request ->validate([
            "Name"=>"required|string|max:255",
            "Age"=>"nullable|string",
            "Height"=>"nullable|string",
            "Weight"=>"nullable|string",
            "CPF"=>"required|string|max:255",
            "RG"=>"nullable|string",
            ]);
            
 $treiner=TreinerModel::create($validatedData);

return  response()->json($treiner, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $treiner = TreinerModel::find($id);

        if(!$treiner){
            return response()->json(["message" => "Treiner not found"],404);
}
   
return response()->json($treiner);
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
        $treiner = TreinerModel::find($id);

        if(!$treiner){
            return response()->json(["message" => "treiner not found"],404);
        } 

        $validatedData = $request ->validate(["Name"=>"required|string|max:255",
                                              "Age"=>"nullable|string",
                                              "Height"=>"nullable|string",
                                              "Weight"=>"nullable|string",
                                              "CPF"=>"required|string|max:255",
                                              "RG"=>"nullable|string",]);

        $treiner->update($validatedData);
        return response()->json($treiner,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $treiner = TreinerModel::find($id);
        if(!$treiner){
        return response()->json(["message"=>"treiner not found"],404);
        }

        $treiner->delete();

        return response()->json(["message"=>"treiner deleted sucessfully"],200);
    }
}
