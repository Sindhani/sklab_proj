<?php 
$sql = "select * from habdkor_news order by id desc";
$news_result = mysqli_query($conn, $sql);
$url = "";   
			while($row = mysqli_fetch_array($news_result)){
				if($row['news_url']==null){
					$url = 'contact.php';
				}
				else{
					$url = $row['news_url'];
				}
				echo "<br><b>".$row['news_title'].":</b><br>";
				echo "<a href=\"".$url."\" title='Click to Know More'>";
				echo $row['news_content']."</a><br>";
				echo "<b style='color: red;'>Last Date: ".$row['news_expire_date']."</b><br>";
				
				
			}

?>

