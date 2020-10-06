<?php
	include("includes/config.php");
	if(isset($_POST['submit'])){
	$member_name = $_POST['m_name'];
	$member_email = $_POST['m_email'];
	$member_education = $_POST['m_education'];
	$member_position = $_POST['m_position'];
	$member_researcharea = $_POST['research_area'];
	
	
		$file = $_FILES['m_picture'];
		$fileName = $_FILES['m_picture']['name'];
		$fileTmpName = $_FILES['m_picture']['tmp_name'];
		$filesize = $_FILES['m_picture']['tmp_name'];
		$fileError = $_FILES['m_picture']['error'];
		$filetype = $_FILES['m_picture']['type'];
		
		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));
		
		$allowed = array('jpg', 'jpeg', 'png');
	
	if(in_array($fileActualExt, $allowed)){
		if($fileError ===0){
			if($filesize <5000){
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = 'uploads/'. $fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				$sql = "INSERT INTO team_members(member_name, member_education, member_email,member_position, member_research_area, member_picture) values('$member_name','$member_education','$member_email','$member_position','$member_researcharea','$fileNameNew')";
				$result = mysqli_query($conn, $sql);
			}else{
				echo '<div class="error">Your File is too big!</div>';
			}
		}
		else{
			echo '<div class="error">There was an error uploading your file</div>';
		}
	}
	else{
		echo '<div class="error">You Cannot Upload this type of file</div>';
	}
}
	
	
	
	mysqli_close($conn);

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
  <form id="contact" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <h3>Add a New Member</h3>
    <h4>Add a Member</h4>
    <fieldset>
      <input placeholder="Member name" name="m_name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Member Email Address" name="m_email" type="email" tabindex="2" required>
    </fieldset>
	<fieldset>
      <input placeholder="Current Position" name ="m_position" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <select tabindex="4" name="m_education">
		<option selected disabled value="">Select Education</option>
		<option value="matric">Matric</option>
		<option value="intermediate">Intermediate</option>
		<option value="bachelor">Bachelor</option>
		<option value="masters">Masters</option>
		<option value="m.phil">M.Phil</option>
		<option value="phd">PhD</option>
		<option value="post doctrate">Post Doctrate</option>
	  </select>
    </fieldset>
	
    
    <fieldset>
      
	  <textarea placeholder="Research Area" name="research_area" tabindex="5" required></textarea>
    </fieldset>
	<fieldset>
      <input type="file" name="m_picture" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Add Member</button>
    </fieldset>
    
  </form>
</div>	
</div>

</body>
</html>
