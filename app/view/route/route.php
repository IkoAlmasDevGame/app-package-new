<?php
# pengambilan database di config
require_once("../../config/config.php");
$SQL = ""; # bisa di isi untuk pengambilan nama website atau settingan webiste
$row = $koneksi->query($SQL);
$setting = mysqli_fetch_array($row);
# session
if (isset($_SESSION[''])) {
    if (isset($_SESSION[''])) {
    }
} else {
    echo "<script lang='javascript'>
    window.setTimeout(() => {
        alert('Maaf anda gagal masuk ke halaman utama ...'),
        window.location.href='../index.php'
    }, 3000);
    </script>";
    die;
    exit(0);
}


# Files model dan Files controller
# Folder Files
require_once("../../model/model.php"); # model contoh
# Folder Controller
require_once("../../controller/controller.php"); # controller contoh

# Page / Halaman
if (!isset($_GET['page'])) {
} else {
    switch ($_GET['page']) {
        case 'value':
            # code...
            break;

        default:
            # code...
            break;
    }
}

# Aksi / Action
if (!isset($_GET['aksi'])) {
} else {
    switch ($_GET['aksi']) {
        case 'value':
            # code...
            break;

        default:
            # code...
            break;
    }
}