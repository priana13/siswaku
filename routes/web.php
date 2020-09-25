<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.homepage');
});

Route::get('about', function () {
    return view('pages.about');
});


Route::get('siswa', function(){
    $siswa = ['Priana','Heri','Saputra'];

    //return view('siswa.index')->with('siswa',$siswa);
    return view('siswa.daftar_siswa',compact('siswa'));
});




// Route::get('halaman-rahasia', ['as'=>'secret', function () {
//     return "ini adalah halaman rahasia";
// }]);

// Route::get('rahasia', function () {
//     return redirect()->route('secret');
// });
