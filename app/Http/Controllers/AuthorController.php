<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $author = author::all();
        if($author && $author->count() > 0){
            return response(['message' => 'Show data success.', 'data' => $author], 200);
        }else{
            return response(['message' => 'Data not found.', 'data' => null], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $author = author::create([
            "name" => $request->input('name'),
            "date_of_birth" => $request->input('date_of_birth'),
            "place_of_birth" => $request->input('place_of_birth'),
            "gender" => $request->input('gender'),
            "email" => $request->input('email'),
            "hp" => $request->input('hp'),
        ]);

        return response(['message' => 'Create data success.', 'data' => $author], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $author = author::find($id);

        if($author && $author->count() > 0){
            return response(['message' => 'Show data success.', 'data' => $author], 200);
        }else{
            return response(['message' => 'Data not found.', 'data' => null], 404);
        }
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
        $author = author::find($id)->update([
            "name" => $request->input('name'),
            "date_of_birth" => $request->input('date_of_birth'),
            "place_of_birth" => $request->input('place_of_birth'),
            "gender" => $request->input('gender'),
            "email" => $request->input('email'),
            "hp" => $request->input('hp'),
        ]);

        if($author){
            return response(['message' => 'Update data success.', 'data' => $author], 200);
        }else{
            return response(['message' => 'Update data failed.', 'data' => null], 406);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author = author::destroy($id);

        if($author){
            return response([], 204);
        }else{
            return response(['message' => 'Remove data failed.', 'data' => null], 406);
        }
    }
}