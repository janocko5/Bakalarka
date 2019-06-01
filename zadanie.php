
<?php
   include('config.php');


    $record = mysqli_query($db,"select zadanie from zadania");
    $idd = mysqli_query($db,"select id from zadania");
    $list = array();
    $list_id = array();
    while($row = mysqli_fetch_assoc($record)){
    $list[] = $row;
}
    while($row = mysqli_fetch_assoc($idd)){
        $list_z[] = $row;
}

   $ses_sql = mysqli_query($db,"select zadanie from zadania");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session1 = $row['zadanie'];


?>