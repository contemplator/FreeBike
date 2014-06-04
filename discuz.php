<?php
	require("db_config.php");
    require("db_class.php");
    $db = new DB();
    $db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
	$sql = "SELECT * FROM review WHERE 1 ORDER BY posttime DESC ";
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
		.content{
			text-align: center;
			width: 40%;
		}
		.message{
			width: 100%;
			margin: 0px auto;
			margin-top: 20px;
			margin-bottom: 10px;
			border-radius: 10px;
			border-width: 2px;
			background-color: #ffffff;
		}
		.avatar{
			height: 45px;
			width: 45px;
			float: left;
			margin: 10px;
		}
		.info{
			position: relative;
			top: 10px;
			text-align: left;
		}
		.name{
			font-size: 15px;
			margin-bottom: -5px;
		}
		.time{
			font-size: 20px;
		}
		.article{
			text-align: left;
			margin-left: 10px;
		}
		.sharephoto{
			text-align: center;
			margin-top: 10px;
			margin-bottom: 10px;
			width: 99%;
		}
		.tools{
			background: #dddddd;
			text-align: left;
			padding: 1px;
		}
		#btn-like{
			color: #8080a4;
			margin-left: 10px;
			margin-right: 5px;
		}
		#btn-like:hover{
			cursor: pointer;
		}
		#btn-comment{
			color: #8080a4;
			margin-left: 5px;
		}
		#btn-comment{
			cursor: pointer;
		}
		.description{
			margin-left: 10px;
			text-align: left;
		}
		.comments{
			margin-bottom: 10px;
		}
		.avatar2{
			height: 38px;
			width: 38px;
			float: left;
			margin-left: 10px;
			margin-right: 10px;
		}
		.guest-name{
			font-size: 14px;
			float: left;
			margin-right: 10px;
			height: 10px;
		}
		.txt_comment_user{
			width: 20%;
		}
		.txt_comment{
			width: 60%;
		}
		.comment{
			margin-left: 10px;
			margin-top: 5px;
			text-align: left;
		}
		.comment-info{
			font-size: 10px;
			text-align: left;
			margin-right: 5px;
			height: 24px;
		}
		#textarea{
			width: 97%;
			height: 50px;
			resize: none;
			overflow: hidden;
		}
		#submit{
			text-align: right;
			margin-top: 5px;
		}
		.form{
			text-align: left;
			background-color: #ffffff;
			padding: 10px;
			border-radius: 5px;
		}
		label{
			float: left;
			font-weight: bold;
			margin: 10px;
			margin-top: 5px;
			font-size: 16px;
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
		</div>
		<div class="content container_12">
			<div class="form">
				<form class="form-horizontal" action="discuz_post.php" method="post">
					<label for="user">Nickname</label>
					<input type="text" name="user" placeholder="type your nickname">
					<textarea class="form-control" id="textarea" name="content_review" placeholder="What's on your mind?"></textarea>
					<div id="submit">
						<input type="submit" name="submit" value="submit" class="btn btn-primary">
					</div>
				</form>
			</div>

			
				<!-- basic infomation -->
			<?php while($result = $db->fetch_array()){?>
			<div class="message">
				<div class="basic">
					<div class="avatar">
						<img src="img/big.jpg"/>
					</div>
					<div class="info">
						<p class="name"><?php echo $result['user'];?></p>
						<p class="time"><?php echo $result['posttime'];?></p>
					</div>
				</div>
				<div class="article">
					<?php echo $result['content'];?>
				</div>

				<!-- photo -->
				<?php if($result['photoUrl']){ ?>
				<div class="sharephoto">
					<img src="img/<?php echo $result['photoUrl'];?>">
				</div>
				<!-- photo -->

				<?php } ?>
				<div class="tools">
					<!-- <span name="like" value"like" id="btn-like">like</span> -->
					<form class="comment" action="comment_post.php" method="POST">
						<input type="hidden" name="discuz_id" value="<?php echo $result['id']; ?>"/>
						<input type="text" class="txt_comment_user" name="user_comment" placeholder="Guest" />
						<input type="text" class="txt_comment" name="comment" placeholder="給個回應吧!" />
						<input type="submit" class="btn btn-default btn_comment" name="submit_comment" value="發送" />
					</form>
					<!-- <span name="comment" value="comment" id="btn-comment">comment</span> -->
				</div>

				<!-- likes -->
				<?php if($result['likes'] > 0){ ?>
				<!-- <div class="description">
					<p> <?php echo $result['likes'];?> people like this.</p> 
				</div> -->
				<?php } ?>

				<!-- comments -->
				<?php
					$db2 = new DB();
				    $db2->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
					$sql_comment = "SELECT * FROM `comment` WHERE `d_id` = ".$result['id'];
					$db2->query($sql_comment);
					while($result_comment = $db2->fetch_array()){
				?>
				<div class="comments">
					<div class="avatar2">
						<img src="img/big.jpg"/>
					</div>
					<div class="guest-name">
						<p><?php echo $result_comment['user'];?></p>
					</div>
					<div class="comment">
						<?php echo $result_comment['content'];?>
					</div>
					<div class="comment-info">
						<span class="comment-time"><?php echo $result_comment['comTime'];?></span>
						<!-- <span class="comment-like"><?php echo $result_comment['likes'];?> like it.</span> -->
						<!-- <span class="dot">。</span> -->
						<!-- <span class="comment-like">like</span> -->
					</div>
				</div>
				<?php } ?> 
				<!-- comments -->

			</div>
			<?php } ?>
		</div>
	</body>
<html>