<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthUserRequest;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\Client as OClient;

class AuthControllerUser extends Controller
{
    public function login(StoreAuthUserRequest $request)
    {
        $_is_creds_valid = false;

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            $_is_creds_valid = true;
        }

        if($_is_creds_valid){

            $token = $user->createToken('Token Name')->accessToken;


//            $oClient = OClient::where('password_client', 1)
//                ->where('provider', 'users')
//                ->first();
//
//            $http = new Client();
//
//            $response = $http->request('POST', config('app.local_app_url') . '/oauth/token', [
//                'form_params' => [
//                    'grant_type' => 'password',
//                    'client_id' => $oClient->id,
//                    'client_secret' => $oClient->secret,
//                    'username' => $user->email,
//                    'password' => $user->password,
//                    'scopes' => []
//                ],
//            ]);
//
//            $result = json_decode((string)$response->getBody(), true);

            return $token;
        }

    }

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
