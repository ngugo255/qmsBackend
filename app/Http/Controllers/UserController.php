<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(User::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json(['message' => 'Login successful', 'token' => $token, 'name' => $user->name]);
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $User = User::create($request->all());

        return response()->json($User, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $User)
    {
        return response()->json($User);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $User)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $User)
    {
        $User->update($request->all());

        return response()->json($User);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $User)
    {
        $User->delete();

        return response()->json(['message' => 'User deleted']);
    }
    


}
