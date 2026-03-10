<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Role::all());
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
        $Role = Role::create($request->all());

        return response()->json($Role, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $Role)
    {
        return response()->json($Role);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $Role)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $Role)
    {
        $Role->update($request->all());

        return response()->json($Role);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $Role)
    {
        $Role->delete();

        return response()->json(['message' => 'Role deleted']);
    }
    


}
