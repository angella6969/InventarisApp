<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('template.auth.registrasi.index',[
            "roles" => role::latest()
       ]);
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
        $validatedData = $request->validate([
            'name'=> 'required|max:255',
            // 'role_id'=> 'required',
            'username'=>['required','min:3','max:200','unique:users'],
            'email'=>['required','email:dns','unique:users'],
            'password'=>['required','min:5','max:255']
        ]);
        $validatedData['password'] = Hash::make( $validatedData['password']);
        User::create($validatedData);
        return redirect('/login')->with('success', 'registration successfull! pleare login');
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
