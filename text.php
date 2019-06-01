<?php
if (!empty($_POST["python-editor1"])) {
    $kod = $_POST["python-editor1"];
}

if (empty($_POST["python-editor1"])) {
    $kod = '';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>


<textarea> <?php echo $_POST["name"]; ?>
</textarea>



</body>
</body>
</html>
