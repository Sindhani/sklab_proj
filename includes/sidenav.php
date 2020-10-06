<?php
	echo"	<div id='cssmenu'>
			<ul>
			   <li class='active'><a href='index.php'><span>Home</span></a></li>
			   <li class='has-sub'><a href='#'><span>Databases</span></a>
				<ul>"
						  .'<button class="dropdown-btn"><span>Our Databases</span>
							<i class="fa fa-caret-down"></i>
						  </button>
						  <div class="dropdown-container">
							<li><a href='.'database.php'.'><span>DBHR</span></a></li>
							<li><a href='.'corona_virus.php'.'><span>EDBCOVID-19</span></a></li>
							<li><a href='.'dbbfy.php'.'><span>DB-FBPA</span></a></li>
							<li><a href='.'dbpr.php'.'><span>DB-PR</span></a></li>
							<li><a href='.'ldbpr.php'.'><span>LDBPR</span></a></li>
							<li><a href='.'dbpsa.php'.'><span>CDBPAF</span></a></li>
							<li><a href='.'cbdb.php'.'><span>CBDB</span></a></li>
							<li><a href='.'co-19pdb.php'.'><span>CO-19PDB</span></a></li>
							<li><a href='.'cdbptms.php'.'><span>CDB-PTMs</span></a></li>
						 </div>'.
				 
				 "<li><a href='/public_database.php'><span>Public Databases</span></a></li>
				</ul>
			   </li>
			   
			   <li class='has-sub'><a href='#'><span>Tools</span></a>
				  <ul>
					 <li><a href='#'><span>Our Tools</span></a></li>
					 <li class='last'><a href='/public_tools.php'><span>Public Tools</span></a></li>
				  </ul>
			   </li>
			   
			</ul>
		</div>";
?>