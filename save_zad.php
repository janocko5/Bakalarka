<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $zadanie = mysqli_real_escape_string($db, $_POST['name']);
    $datum = mysqli_real_escape_string($db, date("Y/m/d"));

    // form validation: ensure that the form is correctly filled
    if (empty($zadanie)) { array_push($errors, "Username is required"); }



    $query = "INSERT INTO `zadania`(`zadanie`, `datum`) VALUES ('$zadanie','$datum')";
    mysqli_query($db, $query);


}

else {
    $error = "Your Login Name or Password is invalid";

}

?>