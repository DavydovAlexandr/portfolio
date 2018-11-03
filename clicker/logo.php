<div id="logo"></div>
<div id="games">G A M E S</div>

<style type="text/css">
#logo {
	display: block;
	position: absolute;
	top: 0%;
	left: 0%;
	width: 100%;
	height: 100%;
	background: black;
	box-shadow: inset 0px 0px 10px aqua;
	z-index: 10000;
}

.style {
	display: block;
	position: absolute;
	left: 10%;
	top: 30%;
	width: 10%;
	height: 10%;
	font-size: 1000%;
	text-shadow: 0px 0px 10px aqua;
	cursor: default;
	opacity: 0;
	user-select: none;
	z-index: 10000;
}

#d {
	left: 25%;
	animation: d 12s ease-out;
}
#a {
	left: 32%;
	animation: a 12s ease-out;
}
#v {
	left: 37%;
	animation: v 12s ease-out;
}
#y {
	left: 45%;
	animation: y 12s ease-out;
}
#d2 {
	left: 53%;
	animation: d2 12s ease-out;
}
#o {
	left: 61%;
	animation: o 12s ease-out;
}
#v2 {
	left: 68%;
	animation: v2 12s ease-out;
}

@keyframes d {
	0% {font-size: 10000%; left: 10%; top: -80%}
	40% {font-size: 1000%; left: 45%; top: 30%}
	50% {left: 45%}
	70% {left: 25%}
	75% {color: black; text-shadow: 0px 0px 10px aqua}
	80% {color: aqua; text-shadow: 0px 0px 100px aqua}
	85% {color: black; text-shadow: 0px 0px 10px aqua}
	95% {opacity: 1}
	100% {opacity: 0}
}

@keyframes a {
	0% {font-size: 10000%; left: 10%; top: -80%}
	40% {font-size: 1000%; left: 45%; top: 30%}
	50% {left: 45%}
	70% {left: 32%}
	75% {color: black; text-shadow: 0px 0px 10px aqua}
	80% {color: aqua; text-shadow: 0px 0px 100px aqua}
	85% {color: black; text-shadow: 0px 0px 10px aqua}
	95% {opacity: 1}
	100% {opacity: 0}
}

@keyframes v {
	0% {font-size: 10000%; left: 10%; top: -80%}
	40% {font-size: 1000%; left: 45%; top: 30%}
	50% {left: 45%}
	70% {left: 37%}
	75% {color: black; text-shadow: 0px 0px 10px aqua}
	80% {color: aqua; text-shadow: 0px 0px 100px aqua}
	85% {color: black; text-shadow: 0px 0px 10px aqua}
	95% {opacity: 1}
	100% {opacity: 0}
}

@keyframes y {
	0% {font-size: 10000%; left: 10%; top: -80%}
	40% {font-size: 1000%; left: 45%; top: 30%}
	50% {left: 45%}
	70% {left: 45%}
	75% {color: black; text-shadow: 0px 0px 10px aqua}
	80% {color: aqua; text-shadow: 0px 0px 100px aqua}
	85% {color: black; text-shadow: 0px 0px 10px aqua}
	95% {opacity: 1}
	100% {opacity: 0}
}

@keyframes d2 {
	0% {font-size: 10000%; left: 10%; top: -80%}
	40% {font-size: 1000%; left: 45%; top: 30%}
	50% {left: 45%}
	70% {left: 53%}
	75% {color: black; text-shadow: 0px 0px 10px aqua}
	80% {color: aqua; text-shadow: 0px 0px 100px aqua}
	85% {color: black; text-shadow: 0px 0px 10px aqua}
	95% {opacity: 1}
	100% {opacity: 0}
}

@keyframes o {
	0% {font-size: 10000%; left: 10%; top: -80%}
	40% {font-size: 1000%; left: 45%; top: 30%}
	50% {left: 45%}
	70% {left: 61%}
	75% {color: black; text-shadow: 0px 0px 10px aqua}
	80% {color: aqua; text-shadow: 0px 0px 100px aqua}
	85% {color: black; text-shadow: 0px 0px 10px aqua}
	95% {opacity: 1}
	100% {opacity: 0}
}

@keyframes v2 {
	0% {font-size: 10000%; left: 10%; top: -80%}
	40% {font-size: 1000%; left: 45%; top: 30%}
	50% {left: 45%}
	70% {left: 68%}
	75% {color: black; text-shadow: 0px 0px 10px aqua}
	80% {color: aqua; text-shadow: 0px 0px 100px aqua}
	85% {color: black; text-shadow: 0px 0px 10px aqua}
	95% {opacity: 1}
	100% {opacity: 0}
}

#games {
	display: block;
	position: absolute;
	top: 40%;
	left: 38%;
	font-size: 400%;
	text-shadow: 0px 0px 10px yellow;
	z-index: 10000;
	opacity: 0;
	cursor: default;
	animation: games 12s ease-out;
}
@keyframes games {
	0% {opacity: 0; text-shadow: 0px 0px 0px yellow}
	80% {opacity: 0}
	85% {opacity: 1; text-shadow: 0px 0px 100px yellow; color: yellow}
	90% {text-shadow: 0px 0px 10px yellow; color: black}
	95% {opacity: 1}
	100% {opacity: 0}
}

</style>

<script type="text/javascript">
	
$(window).load(function(){
$('#logo').append('<div id="d" class="style">D</div><div id="a" class="style">A</div><div id="v" class="style">V</div><div id="y" class="style">Y</div><div id="d2" class="style">D</div><div id="o" class="style">O</div><div id="v2" class="style">V</div>');
});

$(document).ready(function(){
	$('#logo,#games').click(function(){
		$('#logo,#games').animate({opacity:0},1000,function(){$('#logo,#games,#d,#a,#v,#y,#d2,#o,#v2').css({'display':'none'}); $('#start').css({'display':'block'});});
	});
});

setTimeout(function() {
	$('#logo').animate({opacity:0}, 1000,function(){$('#logo').css({'display':'none'})});
},13000);
</script>