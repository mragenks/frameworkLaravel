<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\toko;

class tokoController extends Controller
{
    public function index()
    {
        return view('home', [
            'home' => 'Home',
            'toko' => toko::all()
        ]);
    }

    public function add()
    {
        return view('add', [
            'toko' => toko::all()
        ]);
    }
    
    public function indexHome()
    {
        return view('home', [
            'home' => 'Home',
            'kampus' => 'Telkom University Surabaya',
            'prodi' => 'Software Engineering',
            'toko' => toko::all()
        ]);
    }

    public function indexAbout()
    {
        return view('about', [
            'about' => 'About', //Paket 1 
            'kampus' => 'Telkom University Surabaya', //Paket 2
            'prodi' => 'Software Engineering', //Paket 3
            'nama' => 'Muhammad Ageng Sasmito', //Paket 4
            'nim' => '1201220001', //Paket 5
            'toko' => toko::all()
        ]);
    }

    public function cari($id)
    {
        return view('toko', ['data_toko' => toko::cari($id)]);
    }

    public function toko(Request $request){
        $validateData = $request->validate([
            'nama' => 'required',
            'des' => 'required',
        ]);

        toko::create($validateData);

        return redirect('/');
    }
}