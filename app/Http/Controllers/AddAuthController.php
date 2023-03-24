<?php

namespace App\Http\Controllers;

use App\Models\addAuth;
use App\Http\Requests\StoreaddAuthRequest;
use App\Http\Requests\UpdateaddAuthRequest;
use App\Models\kategori;
use App\Models\role;
use App\Models\status;
use App\Models\user;

class AddAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('template.auth.registrasi.index', [
            "roles" => role::latest()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('template.inventarisasi.create', [
            'roles' => role::all(),
            'users' => user::all()
        ]);

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreaddAuthRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(addAuth $addAuth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(addAuth $addAuth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateaddAuthRequest $request, addAuth $addAuth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(addAuth $addAuth)
    {
        //
    }
}
