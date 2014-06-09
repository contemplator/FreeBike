<?php
	require("db_config.php");
    require("db_class.php");
    $db = new DB();
    $db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);

    // function generatorID(){
    // 	$password_len = 8;
    // 	$password = "";
    // 	$word = "abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ0123456789";
    // 	$len = strlen($word);
    // 	for ($i = 0; $i < $password_len; $i++) {
    //     	$password .= $word[rand() % $len];
    // 	}
    // 	return $password;
    // }

    function update_name(){
		$name = $_FILES['file_photo']['tmp_name'];
		echo $name;
	}

	if(!is_null(@$_POST['submit'])){
		$uploaddir = "sharephoto/";
		$uploaddir = $uploaddir . basename( $_FILES['file_photo']['name']);
		date_default_timezone_set("Asia/Taipei");
		$tempTime = date("Y-m-d");
		if (move_uploaded_file($_FILES['file_photo']['tmp_name'], $uploaddir)) {
		  	// echo "File is valid, and was successfully uploaded.";
		  	// $photoid = generatorID().".jpg";
		  	rename("sharephoto/".$_FILES['file_photo']['name'], "sharephoto/".$photoid);

		  	$photo_insert = "INSERT INTO `freebike`.`photo` (`id`, `name`, `description`, `sharetime`, `click`) VALUES ('', '".$_POST['photoname']."', '".$_POST['description']."', '".$tempTime."', '0');";
		  	// echo $photo_insert;
		  	$db->query($photo_insert);

		  	header('Location: http://140.119.19.46/FreeBike/photo.php');
		} else {
			header('Location: http://140.119.19.46/FreeBike/photo.php');
		}
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

	            $('#file_photo').change(function(){
		    		var path = document.getElementById("file_photo").value;
		    		var name = path.split("\\");
		    		name = name[name.length-1]
		    		// alert(name);
		    		var extension = path.substring(path.length-3, path.length)
		    		if(extension != "jpg" && extension != "gif" && extension != "png"){
		    			alert("副檔名不是.jpg .gif .png 結尾!!");
		    			document.getElementById("file_photo").value = null;
		    		}else{
		    			document.getElementById("submit").removeAttribute("disabled");
		    			document.getElementById("photoname").value = name;
		    			// alert(path);
		    		}
		    	});
	    	});
	    </script>
	</head>
	<style>
		.formtable{
			width: 30%;
			margin-bottom: 20px;
		}
		#file_photo{
			width: 200px;
		}
		label{
			float: left;
		}
		input{
			width: 300px;
		}
	</style>
	<body>
		<div class="head container_12 formtable" id="head">
			<h1>光譜計畫</h1>
		</div>

		<div class="container_12 formtable">
			<a href="introduce.php" class="menu">活動訴求</a>
			<a href="video.php" class="menu">影片分享</a>
			<a href="discuz.php" class="menu">心得分享</a>
			<a href="photo_share.php" class="menu">分享照片</a>
		</div>

		<div class="container_12 formtable">
			<form enctype="multipart/form-data" action="photo_share.php" method="POST">
				<input type="file" id="file_photo" name="file_photo" /><br>
				<div><label id="label_name">檔案名稱:</label><input type="text" id="photoname" name="photoname" placeholder="ex: photoname" /><br></div>
				<div><label id="label_description">檔案敘述:</label>
				<textarea class="form-control" name="description" id="description" placeholder="Wow!! It is amazing."></textarea></div><br>
				<!-- <img src="" id="preview_photo" hidden=true> -->
				<!-- <input type="submit" name="preview" id="preview" value="預覽" class="btn btn-default" disabled=true/> -->
				<!-- <Button name="add_column" value="" class="btn">增加上傳檔案</Button> -->
				<input type="submit" name="submit" id="submit" value="分享照片" class="btn btn-primary" disabled="false" />
			</form>
		</div>
	</body>
<html>
