<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class HomeController extends Controller
{
    public function home(){
        
        $datas = Data::all();
        return view('home', compact('datas'));
    }
}
