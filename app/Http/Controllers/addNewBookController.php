<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addNewBook;

class addNewBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('AddNewBook');
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
        $addnewbook= new addnewbook();
        $addnewbook->Book_name=$request->Book_name;
        $addnewbook->Author_name=$request->Author_name;
        $addnewbook->Summary=$request->Summary;
        $addnewbook->ISBN=$request->ISBN;

        $addnewbook->created_at=today();
        $addnewbook->updated_at=today();
        $addnewbook->save();
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
