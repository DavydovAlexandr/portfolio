<div id="start"><span id="name_game">C L I C K E R</span></div>
<div id="close_video">&nbspX</div>

<style type="text/css">
	
#start {
	display: block;
	position: absolute;
	top: 0%;
	left: 0%;
	width: 100%;
	height: 100%;
	background-image: url("media/images/background.jpg");
	z-index: 9000;
}

#name_game {
	display: block;
	position: absolute;
	top: 30%;
	left: 15%;
	font-size: 1000%;
	text-shadow: 0px 0px 0px gold;
	cursor: pointer;
	user-select: none;
	z-index: 9000;
	animation: namegame 0.5s infinite;
}

@keyframes namegame {
	0% {font-size: 1000%; text-shadow: 0px 0px 0px gold}
	50% {font-size: 1010%; text-shadow: 0px 0px 100px gold}
	100% {font-size: 1000%; text-shadow: 0px 0px 0px gold}
}

#different_time {
	display: block;
	position: absolute;
	top: 60%;
	left: 15%;
	font-size: 200%;
	text-shadow: 0px 0px 5px gold;
	box-shadow: 0px 0px 10px black, inset 0px 0px 10px gold;
	border: 1px solid black;
	border-radius: 5px;
	background: rgb(0,0,0,0.3);
	user-select: none;
	z-index: 9000;
}

#different_money {
	display: block;
	position: absolute;
	top: 70%;
	left: 15%;
	font-size: 200%;
	text-shadow: 0px 0px 5px gold;
	box-shadow: 0px 0px 10px black, inset 0px 0px 10px gold;
	border: 1px solid black;
	border-radius: 5px;
	background: rgb(0,0,0,0.3);
	user-select: none;
	z-index: 9000;
}

</style>

<script type="text/javascript">
		$('#name_game').click(function(){
			$('#start').animate({opacity:0},1000,function(){$('#start').css({'display':'none'});});
		});
</script>