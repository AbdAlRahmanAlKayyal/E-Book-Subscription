<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\review;

class reviewController extends Controller
{
       /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('review');
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
        $review= new review();
        $review->first_name=$request->first_name;
        $review->last_name=$request->Last_name;
        $review->email=$request->email;
        $review->reviewed=$request->reviewed;

        $review->created_at=today();
        $review->updated_at=today();
        $review->save();
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
