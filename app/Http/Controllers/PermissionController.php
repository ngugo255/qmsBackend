<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Permission::all());
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
        $Permission = Permission::create($request->all());

        return response()->json($Permission, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $Permission)
    {
        return response()->json($Permission);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $Permission)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $Permission)
    {
        $Permission->update($request->all());

        return response()->json($Permission);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $Permission)
    {
        $Permission->delete();

        return response()->json(['message' => 'Permission deleted']);
    }
    


}
