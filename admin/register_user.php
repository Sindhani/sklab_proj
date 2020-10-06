<?php
	include("includes/config.php");
	if(isset($_POST['submit'])){
	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$user_pwd = $_POST['user_pwd'];
	$user_pwd_confirm = $_POST['user_pwd_confirm'];
	if($user_pwd != $user_pwd_confirm){
		echo "Password not matched";
		
	}
	else{
	$sql = "Insert into users (user_name, user_email, user_pwd) values ('$user_name', '$user_email', '$user_pwd')";
	$result = mysqli_query($conn, $sql);
	echo $result;
	
	mysqli_close($conn);
		
	}
	}
	
	
	
	

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php require('includes/nav.php')?>

<div class="content">
  <div class="container">  
  <form id="contact" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <h3>Add a User</h3>
    
    <fieldset>
      <input placeholder="Member name" name="user_name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Member Email Address" name="user_email" type="email" tabindex="2" required>
    </fieldset>
	<fieldset>
      <input placeholder="Type your password" name="user_pwd" type="password" tabindex="3" required>
    </fieldset>
	<fieldset>
      <input placeholder="Type your passwor Again" name ="user_pwd_confirm" type="password" tabindex="4" required>
    </fieldset>
   
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Add User</button>
    </fieldset>
    
  </form>
</div>	
</div>

</body>
</html>
