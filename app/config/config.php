<?php
# link menuju file atau folder yang dituju
function base_url($link)
{
    $base = ""; # masukkan folder yang dibuat untuk mengambil data file yang di butuhkan nantinya.
    $url = "http://localhost/". $base ."/" . $link;
    return $url;
}
# code Library Salam
function salam()
{
    $b = time();
    $hour = date("G", $b);

    if ($hour >= 0 && $hour <= 11) {
        echo "Selamat Pagi";
    } elseif ($hour >= 11 && $hour <= 15) {
        echo "Selamat Siang ";
    } elseif ($hour >= 15 && $hour <= 18) {
        echo "Selamat Sore ";
    } elseif ($hour >= 18 && $hour < 24) {
        echo "Selamat Malam ";
    }
}
# database anda
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = ""; # database anda yang berada di phpmyadmin
$koneksi = mysqli_connect($hostname, $username, $password, $dbname) or mysqli_connect_error();
# Capthca
$min_number = 1;
$max_number = 15;
$angka1 = mt_rand($min_number, $max_number);
$angka2 = mt_rand($min_number, $max_number);
