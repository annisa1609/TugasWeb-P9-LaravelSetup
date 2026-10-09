@extends('layouts.app')

@section('title', 'Hello World')

@section('content')
<div class="bg-slate-900 border border-slate-800 rounded-2xl p-8 text-center">
    <h1 class="text-3xl font-bold text-pink-400 mb-4">
        Hello World!
    </h1>

    <p class="text-slate-300 mb-8">
        Selamat datang di halaman Hello pada website Laravel saya.
    </p>

    <a href="{{ route('home') }}"
       class="inline-block bg-pink-600 hover:bg-pink-500 text-white px-5 py-3 rounded-lg">
        Kembali ke Beranda
    </a>
</div>
@endsection