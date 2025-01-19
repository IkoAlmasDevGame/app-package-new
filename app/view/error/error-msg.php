<?php
$ettor_title = '';
$error_message = '';
if (isset($_GET['HttpStatus'])) {
    if ($_GET['HttpStatus'] == 404) {
        $ettor_title = '404 Page Not Found';
        $error_message = 'The document/file requested was not found on this server';
    }
    if ($_GET['HttpStatus'] == 400) {
        $ettor_title = "400 Bad HTTP request ";
        $error_message = 'Bad HTTP request.';
    }
    if ($_GET['HttpStatus'] == 401) {
        $ettor_title = "401 Unauthorized - Iinvalid password ";
        $error_message = 'Unauthorized - Iinvalid password.';
    }
    if ($_GET['HttpStatus'] == 403) {
        $ettor_title = "403 Forbidden";
        $error_message = 'Forbidden.';
    }
    if ($_GET['HttpStatus'] == 500) {
        $ettor_title = "500 Forbidden";
        $error_message = 'Internal Server Error.';
    }
    if ($_GET['HttpStatus'] == 200) {
        $ettor_title = '200 Document has been processed and sent to you';
        $error_message = 'Document has been processed and sent to you.';
        echo "<script lang='javascript'>
    window.setTimeout(() => {
        alert('$error_message'),
        document.location.href='../ui/header.php?page=beranda'
    }, 3000);
    </script>";
        die;
    }
}
?>

<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Error</title>
        <style type="text/css">
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #4CAF50;
            /* Warna latar belakang */
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            /* Sudut melengkung */
        }

        .btn:hover {
            background-color: #45a049;
            /* Warna saat hover */
        }
        </style>
    </head>

    <body>
        <h1><?php echo $ettor_title; ?></h1>
        <h5><?php echo $error_message; ?></h5>
        <a href="../index.php" aria-current="page" class="btn">HOME</a>
    </body>

</html>