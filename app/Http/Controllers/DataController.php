<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
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
        // Validasi Data
        $request->validate([
            'title' => 'required|string',
            'link' => 'required|string',
            'authors' => 'required|string',
            'programs' => 'required|string',
            'bugs' => 'required|string',
            'bounty' => 'required|string',
        ]);

        // Membuat Slug
        $slug = Str::slug($request->title);

        // Simpan data ke database
        $data = new Data();

        $data->title = $request->title;
        $data->slug = $slug;
        $data->link = $request->link;
        $data->authors = $request->authors;
        $data->programs = $request->programs;
        $data->bugs = $request->bugs;
        $data->bounty = $request->bounty;

        $data->save();
        
        return redirect()->route('index')->with('success', 'Transaksi Baru Berhasil Dibuat');
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
    public function destroy(string $slug)
    {
        $data = Data::where('slug', $slug)->firstOrFail();

        $data->delete();

        return redirect()->route('index')->with('success', 'Transaksi Baru Berhasil Dibuat');
    }
}
