<div id="bonuses">
	<div id="bonus_brilliant"></div>
	<div id="bonus_time"></div>
	<div id="bonus_offline"></div>
	<div id="bonus_dealer"></div>
	<div id="bonus_worker"></div>
	<div id="bonus_ucher"></div>
	<div id="bonus_other"></div>
	<div id="bonus_other_2"></div>
</div>
<div id="close_bonuses">X</div>
<div id="back_to_bonuses"><</div>

<!-- ----------------------------------------BRILLIANT---------------------------------------- -->

<div id="bonus_brilliant_window">
	<div id="bonus_day_timer"></div>
	<div id="bonus_brilliant_day" style="cursor: default; box-shadow: inset 0px 0px 20px red"></div><div class="desc" style="top: 22%"><h5 id="d1"></h5></div>
	<script>document.getElementById('bonus_brilliant_day').innerHTML = "<h1>"+bonus_day+"</h1>"</script>
	<div id="bonus_day_update"></div><div class="desc" style="top: 31.5%"><h5 id="bdu"></h5></div>
	<script>document.getElementById('bdu').innerHTML = "Количество ежедневных бриллиантов удвоится"</script>
	<script>document.getElementById('bonus_day_update').innerHTML = "<h1>"+bonus_day_update+"</h1>"</script>
</div>

<script type="text/javascript">
		setInterval(function() {
			bonus_day_timer = bonus_day_timer-1;
			if(bonus_day_timer < 0) {bonus_day_timer = 0};
			localStorage.setItem('bonus_day_timer',bonus_day_timer);
			var h = Math.floor(bonus_day_timer/3600); if (h<10) {h="0"+h};
			var m = Math.floor(bonus_day_timer/60-h*60); if (m<10) {m="0"+m};
			var s = Math.floor(bonus_day_timer-h*3600-m*60); if (s<10) {s="0"+s};
			document.getElementById('d1').innerHTML = "<h3>Забрать через "+h+":"+m+":"+s+"</h3>";
			if (bonus_day_timer == 0){$('#d1').css('display','none'); $('#bonus_brilliant_day').css({'cursor':'pointer'}); $('#brilliant,#bonus_brilliant,#bonus_brilliant_day').addClass('mig_green')};
		},1000);
	</script>

<!-- ------------------------------------------UCHER------------------------------------------ -->

<div id="bonus_ucher_window">
	<div id="bonus_ucher_timer"></div>
	<div id="bonus_ucher_15min"><h1>5</h1></div><div class="desc" style="top: 21%"><h5 id="u15"></h5></div>
	<script>document.getElementById('u15').innerHTML = "Скорость исследования x"+speed_bonus_ucher+" на 15 мин"</script>
	<div id="bonus_ucher_30min"><h1>8</h1></div><div class="desc" style="top: 33%"><h5 id="u30"></h5></div>
	<script>document.getElementById('u30').innerHTML = "Скорость исследования x"+speed_bonus_ucher+" на 30 мин"</script>
	<div id="bonus_ucher_1hour"><h1>14</h1></div><div class="desc" style="top: 45%"><h5 id="u1"></h5></div>
	<script>document.getElementById('u1').innerHTML = "Скорость исследования x"+speed_bonus_ucher+" на 1 час"</script>
	<div id="bonus_ucher_6hour"><h1>70</h1></div><div class="desc_2" style="top: 21%"><h5 id="u6"></h5></div>
	<script>document.getElementById('u6').innerHTML = "Скорость исследования x"+speed_bonus_ucher+" на 6 часов"</script>
	<div id="bonus_ucher_1day"><h1>200</h1></div><div class="desc_2" style="top: 33%"><h5 id="u1d"></h5></div>
	<script>document.getElementById('u1d').innerHTML = "Скорость исследования x"+speed_bonus_ucher+" на 1 день"</script>
	<div id="update_bonus_ucher"><h1>500</h1></div><div class="desc_2" style="top: 45%"><h5 id="uup"></h5></div>
	<script>document.getElementById('uup').innerHTML = "Улучшение бонуса x"+(speed_bonus_ucher+1)+" (постоянно)"</script>

	<script type="text/javascript">
		setInterval(function() {
			bonus_ucher_timer = bonus_ucher_timer-1;
			if(bonus_ucher_timer < 0) {bonus_ucher_timer = 0};
			localStorage.setItem('bonus_ucher_timer',bonus_ucher_timer);
			var d = Math.floor(bonus_ucher_timer/86400);
			var h = Math.floor(bonus_ucher_timer/3600-d*24); if (h<10) {h="0"+h};
			var m = Math.floor(bonus_ucher_timer/60-d*24*60-h*60); if (m<10) {m="0"+m};
			var s = Math.floor(bonus_ucher_timer-d*86400-h*3600-m*60); if (s<10) {s="0"+s};
			if(bonus_ucher_timer >= 86400) {document.getElementById('bonus_ucher_timer').innerHTML = "<h1>"+d+"д/"+h+":"+m+":"+s+"</h1>"} else {
			document.getElementById('bonus_ucher_timer').innerHTML = "<h1>"+h+":"+m+":"+s+"</h1>"};
			if (bonus_ucher_timer == 0){timer_speed = 1000; localStorage.setItem('timer_speed',timer_speed); $('#bonus_ucher_timer').css('display','none')};
		},1000);
	</script>
</div>