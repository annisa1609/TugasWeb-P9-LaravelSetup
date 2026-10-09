
<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'judul' => 'Selamat Datang di Laravel',
        'nama' => 'Suci Annisa',
        'kampus' => 'Universitas Negeri Medan',
        'prodi' => 'Ilmu Komputer',
        'tools' => ['PHP', 'Laravel', 'Composer', 'MySQL (phpMyAdmin)', 'VS Code'],
    ];

    return view('welcome', $data);
})->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/hello/{nama}', [PageController::class, 'hello'])->name('hello');