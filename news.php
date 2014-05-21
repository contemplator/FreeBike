<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" menu="text/html charset=utf-8">
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/text.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/960.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/head.css" />
        <script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
	    <script>
	    	$(document).ready(function(){
	    		$("#option-bar1").click(function(){
	            	document.location.href="news.php";
	            });
	            $("#option-bar2").click(function(){
	            	document.location.href="video.php";
	            });
	            $("#option-bar3").click(function(){
	            	document.location.href="discuz.php";
	            });
	    	});
	    </script>
	</head>
	<style>
		
	</style>
	<body>
		<div class="head container_12">
			<h1>光譜計畫</h1>
		</div>
		<div class="menu container_12">
			<div id="option-bar1" class="block btn btn-success">
				<h2>熱門訊息<h2>
			</div>
			<div id="option-bar2" class="block btn btn-info">
				<h2>影片版</h2>
			</div>
			<div id="option-bar3" class="block btn btn-info">
				<h2>討論版</h2>
			</div>
		</div>
	</body>
<html>