<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storecourse_typeRequest;
use App\Http\Requests\Updatecourse_typeRequest;
use App\Models\course_type;

class CourseTypeController extends Controller
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
    public function store(Storecourse_typeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(course_type $course_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(course_type $course_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatecourse_typeRequest $request, course_type $course_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(course_type $course_type)
    {
        //
    }
}
