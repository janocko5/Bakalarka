<?php
include('session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Zadanie</title>

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/ace.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/menu.css">
</head>
<body>

<style>
    /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
    @import url(https://fonts.googleapis.com/css?family=Raleway);
    * {
        margin: 0;
        padding: 0;
    }

    *,
    *:before,
    *:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    img {
        vertical-align: middle;
        max-width: 100%;
        height: auto;
    }



    body {
        text-align: left;
        background: #0e2439;
        line-height: 1;
    }

    /* Profile Container */
    .profile-box {
        position: relative;
        display: inline-block;
        margin: 2em;
        padding: 1em 0 0.5em;
        border: 1px solid rgba(0, 0, 0, 0.6);
        border-radius: 5px;
        background-color: rgba(60, 60, 60, 0.3);
        box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2), 0 2px 1px rgba(255, 255, 255, 0.3) inset;
        color: #fff;
        vertical-align: middle;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
        font-family: 'Raleway', sans-serif;
        /* Profile Header */
        /*Profile Details */
        /* Profile contact button */
    }
    .profile-box .profile-header {
        margin: 0;
        padding: 1em 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.5);
        text-align: center;
        /* Profil Image*/
        /* Profile Name */
    }
    .profile-box .profile-header .profile-img {
        display: inline-block;
        margin: 0 1em;
        padding: 0.6em;
        border-radius: 50%;
        background-color: rgba(40, 40, 40, 0.4);
        box-shadow: 0px 1px 1px rgba(255, 255, 255, 0.2), 0 0 8px rgba(0, 0, 0, 0.5) inset;
        /* Image container */
    }
    .profile-box .profile-header .profile-img span {
        display: inline-block;
        overflow: hidden;
        border-radius: 50%;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.6);
        vertical-align: middle;
    }
    .profile-box .profile-header .profile-name {
        margin: 0.75em 0 0;
        padding: 0 0.5em;
        font-size: 1.6em;
    }
    .profile-box .profile-detail {
        overflow: hidden;
        padding: 0.8em;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        border-bottom: 1px solid rgba(0, 0, 0, 0.6);
        font-size: 0.8em;
        /* Profil Details Values */
    }
    .profile-box .profile-detail:last-child {
        box-shadow: 0px 1px 1px rgba(255, 255, 255, 0.1);
    }
    .profile-box .profile-detail span {
        float: left;
        padding: 0.6em 1em;
    }
    .profile-box .profile-detail .profile-value {
        float: right;
        margin-left: 1.5em;
        border-radius: 20px;
        background-color: rgba(0, 0, 0, 0.3);
        box-shadow: 0px 1px 1px rgba(255, 255, 255, 0.2), 0 0 8px rgba(0, 0, 0, 0.5) inset;
        text-align: center;
        font-weight: bold;
    }
    .profile-box .profile-btn-contact {
        position: absolute;
        top: 1em;
        left: 100%;
        width: 2em;
        height: 2em;
        background-color: rgba(255, 104, 0, 0.8);
        color: #fff;
        text-align: center;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        line-height: 2;
        -webkit-transition: background-color 0.4s;
        -moz-transition: background-color 0.4s;
        -ms-transition: background-color 0.4s;
        -o-transition: background-color 0.4s;
        transition: background-color 0.4s;
    }
    .profile-box .profile-btn-contact:hover {
        background-color: rgba(255, 104, 0, 0.1);
    }


    .big .profile-detail {
        font-size: 0.7em;
    }

    /* Small Profile Box */
    .small {
        font-size: 0.8em;
        left: 10px;
    }
    .small .profile-detail {
        font-size: 0.9em;
    }






</style>


<div class="profile-box small">
    <a href="mailto:" class="profile-btn-contact" title="Contact"><i class="fa fa-envelope-o"></i></a>
    <figure class="profile-header">
        <div class="profile-img">
            <span><img class="profile-avatar" src="http://lorempixel.com/120/120/abstract" alt="me" width="120" height="120"></span>
        </div>
        <figcaption class="profile-name"><?php echo $login_session ?> </figcaption>
    </figure>
    <p class="profile-detail">
        <span class="profile-label">Hodnotenie:</span><span class="profile-value">-</span>
    </p>
    <p class="profile-detail">
        <span class="profile-label">Bonus:</span><span class="profile-value">-</span>
    </p>
    <p class="profile-detail">
        <span class="profile-label">Trieda:</span><span class="profile-value">-</span>
    </p>
    <p class="profile-detail">
        <span class="profile-label">Skupina:</span><span class="profile-value">-</span>
    </p>
</div>

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

</body>
</html>