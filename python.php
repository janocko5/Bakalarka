<?php
include('zadanie.php');
include('session.php');
include('run_python.php');
include('testy_k_zadaniam.php');
include('config.php');

?>


<!DOCTYPE html>
<html lang="sk" >

<head>

    <meta charset="UTF-8">
    <title>Python</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/ace.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/menu.css">


</head>

<body>
<h1 id="zad" class="zadanie"> Zadanie </h1>
<h1 id="testy" class="testy"> Testy </h1>
<textarea id="zadan" class="zadan"> <?php print implode("", $list[$_POST['subject']] )?>  </textarea>  <!--prerobit na list[index zadania]-->
<textarea id="ztest" class="ztest"> <?php print implode("", $listz[0] )?></textarea>   <!--prerobit na list[index test k zadaniu]-->
<h1 id="code" class="code"> Code </h1>


<button onclick="zadanie()"> Zadanie</button>
<button id="test" class="test" onclick="testy()"> Testy</button>


<div id="editor" class="editor" class="miro"><?php echo $kod ?>
</div>


<form id="sampleForm" name="sampleForm" method="post" action="#">
    <input type="hidden" name="total" id="total" value="">
</form>


<button id="run_button" class="run_button" onclick="setValue()"> Run </button>



<h1 id="console" class="console">Console</h1>

<div id="editor1" class="editor1"><textarea name="python-editor" data-editor="python" data-gutter="2" rows="15" style="position: absolute;
            top: 670px;
            right: 0;
            bottom: 0;
            left: 200px;
			width:1500px;
			height:500px"><?php
        if($console['stdout']) {
            echo $console['stdout'];
        };
        if($console['stderr']) {
            echo $console['stderr'];
        };
        if($console['return']) {
            echo $console['return'];
        };
        ?></textarea>
</div>




<script  src="js/index.js"></script>
<script src="js/ace.js"  charset="utf-8"></script>


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

<script type="text/javascript">
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/python");

    var editor1 = ace.edit("editor1");
    editor1.setTheme("ace/theme/monokai");
    editor1.session.setMode("ace/mode/python");



    function setValue(){
        document.sampleForm.total.value = editor.session.toString();
    }

    function zadanie(){
        document.getElementById('editor1').classList.toggle('active');
        document.getElementById('editor').classList.toggle('active');
        document.getElementById('console').classList.toggle('active');
        document.getElementById('run_button').classList.toggle('active');
        document.getElementById('code').classList.toggle('active');
        document.getElementById('zad').classList.toggle('active');
        document.getElementById('zadan').classList.toggle('active');
    }

    function testy(){
        document.getElementById('editor1').classList.toggle('active');
        document.getElementById('editor').classList.toggle('active');
        document.getElementById('console').classList.toggle('active');
        document.getElementById('run_button').classList.toggle('active');
        document.getElementById('code').classList.toggle('active');
        document.getElementById('ztest').classList.toggle('active');
        document.getElementById('testy').classList.toggle('active');
    }


    $("#run_button").on('click',function(){
        document.forms["sampleForm"].submit();
    });

</script>

</body>

</html>
