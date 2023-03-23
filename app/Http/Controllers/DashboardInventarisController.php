<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\kategori;
use App\Models\status;
use Illuminate\Http\Request;

class DashboardInventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('template.inventarisasi.index',[
             "barangs" => barang::latest()
                ->paginate(7)
                ->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('template.inventarisasi.create',[
            'kategoris' => kategori::all(),
            'statuses' => status::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama'=> 'required|max:255',
            'kode_barang'=>['required','min:3','unique:barangs'],
            'kategori_id'=>['required'],
            'status_id'=>['required'],
            'kepemilikan'=>['required'],
            'jumlah'=>['required']
        ]);
        // dd('barangs');
        barang::create($validatedData);
        return redirect('/dashboard/inventarisasi')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('template.inventarisasi.edit',[
            "barang" => barang::findOrFail($id),
            'statuses' => status::all(),
            'kategoris' => kategori::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,barang $barang)
    {
        $rule=[
            'nama'=> 'required|max:255',
            'kategori_id'=>['required'],
            'status_id'=>['required'],
            'kepemilikan'=>['required'],
            'jumlah'=>['required']
        ];
        if( $request->kode_barang == $barang->kode_barang )
        {
            $rule['kode_barang'] = ['required','min:3','unique:barangs'];
        }
        $validatedData = $request->validate($rule);
        
        barang::where('id',$barang->id)->update($validatedData);
        // ->update($validatedData);
        // dd($validatedData);
        return redirect('/dashboard/inventarisasi')->with('success', 'Berhasil Merubah Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        barang::destroy($id);
        return redirect('/dashboard/inventarisasi')->with('success', 'Berhasil Menghapus Data');
    }
}
