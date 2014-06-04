<?php
	require("db_config.php");
    require("db_class.php");
    $db = new DB();
    $db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);

	date_default_timezone_set("Asia/Taipei");
	$tempTime = date("Y-m-d H:i:s");
	if(!is_null(@$_POST['submit_comment'])){
		if(!$_POST['user_comment'] || trim($_POST['user_comment']) == ""){
			$user = "Guest";
		}else{
			$user = $_POST['user_comment'];
		}
		// echo $user;
		$comment_insert = "INSERT INTO `freebike`.`comment` (`id`, `d_id`, `user`, `content`, `comTime`, `likes`) VALUES (NULL, '".$_POST['discuz_id']."', '".$user."', '".$_POST['comment']."', '".$tempTime."', '0');";
		// echo $comment_insert;
		$db->query($comment_insert);
	}
	header('Location: http://140.119.19.46/FreeBike/discuz.php');
	exit;
?>