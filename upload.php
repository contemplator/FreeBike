<?php
	require("db_config.php");
    require("db_class.php");
    $db = new DB();
    $db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
	$sql = "SELECT * FROM video WHERE 1";
	$db->query($sql);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html charset=utf-8">
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/text.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/960.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/head.css" />
        <script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
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
		form{
		}
	</style>
	<body>
		<div class="container_12">
			<div class="head container_12">
			<h1>光譜計畫</h1>
		</div>
		<div class="container_12">
			<a href="introduce.php" class="menu">活動訴求</a>
			<a href="video.php" class="menu">影片分享</a>
			<a href="discuz.php" class="menu">心得分享</a>
		</div>
		<div class="container_12 formtable">
			<!-- <form enctype="multipart/form-data" action="video_upload.php" method="POST">
				<input type="file" name="userfile" /><br>
				<input type="submit" name="submit" value="upload file"/><br>
			</form> -->

			<form action="video_upload.php" method="POST">
				<!-- <input type="file" id="userfile" name="youtube_url" placeholder="ex:https://www.youtube.com/watch?v=9YqdBSIo_h8"><br> -->
				<input type="text" id="youtube_url" name="youtube_url" placeholder="ex:https://www.youtube.com/watch?v=9YqdBSIo_h8"><br>
				<input type="text" id="username" name="username" placeholder="Guest" /><br>
				<input type="submit" name="submit" value="上傳Youtube影片" /><br>
			</form>
		</div>
		</div>
	</body>
<html>