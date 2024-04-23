<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/about', function () {

$nama = "Fadilah";
$jenis_kelamin = "laki-laki";
$pendidikan_terakhir = "SMK";
$pekerjaan = "Bekerja di pt.sinar banten";
$alamat = "cibaduyut";

    return view('data_diri', compact('nama','jenis_kelamin','pendidikan_terakhir','pekerjaan','alamat'));
});

Route::get('/bio', function () {
$nama = "fadilah";
$umur = "18";
$tanggal_lahir = "bandung_20_juli";
$d = "pelajar";
$e = "jederal_kopasus";
$f = "bermain cewe";

    return view('fadil');

    
});
