<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>CLICKER</title>
		<meta name="keywords" content="Clicker">
		<meta name="description" content="clicker">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<link href="media/css/style.css" rel="stylesheet"/>
		<link href="media/css/style_box.css" rel="stylesheet"/>
		<link href="media/css/style_top.css" rel="stylesheet"/>
		<link href="media/css/style_bonus.css" rel="stylesheet"/>
		<script src="media/js/click.js"></script>
		<script src="media/js/functions.js"></script>
		<script src="media/js/first_enter.js"></script>
	</head>
	<?php require_once('logo.php'); ?>
	<?php require_once('start.php'); ?>
	<body>
		<div id="first_enter"></div>
		<script type="text/javascript">
			
			var all_past_time = Number(localStorage.getItem('all_time'));
			var now = new Date();
			var all_time = Math.floor(now.getTime()/1000);
			var different_time = all_time-all_past_time;
			var diff_day = Math.floor(different_time/86400);
			var diff_hours = Math.floor(different_time/3600-diff_day*24); if (diff_hours<10) {diff_hours="0"+diff_hours};
			var diff_minutes = Math.floor(different_time/60-diff_day*24*60-diff_hours*60); if (diff_minutes<10) {diff_minutes="0"+diff_minutes};
			var diff_seconds = Math.floor(different_time-diff_day*86400-diff_hours*3600-diff_minutes*60); if (diff_seconds<10) {diff_seconds="0"+diff_seconds};
			
			var trend = Number(localStorage.getItem('trend'));
			var $money = Number(localStorage.getItem('money'));
			if ($money == 0){$money = 20};
			$money = $money+different_time*trend;
			
			if(different_time > 300) {$('#start').append('<div id="different_time">Вы отсутствовали в игре '+diff_day+'д/'+diff_hours+':'+diff_minutes+':'+diff_seconds+'</div><div id="different_money">За это время продано товаров на сумму '+different_time*trend+' $'+'</div>'); $('#different_money').append('<div class="reklama" title="Нажмите, чтобы посмотреть рекламу и удвоить прибыль">&nbsp&nbspx2</div>')}

			var old_money = 0;
			
			var $level_game = Number(localStorage.getItem('level_game'));
				if ($level_game == 0) {$level_game = 1};
				if($level_game > 1){
					$('#box_timer,#box_timer_2').css('display','block');
					$('#box_timer_pause').css('display','none');
				}

			var $quest = $level_game;
			var $fail_quest = $quest;
			var $quest_passed = Number(localStorage.getItem('quest_passed'));
			var $quest_money = $level_game*10000;
			var $level_quest_money = 1;
			var $quest_end = 0;

			var $q1_lost = Number(localStorage.getItem('q1_lost')); var $q1_koeff = 1;
				if($q1_lost == 0) {$q1_lost = 10000*$level_game}
			var $q2_lost = Number(localStorage.getItem('q2_lost')); var $q2_koeff = 1;
				if($q2_lost == 0) {$q2_lost = 10000*$level_game}
			var $q3_lost = Number(localStorage.getItem('q3_lost')); var $q3_koeff = 1;
				if($q3_lost == 0) {$q3_lost = 10000*$level_game}
			var $q4_lost = Number(localStorage.getItem('q4_lost')); var $q4_koeff = 1;
				if($q4_lost == 0) {$q4_lost = 10000*$level_game}
			var $q_all = 0;

			var brilliant = Number(localStorage.getItem('brilliant'));

			var bonus_ucher_timer = Number(localStorage.getItem('bonus_ucher_timer'));
			bonus_ucher_timer = bonus_ucher_timer-different_time;
			var	speed_bonus_ucher = Number(localStorage.getItem('speed_bonus_ucher'));

			var bonus_day_timer = Number(localStorage.getItem('bonus_day_timer'));
			bonus_day_timer = bonus_day_timer-different_time;
			var bonus_day = Number(localStorage.getItem('bonus_day'));
			if (bonus_day == 0) {bonus_day = 5};
			var bonus_day_update = Number(localStorage.getItem('bonus_day_update'));
			if (bonus_day_update == 0) {bonus_day_update = 50};

			var $col_dealers = Number(localStorage.getItem('col_dealers'));
			var $used_dealers = Number(localStorage.getItem('used_dealers'));
			var $cost_dealer = Number(localStorage.getItem('cost_dealer'));
				if ($cost_dealer == 0) {$cost_dealer = 60};

			var $col_workers = Number(localStorage.getItem('col_workers'));
			var $used_workers = Number(localStorage.getItem('used_workers'));
			var $cost_worker = Number(localStorage.getItem('cost_worker'));
				if ($cost_worker == 0) {$cost_worker = 60};

			var $col_uchers = Number(localStorage.getItem('col_uchers'));
				if ($col_uchers == 0) {$col_uchers = 1};
			var $cost_ucher = Number(localStorage.getItem('cost_ucher'));
				if ($cost_ucher == 0) {$cost_ucher = 60};

			var i=0;
			var p = 1;
			var timer_speed = Number(localStorage.getItem('timer_speed'));
			if (timer_speed == 0) {timer_speed = 1000};
			
			var $timer = Number(localStorage.getItem('timer'));
			$timer = $timer-different_time*speed_bonus_ucher;
			var $level_timer = Number(localStorage.getItem('level_timer'));
				if ($level_timer == 0) {$level_timer = 1};
			var $visible_object = Number(localStorage.getItem('visible_object'));
			$(document).ready(function(){
			if ($visible_object > 2) {
				for (i = 3; i <= $visible_object; i++) {
				  $.ajax({url: 'select.php',type: 'POST',dataType: 'html',data: {send:i},success: function(data){$lt = '#'+data+'_section'; $($lt).css({'display':'block'}); var coords_unvisible = ($('#box_'+data).offset().top); $('#unvisible').offset({top:coords_unvisible});}});
				}
			}
			});
		</script>

<?php
	require_once('config.php');
		$query = "SELECT object_name FROM objects ORDER BY object_id";
			$cat=mysql_query($query);
				if(!$cat){
					exit($query);
				}
			while($obj=mysql_fetch_array($cat)){
				$object_name = $obj['object_name'];
				$object_perem = "$".$object_name;
	?>
		<script type="text/javascript">
			<?php echo $object_perem?> =0;
			$level_<?php echo $object_name?> = Number(localStorage.getItem('level_<?php echo $object_name?>'));
			$next_level_<?php echo $object_name?> =20;
			$deal_<?php echo $object_name?> = Number(localStorage.getItem('deal_<?php echo $object_name?>'));
			$work_<?php echo $object_name?> = Number(localStorage.getItem('work_<?php echo $object_name?>'));
			diff_perem = Number(localStorage.getItem('<?php echo $object_name?>'));
			diff_perem = diff_perem+different_time*($level_<?php echo $object_name?> + ($work_<?php echo $object_name?>*$level_<?php echo $object_name?>) - $deal_<?php echo $object_name?>);
			localStorage.setItem('<?php echo $object_name?>',diff_perem);
		</script>
<?php } ?>

		<script type="text/javascript">
			setInterval(function() {
			var now = new Date();
			var all_time = Math.floor(now.getTime()/1000);
			localStorage.setItem('all_time',all_time);
			
			},1000);
		</script>

		<script type="text/javascript">
			$.ajax({url: 'select2.php',type: 'POST',dataType: 'html',data: {send:all_time},success: function(data){}});
		</script>