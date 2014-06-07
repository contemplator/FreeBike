<?php
	require("db_config.php");
    require("db_class.php");
    $db = new DB();
    $db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);

	if(!is_null(@$_POST['submit'])){
		date_default_timezone_set("Asia/Taipei");
		$tempTime = date("Y-m-d");
		$video_insert = "INSERT INTO `freebike`.`video` (`id`, `videoUrl`, `imgUrl`, `updateDate`, `updateUser`, `popular`) VALUES (NULL, '".$youtube_id."', '".$youtube_id."', '".$tempTime."', '".$_POST[username]."', '0');";
		$db->query($video_insert);

	header('Location: http://140.119.19.46/FreeBike/photo.php');
	}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html charset=utf-8">
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
	            $("#head").click(function(){
	            	document.location.href="index.php";
	            });
	    	});
	    </script>
	</head>
	<style>
		.formtable{
			width: 30%;
			text-align: center;
		}
		#youtube_url{
			width: 100%;
		}
		#username{
			width: 100%;
		}
	</style>
	<body>
		<div class="head container_12" id="head">
			<h1>光譜計畫</h1>
		</div>
		<div class="container_12">
			<a href="introduce.php" class="menu">活動訴求</a>
			<a href="video.php" class="menu">影片分享</a>
			<a href="discuz.php" class="menu">心得分享</a>
			<a href="photo_share.php" class="menu">分享照片</a>
		</div>
		<div class="container_12 formtable">
			<form enctype="multipart/form-data" action="photo_share.php" method="POST">
				<input type="file" id="photo" name="photo" /><br>
				<input type="text" id="username" name="username" placeholder="Guest" /><br>
				<input type="submit" name="submit" value="上傳Youtube影片" /><br>
			</form>
		</div>
	</body>
<html>
