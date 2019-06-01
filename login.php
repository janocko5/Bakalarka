<?php
   include("config.php");
   session_start();
    $error = '';


if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $trieda = mysqli_real_escape_string($db, $_POST['trieda']);

    // form validation: ensure that the form is correctly filled
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }

    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // register user if there are no errors in the form
    $password = $password_1;//encrypt the password before saving in the database
    $query = "INSERT INTO `pouz`(`meno`, `heslo`, `email`,`Trieda` ) VALUES('$username', '$password','$email', '$trieda')";
    mysqli_query($db, $query);

    $_SESSION['username'] = $username;
    header('location: login.php');
    $_SESSION['success'] = "Uspesne registrovany";


}
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['meno']);
      $mypassword = mysqli_real_escape_string($db,$_POST['heslo']); 
      
      $sql = "SELECT id, admin FROM pouz WHERE meno = '$myusername' and heslo = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $_SESSION['id'] = $row['id'];
      $_SESSION['admin'] = $row['admin'];

      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
		 $_SESSION['email'] = 'myusername';
         $_SESSION['login_user'] = $myusername;
         if($_SESSION['admin'] != null){
             header("location: admin_menu.php");
         }
         else {
             header("location: button.php");
         }
      }
else {
         $error = "Your Login Name or Password is invalid";
	
      }
   }
?>

<!DOCTYPE html>
<html lang="sk" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
 
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="login-wrap">
	<div class="login-html">
        <div> <?php if($error != '') echo $error; ?></div>
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<form class="sign" action = "" method = "post">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input name = "meno" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input name = "heslo"  type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>

			</div>
			</form>
            <form class="reg" action = "" method = "post">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input name = "username" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input name = "password_1" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input name = "password_2" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input name = "email" type="text" class="input">
				</div>
                <div class="group">
                    <label for="pass" class="label">Class</label>
                    <input name = "trieda" type="text" class="input">
                </div>
				<div class="group">
					<input type="submit" class="button" name="reg_user" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</label>
				</div>
			</div>
            </form>
		</div>
	</div>
</div>
  
  

</body>

</html>
