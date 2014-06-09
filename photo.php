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
	$sql = "SELECT * FROM photo WHERE 1 ORDER BY click DESC";
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
			<a href="photo_share.php" class="menu">分享照片</a>
		</div>
		
		<div class="table">
			<table class="container_12">
				<?php 
					$count = 0;
					while($result = $db->fetch_array()){
						if($count == 5){
							$count = 0;
						}
						if($count == 0){
							echo "<tr>";
						}
				?>
					<td>
						<img class="photo" src="sharephoto/<?php echo $result['name'];?>"/>
						<p class="photo_name"><?php echo $result['name'];?></p>
						<p class="photo_description"><?php echo $result['description'];?></p>
						<p class="sharetime"><?php echo substr($result['sharetime'], 0, 10);?></p>
						<p class="click">觀看次數：<?php echo $result['click'];?></p>
					</td>
				<?php
						$count++;
						if($count == 5){
							echo "</tr>";
						}
					}
				?>
				</tr>
			</table>
		</div>
	</body>
<html>