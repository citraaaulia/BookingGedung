<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/RiwayatDisposisi', function () {
    return view('RiwayatDisposisi', [
        "title" => "Riwayat Disposisi"
    ]);
});

Route::get('/RiwayatDitolak', function () {
    return view('RiwayatDitolak', [
        "title" => "Riwayat Ditolak"
    ]);
});

Route::get('/RiwayatSelesai', function () {
    return view('RiwayatSelesai', [
        "title" => "Riwayat Selesai"
    ]);
});

Route::get('/Rekapitulasi', function () {
    return view('Rekapitulasi', [
        "title" => "Rekapitulasi"
    ]);
});

Route::get('/ListDisposisi', function () {
    return view('ListDisposisi', [
        "title" => "ListDisposisi"
    ]);
});
