<?php

namespace App\Http\Controllers;

use App\TbBengkel;
use Illuminate\Http\Request;

class BengkelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bengkel = TbBengkel::latest()->paginate(5);
        return view('bengkel.index', compact('bengkel'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bengkel.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'no_pesanan' => 'required',
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'harga_barang' => 'required',
        ]);
        TbBengkel::create($request->all());
        return redirect()->route('bengkel.index')->with('success','Data berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TbBengkel  $tbBengkel
     * @return \Illuminate\Http\Response
     */
    public function show(TbBengkel $bengkel)
    {
       return view('bengkel.tampil', compact('bengkel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TbBengkel  $tbBengkel
     * @return \Illuminate\Http\Response
     */
    public function edit(TbBengkel $bengkel)
    {
        return view('bengkel.edit',compact('bengkel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TbBengkel  $tbBengkel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbBengkel $bengkel)
    {
        $request->validate([
            'no_pesanan' => 'required',
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'harga_barang' => 'required',
        ]);
        $bengkel->update($request->all());
        return redirect()->route('bengkel.index')->with('success','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TbBengkel  $tbBengkel
     * @return \Illuminate\Http\Response
     */
    public function destroy(TbBengkel $bengkel)
    {
        // dd($bengkel);
        $bengkel->delete();
        return redirect()->route('bengkel.index')->with('success','Data berhasil dihapus');
    }
}
