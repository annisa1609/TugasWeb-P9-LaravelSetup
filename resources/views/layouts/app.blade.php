<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Profil')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-white min-h-screen">

```
<nav class="bg-slate-900 border-b border-slate-800 p-5">
    <div class="max-w-5xl mx-auto flex flex-wrap gap-5">
        <a href="{{ route('home') }}" class="text-pink-400 font-bold">Beranda</a>
        <a href="{{ route('about') }}">Tentang Saya</a>
        <a href="{{ route('contact') }}">Kontak</a>
        <a href="{{ route('hello', 'dunia') }}">Hello</a>
    </div>
</nav>

<main class="max-w-5xl mx-auto p-6">
    @yield('content')
</main>

<footer class="text-center text-slate-400 p-6">
    Website Profil Pribadi &copy; 2026
</footer>
```

</body>
</html>
