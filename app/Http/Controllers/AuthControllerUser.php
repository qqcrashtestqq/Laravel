<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthUserRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthControllerUser extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'hello this route api';
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
    public function store(StoreAuthUserRequest $request)
    {
      $validated = $request->validated();

        if(Auth::attempt([
            'first_name' => $validated['first_name'],
            'email' => $validated['email'],
            'password' => $validated['password']
        ])) {
            return redirect()->intended('/');
        }

        return  redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput()->setStatusCode(401);
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
