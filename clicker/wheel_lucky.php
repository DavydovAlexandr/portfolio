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
		<i style="position: absolute; left: 35%; font-size: 500%; text-shadow: 0px 0px 10px white; user-select: none">Колесо удачи</i>
		<div id="wheel_lucky_desc"></div><div id="wheel_chance"></div>
		<div id="pit_wheel"></div>
		<div id="not_chance"><h1>Продолжить</h1></div>
		<div id="wheel_lucky">
			<div id="block_1" class="block"></div>
			<div id="block_2" class="block"></div>
			<div id="block_3" class="block"></div>
			<div id="block_4" class="block"></div>
			<div id="block_5" class="block"></div>
			<div id="block_6" class="block"></div>
			<div id="block_7" class="block"></div>
			<div id="block_8" class="block"></div>
			<div id="block_9" class="block"></div>
			<div id="block_10" class="block"></div>
			<div id="block_11" class="block"></div>
			<div id="block_12" class="block"></div>
		</div>

		<style type="text/css">

			#pit_wheel {
				display: block;
				position: absolute;
				top: 15%;
				left: 47.55%;
				width: 0px;
				height: 0px;
				border-left: 30px solid transparent;
				border-right: 30px solid transparent;
				border-top: 30px solid rgb(0,0,0,0.5);
			}

			#wheel_lucky {
				display: block;
				position: absolute;
				top: 20%;
				left: 35%;
				width: 400px;
				height: 400px;
				border: 1px solid black;
				border-radius: 50%;
				background-image: url("../clicker/media/images/background.jpg");
				cursor: pointer;
				box-shadow: 0px 0px 10px black;
			}
			#wheel_lucky_desc {
				position: absolute;
				display: block;
				top: 20%;
				left: 3%;
				width: 25%;
				border: 1px solid black;
				border-radius: 5px;
				padding: 1%;
				background: rgb(0,0,0,0.2);
			}

			#wheel_chance {
				position: absolute;
				display: block;
				top: 50%;
				left: 3%;
				border: 1px solid black;
				border-radius: 5px;
				padding: 1%;
				background: rgb(0,0,0,0.2);
			}

			#not_chance {
				position: absolute;
				display: none;
				top: 45%;
				right: 10%;
				border: 1px solid black;
				border-radius: 5px;
				background: rgb(0,0,0,0.2);
				cursor: pointer;
				transform: scale(1);
				animation: nch 1s linear infinite;
			}
			@keyframes nch {
				0% {transform: scale(1);box-shadow: 0px 0px 0px white}
				50% {transform: scale(1.1);box-shadow: 0px 0px 20px white}
				100% {transform: scale(1);box-shadow: 0px 0px 0px white}
			}

			.block {
				display: block;
				position: absolute;
				width: 15%;
				height: 15%;
				border: 1px solid black;
				border-radius: 40%;
				text-align: center;
				text-shadow: 0px 0px 5px white;
				user-select: none;
			}
			
			#block_1 {
				top: 1%;
				left: 42.5%;
				background-image: url("../clicker/media/images/brilliant.png");
				background-size: 110%;
				background-position-x: -4px;
			}

			#block_2 {
				top: 6.7%;
				left: 63.2%;
				transform: rotate(30deg);
				background: rgb(0,0,0,0.5);
				background-image: url("../clicker/media/images/money.png");
				background-size: 110%;
			}

			#block_3 {
				top: 21.7%;
				left: 78.1%;
				transform: rotate(60deg);
				background-image: url("../clicker/media/images/dealer.jpg");
				background-size: 100%;
			}

			#block_4 {
				top: 42.5%;
				left: 83.5%;
				transform: rotate(90deg);
				background-image: url("../clicker/media/images/brilliant.png");
				background-size: 110%;
				background-position-x: -4px;
			}

			#block_5 {
				top: 62.8%;
				left: 78.1%;
				transform: rotate(120deg);
				background: rgb(0,0,0,0.5);
				background-image: url("../clicker/media/images/money.png");
				background-size: 110%;
			}

			#block_6 {
				top: 77.8%;
				left: 63.2%;
				transform: rotate(150deg);
				background-image: url("../clicker/media/images/worker.jpg");
				background-size: 100%;
			}

			#block_7 {
				top: 83.5%;
				left: 42.5%;
				transform: rotate(180deg);
				background-image: url("../clicker/media/images/brilliant.png");
				background-size: 110%;
				background-position-x: -4px;
			}

			#block_8 {
				top: 77.9%;
				left: 21.8%;
				transform: rotate(210deg);
				background: rgb(0,0,0,0.5);
				background-image: url("../clicker/media/images/money.png");
				background-size: 110%;
			}

			#block_9 {
				top: 62.9%;
				left: 6.5%;
				transform: rotate(240deg);
				background-image: url("../clicker/media/images/ucher.jpg");
				background-size: 100%;
			}

			#block_10 {
				top: 42.5%;
				left: 1%;
				transform: rotate(270deg);
				background-image: url("../clicker/media/images/brilliant.png");
				background-size: 110%;
				background-position-x: -4px;
			}

			#block_11 {
				top: 21.7%;
				left: 6.5%;
				transform: rotate(300deg);
				background: rgb(0,0,0,0.5);
				background-image: url("../clicker/media/images/money.png");
				background-size: 110%;
			}

			#block_12 {
				top: 6.7%;
				left: 21.8%;
				transform: rotate(330deg);
				background: rgb(0,0,0,0.5);
				background-image: url("../clicker/media/images/star.png");
				background-size: 100%;
				background-repeat: no-repeat;
			}
			.wheel_anim {
				animation: anim 1s linear infinite;
			}
			@keyframes anim {
				0% {width: 15%; height: 15%; box-shadow: 0px 0px 0px white}
				50% {width: 16%; height: 16%; box-shadow: 0px 0px 20px white}
				100% {width: 15%; height: 15%; box-shadow: 0px 0px 0px white}
			}
		</style>

		<script type="text/javascript">
			diff_quest = Number(localStorage.getItem('diff_quest'));
			document.getElementById('wheel_lucky_desc').innerHTML = "<h2>Вы набрали "+diff_quest+" дополнительных очка славы и соответственно у Вас "+(diff_quest+1)+" попытки испытать свою удачу !</h2>";
			wheel_chance = diff_quest+1;
			document.getElementById('wheel_chance').innerHTML = "<h2>Осталось: "+wheel_chance+"</h2>";

			level_prize = Number(localStorage.getItem('level_game'))-1;
			document.getElementById('block_1').innerHTML = "<h2>"+(level_prize*2)+"</h2>";
			document.getElementById('block_2').innerHTML = "<h2>"+(level_prize*1000)+"</h2>";
			document.getElementById('block_3').innerHTML = "<h2>"+(level_prize*2)+"</h2>";
			document.getElementById('block_4').innerHTML = "<h2>"+(level_prize*4)+"</h2>";
			document.getElementById('block_5').innerHTML = "<h2>"+(level_prize*250)+"</h2>";
			document.getElementById('block_6').innerHTML = "<h2>"+(level_prize*2)+"</h2>";
			document.getElementById('block_7').innerHTML = "<h2>"+(level_prize*3)+"</h2>";
			document.getElementById('block_8').innerHTML = "<h2>"+(level_prize*500)+"</h2>";
			document.getElementById('block_9').innerHTML = "<h2>"+(level_prize*2)+"</h2>";
			document.getElementById('block_10').innerHTML = "<h2>"+(level_prize*1)+"</h2>";
			document.getElementById('block_11').innerHTML = "<h2>"+(level_prize*100)+"</h2>";
			document.getElementById('block_12').innerHTML = "<h2>"+level_prize+"</h2>";

			var rotate = 360;
			var speed_wheel = 50;

			$(document).ready(function(){
				$('#wheel_lucky').click(function(){
					if((wheel_chance > 0) && (speed_wheel == 50)){wheel_chance = wheel_chance - 1; document.getElementById('wheel_chance').innerHTML = "<h2>Осталось: "+wheel_chance+"</h2>"; s = 1; wheel_speed(); timer_rand()}
					if((wheel_chance > 0) && (speed_wheel > 2000000)){wheel_chance = wheel_chance - 1; document.getElementById('wheel_chance').innerHTML = "<h2>Осталось: "+wheel_chance+"</h2>"; speed_wheel = 50; s = 1; wheel_speed(); timer_rand()}
				});
			});

			$(document).ready(function(){
				$('#not_chance').click(function(){
					document.location.href='index.php';
				});
			});

			function timer_rand(){
				function randomInteger(min, max) {
				    var rand = min + Math.random() * (max + 1 - min);
					rand = Math.floor(rand);
					return rand;
				}
				timer_wheel = randomInteger(5, 10);
				timer_wheel_func();
			}

			function timer_wheel_func(){
				setTimeout(function(){
					timer_wheel = timer_wheel-1;
					if (timer_wheel == 0) {s = 0; wheel_speed()}
					setTimeout(timer_wheel_func,1000);
				},0);
			}

			function wheel_speed(){
				setTimeout(function(){
					wheel();
					if(s == 1){speed_wheel = speed_wheel-1; if(speed_wheel < 0) {speed_wheel = 0}}
					if(s == 0){
						speed_wheel = speed_wheel+1;
						if(speed_wheel > 50) {speed_wheel = speed_wheel+10}
						if(speed_wheel > 500) {speed_wheel = speed_wheel+1000000}
						if(speed_wheel > 2000000) {wheel_lucky_result()}
					}
					setTimeout(wheel_speed, speed_wheel);
				}, 0);
			}

			function wheel(){
				setTimeout(function(){
					rotate = rotate-1;
					$('#wheel_lucky').css('transform','rotate('+rotate+'deg)');
					if(rotate == 0) {rotate = 360}
				}, 0);
			}

			$money = Number(localStorage.getItem('money'));
			brilliant = Number(localStorage.getItem('brilliant'));
			$col_dealers = Number(localStorage.getItem('col_dealers'));
			$used_dealers = Number(localStorage.getItem('used_dealers'));
			$col_workers = Number(localStorage.getItem('col_workers'));
			$used_workers = Number(localStorage.getItem('used_workers'));
			$col_uchers = Number(localStorage.getItem('col_uchers'));
			$quest_passed = Number(localStorage.getItem('quest_passed'));

			function wheel_lucky_result() {
				if((rotate <= 15 ) || (rotate >= 346)) {block = 1; brilliant = brilliant+(level_prize*2); localStorage.setItem('brilliant',brilliant)}
				if((rotate <= 345 ) && (rotate >= 316)) {block = 2; $money = $money+(level_prize*1000); localStorage.setItem('money',$money)}
				if((rotate <= 315 ) && (rotate >= 286)) {block = 3; $col_dealers = $col_dealers+(level_prize*2); localStorage.setItem('col_dealers',$col_dealers); $used_dealers = $used_dealers+(level_prize*2); localStorage.setItem('used_dealers',$used_dealers)}
				if((rotate <= 285 ) && (rotate >= 256)) {block = 4; brilliant = brilliant+(level_prize*4); localStorage.setItem('brilliant',brilliant)}
				if((rotate <= 255 ) && (rotate >= 226)) {block = 5; $money = $money+(level_prize*250); localStorage.setItem('money',$money)}
				if((rotate <= 225 ) && (rotate >= 196)) {block = 6; $col_workers = $col_workers+(level_prize*2); localStorage.setItem('col_workers',$col_workers); $used_workers = $used_workers+(level_prize*2); localStorage.setItem('used_workers',$used_workers)}
				if((rotate <= 195 ) && (rotate >= 166)) {block = 7; brilliant = brilliant+(level_prize*3); localStorage.setItem('brilliant',brilliant)}
				if((rotate <= 165 ) && (rotate >= 136)) {block = 8; $money = $money+(level_prize*500); localStorage.setItem('money',$money)}
				if((rotate <= 135 ) && (rotate >= 106)) {block = 9; $col_uchers = $col_uchers+(level_prize*2); localStorage.setItem('col_uchers',$col_uchers)}
				if((rotate <= 105 ) && (rotate >= 76)) {block = 10; brilliant = brilliant+(level_prize*1); localStorage.setItem('brilliant',brilliant)}
				if((rotate <= 75 ) && (rotate >= 46)) {block = 11; $money = $money+(level_prize*100); localStorage.setItem('money',$money)}
				if((rotate <= 45 ) && (rotate >= 16)) {block = 12; $quest_passed = $quest_passed+level_prize; localStorage.setItem('quest_passed',$quest_passed)}

				if(wheel_chance == 0) $('#not_chance').css({'display':'block'});
				$('#block_'+block).addClass("wheel_anim");
			}
			
		</script>
	</body>