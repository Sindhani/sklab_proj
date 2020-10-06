<?php 
	include("includes/config.php");
	$sql = "select * from team_members";
	$result= mysqli_query($conn, $sql);
	

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
  <table>
  <tr>
		<th>Serial No.</th>
		<th>Team Member Name</th>
		<th>Team Member Education</th>
		<th>Team Member Email</th>
		<th>Team Member Research Area</th>
		<th>Team Member Current Position</th>
		<th>Team Member Picture</th>
		<th>Edit Data</th>
		
  </tr>
  <?php 
  $counter = 1;
  		
	while($row = mysqli_fetch_array($result)){
		
		echo '<tr>'.
				'<td>'.
					 $counter.
				'</td>'.
				'<td>'.
					$row['member_name'].
				'</td>'.
				'<td>'.
					$row['member_education'].
				'</td>'.
				'<td>'.
					$row['member_email'].
				'</td>'.
				'<td>'.
					$row['member_research_area'].
				'</td>'.
				'<td>'.
					$row['member_position'].
				'</td>'.
				'<td>'.
					'<img src="uploads/'.$row['member_picture'].'" style="width: 50px; height: 50px; margin: 0px; border-radius: 50%;"/>'.
				'</td><td>';
				
				echo "<b><a href='update.php?update={$row['id']}'>Edit</a></b>".'	
				</td>'.
			'</tr>';
			$counter++;
	}
  
  ?>
  </table>

</div>
</body>
</html>
