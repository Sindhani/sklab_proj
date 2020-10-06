<?php
include("includes/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
<?php
	include("includes/head-tag-elements.php");
	

?>
<link href="/Css/lightslider.min.css">
<style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .jssora061 {display:block;position:absolute;cursor:pointer;}
        .jssora061 .a {fill:none;stroke:#fff;stroke-width:360;stroke-linecap:round;}
        .jssora061:hover {opacity:.8;}
        .jssora061.jssora061dn {opacity:.5;}
        .jssora061.jssora061ds {opacity:.3;pointer-events:none;}
    </style>
  </head>

  <body>
    <div id="wrapper">
      <?php	include("includes/header.php");	?>
	  <?php	include("includes/nav.php");	?>
     

      <div id="main-content">
	  <div id="sidebar">
          <div id="categories" class="boxed">
		  <div class="row py-3">
					<div class="col">
						<h2 class="text-center">Our Services</h2>
					</div>
				</div>
            <?php require('includes/sidenav.php'); ?>
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
            <div class="story container-fluid">
				    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Composer -->
    <!-- Source: https://www.jssor.com/demos/banner-slider.slider/=edit -->
    
    
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;" class="container-fluid">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div>
                
                <img data-u="image" src="images/events/image1.jpg" />
                <div u="thumb">Slide Description 001
                </div>
            </div>
            <div>
                <img data-u="image" src="images/events/image2.jpg" />
                <div u="thumb">Slide Description 002
                </div>
            </div>
            <div>
                <img data-u="image" src="images/events/image3.jpeg" />
                <div u="thumb">Slide Description 003
                </div>
            </div>
            <div>
                <img data-u="image" src="images/events/image4.jpeg" />
                <div u="thumb">Slide Description 004
                </div>
            </div>
            <div>
                <img data-u="image" src="images/events/image5.jpeg" />
                <div u="thumb">Slide Description 005
                </div>
            </div>
            <div>
                <img data-u="image" src="images/events/image5.jpeg" />
                <div u="thumb">Slide Description 006
                </div>
            </div>
            <div>
                <img data-u="image" src="images/events/image6.jpeg" />
                <div u="thumb">Slide Description 007
                </div>
            </div>
            <div>
                <img data-u="image" src="images/events/drsherali.jpg" />
                <div u="thumb">Slide Description 008
                </div>
            </div>
            <div>
                <img data-u="image" src="images/events/image22.jpeg" />
                <div u="thumb">Slide Description 009
                </div>
            </div>
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">image gallery</a>
        <!-- Thumbnail Navigator -->
        <div u="thumbnavigator" style="position:absolute;bottom:0px;left:0px;width:980px;height:50px;color:#FFF;overflow:hidden;cursor:default;background-color:rgba(0,0,0,.5);">
            <div u="slides">
                <div u="prototype" style="position:absolute;top:0;left:0;width:980px;height:50px;">
                    <div u="thumbnailtemplate" style="position:absolute;top:0;left:0;width:100%;height:100%;font-family:arial,helvetica,verdana;font-weight:normal;line-height:50px;font-size:16px;padding-left:10px;box-sizing:border-box;"></div>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora061" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M11949,1919L5964.9,7771.7c-127.9,125.5-127.9,329.1,0,454.9L11949,14079"></path>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora061" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M5869,1919l5984.1,5852.7c127.9,125.5,127.9,329.1,0,454.9L5869,14079"></path>
            </svg>
        </div>
    </div>
    <!-- #endregion Jssor Slider End -->	
			
          </div>
          
        </div>
        
      </div>
      
    </div>
	<?php require("includes/footer.php");?>
	
	</div>
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Orientation: 2,
                $NoDrag: true
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
  </body>
</html>
