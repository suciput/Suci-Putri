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
    return view('welcome');
});
//route basic
Route::get('halo', function()
{
return '<h1>Halo</h1>'
.'Selamat datang di webapp saya<br>'
.'Laravel, emang keren.';
});

Route::get('/', function () {
    return view('welcome');
});
//route basic
Route::get('profil', function()
{
return '<h1>profil</h1>'
        .'Nama : suci putri <br>'
        .'tempat lahir : bandung <br>'
        .'tempat tinggal : bandung <br>'
        .'cita cita     : penyanyi <br>'
        .'sekolah : SMK ASSALAAM BANDUNG';
});

// Route parameter
Route::get('biodata/{nama}',function($a)
{
    return 'Halo ini biodata' .$a;
});

Route::get('auto/{nama}/{alamat}/{umur}',function($a,$b,$c)
{
    return 'nama saya '.$a.
           '<br>alamat saya '.$b.
           '<br>umur '.$c;
});



Route::get('name/{param}',function($a="suci"){
    return 'you name is '.$a;

});

//route opisional parameter
Route::get('pesan/{a?}/{b?}/{hrg}',function($mkn=null, $minum=null , $hrg=null){
if(isset($mkn)){
    $mkn ="Anda memesan $mkn";
    echo $mkn;
}

if(isset($minum)){
    $minum =" & $minum";
    echo $minum;
}

if (!$mkn && !$minum){
    return "Anda Belum Memesan Sesuatu";
}
if (isset($hrg)){
    $size=" dengan harga $ ".$hrg;
    echo $size;
    if($hrg <= 0){
        echo " maaf harga tidak valid";
    }
    elseif ($hrg >= 35000) {
        echo " dan size large";
    }
    elseif ($hrg >= 25000) {
        echo " dan size medium";
    }
    elseif ($hrg < 25000) {
        echo "dan size small";
    }
}

});

Route::get('tni/{nama?}/{berat?}/{umur? }',function($nama=null, $berat=null , $umur=null){
if(isset($nama)){
    $nama =" nama : ".$nama;
    echo $nama, '<br>';
}

if(isset($berat)){
    $bb =" berat badan : ".$berat;
    echo $bb , '<br>';
}
    elseif ($berat <= 100) {
        echo " maaf berat badan anda tidak valid ";
    }
    elseif ($berat <= 75) {
        echo " berat badan anda ideal ";
    }
    elseif ($berat <= 64) {
        echo " naikkan berat badan anda ";
    }

    elseif ($berat <= 50) {
        echo " anda kurang nutrisi ";
    }


if(isset($umur)){
    $usia =" usia : ".$umur;
    echo $usia, '<br>';
}
    elseif ($umur <= 40) {
        echo " jabatan anda sebagai pewira ";
    }
    elseif ($umur <= 49) {
        echo " jabatan anda sebagai laksamana ";
    }
    elseif ($umur <= 60) {
        echo " jabatan anda sebagai jendral ";
    }

});
