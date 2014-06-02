<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html charset=utf-8">
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/text.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/960.css" />
        <script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
        <script type="text/javascript" src="js/jssor.core.js"></script>
	    <script type="text/javascript" src="js/jssor.utils.js"></script>
	    <script type="text/javascript" src="js/jssor.slider.js"></script>
        <script type="text/javascript" src="js/flip/rotate3Di.js"></script>
        <script type="text/javascript" src="js/flip/jquery-css-transform.js"></script>
	    <script>
	    	$(document).ready(function(){
	    		// slider show
	    		var options = {
	                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
	                $AutoPlaySteps: 4,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
	                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
	                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1

	                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
	                $SlideDuration: 300,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
	                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
	                $SlideWidth: 200,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
	                //$SlideHeight: 150,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
	                $SlideSpacing: 3, 					                //[Optional] Space between each slide in pixels, default value is 0
	                $DisplayPieces: 4,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
	                $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
	                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
	                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, default value is 1
	                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

	                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
	                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
	                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
	                    $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
	                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
	                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
	                    $SpacingX: 0,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
	                    $SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
	                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
	                },

	                $ArrowNavigatorOptions: {
	                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
	                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
	                    $AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
	                    $Steps: 4                                       //[Optional] Steps to go for each navigation request, default value is 1
	                }
	            };

	            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

	            //responsive code begin
	            //you can remove responsive code if you don't want the slider scales while window resizes
	            function ScaleSlider() {
	                var bodyWidth = document.body.clientWidth;
	                if (bodyWidth)
	                    // jssor_slider1.$SetScaleWidth(Math.min(bodyWidth, 809));
	                	jssor_slider1.$SetScaleWidth(Math.min(bodyWidth, 960));
	                else
	                    window.setTimeout(ScaleSlider, 30);
	            }

	            ScaleSlider();

	            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
	                $(window).bind('resize', ScaleSlider);
	            }
	            // slider show

	            //onclick -> link
	            $("#option-bar1").click(function(){
	            	document.location.href="introduce.php";
	            });
	            $("#option-bar2").click(function(){
	            	document.location.href="video.php";
	            });
	            $("#option-bar3").click(function(){
	            	document.location.href="discuz.php";
	            });
	            $("#head").click(function(){
	            	document.location.href="index.php";
	            });
	    	});
	    </script>
	</head>
	<style>
		.head{
			text-align: center;
		}
		.head:hover{
			cursor: pointer;
		}
		.slider{
			margin-bottom: 20px;
			background-color: #eeeeee;
		}
		#option-bar1{
			background-color: #f09bc2;
		}
		#option-bar1:hover{
			background-color: #9bf0c2;
			cursor: pointer;
		}
		#option-bar2{
			background-color: #f8c508;
		}
		#option-bar2:hover{
			background-color: #c5f808;
			cursor: pointer;
		}
		#option-bar3{
			background-color: #27f20b;
		}
		#option-bar3:hover{
			background-color: #f2270b;	
			cursor: pointer;
		}
		#option-bar2:hover{
		}
		.tool{
			background: #000000;
			border-width:medium;
			border-style:dashed;
		}
		.block{
			text-align: center;
		}

		/*jssor slider*/
		.jssorb03 div, .jssorb03 div:hover, .jssorb03 .av{
            background: url(img/b03.png) no-repeat;
            overflow:hidden;
            cursor: pointer;
        }
        .jssorb03 div { background-position: -5px -4px; }
        .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
        .jssorb03 .av { background-position: -65px -4px; }
        .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }

        .jssora03l, .jssora03r, .jssora03ldn, .jssora03rdn{
        	position: absolute;
        	cursor: pointer;
        	display: block;
            background: url(img/a03.png) no-repeat;
            overflow:hidden;
        }
        .jssora03l { background-position: -3px -33px; }
        .jssora03r { background-position: -63px -33px; }
        .jssora03l:hover { background-position: -123px -33px; }
        .jssora03r:hover { background-position: -183px -33px; }
        .jssora03ldn { background-position: -243px -33px; }
        .jssora03rdn { background-position: -303px -33px; }
        /*jssor slider*/
	</style>
	<body>
		<div class="head container_12" id="head">
			<img src="img/font_head.jpg">
		</div>
		<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 809px; height: 150px; overflow: hidden;" class="slider container_12">
			<!-- Loading Screen -->
	        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
	            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
	                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
	            </div>
	            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
	                top: 0px; left: 0px;width: 100%;height:100%;">
	            </div>
	        </div>

	        <!-- Slides Container -->
	        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 809px; height: 150px; overflow: hidden;">
	            <div><a href="video.php"><img u="image" src="img/ancient-lady/005.jpg" /></a></div>
	            <div><a href="video.php"><img u="image" src="img/ancient-lady/006.jpg" /></a></div>
	            <div><a href="video.php"><img u="image" src="img/ancient-lady/011.jpg" /></a></div>
	            <div><a href="video.php"><img u="image" src="img/ancient-lady/013.jpg" /></a></div>
	            <div><a href="video.php"><img u="image" src="img/ancient-lady/014.jpg" /></a></div>
	            <div><a href="video.php"><img u="image" src="img/ancient-lady/019.jpg" /></a></div>
	            <div><a href="video.php"><img u="image" src="img/ancient-lady/020.jpg" /></a></div>
	            <div><a href="video.php"><img u="image" src="img/ancient-lady/021.jpg" /></a></div>
	        </div>

	        <!-- bullet navigator container -->
	        <div u="navigator" class="jssorb03" style="position: absolute; bottom: 4px; right: 6px;">
	            <!-- bullet navigator item prototype -->
	            <div u="prototype" style="position: absolute; width: 21px; height: 21px; text-align:center; line-height:21px; color:white; font-size:12px;"><NumberTemplate></NumberTemplate></div>
	        </div>
	        <!-- Arrow Left -->
	        <span u="arrowleft" class="jssora03l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
	        </span>
	        <!-- Arrow Right -->
	        <span u="arrowright" class="jssora03r" style="width: 55px; height: 55px; top: 123px; right: 8px">
	        </span>
	        <!-- Arrow Navigator Skin End -->
	        <a style="display: none" href="http://www.jssor.com">Slider</a>
		</div>
		<div class="menu container_12">
			<!-- <div class="tool"> -->
				<div id="option-bar1" class="block grid_4">
					<img src="img/introduce.jpg"/>
				</div>
				<div id="option-bar2" class="block grid_4 alpha omega">
					<img src="img/video.jpg"/>
				</div>
				<div id="option-bar3" class="block grid_4">
					<img src="img/review.jpg"/>
				</div>
			<!-- </div> -->

			<div class="block grid_4">
				<p>想了解我們為什麼做？怎麼做到的嗎？</p>
			</div>
			<div class="block grid_4">
				<p>想看看大家怎麼騎單車，順便救地球嗎？</p>
			</div>
			<div class="block grid_4">
				<p>有什麼想對大家說的嗎？</p>
			</div>
		</div>
	</body>
<html>