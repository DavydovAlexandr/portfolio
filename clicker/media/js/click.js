$(document).on('mouseover', 'div', function(e) {
	v = $(e.target).attr('id');
	$('html').keydown(function(ev){
		if (ev.keyCode == 32) {
			v1 = Number(localStorage.getItem(v.slice(4)));
			v1 = v1+1;
			document.getElementById(v.slice(4)).innerHTML = "<b>"+v1+"&nbsp"+"</b>";
			localStorage.setItem(v.slice(4),v1);
		}
	});
});

$(document).ready(function(){
	$('.reklama').click(function(){
		$('#name_game,#different_time,#different_money').css({'display':'none'});
		$('#start').append('<video id="video" autoplay="autoplay"> <source src="http://localhost/clicker/media/video.mp4"></video>');
		$('#start').append('<div id="remaining_video"></div>'); video();
	});
});

function video(){
	time_video = 10;
	var video = setInterval(function() {
		time_video = time_video-1;
		document.getElementById('remaining_video').innerHTML = "<h5>Закрыть через "+time_video+"</h5>";
		if(time_video == 0) {$('#remaining_video').css({'display':'none'}); $('#close_video').css({'display':'block'}); clearInterval(video)}
	},1000);
};

$(document).ready(function(){
	$('#close_video').click(function(){
		$('#close_video').css('display','none');
		$money = $money+different_time*trend*2; $('#start').animate({opacity:0},1000,function(){$('#start').css({'display':'none'});});
	});
});

$(document).ready(function(){
	$('#quest').click(function(){
		$('#questions').css('display','block');
		if ($quest_passed >= $quest) {$('#next_level_game').css('display','block'); $('#box_timer, #box_timer_2').css('display','none'); $('#box_timer_pause').css('display','block');}
		quest_money();
	});
});


$(document).ready(function(){
	$("html").click(function(event){
		if ($(event.target).closest("#quest").length === 0) {
			$('#questions').css('display','none'); $('#next_level_game').css('display','none');
		}
	});
});

// --BONUS--
$(document).ready(function(){
	$('#brilliant').click(function(){
		$('#bonuses').css('display','block');
		$('#close_bonuses').css('display','block');
	});
});

$(document).ready(function(){
	$('#close_bonuses').click(function(){
		$('#bonuses,#close_bonuses,#back_to_bonuses,#bonus_brilliant_window,#bonus_ucher_window').css('display','none');
	});
});

$(document).ready(function(){
	$('#back_to_bonuses').click(function(){
		$('#bonuses,#close_bonuses,#bonus_ucher_window').css('display','block');
		$('#back_to_bonuses,#bonus_day_window,#bonus_brilliant_window,#bonus_ucher_window').css('display','none');
	});
});

// --BONUS-BRILLIANT--
$(document).ready(function(){
	$('#bonus_brilliant').click(function(){
		$('#bonuses').css('display','none');
		$('#bonus_brilliant_window,#close_bonuses,#back_to_bonuses').css('display','block');
	});
});

$(document).ready(function(){
	$('#bonus_brilliant_day').click(function(){
		if(bonus_day_timer == 0){
		bonus_day_timer = 82800; localStorage.setItem('bonus_day_timer',bonus_day_timer); brilliant = brilliant + bonus_day; localStorage.setItem('brilliant',brilliant);
		$('#brilliant,#bonus_brilliant,#bonus_brilliant_day').removeClass('mig_green');
		$('#bonus_brilliant_day').css({'box-shadow':'inset 0px 0px 20px red','cursor':'default'});
		document.getElementById('brilliant').innerHTML = "<h1>"+brilliant+"</h1>";
		$('#d1').css('display','block');
		}
	});
});

$(document).ready(function(){
	$('#bonus_day_update').click(function(){
		if(brilliant >= bonus_day_update){bonus_day = bonus_day*2; localStorage.setItem('bonus_day',bonus_day); bonus_day_update = bonus_day_update+50; localStorage.setItem('bonus_day_update',bonus_day_update);brilliant = brilliant-bonus_day_update; localStorage.setItem('brilliant',brilliant);
		document.getElementById('brilliant').innerHTML = "<h1>"+brilliant+"</h1>";
		document.getElementById('bonus_day_update').innerHTML = "<h1>"+bonus_day_update+"</h1>";
		document.getElementById('bonus_brilliant_day').innerHTML = "<h1>"+bonus_day+"</h1>"
	}
	});
});

// --BONUS-UCHER--
$(document).ready(function(){
	$('#bonus_ucher').click(function(){
		$('#bonuses').css('display','none');
		$('#bonus_ucher_window,#close_bonuses,#back_to_bonuses').css('display','block');
	});
});

$(document).ready(function(){
	$('#bonus_ucher_15min').click(function(){
		if(brilliant >= 5){brilliant = brilliant-5; localStorage.setItem('brilliant',brilliant); timer_speed = Math.floor(1000/speed_bonus_ucher); bonus_ucher_timer = bonus_ucher_timer+900; localStorage.setItem('timer_speed',timer_speed); $('#bonus_ucher_timer').css('display','block');
		document.getElementById('brilliant').innerHTML = "<h1>"+brilliant+"</h1>";
	}
	});
});

$(document).ready(function(){
	$('#bonus_ucher_30min').click(function(){
		if(brilliant >= 8){brilliant = brilliant-8; localStorage.setItem('brilliant',brilliant); timer_speed = Math.floor(1000/speed_bonus_ucher); bonus_ucher_timer = bonus_ucher_timer+1800; localStorage.setItem('timer_speed',timer_speed); $('#bonus_ucher_timer').css('display','block');
		document.getElementById('brilliant').innerHTML = "<h1>"+brilliant+"</h1>";
	}
	});
});

$(document).ready(function(){
	$('#bonus_ucher_1hour').click(function(){
		if(brilliant >= 14){brilliant = brilliant-14; localStorage.setItem('brilliant',brilliant); timer_speed = Math.floor(1000/speed_bonus_ucher); bonus_ucher_timer = bonus_ucher_timer+3600; localStorage.setItem('timer_speed',timer_speed); $('#bonus_ucher_timer').css('display','block');
		document.getElementById('brilliant').innerHTML = "<h1>"+brilliant+"</h1>";
	}
	});
});

$(document).ready(function(){
	$('#bonus_ucher_6hour').click(function(){
		if(brilliant >= 70){brilliant = brilliant-70; localStorage.setItem('brilliant',brilliant); timer_speed = Math.floor(1000/speed_bonus_ucher); bonus_ucher_timer = bonus_ucher_timer+21600; localStorage.setItem('timer_speed',timer_speed); $('#bonus_ucher_timer').css('display','block');
		document.getElementById('brilliant').innerHTML = "<h1>"+brilliant+"</h1>";
	}
	});
});

$(document).ready(function(){
	$('#bonus_ucher_1day').click(function(){
		if(brilliant >= 200){brilliant = brilliant-200; localStorage.setItem('brilliant',brilliant); timer_speed = Math.floor(1000/speed_bonus_ucher); bonus_ucher_timer = bonus_ucher_timer+86400; localStorage.setItem('timer_speed',timer_speed); $('#bonus_ucher_timer').css('display','block');
		document.getElementById('brilliant').innerHTML = "<h1>"+brilliant+"</h1>";
	}
	});
});

$(document).ready(function(){
	$('#update_bonus_ucher').click(function(){
		if(brilliant >= 500){brilliant = brilliant-500; localStorage.setItem('brilliant',brilliant); speed_bonus_ucher = speed_bonus_ucher+1; timer_speed = Math.floor(1000/speed_bonus_ucher); localStorage.setItem('timer_speed',timer_speed); localStorage.setItem('speed_bonus_ucher',speed_bonus_ucher);
		document.getElementById('brilliant').innerHTML = "<h1>"+brilliant+"</h1>";
		document.getElementById('u15').innerHTML = "Скорость исследования x"+speed_bonus_ucher+" на 15 мин";
		document.getElementById('u30').innerHTML = "Скорость исследования x"+speed_bonus_ucher+" на 30 мин";
		document.getElementById('u1').innerHTML = "Скорость исследования x"+speed_bonus_ucher+" на 1 час";
		document.getElementById('u6').innerHTML = "Скорость исследования x"+speed_bonus_ucher+" на 6 часов";
		document.getElementById('u1d').innerHTML = "Скорость исследования x"+speed_bonus_ucher+" на 1 день";
		document.getElementById('uup').innerHTML = "Улучшение бонуса x"+(speed_bonus_ucher+1)+" (постоянно)";
	}
	});
});

$(document).ready(function(){
	$('#cancel_level_game_button').click(function(){
		$('#next_level_game').css('display','none');
		$('#quest').css('cursor','pointer');
		$('#box_timer, #box_timer_2').css('display','block'); $('#box_timer_pause').css('display','none');
		$quest = $level_game-0.1;
		$fail_quest = Math.ceil($quest);
		document.getElementById('quest').innerHTML = "<h1>"+$quest_passed+"/"+$fail_quest+"</h1>";
	});
});

// --------------------------------------------DEALER---------------------------------------
$(document).ready(function(){
		$('#cost_dealer').click(function(){
		$money = $money - $cost_dealer;
		$cost_dealer = $cost_dealer *2;
		localStorage.setItem('cost_dealer',$cost_dealer);
		$col_dealers = $col_dealers +1;
		localStorage.setItem('col_dealers',$col_dealers);
		$used_dealers = $used_dealers +1;
		localStorage.setItem('used_dealers',$used_dealers);
		if ($money >= $cost_dealer) {$('#cost_dealer').css('display','block');$('#cost_dealer_2').css('display','none')}
		if ($money >= $cost_worker) {$('#cost_worker').css('display','block');$('#cost_worker_2').css('display','none')}
		if ($money >= $cost_ucher) {$('#cost_ucher').css('display','block');$('#cost_ucher_2').css('display','none')}
		document.getElementById('col_dealers').innerHTML = "<b>Торговцы:"+"&nbsp"+$used_dealers+"&nbsp"+"/"+"&nbsp"+$col_dealers+"</b>"+"&nbsp";
		cost_dealer();
		money();
	});
});

// --------------------------------------------WORKER---------------------------------------
$(document).ready(function(){
	$('#cost_worker').click(function(){
		$money = $money - $cost_worker;
		$cost_worker = $cost_worker *2;
		localStorage.setItem('cost_worker',$cost_worker);
		$col_workers = $col_workers +1;
		localStorage.setItem('col_workers',$col_workers);
		$used_workers = $used_workers +1;
		localStorage.setItem('used_workers',$used_workers);
		if ($money >= $cost_worker) {$('#cost_worker').css('display','block');$('#cost_worker_2').css('display','none')}
		if ($money >= $cost_dealer) {$('#cost_dealer').css('display','block');$('#cost_dealer_2').css('display','none')}
		if ($money >= $cost_ucher) {$('#cost_ucher').css('display','block');$('#cost_ucher_2').css('display','none')}
		document.getElementById('col_workers').innerHTML = "<b>Рабочие:"+"&nbsp"+$used_workers+"&nbsp"+"/"+"&nbsp"+$col_workers+"</b>"+"&nbsp";
		cost_worker();
		money();
	});
});

// --------------------------------------------UCHER---------------------------------------

$(document).ready(function(){
	$('#cost_ucher').click(function(){
		$money = $money - $cost_ucher;
		$cost_ucher = $cost_ucher *2;
		localStorage.setItem('cost_ucher',$cost_ucher);
		$col_uchers = $col_uchers +1;
		localStorage.setItem('col_uchers',$col_uchers);
		$timer = Math.floor($timer/2);
		if ($money >= $cost_ucher) {$('#cost_ucher').css('display','block');$('#cost_ucher_2').css('display','none')}
		if ($money >= $cost_worker) {$('#cost_worker').css('display','block');$('#cost_worker_2').css('display','none')}
		if ($money >= $cost_dealer) {$('#cost_dealer').css('display','block');$('#cost_dealer_2').css('display','none')}
		document.getElementById('col_uchers').innerHTML = "<b>Ученые:"+"&nbsp"+$col_uchers+"</b>"+"&nbsp";
		cost_ucher();
		money();
	});
});

$(document).ready(function(){
	$('#cost_dealer,#cost_worker,#cost_ucher').click(function(){
		if (($money < $quest_money) && ($quest_end == 0)) {
			$quest_money = $quest_money/$level_quest_money;
			$level_quest_money = $level_quest_money-1;
			$quest_passed = $quest_passed-1;
			if ($quest_passed <0) {$quest_passed =0}};
			if ($level_quest_money < 1) {$level_quest_money =1}
	});
});

$(document).ready(function(){
	$('#next_level_game_button').click(function(){
		$('#next_level_game').css('display','none');
		diff_quest = $quest_passed-$quest; localStorage.setItem('diff_quest',diff_quest);
		$level_game = $level_game + 1;
		localStorage.setItem('level_game',$level_game);
		$quest = $level_game;
		$fail_quest = Math.ceil($quest);
		$quest_passed = 0;
		localStorage.setItem('quest_passed',$quest_passed);
		$level_quest_money = 1;
		$quest_money = $level_game*10000;
		$money = 20;
		localStorage.setItem('money',$money);
		$used_dealers = $col_dealers;
		$used_workers = $col_workers;
		$level_timer = 1;
		localStorage.setItem('level_timer',1);
		$timer =$level_timer*900/$col_uchers;
		localStorage.setItem('timer',$timer);
		$q_all = 0;
		p = 1;
		localStorage.setItem('visible_object',2);
		$q1_lost = 10000*$level_game; $q1_koeff = 1;
		$q2_lost = 10000*$level_game; $q2_koeff = 1;
		$q3_lost = 10000*$level_game; $q3_koeff = 1;
		$q4_lost = 10000*$level_game; $q4_koeff = 1;

		$('#quest').css('background-color','rgb(255,0,0,0.5)'); $('#quest').css('cursor','pointer');
		document.getElementById('level_game').innerHTML = "<h1>"+$level_game+"</h1>";
		document.getElementById('col_dealers').innerHTML = "<b>Торговцы:"+"&nbsp"+$used_dealers+"&nbsp"+"/"+"&nbsp"+$col_dealers+"</b>"+"&nbsp";
		document.getElementById('col_workers').innerHTML = "<b>Рабочие:"+"&nbsp"+$used_workers+"&nbsp"+"/"+"&nbsp"+$col_workers+"</b>"+"&nbsp";
		money();

		$('#unvisible').offset({top:185});
		$('#box_timer, #box_timer_2').css('display','block'); $('#box_timer_pause').css('display','none');
		$('#box_timer').css('z-index','10'); setTimeout(function() { $('#box_timer').css('z-index','9') }, 1);
	});
});

$(document).ready(function(){
	$('#box_timer').click(function(){
		$('#box_timer, #box_timer_2').css('display','none'); $('#box_timer_pause').css('display','block'); p = 0;
	});
});

$(document).ready(function(){
	$('#box_timer_pause').click(function(){
		$('#box_timer, #box_timer_2').css('display','block'); $('#box_timer_pause').css('display','none'); p = 1;
	});
});

$(document).ready(function(){
	$('#level_game').click(function(){
		$money = 16000; brilliant = 1000;
		localStorage.setItem('brilliant',1000);
		document.getElementById('brilliant').innerHTML = "<h1>"+brilliant+"</h1>";
	});
});

$(document).ready(function(){
	$('#Davydov').click(function(){
		localStorage.setItem('forest',0);
		localStorage.setItem('wood_sword',0);
		localStorage.setItem('wood_shield',0);
		localStorage.setItem('wood_bow',0);
		localStorage.setItem('wood_fence',0);
		localStorage.setItem('metal',0);
		localStorage.setItem('iron_sword',0);
		localStorage.setItem('iron_shield',0);
		localStorage.setItem('iron_bow',0);
		localStorage.setItem('iron_fence',0);
		localStorage.setItem('first_enter',2);
		localStorage.setItem('level_game',1);
		localStorage.setItem('money',20);
		localStorage.setItem('brilliant',100);
		localStorage.setItem('quest_passed',0);
		localStorage.setItem('col_dealers',0);
		localStorage.setItem('used_dealers',0);
		localStorage.setItem('cost_dealer',60);
		localStorage.setItem('col_workers',0);
		localStorage.setItem('used_workers',0);
		localStorage.setItem('cost_worker',60);
		localStorage.setItem('col_uchers',1);
		localStorage.setItem('cost_ucher',60);
		localStorage.setItem('deal_forest',0);
		localStorage.setItem('deal_wood_sword',0);
		localStorage.setItem('deal_iron_sword',0);
		localStorage.setItem('deal_wood_bow',0);
		localStorage.setItem('deal_iron_bow',0);
		localStorage.setItem('deal_wood_shield',0);
		localStorage.setItem('deal_iron_shield',0);
		localStorage.setItem('deal_wood_fence',0);
		localStorage.setItem('deal_iron_fence',0);
		localStorage.setItem('work_forest',0);
		localStorage.setItem('work_wood_sword',0);
		localStorage.setItem('work_iron_sword',0);
		localStorage.setItem('work_wood_bow',0);
		localStorage.setItem('work_iron_bow',0);
		localStorage.setItem('work_wood_shield',0);
		localStorage.setItem('work_iron_shield',0);
		localStorage.setItem('work_wood_fence',0);
		localStorage.setItem('work_iron_fence',0);
		localStorage.setItem('level_forest',0);
		localStorage.setItem('level_wood_sword',0);
		localStorage.setItem('level_iron_sword',0);
		localStorage.setItem('level_wood_bow',0);
		localStorage.setItem('level_iron_bow',0);
		localStorage.setItem('level_wood_shield',0);
		localStorage.setItem('level_iron_shield',0);
		localStorage.setItem('level_wood_fence',0);
		localStorage.setItem('level_iron_fence',0);
		localStorage.setItem('next_level_forest',20);
		localStorage.setItem('next_level_wood_sword',20);
		localStorage.setItem('next_level_iron_sword',20);
		localStorage.setItem('next_level_wood_bow',20);
		localStorage.setItem('next_level_iron_bow',20);
		localStorage.setItem('next_level_wood_shield',20);
		localStorage.setItem('next_level_iron_shield',20);
		localStorage.setItem('next_level_wood_fence',20);
		localStorage.setItem('next_level_iron_fence',20);
		localStorage.setItem('timer',900);
		localStorage.setItem('timer_speed',1000);
		localStorage.setItem('level_timer',1);
		localStorage.setItem('visible_object',2);
		localStorage.setItem('q1_lost',20000);
		localStorage.setItem('q2_lost',20000);
		localStorage.setItem('q3_lost',20000);
		localStorage.setItem('q4_lost',20000);
		localStorage.setItem('bonus_ucher_timer',0);
		localStorage.setItem('speed_bonus_ucher',2);
		localStorage.setItem('bonus_day_timer',10);
		localStorage.setItem('bonus_day',5);
		localStorage.setItem('bonus_day_update',50);


		document.location.href='index.php';
	});
});
