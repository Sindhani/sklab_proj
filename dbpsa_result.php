<?php
require "includes/config.php";
include "includes/functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php require "includes/head-tag-elements.php"; ?>
</head>

<body>
    <div id="wrapper">
        <?php require "includes/header.php";
        require "includes/nav.php"; ?>

        <div id="main-content">
            <div id="sidebar">
                <div id="categories" class="boxed">
                    <h2>Our Services</h2>
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
            </div>
            <div id="posts">
                <div class="post">
                    <h2 class="title">List of Public Databases</h2>
                    <div class="meta">
                        <p class="date">Posted on January 20, 2020 by Dr. Shahid Ullah</p>
                        <p>&nbsp;</p>
                    </div>
                    <div class="story">
                        </p>
                    </div>
                </div>
            </div>
            <div id=posts>
                <?php
                echo "<div class=\"container\">";
                echo "<div class=\"row\">";
                echo "<div class=\"col-xm-12 col-md-12 col-lg-12 col-xl-12\">";

                if (isset($_REQUEST['submit'])) {
                       
                    if (isset($_REQUEST['dbpsaid'])) {
                        
                        if (!empty($_REQUEST['dbpsaid'])) {

                            $dbpsid = $_REQUEST['dbpsaid'];

                            $statement = "SELECT * FROM dbpsa where dbpsa_id = '$dbpsid' or uniprot_id = '$dbpsid' or species =  '$dbpsid' limit 4";
                            $query = mysqli_query($conn, $statement);
                            
                            table_start();
                            while ($row = mysqli_fetch_assoc($query)) {
                                table_data($row, $conn);
                            }
                            table_end();
                        } else {

                            echo "Search Some Keyword";
                        }
                    } else {
                        echo "Search Some Keyword";
                    }
                    switch ($_REQUEST['select_field']) {
                        case 'protein_name':
                            $x =  $_REQUEST['dbpsaid'];
                            $url = "https://www.uniprot.org/uniprot/?query=" . $x . "&sort=score&columns=id,entry name,protein names,&limit=5&format=tab";

                            $response = curl_start($url);

                            $fh = get_curl_data($response);
                            $fh = curl_exec($response);
                            var_dump($fh);
                            curl_end(curl_start($url));
                            break;
                        default:
                            break;
                    }
                }
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "<pre>";

                ?>

            </div>

            <?php require 'includes/footer.php'; ?>
        </div>
        <script type="text/javascript" src="js/nav.js"></script>
    </div>
</body>

</html>