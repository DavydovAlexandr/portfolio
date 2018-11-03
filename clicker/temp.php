<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>CLICKER</title>
		<meta name="keywords" content="Clicker">
		<meta name="description" content="clicker">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<link href="media/css/style.css" rel="stylesheet"/>
		<link href="media/css/style_box.css" rel="stylesheet"/>
		<link href="media/css/style_top.css" rel="stylesheet"/>
		<script src="media/js/click.js"></script>
		
	</head>
	<body>

		<div class="container">
		    <div class="back side"></div>
		    <div class="left side"></div>
		    <div class="right side"></div>
		    <div class="top side"></div>
		    <div class="bottom side"></div>
		    <div class="front side"></div>
		</div>

		<style type="text/css">

		body {
			width: 100%;
			height: 100%;
			perspective: 1000px;
			perspective-origin: center -5em;
		}

		.side,.container {
			width: 10em;
			height: 10em;
		}

		.container {
			position: absolute;
			top: 40%;
			left: 40%;
        	transform-style: preserve-3d;
        	animation: rotate 5s infinite linear;
		}
		@keyframes rotate {
  			100% {transform: rotateY(360deg)}
		}

		.side {
			position: absolute;
			width: 10em;
			height: 10em;
			opacity: .7;
		}

		.back {
			transform: translateZ(-5em);
			background-image: url("../clicker/media/images/money.png");
			background-size: 100%;
			background-repeat: no-repeat;
			opacity: 1;
		}

		.left {
			transform: translateX(-5em) rotateY(90deg);
			background-image: url("../clicker/media/images/money.png");
			background-size: 100%;
			background-repeat: no-repeat;
			opacity: 1;
		}

		.right {
			transform: translateX(5em) rotateY(90deg);
			background-image: url("../clicker/media/images/money.png");
			background-size: 100%;
			background-repeat: no-repeat;
			opacity: 1;
		}

		.top {
			transform: translateY(-5em) rotateX(90deg);
			background: yellow;
		}

		.bottom {
			transform: translateY(5em) rotateX(90deg);
			background: aqua;
		}

		.front {
			transform: translateZ(5em);
			background-image: url("../clicker/media/images/money.png");
			background-size: 100%;
			background-repeat: no-repeat;
			opacity: 1;
		}

		</style>

	</body>