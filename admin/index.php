<?php
require('includes/config.php');
if (isset($_POST['submit'])) {
  $user_email = $_POST['user_email'];
  $user_pwd = $_POST['user_pwd'];
  $sql = "select * from users where user_email = '$user_email' AND user_pwd = '$user_pwd'";
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_assoc($result)){
    if($row['user_email'] == $user_email && $row['user_pwd'] == $user_pwd){
      header('Location: dashboard.php');
    }
    else {
      echo "User Email or Password is Wrong...";
    }
  }
}



 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <?php  require("includes/head-tag-elements.php")?>
     <title></title>
   </head>
   <body >
	<div class="row">
	<div class="col-md-12">
	<div class="container">
     <div class="text-center">
       <form class="form-signin" method="post" action="login.php">
       
       <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
       <label for="inputEmail" class="sr-only">Email address</label>
       <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="user_email"required="" autofocus="">
       <label for="inputPassword" class="sr-only">Password</label>
       <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="user_pwd" required="">
       <div class="checkbox mb-3">
         <label>
           <input type="checkbox" value="remember-me"> Remember me
         </label>
       </div>
       <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
       
     </form>
	 </div>
	 </div>
   </div>
   </div>

   </body>
 </html>
