<?php
include('session.php');
include('zadanie.php');
?>



<!DOCTYPE html>
<html lang="sk" >

<head>

  <meta charset="UTF-8">
  <title>Menu</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/button.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/menu.css">

  
</head>

<body>
<h1> Menu </h1>
<div class="filter-buttons">
    <div class="list-view-button"><i class="fa fa-bars" aria-hidden="true"></i> List view</div>
    <div class="grid-view-button"><i class="fa fa-th-large" aria-hidden="true"></i> Grid view</div>
</div>

<ol class="list list-view-filter">

    <?php

    function custom_echo($x, $length)
    {
        if(strlen($x)<=$length)
        {
            echo $x;
        }
        else
        {
            $y=substr($x,0,$length) . '...';
            echo $y;
        }
    }


    $count = sizeof($list);
    for ($x = 0; $x < $count; $x++) {
        $zad = implode('', $list[$x]);
    ?>
   <li><?php echo $zad ?>
       <form action="python.php" method="post">
           <input style="display: none" type="text" name="subject" id="subject" value= <?php custom_echo(implode(" ", [$x]), 200); ?>>
           <button class="btn btn-success" name="desc" value=  <?php $_SESSION['x'] = $x; ?>> Python </button>
       </form>
       <form action="js.php" method="post">
           <input style="display: none" type="text" name="subject1" id="subject" value= <?php custom_echo(implode(" ", [$x]), 200); ?>>
           <button class="btn btn-success" name="desc" value=  <?php custom_echo(implode(" ", [$x]), 200); ?>> JavaScript </button>
       </form>
       <form action="java.php" method="post">
           <input style="display: none" type="text" name="subject2" id="subject" value= <?php custom_echo(implode(" ", [$x]), 200); ?>>
           <button class="btn btn-success" name="desc" value=  <?php custom_echo(implode(" ", [$x]), 200); ?>> Java </button>
       </form>
   </li>

        <?php
        }
        ?>

    </ol>



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



    </body>

    </html>
