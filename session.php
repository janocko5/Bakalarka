<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];

 
   $ses_sql = mysqli_query($db,"select meno from pouz where meno = '$user_check'");
    $ses_sql1 = mysqli_query($db,"select id from pouz where meno = '$user_check'");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    $row1 = mysqli_fetch_array($ses_sql1,MYSQLI_ASSOC);
   
   $login_session = $row['meno'];
   $id_pouz = $row1['id'];

   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>