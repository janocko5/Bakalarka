<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Statistika</title>
    <link href='https://fonts.googleapis.com/css?family=Gudea:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/stat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/button.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/menu.css">


</head>
<body>
<div class="container" ng-app="application">
    <div class="title">
        <h1>Hodnotenie</h1>
    </div>
    <div class="contents row" ng-controller="InfoController as info">
        <div class="areas">
            <div class="area"  ng-repeat="area in info.areas"
                 ng-click="info.select($index)"
                 ng-class="{active: info.currentIndex === $index}">
                <template-area area="area"></template-area>
            </div>
        </div>
        <div class="details">
            <div class="row">
                <div class="image"></div>
            </div>
            <div class="row">
                <div class="area-name">{{ info.current.title }}</div>
                <div class="best-area">
                    <h2 class="title">Znamka </h2>
                    <p class="name">  {{ info.current.level }}  </p>
                </div>
            </div>
        </div>
    </div>
</div>
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
        <a href="button.php" class="menu-item fa fa-home"></a>
        <a href="profil.php" class="menu-item fa fa-user"></a>
        <a href="stat.php" class="menu-item fa fa-pie-chart"></a>
        <a href="#" class="menu-item fa fa-cog"></a>
    </menu>

</div>



<script type="x-template" id="template">
    <h3 class="title">{{ area.title }}</h3>
    <div class="row">
        <div class="quotient one-half">{{ area.quotient }}</div>
        <div class="level one-half">{{ area.level }}</div>
    </div>
    <div class="row">
        <div class="bar">
            <div class="progress"></div>
        </div>
    </div>

</script>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js'></script>



<script  src="js/stat.js"></script>





</body>
</html>