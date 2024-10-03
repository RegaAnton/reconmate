<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class HomeController extends Controller
{
    public function home(){
        
        // Path ke file JSON
        $jsonPath = storage_path('app/json/writeups.json');

        // Baca file JSON dan decode ke array
        $jsonData = json_decode(file_get_contents($jsonPath), true);

        // Kirim data ke view
        return view('home', ['jsonData' => $jsonData['data']]);
    }
}
