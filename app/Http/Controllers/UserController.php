<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
