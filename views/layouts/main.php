<?php
    use App\App\App;
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?> - ToDoList PHP MVC</title>
    <link rel="stylesheet" type="text/css" href="/public/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/public/assets/css/daterangepicker.css" />
    <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/public/assets/css/style.css" />

    <style type="text/css">
        @font-face {
        font-family: 'Glyphicons Halflings';
        src: url('/public/assets/fonts/bootstrap/glyphicons-halflings-regular.eot');
        src: url('/public/assets/fonts/bootstrap/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('/public/assets/fonts/bootstrap/glyphicons-halflings-regular.woff2') format('woff2'), url('/public/assets/fonts/bootstrap/glyphicons-halflings-regular.woff') format('woff'), url('/public/assets/fonts/bootstrap/glyphicons-halflings-regular.ttf') format('truetype'), url('/public/assets/fonts/bootstrap/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
        }
        label.error {
            font-size: 14px;
            color: #ff0000;
            font-style: italic;
        }
    </style>
</head>
<body>