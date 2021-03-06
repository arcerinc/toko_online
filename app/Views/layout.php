<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Starter Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('bootstrap-4.0.0/') ?>/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <style>
        body {
            padding-top: 5rem;
        }

        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
    </style>
    <!-- Custom styles for this template -->

</head>

<body>

    <?= $this->include('navbar'); ?>


    <main role="main" class="container">

        <?= $this->renderSection('content'); ?>




    </main><!-- /.container -->
    <script>
        src = "<?= base_url('bootsrap-4.0.0/') ?>dist/js/bootstrap.min.css"
        src = "<?= base_url('jquery-3.5.1.min.js') ?>"
    </script>
</body>

</html>