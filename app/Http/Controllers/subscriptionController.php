<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\subscription;

class subscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('subscription');

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
        $subscription= new subscription();
        $subscription->first_name=$request->first_name;
        $subscription->last_name=$request->last_name;
        $subscription->phone_number=$request->phone_number;
        $subscription->email=$request->email;
        $subscription->address=$request->address;
        $subscription->subtype=$request->subtype;

        $subscription->created_at=today();
        $subscription->updated_at=today();
        $subscription->save();
        return redirect ('order');
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
