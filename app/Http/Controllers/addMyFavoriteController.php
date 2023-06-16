<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\addFavorite;
class addMyFavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('myFavorite');
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
        $addFavorite= new addFavorite();
        $addFavorite->Book_name=$request->Book_name;
        $addFavorite->Author_name=$request->Author_name;
        $addFavorite->page_number=$request->page_number;
        $addFavorite->qoute=$request->qoute;

        $addFavorite->created_at=today();
        $addFavorite->updated_at=today();
        $addFavorite->save();
        return view('mainpage');
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
