<?php
	require("db_config.php");
    require("db_class.php");
    $db = new DB();
    $db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);

	date_default_timezone_set("Asia/Taipei");
	$tempTime = date("Y-m-d H:i:s");
	if(!is_null(@$_POST['submit'])){
		$review_insert = "INSERT INTO `freebike`.`review` (`id`, `user`, `posttime`, `content`, `photoUrl`, `likes`) VALUES (NULL, '".$_POST['user']."', '".$tempTime."', '".$_POST['content_review']."', '', '0');";
		// echo $review_insert;
		$db->query($review_insert);
	}

	header('Location: http://140.119.19.46/FreeBike/discuz.php');
	exit;
?>