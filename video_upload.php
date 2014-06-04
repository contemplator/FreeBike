<?php
	require("db_config.php");
    require("db_class.php");
    $db = new DB();
    $db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);

	$url = "asd";
	if(!is_null(@$_POST['submit'])){
		$url = $_POST['youtube_url'];
		$check_word = "watch?v=";
		if(strpos($url, $check_word) !== false){
			$offset = strpos($url, $check_word);
			$youtube_id = substr($url, $offset+8);
			if(strpos($youtube_id, "&")){
				$end = strpos($youtube_id, "&");
				$youtube_id = substr($youtube_id, 0, $end);
			}
		}else{
			echo "not contains!";
		}
	}else{
		echo "didn't sunmit";
	}

  	date_default_timezone_set("Asia/Taipei");
	$tempTime = date("Y-m-d");
	$video_insert = "INSERT INTO `freebike`.`video` (`id`, `videoUrl`, `imgUrl`, `updateDate`, `updateUser`, `popular`) VALUES (NULL, '".$youtube_id."', '".$youtube_id."', '".$tempTime."', '".$_POST[username]."', '0');";
	// echo $video_insert;
	$db->query($video_insert);

	header('Location: http://140.119.19.46/FreeBike/video.php');
	exit;
	//INSERT INTO `freebike`.`video` (`id`, `videoUrl`, `imgUrl`, `updateDate`, `updateUser`, `popular`) VALUES (NULL, 'cFaKGS-kO8c', 'cFaKGS-kO8c', '2014-06-10', 'Leo', '0');
	// if(!is_null(@$_POST['submit'])){

	// 	$uploaddir = "video/";
	//    	$uploaddir = $uploaddir . basename( $_FILES['userfile']['name']);
	   	
	//    	date_default_timezone_set("Asia/Taipei");
	// 	$tempTime = date("Y-m-d");
	// 	echo $tempTime;

	// 	$review_insert = "INSERT INTO `freebike`.`video` (`id`, `videoUrl`, `imgUrl`, `updateDate`, `updateUser`, `popular`) VALUES (NULL, '".$uploaddir."', 'http:\/\/buy.housefun.com.tw/images/Buy2/loadingBar.gif', '".$tempTime."', 'Leo', '0');";
	// 	echo $review_insert;

	//    	if(@move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir)) {
	//       	$path = "\"video/".$_FILES['userfile']['name']."\"";
	//    	}
	//    	else{
	//    		echo "ada";
	//    	}
	   	
	// 	$db->query($review_insert);
	// }
?>