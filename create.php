<?php
include('session.php');
include('save_zad.php');
?>


<!DOCTYPE html>
<html lang="sk" >

<head>

    <meta charset="UTF-8">
    <title>Zadanie</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/ace.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/menu.css">


</head>

<body>
<h1 id="code" class="code"> Zadanie </h1>
<form action="#" method="post">
    <textarea style="position: absolute;
            top: 75px;
            right: 0;
            bottom: 0;
            left: 200px;
            width:1500px;
			height:500px" name="name"></textarea>
    <input type="submit">
</form>

<script  src="js/index.js"></script>



<div id="circularMenu" class="circular-menu">

    <a class="floating-btn" onclick="document.getElementById('circularMenu').classList.toggle('active');">
        <i class="fa fa-plus"></i>
    </a>

    <menu class="items-wrapper">
        <a href="#" class="menu-item fa fa-facebook"></a>
        <a href="#" class="menu-item fa fa-twitter"></a>
        <a href="#" class="menu-item fa fa-google-plus"></a>
        <a href="login.php" class="menu-item fa fa-close"></a>
    </menu>

</div>

<div id="circularMenu1" class="circular-menu circular-menu-left">

    <a class="floating-btn" onclick="document.getElementById('circularMenu1').classList.toggle('active');">
        <i class="fa fa-bars"></i>
    </a>

    <menu class="items-wrapper">
        <a href="admin_menu.php" class="menu-item fa fa-home"></a>
        <a href="profil.php" class="menu-item fa fa-user"></a>
        <a href="stat.php" class="menu-item fa fa-pie-chart"></a>
        <a href="#" class="menu-item fa fa-cog"></a>
    </menu>

</div>

<script type="text/javascript">





</script>

</body>

</html>
