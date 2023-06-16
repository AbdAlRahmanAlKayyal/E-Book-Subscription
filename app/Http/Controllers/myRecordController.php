<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\myRecord;

class myRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('myRecord');
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
        $myRecord= new myRecord();
        $myRecord->Book_name=$request->Book_name;
        $myRecord->Last_page=$request->Last_page;
        $myRecord->Reading_start_date=$request->Reading_start_date;


        $myRecord->created_at=today();
        $myRecord->updated_at=today();
        $myRecord->save();
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
