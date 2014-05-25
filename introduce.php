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
		.content-bg{
			text-align: center;
			margin-top: 10px;
			margin-bottom: 10px;
		}
		.content{
			background-color: rgb(255,255,255);
			border-radius: 15px;
		}
		#mascot{
			margin-top: 10px;
			margin-bottom: 10px;
		}
		article{
			text-align: left;
			margin-left: 20px;
			margin-right: 20px;
			margin-top: -10px;
			margin-bottom: 20px;
		}
		hr{
			border-top: 1px dashed #0066CC;
			margin-left: 20px;
			margin-right: 20px;
		}
		h3{
			color: rgb(110,110,110);
			text-align: left;
			margin-left: 30px;
			margin-bottom: -2px;
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
		<div class="content-bg">
			<div class="container_12 content">
				<img src="resource/mascot.png" id="mascot">
				<h3>吉祥物介紹</h3>
				<hr>
				<article>呱呱超人是在地球日出生的SUPER青蛙，牠的任務就是不要讓地球上有任何浪費電的情況發生。呱呱超人這天又騎著牠的單車巡視地球，遠遠的，牠突然發現政大的同學在離開教室後沒有關燈，發現又有地球人浪費電的牠，匆匆的趕到了政大。<br>呱呱超人在關燈以後，為了教導政大的同學節能減碳，決定化身為手機架，並附在政大同學最常騎乘的Freebike上，告訴同學只要騎腳踏車，就能讓騎腳踏車時的動能轉換為電能，讓手機充電，並以此行動教大家能源的可貴，期許政大同學能夠節能減碳。</article>

				<h3>行動訴求</h3>
				<hr>
				<article>本裝置以「節能減碳」的理念進行設計與開發，希望能結合本校的Freebike，藉由主題性的概念與裝置，讓使用者在騎乘Freebike時，了解到能源的可貴。除了手機充電的概念訴求，並以輪胎上的LED圖案，以圖像化的概念更加深大家印象，以科技概念達到此訴求。<br>呱呱超人在關燈以後，為了教導政大的同學節能減碳，決定化身為手機架，並附在政大同學最常騎乘的Freebike上，告訴同學只要騎腳踏車，就能讓騎腳踏車時的動能轉換為電能，讓手機充電，並以此行動教大家能源的可貴，期許政大同學能夠節能減碳。</article>
			</div>
		</div>
	</body>
<html>