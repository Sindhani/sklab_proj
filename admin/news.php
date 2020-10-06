<?php
	require("includes/config.php");
	
	if(isset($_POST['submit'])){
	$news_title = $_POST['news_title'];
	$news_content = $_POST['news_content'];
	$expire_date = $_POST['expire_date'];
	$news_url = $_POST['news_url'];

	$sql = "INSERT INTO habdkor_news (news_content, news_title,  news_expire_date, news_url) values('$news_content', '$news_title', '$expire_date', '$news_url')";
	
	mysqli_query($conn, $sql);
	
	mysqli_close($conn);
	
	}
	else{
		echo "error occourd";
	}
	
	

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php require('includes/nav.php');?>

<div class="content">
  <div class="container">  
  <form id="contact" action="<?php  $_SERVER['PHP_SELF'];?>" method="POST" >
    <h3>Add News</h3>
    
    <fieldset>
		News Title:
	<input placeholder="News Title" name="news_title" type="text" tabindex="1" required autofocus>
    </fieldset>
	<fieldset>
		URL:
	<input placeholder="News Url" name="news_url" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
	News Body:
      <input placeholder="News Body" name="news_content" type="text" tabindex="2" required>
    </fieldset>
	<fieldset>
	News Expires on:<br>
      <input placeholder="news_expires" name ="expire_date" type="date" tabindex="3" required>
    </fieldset>

    <fieldset>
      <button name="submit" type="submit" id="contact-submit">Add News</button>
    </fieldset>
    
  </form>
</div>	
</div>

</body>
</html>
