<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="generator" content="Jekyll v3.8.6">
    <title>Welcome to TalkingRoom</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/starter-template/">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASE_URI;?>templates/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo BASE_URI;?>templates/css/custom.css" rel="stylesheet">
    <!-- CKeditor for this template -->
    <script src="templates/js/ckeditor/ckeditor.js"></script>

    <!-- Favicons -->
    <!--    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">-->
    <!--    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">-->
    <!--    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">-->
    <!--    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">-->
    <!--    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">-->
    <!--    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">-->
    <!--    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">-->
    <!--    <meta name="theme-color" content="#563d7c">-->


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
    <?php
        //Check if title is set, if not assign it
    if (!isset($title)) {
        $title = SITE_TITLE;
    }
    ?>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">TalkingRoom</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto >
            <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="register.php">Create an Account</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="create.php">Create an Topic</a>
        </li>
        </ul>
    </div>
</nav>

<main role="main" class="container">

    <div class="row">
        <div class="col-md-8">
            <div class="main-col">
                <div class="d-block">
                    <h1 class="float-left"><?php echo $title; ?></h1>
                    <h4 class="float-right">A simple PHP forum engine</h4>
                    <div class="clearfix"></div>
                    <hr>

                    <?php displayMessage(); ?>