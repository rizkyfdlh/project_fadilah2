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

Route::get('/bebas', function () {
$nama = "fadilah";
$umur = "18";
$tanggal_lahir = "bandung_20_juli";
$kesibukan = "pelajar";
$cita_cita = "jederal_kopasus";
$hobi = "bermain cewe";

    return view('data_fadilah', compact('nama','umur','tanggal_lahir','kesibukan','cita_cita','hobi'));    
});

Route::get('/about2/{nama}/{jenis_kelamin2}/{pendidikan}/{pekerja}/{alamat}', function (Request $request,$nama, $jenis_kelamin2, $pendidikan,$pekerja, $alamat) {
    $nama1 = $nama;
    $jenis_kelamin2 = $jenis_kelamin2;
    $pendidikan = $pendidikan;
    $pekerja = $pekerja;
    $alamat = $alamat;
    return view('biodata2', compact('nama1','jenis_kelamin2','pendidikan','pekerja','alamat'));
});

