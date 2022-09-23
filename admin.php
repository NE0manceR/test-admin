<!doctype html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
            crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <style>
        .alert {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
<h1>Master</h1>
<?php
if (!empty($_SESSION['login'])) { ?>
    <div class="container">
        <div class="alert alert-success" role="alert">
            Hello - <?php print_r($_SESSION['login']); ?>
            <a href="logout.php">Logout</a>
        </div>
    </div>

<?php } else { ?>
    <div class="container">
        <div class="alert  alert-danger" role="alert">
            <h2><a href="./login.php">Login please</a></h2>
        </div>
    </div>
<?php } ?>


<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

</body>
</html>
