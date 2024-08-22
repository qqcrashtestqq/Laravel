<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : string
    {
        return 'this page index function';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : string
    {
        return 'this page create function';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : string
    {
        return 'this page show function';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : string
    {
        return `this page edit function {$id}`;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
