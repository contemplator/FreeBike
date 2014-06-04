<?php
	require("db_config.php");
    require("db_class.php");
    // if($_SESSION['account'] == "johogo"){
    // 	$account = 1;
    // }else{
    // 	$account = $_SESSION['account'];
    // }
    $db = new DB();
    $db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
	$sql = "SELECT * FROM video WHERE 1 ORDER BY popular DESC";
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
		.iframe{
			margin-top: 20px;
			margin-bottom: 20px;
			text-align: center;
		}
		iframe{
			width: 850px;
			height: 480px;
		}
		table{
			margin: 0px auto;
			text-align: center;
		}
		td{
			width: 30%;
		}
		a.link{
			float: left;
			margin: 10px; 
		}
		p{
			margin: 10px;
		}
		p.update-uset{
			color: #999999;
		}
		p.times{
			color: #999999;
		}
		tr:nth-child(even){
			background-color: #dddddd;
		}
		a.upload{
			margin-right: 0px;
			text-align: right;
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
			<a class="upload" href="upload.php">上傳檔案</a>
		</div>
		<div class="iframe container_12">
			<iframe name="frame" frameborder="0" src="http://www.youtube.com/embed/lz0tYXzkOiI"></iframe>
		</div>
		<div class="table">
			<table class="container_12">
				<?php 
					$count = 0;
					while($result = $db->fetch_array()){
						if($count == 3){
							$count = 0;
						}
						if($count == 0){
							echo "<tr>";
						}
				?>
					<td>
						<a href="https://www.youtube.com/v/<?php echo $result['videoUrl'];?>&autoplay=1" target="frame" class="link"><img src="https://i1.ytimg.com/vi/<?php echo $result['imgUrl'];?>/default.jpg"/></a>
						<p class="update-time"><?php echo $result['updateDate'];?></p>
						<p class="update-uset"><?php echo $result['updateUser'];?></p>
						<p class="times">觀看次數：<?php echo $result['popular'];?></p>
					</td>
				<?php
						$count++;
						if($count == 3){
							echo "</tr>";
						}
					}
				?>
				</tr>
			</table>
		</div>
	</body>
<html>