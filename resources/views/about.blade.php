@extends('layouts.app')

@section('title', 'Tentang Saya')

@section('content')

<div class="bg-slate-900 border border-slate-800 rounded-2xl p-8">
    <h1 class="text-3xl font-bold text-pink-400 mb-6">
        {{ $judul }}
    </h1>

```
<p class="text-slate-300 mb-6">
    {{ $deskripsi }}
</p>

<h2 class="text-xl font-semibold mb-4">Keahlian Saya</h2>

<div class="flex flex-wrap gap-3">
    @foreach ($skills as $skill)
        <span class="bg-slate-800 border border-slate-700 text-pink-300 px-4 py-2 rounded-lg">
            {{ $skill }}
        </span>
    @endforeach
</div>

<a href="{{ route('home') }}"
   class="inline-block bg-pink-600 text-white px-5 py-3 rounded-lg mt-8">
    Kembali ke Beranda
</a>
```

</div>
@endsection
