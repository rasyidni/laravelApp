<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloworld', function (){
    return 'Hello World';
});

Route::get('/belajar', function(){
    echo "<h1>Coba belajar route</h1>";
    echo "<p>Belajar route nih di laravel</p>";
});

Route::get('/mahasiswa/it/rasyid', function(){
    echo '<h2 style="text-align: center"><u>Welcome Rasyid</u></h2>';
}
);

Route::resource('/posts', \App\Http\Controllers\PostController::class);

// Route::get('/mahasiswa', function(){
//     return view('mahasiswa', [
//         "mahasiswa01" => "Risa Lestari",
//         "mahasiswa02" => "Rudi Permana",
//         "mahasiswa03" => "Sari Citra Lestari",
//         "mahasiswa04" => "Rina Kumala Sari",
//         "mahasiswa05" => "James Situmorang"
//     ]);
// });

Route::get('/mahasiswa', function(){
    $arrMahasiswa = [
        "Risa Lestari",
        "Rudi Permana",
        "Sari Citra Lestari",
        "Rina Kumala Sari",
        "James Situmorang"
    ];
    // return view("mahasiswa")->with(['mahasiswa' => $arrMahasiswa]);
    return view("mahasiswa")->with('mahasiswa', $arrMahasiswa);
});
