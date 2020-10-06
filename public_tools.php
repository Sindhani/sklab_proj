<?php
/** 
 * Include configuration file 
 * **/
require 'includes/config.php';

$query = "Select tool_name, tool_short_desc, tool_link from public_tools";
$result = mysqli_query($conn, $query);

?>
<html>
  <head>
  <meta name="description" content="HABDSK is trying to give full convenience to its users and have collected all the tools either used in research or in study." />
    <?php require_once ("includes/head-tag-elements.php");?>

 </head>

  <body>
    <div id="wrapper">

<?php
    require "includes/header.php";
    require "includes/nav.php";
?>
      <div id="main-content">
        <div id="sidebar">
          <div id="categories" class="boxed">
          <div class="row py-3">
					<div class="col">
						<h2 class="text-center">Our Services</h2>
					</div>
				</div>
            <?php require 'includes/sidenav.php';?>
            </div>
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
       
		  
        
        <div id="posts">
          <div class="post">
          <h2 class="title">&nbsp;</h2>
            <div class="meta">
              <p class="date">Posted on January 20, 2020 by Dr. Shahid Ullah</p>

            </div>
            
          </div>
        </div>
<div id=posts>
        <p>
            Most welcome to (S-Khan lab) tool page, we have   provided biological tools related data services to the scientific community, and have tried to include tools that ranges from basic histology to the latest techniques of biological sciences like recombinant DNA technology, PCR mutagenesis, microarrays etc. This page focused on the principle and instrumentation of the biological tools, we've gathered almost all biological tools and with time we're going to update for scientific community, we've placed the search tool at the top of the menu bar for quick search, for any suggestion warm welcome to email us, we will be glad to see your kind suggestion.
            
        </p>
        <?php
		
		if(isset($_POST['submit'])){
			
			$query = mysqli_real_escape_string($conn, $_POST['search']);
			
			$sql = "SELECT * FROM public_tools WHERE tool_name LIKE '$query' OR tool_short_desc LIKE '%$query%' OR tool_long_desc LIKE '%$query%'";
			$response = mysqli_query($conn, $sql) or die("<br>error searching data");
			
			$rows = mysqli_num_rows($response);
			echo "<h2> $rows Tool(s) Founded</h2><br>";
			//echo '<div class="box-wrap">';
			while($row = mysqli_fetch_array($response)){
						
								
			echo '	<div class="accordion" id="accordionExample">
					<div class="card">
					<div class="card-header" id="headingOne">
					<h2 class="mb-0">
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">';
						echo $row['tool_name'];
					echo '</button>
					</h2>
					</div>
					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body"> ';
						echo $row['tool_long_desc'];
						echo '<br><a href="';
						echo $row['tool_link'];
						echo '" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Details</a>';				
									 echo ' </div>
									</div>
								  </div>

								  
								</div>';
						}
						
						echo "</div>";	
					}
					
	
	
			
		
		else{
        // find out how many rows are in the table
		echo '<div class="box-wrap">';
        $sql = "SELECT COUNT(*) FROM public_tools";
        $sql_result1 = mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);
        $r = mysqli_fetch_row($sql_result1);
        $numrows = $r[0];

        // number of rows to show per page
        $rowsperpage = 20;

        // find out total pages
        $totalpages = ceil($numrows / $rowsperpage);

        // get the current page or set a default
        if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
            // cast var as int
            $currentpage = (int) $_GET['currentpage'];
        } else {
            // default page num
            $currentpage = 1;
        } // end if

        // if current page is greater than total pages...
        if ($currentpage > $totalpages) {
            // set current page to last page
            $currentpage = $totalpages;
        } // end if

        // if current page is less than first page...
        if ($currentpage < 1) {
            // set current page to first page
            $currentpage = 1;
        } // end if

        // the offset of the list, based on current page
        $offset = ($currentpage - 1) * $rowsperpage;

        // get the info from the db
        $sql = "SELECT tool_name, tool_link  FROM public_tools LIMIT $offset, $rowsperpage";
        $sql_result = mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);

        while ($row = mysqli_fetch_array($sql_result)) {
            echo '
					<div class="box">
						<a target="_blank" href=' . $row['tool_link'] . '>
							<p>'
            . $row['tool_name'] .
            '</p>
						</a>
					</div>';
        }

  echo "</div>";      

/******  
 * Build the pagination links 
 * ******/
// range of num links to show
$range = 3;
echo '<div class="center"><div class="pagination">';
// if not on page 1, don't show back links
if ($currentpage > 1) {
    // show << link to go back to page 1

    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1'><<</a> ";
    // get previous page num
    $prevpage = $currentpage - 1;
    // show < link to go back to 1 page
    echo "<a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><</a> ";
} // end if

// loop to show links to range of pages around current page
for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
    // if it's a valid page number...
    if (($x > 0) && ($x <= $totalpages)) {
        // if we're on current page...
        if ($x == $currentpage) {
            // 'highlight' it but don't make a link
            echo "<a href='#' class='active'><b>$x</b></a>";
            // if not current page...
        } else {
            // make it a link
            echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a> ";
        } // end else
    } // end if
} // end for

// if not on last page, show forward and last page links
if ($currentpage != $totalpages) {
    // get next page
    $nextpage = $currentpage + 1;
    // echo forward link for next page
    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'>></a> ";
    // echo forward link for lastpage
    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>>></a> ";
} // end if
/****** 
 * End build pagination links 
 * ******/
echo '</div></div>';
		
		}
?>
  </div>
      <?php require 'includes/footer.php';?>
    </div>
    <script type="text/javascript" src="js/nav.js"></script>
	
  </body>
</html>
