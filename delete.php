<?php
include('config.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = mysqli_real_escape_string($db, $_POST['subject1']);


    $query = "DELETE FROM `zadania` WHERE id = $id";
    mysqli_query($db, $query);

    header("location:admin_menu.php");

}

?>