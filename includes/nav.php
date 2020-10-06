<!-- <?php 

	$routes = array('/public_database.php','/database.php','/dna.php', '/rna.php', '/pathway.php', '/expression.php', '/public_tools.php', '/database.php' , '/protein.php');
	$res = $_SERVER['PHP_SELF'];
	
	  if(in_array($res,$routes)) {
		  
		  echo '<div class="topnav" id="myTopnav">
				<a href="index.php"  title="" class="active">Home</a>
				<a href="research.php"  title="">Research</a>
				<a href="database.php"  title="">Databases</a>
				<a href="publication.php"  title="">Publication</a>
				<a href="events.php"  title="">Events</a>
				<a href="events.php"  title="">Scholarship (Abroad)</a>
                <a href="contact.php"  title="">Contact Us</a>
				<a href="about.php"  title="">About Us</a>';
		
					echo '<div class="search-container">';
					echo '<form method="POST">
							  <input type="text" placeholder="Search.." name="search">
							  <button  name="submit" type="submit"><i class="fa fa-search fa-lg"></i></button>
							</form>
					  </div>
					<a href="javascript:void(0);" class="icon" onclick="myFunction()">
						<i class="fas fa-bars fa-lg"></i>
					</a>
				   </div>';
				   
	   
	  }
	  else{
		echo '<div class="topnav" id="myTopnav">
        <a href="index.php"  title="" class="active">Home</a>
        <a href="research.php"  title="">Research</a>
        <a href="database.php"  title="">Databases</a>
        <a href="publication.php"  title="">Publication</a>
        <a href="events.php"  title="">Events</a>
		<a href="contact.php"  title="">Contact Us</a>
        <a href="about.php"  title="">About Us</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
			<i class="fas fa-bars fa-lg"></i>
		</a>
       </div>';
	}


?> -->


<div class="topnav" id="myTopnav">
        <a href="index.php"  title="" <?php if($_SERVER['SCRIPT_NAME']=="/index.php") { ?>  class="active"   <?php   } ?> >Home</a>
        <a href="research.php"  	<?php if($_SERVER['SCRIPT_NAME']=="/research.php") { ?>  class="active"   <?php   } ?> title="">Research</a>
        <a href="database.php"  	<?php if($_SERVER['SCRIPT_NAME']=="/database.php") { ?>  class="active"   <?php   } ?>title="">Databases</a>
        <a href="publication.php"  	<?php if($_SERVER['SCRIPT_NAME']=="/publication.php") { ?>  class="active"   <?php   } ?>title="">Publication</a>
        <a href="events.php"  		<?php if($_SERVER['SCRIPT_NAME']=="/events.php") { ?>  class="active"   <?php   } ?>title="">Events</a>
        <a href="contact.php"  		<?php if($_SERVER['SCRIPT_NAME']=="/contact.php") { ?>  class="active"   <?php   } ?>title="">Contact Us</a>
        <a href="about.php"  		<?php if($_SERVER['SCRIPT_NAME']=="/about.php") { ?>  class="active"   <?php   } ?>title="">About Us</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
			<i class="fas fa-bars fa-lg"></i>
		</a>
       </div>
