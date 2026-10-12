<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        $data = [
            'nama' => 'Selvira Triana',
            'hobi' => ['Membaca', 'Mendengarkan Musik', 'Menonton Horor'],
        ];
        return view('home', $data);
    }

    public function about()
    {
        $deskripsi = 'Ini project Laravel pertamaku untuk Tugas Rutin 9.';
        return view('about', ['deskripsi' => $deskripsi]);
    }

    public function contact()
    {
        return view('contact');
    }
}