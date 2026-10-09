<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function about(): View
    {
        return view('about', [
            'judul' => 'Tentang Saya',
            'deskripsi' => 'Saya mahasiswa Ilmu Komputer di Universitas Negeri Medan yang sedang belajar framework Laravel.',
            'skills' => [
                'HTML & CSS',
                'JavaScript',
                'PHP',
                'Laravel',
                'MySQL',
            ],
        ]);
    }

    public function contact(): View
    {
        return view('contact', [
            'judul' => 'Hubungi Saya',
            'kontak' => [
                ['label' => 'Email', 'nilai' => 'sucisatria909@gmail.com'],
                ['label' => 'Kampus', 'nilai' => 'Universitas Negeri Medan'],
                ['label' => 'Program Studi', 'nilai' => 'Ilmu Komputer'],
                ['label' => 'Fakultas', 'nilai' => 'FMIPA'],
            ],
        ]);
    }

    public function hello(string $nama): View
    {
        return view('hello', [
            'nama' => ucwords($nama),
        ]);
    }
}
