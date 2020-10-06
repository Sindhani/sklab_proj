<?php
include "includes/config.php";
$query = "Select * from categories";
$result = mysqli_query($conn, $query);
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
                                            <span class="red text-primary">C</span><span class="green text-success">B</span><span class="pink">D</span><span class="green text-info">B</span>(<span class="red text-primary">C</span>omprehensive <span class="green text-success">B</span>iological <span class="pink">D</span>ata, <span class="green">B</span>ase )
                                        </p>

                                    </div>
                                </div>
                                <div class="col col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
                                    <form method="get" action="" style="width: 100%;">
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
                    if (isset($_POST['search_submit'])) {
                        $query = mysqli_real_escape_string($conn, $_POST['search']);
                        $sql = "SELECT * FROM ldbpr WHERE db_name LIKE '$query' OR db_description LIKE '%$query%'";
                        $response = mysqli_query($conn, $sql) or die("<br>error searching data");
                        $rows = mysqli_num_rows($response);
                        $num = mysqli_num_rows($response);
                        $num > 1 ? $num = "Databases" : $num = "Database";
                        echo "<h2> $rows $num Founded</h2><br>";
                        echo '<div class="box-wrap">';
                        while ($row = mysqli_fetch_array($response)) {
                            // echo  '<div class="box">
                            //                 <a href=' . $row['db_link'] . '><p>' . $row['db_name'] . '</p></a>
                            //     </div>';

                            echo '	<div class="card">
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
                                A Biological database is a collection of biological information that is organized so that it can be easily accessed, managed and updated. Computer biological databases typically contain aggregations of biological data records or files, containing information about structure function and other interaction of data to specific scientific community. In this study, we created a database called <span style="color: blue; font-weight: bold;">Comprehensive</span> <span style="color: green; font-weight: bold;">Biological</span> <span style="color: deeppink; font-weight: bold;">Data</span> <span style="color: green; font-weight: bold;">Base</span> (<span style="color: blue; font-weight: bold;">C</span><span style="color: green; font-weight: bold;">B</span><span style="color: green; font-weight: bold;">D</span><span style="color: deeppink; font-weight: bold;">B</span>), which is the latest collection of 425 databases in 8 categories, Crystallographic Databases, Exosomal Databases, Biodiversity databases, Carbohydrate Databases, Chemical databases, Radiologic databases, Genomic Databases and Anti-Microbial Resistance (AMR) Databases, and has freely access to all Researchers. Furthermore, we have 2 searching methods, which can be searched by clicking the name of the category or user can type the database name into the given search bar.
                            </p>

                        </div>
                </div>
                <div class="post">
                    <div class="container">

                        <div class="row align-items-center">
                            <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12 align-self-center">

                                <div class="center-blocks"> <img class="img-center img-fluid" src="images/cbdb.png" usemap="#image-map">
                                    <!-- Image Map Generated by http://www.image-map.net/ -->


                                    <map name="image-map">
                                        <area target="" alt="Biodiversity Database" title="Biodiversity Database" href="show_db.php?cat=biodiversity&amp;table=cbdb" coords="103,27,344,28,363,41,366,80,353,109,320,118,270,118,236,118,206,115,172,117,137,119,99,118,79,94,79,53" shape="poly">
                                        <area target="" alt="Crystalography Database" title="Crystalography Database" href="show_db.php?cat=crystalography&amp;table=cbdb" coords="499,21,711,24,736,45,736,85,729,105,706,115,629,117,577,115,550,117,487,118,457,101,451,57,467,31" shape="poly">
                                        <area target="" alt="Carbohydrate Database" title="Carbohydrate Database" href="show_db.php?cat=carbohydrate&amp;table=cbdb" coords="38,158,275,159,297,184,295,232,272,251,182,254,127,253,72,250,31,248,12,224,12,185,25,169,30,163" shape="poly">
                                        <area target="" alt="Chemical Database" title="Chemical Database" href="show_db.php?cat=chemical&amp;table=cbdb" coords="46,259,280,259,301,306,284,346,233,351,180,349,126,349,47,351,21,342,9,300,24,263" shape="poly">
                                        <area target="" alt="Amicrobial Resistance" title="Amicrobial Resistance" href="show_db.php?cat=amicrobial_resistance&amp;table=cbdb" coords="542,259,776,257,799,280,803,312,795,338,773,351,696,351,633,351,586,351,540,351,520,331,516,296,524,270" shape="poly">
                                        <area target="" alt="Radio-logical Database" title="Radio-logical Database" href="show_db.php?cat=radiological&amp;table=cbdb" coords="107,386,345,388,361,412,362,454,342,477,312,480,259,478,188,479,129,479,88,473,75,439,81,402" shape="poly">
                                        <area target="" alt="Exosomal Database" title="Exosomal Database" href="show_db.php?cat=exosomal&amp;table=cbdb" coords="483,380,707,378,734,401,735,436,723,465,700,472,597,470,549,473,480,472,454,454,450,417,462,392" shape="poly">
                                        <area target="" alt="Genomic Database" title="Genomic Database" href="show_db.php?cat=genomic&amp;table=cbdb" coords="544,158,779,159,800,179,801,196,801,219,793,239,773,250,728,249,658,249,598,251,547,249,526,239,516,218,515,195,522,175" shape="poly">
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