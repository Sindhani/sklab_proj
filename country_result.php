<?php
require("includes/config.php");
$query = "Select id, country_name, country_abb from countries";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php require("includes/head-tag-elements.php"); 
	
        ?>
	<title>Country|SKLAB</title>
  </head>

  <body>
    <div id="wrapper">
       <?php require("includes/header.php"); 
       require("includes/nav.php"); ?>

      <div id="main-content">
        <div id="sidebar">
          <div id="categories" class="boxed">
		  <div class="row py-3">
					<div class="col">
						<h2 class="text-center">Our Services</h2>
					</div>
				</div>
            <?php require('includes/sidenav.php'); ?>
            <div style="border:2px solid silver; height: auto; width:100%; border-radius: 10px; margin-top: 10px; margin-bottom: 10px;">
		   <div><img width="100%" src="images/news_table.gif" /></div>
           <marquee 
			behavior= "scroll" 
			direction="up" 
			onmouseover="this.setAttribute('scrollamount', 0, 0);this.stop();" 
			onmouseout="this.setAttribute('scrollamount', 6, 0);this.start();" 
			height='250px' >
		   <p align=center>
			
						<?php require("includes/news.php"); ?>
			</p>
		   
		   </marquee>
           
            
           
			
          </div>
          </div>
        </div>
        <div id="posts">
          <div class="post">
		  <h2 class="title">&nbsp;</h2>
            <div class="meta">
             <p class="date">Posted on January 20, 2020 by Dr. Shahid Ullah</p>
              <p>&nbsp;</p>
            </div>
            <div class="story">
              
              </p>
              </div>
          </div>
        </div>
		
		<div id="posts">
		<div class="container">
					<?php
						$country = $_GET['name'];
						$abb = $_GET['abb'];
						// Setup headers - I used the same headers from Firefox version 2.0.0.6
						  // below was split up because php.net said the line was too long. :/
						  $header[] = "Accept: application/json";
						  $header[] = "Content-Type: application/json";
						  $header[] = "Cache-Control: max-age=0";
						  //$header[] = "Connection: keep-alive";
						  //$header[] = "Keep-Alive: 300";
						  //$header[] = "Accept-Charset: utf-8;q=0.7";
						  //$header[] = "Accept-Language: en-us";
						  $header[] = "x-rapidapi-host: coronavirus-monitor.p.rapidapi.com"; // browsers keep this blank.
						  $header[] = "x-rapidapi-key: 1495c245cdmsh44d27874b836512p132c78jsn2191cd2085f3"; // browsers keep this blank.
						  // browsers keep this blank.
						  
							$curl = curl_init();
						curl_setopt($curl, CURLOPT_HTTPHEADER,  $header);
							curl_setopt_array($curl, array(
								CURLOPT_URL => "https://coronavirus-monitor.p.rapidapi.com/coronavirus/cases_by_country.php",
								CURLOPT_RETURNTRANSFER => true,
								CURLOPT_FOLLOWLOCATION => true,
								CURLOPT_ENCODING => "",
								CURLOPT_MAXREDIRS => 10,
								CURLOPT_TIMEOUT => 30,
								CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
								CURLOPT_CUSTOMREQUEST => "GET",
								/* CURLOPT_HTTPHEADER => array(
								"x-rapidapi-host: coronavirus-monitor.p.rapidapi.com",
									"x-rapidapi-key: 1495c245cdmsh44d27874b836512p132c78jsn2191cd2085f3"
								//), */
							));

							$response = curl_exec($curl);
							$err = curl_error($curl);

							curl_close($curl);

							if ($err) {
								echo "cURL Error #:" . $err;
							} else { 
								$data = json_decode($response, true);
								
								
								
								
								foreach($data as $row){
									if(is_array($row)){
										
									foreach($row as $value){
										if($country == $value['country_name']){
											
											echo "<div class='row align-items-center justify-content-center'>";
												echo "<div class='col-xm-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 '>";
												echo '<di class="h3 text-center">'.$country.'<br>';
												echo "</div>";
												echo "<div class='col-xm-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 '>";
												echo '<img src="https://www.countryflags.io/'.$abb.'/flat/64.png" width="150" height=150>';
												echo "</div></div>";
											
											
											echo "<div class='row align-items-center'>";
												echo "<div class='col col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3'>";
													echo '<div class="country_cards">';
														echo '<div class="card bg-light mb-3" style="max-width: 18rem;">'.'
														  <div class="card-header">Cases</div>
														  <div class="card-body">
															<h5 class="card-title">CoronaVirus Cases</h5>
															<p class="card-text">'.$value['cases'].'</p>
														  </div>
													  </div>';
													echo "</div>
												
												</div>";
												
												
												echo "<div class='col col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3'>";
													echo '<div class="card bg-light mb-3" style="max-width: 18rem;">'.'
													  <div class="card-header">Deaths</div>
													  <div class="card-body">
														<h5 class="card-title">Number of Deaths</h5>
														<p class="card-text">'.$value['deaths'].'</p>
													  </div>
													</div>';
												echo "</div>";
												  
												echo "<div class='col col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3'>";  
													  echo '<div class="card bg-light mb-3" style="max-width: 18rem;">'.'
													  <div class="card-header">Recovered</div>
													  <div class="card-body">
														<h5 class="card-title">Total Recovered</h5>
														<p class="card-text">'.$value['total_recovered'].'</p>
													  </div>
													  
													</div>';
												 echo "</div>";
													
												echo "<div class='col col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3'>"; 	
													 echo '<div class="card bg-light mb-3" style="max-width: 18rem;">'.'
													  <div class="card-header">New Deaths</div>
													  <div class="card-body">
														<h5 class="card-title">Number of New Deaths</h5>
														<p class="card-text">'.$value['new_deaths'].'</p>
													  </div></div>'; 
												  echo "</div>";
											  //row ended here
											  echo "</div>";
											  
											  echo "<div class='row align-items-center'>";
											  echo "<div class='col col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3'>";  
											  echo '<div class="card bg-light mb-3" style="max-width: 18rem;">'.'
											  <div class="card-header">New Cases</div>
											  <div class="card-body">
												<h5 class="card-title">Number of New Cases </h5>
												<p class="card-text">'.$value['new_cases'].'</p>
											  </div></div>'; 
											   echo "</div>";
											   
											    echo "<div class='col col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3'>"; 
											  echo '<div class="card bg-light mb-3" style="max-width: 18rem;">'.'
											  <div class="card-header">Critical Cases</div>
											  <div class="card-body">
												<h5 class="card-title">Number of Critical Cases </h5>
												<p class="card-text">'.$value['serious_critical'].'</p>
											  </div></div>';
											  echo "</div>";

											echo "<div class='col col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3'>"; 
											  echo '<div class="card bg-light mb-3" style="max-width: 18rem;">'.'
											  <div class="card-header">Active Cases</div>
											  <div class="card-body">
												<h5 class="card-title">Number of Active Cases </h5>
												<p class="card-text">'.$value['active_cases'].'</p>
											  </div></div>'; 
											  echo "</div>";
											  
											  echo "<div class='col col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3'>"; 
											  echo '<div class="card bg-light mb-3" style="max-width: 18rem;">'.'
											  <div class="card-header">Total Cases/1m Population</div>
											  <div class="card-body">
												<h5 class="card-title">Desnisty of Cases per meter </h5>
												<p class="card-text">'.$value['total_cases_per_1m_population'].'</p>
											  </div></div>';
											  echo "</div>
											</div>";
											//row ended here
											echo "</div>";	
												
											
											  
											
										}
									}
									
									}
								}
								
								
								
								
							}	
								?><div class="pt-5">
								<button type="button"  onclick="history.go(-1);" class="btn btn-success btn-lg">Go Back </button>
						</div>
					
				</div>
			
      <?php require('includes/footer.php'); ?>
    </div>
	<script type="text/javascript" src="js/nav.js"></script>
  </body>
</html>
