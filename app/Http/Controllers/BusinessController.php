<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorebusinessRequest;
use App\Http\Requests\UpdatebusinessRequest;
use App\Models\business;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StorebusinessRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(business $business)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(business $business)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebusinessRequest $request, business $business)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(business $business)
    {
        //
    }
}
