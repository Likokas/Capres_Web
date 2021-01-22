<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use App\Models\jabatan;
use App\Models\jaka;
use App\Models\prodi;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosens = dosen::all();
        return view('Admin.event.listDosen',compact('dosens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Prodi
        $prodis = prodi::all();

        //jabatan
        $jabatans = jabatan::all();

        //jaka
        $jakas = jaka::all();

        return view('admin.event.addDosen', compact('prodis', 'jabatans', 'jakas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dosen::create($request->all());
        //Prodi
        $prodis = prodi::all();

        //jabatan
        $jabatans = jabatan::all();

        //jaka
        $jakas = jaka::all();

        return view('admin.event.addDosen', compact('prodis', 'jabatans', 'jakas'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit(dosen $dosen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dosen $dosen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy(dosen $dosen)
    {
        //
        $dosen->delete();
        return redirect()->route('admin.pembimbing.index');
    }
}
