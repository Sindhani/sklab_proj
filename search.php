<?php
	
	require_once("includes/config.php");
	if(isset($_POST['submit'])){
		$query = $_POST['search'];
		if(strlen($_POST['search']>0)){
			$sql = "SELECT * from public_tools where tool_name like '%$query%' or tool_short_desc like '%$query%' or tool_long_desc like '%$query%' ";
			$response = mysqli_query($conn, $sql) or die("<br>error searching data");
			
			if(mysqli_num_rows($response)<=0){
				echo "<h2>No Tool found with this keyword</h2>";
			}
			else{
				
			while($row = mysqli_fetch_array($response)){
				echo  '<div class="box">
							<a href='.$row['tool_link'].'>
								<p>'
								.$row['tool_name'].
								'</p>
							</a>
						</div>';
				}
			}
			
		}
		else{
			echo "<h2>Type Something in the search box</h2>";
		}
	}
	
	
		
		
	?>