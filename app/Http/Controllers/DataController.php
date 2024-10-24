<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Path ke file JSON
        $jsonPath = storage_path('app/json/writeups.json');

        // Baca file JSON dan decode ke array
        $jsonData = json_decode(file_get_contents($jsonPath), true);

        // Kirim data ke view
        return view('admin', ['jsonData' => $jsonData['data']]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'link' => 'required|url',
            'authors' => 'required|string',
            'programs' => 'nullable|string',
            'bugs' => 'nullable|string',
            'bounty' => 'nullable|string',
            'publication_date' => 'required|date',
            'added_date' => 'required|date',
        ]);

        // Membaca file JSON yang ada
        $jsonPath = storage_path('app/json/writeups.json');
        $data = json_decode(file_get_contents($jsonPath), true);

        // Menambahkan data baru
        $newEntry = [
            'Links' => [
                [
                    'Title' => $request->input('title'),
                    'Link' => $request->input('link'),
                ]
            ],
            'Authors' => explode(',', $request->input('authors')),
            'Programs' => $request->input('programs') ? explode(',', $request->input('programs')) : ['-'],
            'Bugs' => explode(',', $request->input('bugs')),
            'Bounty' => $request->input('bounty') ?: '-',
            'PublicationDate' => $request->input('publication_date'),
            'AddedDate' => $request->input('added_date'),
        ];

        $data['data'][] = $newEntry;

        // Menyimpan kembali ke file JSON
        File::put($jsonPath, json_encode($data, JSON_PRETTY_PRINT));

        return redirect()->route('admin.data.index');
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
    public function destroy($index)
    {
        // Path ke file JSON
        $jsonPath = storage_path('app/json/writeups.json');

        // Membaca isi file JSON
        $data = json_decode(File::get($jsonPath), true);

        // Pastikan indeks yang diminta valid
        if (!isset($data['data'][$index])) {
            return redirect()->back()->withErrors(['message' => 'Data not found.']);
        }

        // Menghapus data pada indeks yang sesuai
        unset($data['data'][$index]);

        // Menyimpan ulang data yang telah diperbarui ke file JSON
        File::put($jsonPath, json_encode($data, JSON_PRETTY_PRINT));

        return redirect()->route('admin.data.index');
    }
}
