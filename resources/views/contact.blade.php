@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

<div class="bg-slate-900 border border-slate-800 rounded-2xl p-8">
    <h1 class="text-3xl font-bold text-pink-400 mb-6">
        {{ $judul }}
    </h1>

```
<p class="text-slate-300 mb-6">
    Berikut informasi kontak dan data akademik saya.
</p>

<div class="space-y-4">
    @foreach ($kontak as $item)
        <div class="bg-slate-800 border border-slate-700 rounded-lg p-4">
            <p class="text-pink-400 text-sm">{{ $item['label'] }}</p>
            <p class="text-white">{{ $item['nilai'] }}</p>
        </div>
    @endforeach
</div>

<a href="{{ route('home') }}"
   class="inline-block bg-pink-600 text-white px-5 py-3 rounded-lg mt-8">
    Kembali ke Beranda
</a>
```

</div>
@endsection
