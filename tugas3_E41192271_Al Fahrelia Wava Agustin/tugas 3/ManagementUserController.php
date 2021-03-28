<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index()
    {
        $nama = "Al Fahrelia Wava Agustin";

        $pelajaran = ["Algoritma & Pemograman","Kalkulus","Pemograman Web"];

        return view('home', compact('nama','pelajaran'));
    }
}


?>