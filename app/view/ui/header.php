<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php session_start(); ?>
        <?php require_once("../route/route.php"); ?>
        <title>Dashboard <?php echo $setting['']; ?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
        <!--  -->
        <link href="<?= base_url('dist/vendor/bootstrap-icons/bootstrap-icons.css') ?>" crossorigin="anonymous"
            rel="stylesheet">
        <link href="<?= base_url('dist/vendor/boxicons/css/boxicons.min.css') ?>" crossorigin="anonymous"
            rel="stylesheet">
        <link href="<?= base_url('dist/vendor/quill/quill.snow.css') ?>" crossorigin="anonymous" rel="stylesheet">
        <link href="<?= base_url('dist/vendor/quill/quill.bubble.css') ?>" crossorigin="anonymous" rel="stylesheet">
        <link href="<?= base_url('dist/vendor/remixicon/remixicon.css') ?>" crossorigin="anonymous" rel="stylesheet">
        <link href="<?= base_url('dist/vendor/simple-datatables/style.css') ?>" crossorigin="anonymous"
            rel="stylesheet">
        <link href="<?= base_url('dist/css/style.css') ?>" crossorigin="anonymous" rel="stylesheet">
        <style type="text/css">
        /* Define the keyframes for the rotation */
        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        /* Apply the animation to the element */
        .fa-refresh {
            animation: rotate 2s linear infinite;
        }
        </style>
    </head>

    <body>