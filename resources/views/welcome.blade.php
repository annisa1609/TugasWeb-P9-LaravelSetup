@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="bg-slate-900 border border-slate-800 rounded-2xl p-8">
    <p class="text-pink-400 mb-3">WEBSITE PROFIL PRIBADI</p>

```
<h1 class="text-3xl font-bold text-white mb-6">
    {{ $judul }}
</h1>

<p class="text-slate-300 mb-4">
    Halo, saya <span class="text-pink-400 font-bold">{{ $nama }}</span>.
</p>

<p class="text-slate-300 mb-2">Kampus: {{ $kampus }}</p>
<p class="text-slate-300 mb-6">Program Studi: {{ $prodi }}</p>

<h2 class="text-xl font-semibold text-white mb-3">
    Teknologi yang Dipelajari
</h2>

<div class="flex flex-wrap gap-3">
    @foreach ($tools as $tool)
        <span class="bg-slate-800 text-pink-300 px-4 py-2 rounded-lg">
            {{ $tool }}
        </span>
    @endforeach
</div>

<div class="flex gap-4 mt-8">
    <a href="{{ route('about') }}"
       class="bg-pink-600 text-white px-4 py-2 rounded-lg">
        Tentang Saya
    </a>

    <a href="{{ route('contact') }}"
       class="border border-slate-600 px-4 py-2 rounded-lg">
        Hubungi Saya
    </a>
</div>
```

</div>
@endsection
