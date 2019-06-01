<?php
include("testy_k_zadaniam.php");



if (isset($_POST['total'])) {
// receive all input values from the form
    $idpouz = mysqli_real_escape_string($db, $id_pouz);
    $riess = mysqli_real_escape_string($db, $_POST["total"]);
    $datum = mysqli_real_escape_string($db, date("Y/m/d"));
    $query = "INSERT INTO `riesenia`(`id_pouz`, `ries`, `datum`) VALUES('$idpouz', '$riess','$datum')";
    mysqli_query($db, $query);
}


function my_exec($cmd, $input='')
         {$proc=proc_open($cmd, array(0=>array('pipe', 'r'), 1=>array('pipe', 'w'), 2=>array('pipe', 'w')), $pipes);
          fwrite($pipes[0], $input);fclose($pipes[0]);
          $stdout=stream_get_contents($pipes[1]);fclose($pipes[1]);
          $stderr=stream_get_contents($pipes[2]);fclose($pipes[2]);
          $rtn=proc_close($proc);
          return array('stdout'=>$stdout,
                       'stderr'=>$stderr,
                       'return'=>$rtn
                      );
         }


?>


<?php
if (!empty($_POST["total"])) {
    $kod = $_POST["total"];
}

if (empty($_POST["total"])) {
    $kod = '';
}


$dockerfile = fopen("Dockerfile", "w") or die("Unable to open file!");
fwrite($dockerfile, "FROM python \n");
fwrite($dockerfile, "COPY test.py / \n");
fwrite($dockerfile, "COPY mycode.py / \n");
fwrite($dockerfile, "CMD [\"python\", \"./test.py\"]");
$kod1 = implode(" ",$listz[0]);

$myfile = fopen("mycode.py", "w") or die("Unable to open file!");
$myfile1 = fopen("test.py", "w") or die("Unable to open file!");
fwrite($myfile, $kod);
fwrite($myfile1, $kod1);

$console = my_exec("docker build -t 123 .");
$console = my_exec("docker run --rm 123");


?>
