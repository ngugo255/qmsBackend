<?php

namespace App\Http\Controllers;

use App\Models\RolePermission;
use Illuminate\Http\Request;

class RolePermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(RolePermission::all());
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
        $RolePermission = RolePermission::create($request->all());

        return response()->json($RolePermission, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(RolePermission $RolePermission)
    {
        return response()->json($RolePermission);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RolePermission $RolePermission)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RolePermission $RolePermission)
    {
        $RolePermission->update($request->all());

        return response()->json($RolePermission);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RolePermission $RolePermission)
    {
        $RolePermission->delete();

        return response()->json(['message' => 'RolePermission deleted']);
    }
    


}
