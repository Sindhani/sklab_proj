 <?php
	include("includes/config.php");
	
	
	
	if(isset($_POST['submit'])){
	$member_id = $_POST['id'];
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
				$sql = "UPDATE team_members SET member_name ='$member_name', member_education ='$member_education', member_email='$member_email', member_research_area='$member_researcharea', member_position=$member_position', member_picture='$fileNameNew' WHERE id ='$member_id'";
				$result = mysqli_query($conn, $sql);
				echo mysqli_affected_rows($conn);
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
	
	
	
	

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php require('includes/nav.php')?>

<div class="content">
  <div class="container">  
  <form id="contact" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <h3>Update Member Data</h3>
   
	<?php 
	if(isset($_GET['update'])){
	$id = $_GET['update'];
	$query = "Select * from team_members where id = '$id' ";
	$response = mysqli_query($conn, $query);
	while($row = mysqli_fetch_array($response)){
	echo "<fieldset>";
    echo "<input placeholder='Member name' name='id' type='text' value='{$row['id']}' hidden autofocus />";
	echo "</fieldset>";
	
	echo "<fieldset>";
    echo "<input placeholder='Member name' name='m_name' type='text' tabindex='1' value='{$row['member_name']}' required autofocus />";
	echo "</fieldset>";
    
	echo "<fieldset>";
      echo "<input placeholder='Member Email Address' name='m_email' type='email' tabindex='2' value='{$row['member_email']}' required />";
    echo "</fieldset>";
	
	echo "<fieldset>";
      echo "<input placeholder='Current Position' name ='m_position' type='text' tabindex='3' value='{$row['member_position']}' required>";
    echo "</fieldset>";
    echo "<fieldset>";
     echo "<select tabindex='4' name='m_education' >;
		<option selected disabled value=''>Select Education</option>
		<option value='matric'>Matric</option>
		<option value='intermediate'>Intermediate</option>
		<option value='bachelor'>Bachelor</option>
		<option value='masters'>Masters</option>
		<option value='m.phil'>M.Phil</option>
		<option value='phd'>PhD</option>
		<option value='Post doctrate'>Post Doctrate</option>
	  </select>
    </fieldset>";
    
    echo "<fieldset>";
      
	echo "<textarea placeholder='Research Area' name='research_area' tabindex='5' required>'{$row['member_research_area']}'</textarea>";
    echo "</fieldset>";
	echo "<fieldset>";
    echo "<input type='file' name='m_picture' required value='{$row['member_picture']}'>";
    echo "</fieldset>";
    echo "<fieldset>";
     echo '<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">UPDATE</button>';
    echo "</fieldset>";
    }
	
	}
	?>
  </form>
</div>	
</div>

</body>
</html>
<?php

mysqli_close($conn);

?>