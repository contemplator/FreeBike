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
		.content{
			text-align: center;
		}
		.message{
			width: 50%;
			margin: 0px auto;
			margin-top: 30px;
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
			text-align: left;
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
		.comment{
			margin-left: 10px;
			text-align: left;
		}
		.time-comment{
			font-size: 10px;
			text-align: left;
			margin-right: 5px;
			float: left;
			height: 18px;
		}
		.like-comment{
			font-size: 10px;
			text-align: left;
			height: 25px;
		}
	</style>
	<body>
		<div class="head container_12">
			<h1>光譜計畫</h1>
		</div>
		<div class="menu container_12">
			<div id="option-bar1" class="block btn btn-info">
				<h2>熱門訊息<h2>
			</div>
			<div id="option-bar2" class="block btn btn-info">
				<h2>影片版</h2>
			</div>
			<div id="option-bar3" class="block btn btn-success">
				<h2>討論版</h2>
			</div>
		</div>
		<div class="content container_12">
			<div class="form">
				<div class="title">
				</div>
				<div class="post">
				</div>
			</div>
			<div class="message">
				<div class="basic">
					<div class="avatar">
						<img src="img/big.jpg"/>
					</div>
					<div class="info">
						<p class="name">Leo Lin</p>
						<p class="time">2014/04/31 12:09:21</p>
					</div>
				</div>
				<div class="article">
					因為臺北轉轍器異常的關係，本列車在此臨時停車。
				</div>
				<div class="sharephoto">
					<img src="img/test.jpg">
				</div>
				<div class="tools">
					<span name="like" value"like" id="btn-like">like</span>
					<span name="comment" value="comment" id="btn-comment">comment</span>
				</div>
				<div class="description">
					<p> 20 people like this.</p> 
				</div>
				<div class="comments">
					<div class="avatar2">
						<img src="img/big.jpg"/>
					</div>
					<div class="guest-name">
						<p>Leo Lin</p>
					</div>
					<div class="comment">
						肉淋，用淋的看來肉真的很多!
					</div>
					<div class="time-comment">
						<p>May 5</p>
					</div>
					<div class="like-comment">
						<p>Like</p>
					</div>
				</div>
			</div>
		</div>
	</body>
<html>