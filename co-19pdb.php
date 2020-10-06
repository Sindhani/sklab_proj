<?php
include "includes/config.php"
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <?php
    include "includes/head-tag-elements.php";
    ?>
    <title>CBDB|SKLAB</title>
    <meta name="description" content="The DBHR is an online data resource specifically designed for human research, which provides access to almost all latest human database on easy and friendly finding way, the classification based on data type is informative and straightforward, we assign one major category to each database, although one database may correspond to multiple categories. In what follows, we focus on databases categorized as DNA, RNA, protein, expression, pathway and disease. Dr. Shahid" />
    <meta name="robots" content="index, follow" />
    <style>
        .story a {

            text-decoration: underline;
            font-style: italic;
        }

        .story a:hover {
            color: red;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

</head>

<body>
    <div id="wrapper">
        <?php include "includes/header.php"; ?>
        <?php include "includes/nav.php"; ?>
        <div id="main-content">
            <div id="sidebar">
                <div class="row py-3">
                    <div class="col">
                        <h2 class="text-center">Our Services</h2>
                    </div>
                </div>
                <!-- <h2 style="text-align: center;"></h2> -->
                <?php require 'includes/sidenav.php'; ?>
                <div style="border:2px solid silver; height: auto; width:100%; border-radius: 10px; margin-top: 10px; margin-bottom: 10px;">
                    <div><img width="100%" src="images/news_table.gif" /></div>
                    <marquee behavior="scroll" direction="up" onmouseover="this.setAttribute('scrollamount', 0, 0);this.stop();" onmouseout="this.setAttribute('scrollamount', 6, 0);this.start();" height='250px'>
                        <p align=center>

                            <?php require "includes/news.php"; ?>
                        </p>
                    </marquee>
                </div>
            </div>
            <div id="posts">
                <div class="post">
                    <h2 class="title">&nbsp;</h2>
                    <div class="meta">
                        <div class="contaier">
                            <div class="row">
                                <div class="col col-xm-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 push-left">
                                    <div class="dbhr" style="font-size: 20px; word-spacing: 5px; ">
                                        <p class="date">
                                            <span class="red text-primary">C</span><span class="green text-success">O</span><span class="pink">-19</span><span class="green text-info">P</span><span class="green text-info">D</span><span class="green text-info">B</span> (<span class="red text-primary">C</span>ovid <span class="green text-success">-19 <span class="pink">P</span></span>andemic <span class="pink">D</span>ata<span class="green">B</span>ase )
                                        </p>

                                    </div>
                                </div>
                                <div class="col col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
                                    <form method="GET" action="<?php $_SERVER['PHP_SELF']?>" style="width: 100%;">
                                        <div class="form-row">
                                            <div class="col  col-xm-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 text-center">
                                                <input type="text" class="form-control " name="search" placeholder="Search By DB">
                                            </div>
                                            <div class="col col-xm-12 col-lg-4 col-xl-4 text-center">
                                                <input type="submit" class="btn btn-outline-success" name="search_submit" value="Search">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php
                    if (isset($_GET['search_submit'])) {
                        
                        $query = mysqli_real_escape_string($conn, $_GET['search']);
                        
                        $sql = "SELECT * FROM co19pdb WHERE db_name LIKE '$query' OR db_description LIKE '%$query%'";
                        $response = mysqli_query($conn, $sql);
                        
                        $rows = mysqli_num_rows($response);
                        $num = mysqli_num_rows($response);
                        $num > 1 ? $num = "Databases" : $num = "Database";
                        echo "<h2> $rows $num Founded</h2><br>";
                        echo '<div class="box-wrap">';
                        while ($row = mysqli_fetch_array($response)) {
                            // echo  '<div class="box">
                            //                 <a href=' . $row['db_link'] . '><p>' . $row['db_name'] . '</p></a>
                            //     </div>';

                            echo '	<div class="card my-3">
								  <h5 class="card-header">Database Name: ' . $row['db_name'] . '</h5>
								  <div class="card-body">
									<h5 class="card-title text-muted font-italic">DataBase Category: ' . $row['db_category'] . '</h5>
									<p class="card-text">' . $row['db_description'] . '</p>
									<a href="' . $row['db_link'] . '" target="_blank" class="btn btn-outline-info">Visit Official Website</a>
								  </div>
								</div>';
                        }
                        echo "</div>";
                    } else {
                    ?>
                        <a href="" title="" target="_blank"></a>
                        <div class="story">
                            <p>
                                The COVID-19 pandemic is a rapidly changing situation, numbers of databases have been published by computational scientists, each has its own particular problem, such as digital image database, image info, genomic database, genomic updates, etc. In order to access the useful details, we have provided a larger detailed dataset containing only COVID-19 research databases that are nowadays the worldwide issue and have divide into 6 categories based on their internal or external structure, function and activities. Our methods aim to be as comprehensive, systematic and exhaustive how much as possible. The databases listed in this database are chosen to provide covid-19 knowledge to researchers on literature and resources on easy and friendly finding ways. Here, as we have provided access to 40 covid-19 databases through two ways to search, the user can search through clicking on the name or by typing the appropriate name in the search query.
                            </p>

                        </div>
                </div>
                <div class="post">
                    <div class="container">

                        <div class="row align-items-center">
                            <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12 align-self-center">

                                <div class="center-blocks">
                                    <img class="img-center img-fluid" src="images/co-19pdb.png" usemap="#image-map">

                                    <map name="image-map">
                                        <area target="" alt="Chemical Structure" title="Chemical Structure" 
                                        href="show_db.php?cat=chemical_structure&table=co19pdb" coords="136,87,352,86,378,101,388,137,383,163,368,180,345,188,141,188,122,180,113,169,107,148,107,125,114,107" shape="poly">
                                        <area target="" alt="Social Sciences" title="Social Sciences" 
                                        href="show_db.php?cat=social_sciences&table=co19pdb" coords="482,99,502,88,617,89,731,88,749,102,759,121,759,157,741,184,714,190,579,189,516,189,494,185,477,166,470,128" shape="poly">
                                        <area target="" alt="visualization_tools" title="visualization_tools" href="show_db.php?cat=visualization_tools&table=co19pdb" coords="19,288,40,273,67,273,274,275,295,289,304,309,304,326,300,350,287,366,262,376,68,376,32,372,18,359,9,344,5,313" shape="poly">
                                        <area target="" alt="Digital Image" title="Digital Image" href="show_db.php?cat=digital_image&table=co19pdb" coords="575,274,810,275,837,297,845,325,838,354,813,374,611,375,578,374,562,363,554,352,548,332,548,309,557,291" shape="poly">
                                        <area target="" alt="Genomics" title="Genomics" href="show_db.php?cat=genomics&table=co19pdb" coords="142,446,356,448,382,465,389,487,386,520,373,539,352,548,270,547,138,548,118,537,108,514,107,486,117,461" shape="poly">
                                        <area target="" alt="Literature" title="Literature" href="show_db.php?cat=literature&table=co19pdb" coords="505,447,718,448,742,461,749,486,751,511,745,528,734,543,707,550,508,549,486,540,475,522,471,487,481,458" shape="poly">
                                    </map>
                                </div>
                            </div>

                            <!-- Card 1 ended -->
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
        <?php require "includes/footer.php"; ?>
    </div>
    <script type="text/javascript" src="js/nav.js"></script>
    <script>
        $(function(){

            $('img[usemap]').imageMap();
        });
    
    </script>
</body>

</html>