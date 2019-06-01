<?php
include('config.php');


$recordz = mysqli_query($db,"select testy from testy");
$listz = array();
while($row = mysqli_fetch_assoc($recordz)){
    $listz[] = $row;
}

$ses_sqlz = mysqli_query($db,"select testy from testy");

$rowz = mysqli_fetch_array($ses_sqlz,MYSQLI_ASSOC);

$login_sessionz = $rowz['testy'];


?>