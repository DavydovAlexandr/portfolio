<?php require_once('templates/top.php'); ?>

	<header>
	</header>
		<div id="money_img"></div>
		<div id="money">
			<script type="text/javascript">
				$(document).ready(function() {
					setInterval(function() {
						
						$fail_quest = Math.ceil($quest);
						if ($money >= $quest_money) {
							$level_quest_money = $level_quest_money+1;
							$quest_money = $quest_money*$level_quest_money;
							$quest_passed = $quest_passed + 1;
							$quest = $level_game;
							}
						if ($quest_passed >= $fail_quest) {$('#quest').css({'background-color':'rgb(0,255,0,0.5)','cursor':'pointer'})}
						if ($quest_passed == $quest) {$('#box_timer, #box_timer_2').css('display','none'); $('#box_timer_pause').css('display','block');$('#next_level_game,#questions').css('display','block'); $('#quest').css({'background-color':'rgb(0,255,0,0.5)','cursor':'default'})};
						if($level_game <2){$('#box_timer, #box_timer_2,#box_timer_pause').css('display','none')};
						if ($quest_passed < $quest) {$('#quest').css({'background-color':'rgb(255,0,0,0.5)','cursor':'pointer'})}
						if ($money >= $cost_dealer) {$('#cost_dealer').css('display','block');$('#cost_dealer_2').css('display','none')} else {$('#cost_dealer').css('display','none');$('#cost_dealer_2').css('display','block')}
						if ($money >= $cost_worker) {$('#cost_worker').css('display','block');$('#cost_worker_2').css('display','none')} else {$('#cost_worker').css('display','none');$('#cost_worker_2').css('display','block')}
						if ($money >= $cost_ucher) {$('#cost_ucher').css('display','block');$('#cost_ucher_2').css('display','none')} else {$('#cost_ucher').css('display','none');$('#cost_ucher_2').css('display','block')}

					money();
					document.getElementById('quest').innerHTML = "<h1>"+$quest_passed+"/"+$fail_quest+"</h1>";
					},1);
				});
			</script>
		</div>

		<div id="trend"></div>

		<div id="level_game" class="box"></div>
			<script type="text/javascript">
				document.getElementById('level_game').innerHTML = "<h1>"+$level_game+"</h1>";
			</script>
		

		<div id="quest" class="box"></div>
			<script type="text/javascript">
				document.getElementById('quest').innerHTML = "<h1>"+$quest_passed+"/"+$quest+"</h1>";
			</script>
		

		<div id="brilliant" class="box"></div>
			<script type="text/javascript">
				document.getElementById('brilliant').innerHTML = "<h1>"+brilliant+"</h1>";
			</script>
		
	

<!-- -----------------------------------------------DEALERS------------------------------------------ -->

	<section id="dealers">
		<div id="box_dealer"></div>
		<div id="col_dealers" style="padding-left: 5px">
			<script type="text/javascript">
				document.getElementById('col_dealers').innerHTML = "<b>Торговцы:"+"&nbsp"+$used_dealers+"&nbsp"+"/"+"&nbsp"+$col_dealers+"</b>"+"&nbsp";
			</script>
		</div>

		<div id="cost_dealer" style="padding-left: 5px">
			<script type="text/javascript">
        		document.getElementById('cost_dealer').innerHTML = "<b>Цена: "+$cost_dealer+"&nbsp"+"$</b>"+"&nbsp";
			</script>
		</div>

		<div id="cost_dealer_2" style="padding-left: 5px">
			<script type="text/javascript">
        		document.getElementById('cost_dealer_2').innerHTML = "<b>Цена: "+$cost_dealer+"&nbsp"+"$</b>"+"&nbsp";
			</script>
		</div>
	</section>

<!-- ------------------------------------------------WORKERS-------------------------------------------- -->

	<section id="workers">
		<div id="box_worker"></div>
		<div id="col_workers" style="padding-left: 5px">
			<script type="text/javascript">
				document.getElementById('col_workers').innerHTML = "<b>Рабочие:"+"&nbsp"+$used_workers+"&nbsp"+"/"+"&nbsp"+$col_workers+"</b>"+"&nbsp";
			</script>
		</div>

		<div id="cost_worker" style="padding-left: 5px">
			<script type="text/javascript">
        		document.getElementById('cost_worker').innerHTML = "<b>Цена: "+$cost_worker+"&nbsp"+"$</b>"+"&nbsp";
			</script>
		</div>

		<div id="cost_worker_2" style="padding-left: 5px">
			<script type="text/javascript">
        		document.getElementById('cost_worker_2').innerHTML = "<b>Цена: "+$cost_worker+"&nbsp"+"$</b>"+"&nbsp";
			</script>
		</div>
	</section>

<!-- --------------------------------------------------UCH-------------------------------------------- -->

<section id="uchers">
		<div id="box_ucher"></div>
		<div id="col_uchers" style="padding-left: 5px">
			<script type="text/javascript">
				document.getElementById('col_uchers').innerHTML = "<b>Ученые:"+"&nbsp"+$col_uchers+"</b>"+"&nbsp";
			</script>
		</div>

		<div id="cost_ucher" style="padding-left: 5px">
			<script type="text/javascript">
        		document.getElementById('cost_ucher').innerHTML = "<b>Цена: "+$cost_ucher+"&nbsp"+"$</b>"+"&nbsp";
			</script>
		</div>

		<div id="cost_ucher_2" style="padding-left: 5px">
			<script type="text/javascript">
        		document.getElementById('cost_ucher_2').innerHTML = "<b>Цена: "+$cost_ucher+"&nbsp"+"$</b>"+"&nbsp";
			</script>
		</div>
	</section>

<!-- --------------------------------------------------objects------------------------------------------ -->
	<?php
	require_once('config.php');
		$query = "SELECT * FROM objects ORDER BY object_id";
			$cat=mysql_query($query);
			$row =mysql_num_rows($cat);
				if(!$cat){
					exit($query);
				}
			while($obj=mysql_fetch_array($cat)){
				$object_id = $obj['object_id'];
				$object_img = $obj['object_img'];
				$object_name = $obj['object_name'];
				$object_class = $obj['object_class'];
				$object_perem = "$".$object_name;

				$object_margin = $obj['object_margin'];
				$object_margin_nl = $object_margin+1.65;
				$object_margin_ob = $object_margin+3.25;
				$object_margin_timer = $object_margin+4;
	?>
	<script type="text/javascript">
		$(document).ready(function(){
			object_id = <? echo $object_id ?>;
			object_name = '<? echo $object_name ?>';
			$('#object_name').attr('id',object_name);
			object_name_section = object_name+'_section';
			$('#object_name_section').attr('id',object_name_section);
			box_object_name = 'box_'+object_name;
			$('#box_object_name').attr('id',box_object_name);
			$('#unvisible').offset({top:185});
		});
	</script>
	
	<section id="object_name_section">
	<div id="box_object_name" class="object_box" style="margin-top:<?php echo $object_margin?>%; background-image: url('media/images/<?php echo $object_name ?>.jpg'); background-size: 100%; border: 1px solid black; border-radius: 5px; cursor: pointer;"></div>

	<div id="level_<?php echo $object_name?>" class="level_object" style="padding-left: 5px; margin-top:<?php echo $object_margin?>%">
			<script type="text/javascript">
				$level_<?php echo $object_name?> = Number(localStorage.getItem('level_<?php echo $object_name?>'));
        		document.getElementById('level_<?php echo $object_name?>').innerHTML = "<b>Уровень "+$level_<?php echo $object_name?>+"&nbsp"+"</b>";
			</script>
		</div>

	<div id="next_level_<?php echo $object_name?>" class="next_level_object" style="padding-left: 5px; margin-top:<?php echo $object_margin_nl?>%">
			<script type="text/javascript">
				$next_level_<?php echo $object_name?> = Number(localStorage.getItem('next_level_<?php echo $object_name?>'));
				document.getElementById('next_level_<?php echo $object_name?>').innerHTML = "<b>Улучшить:"+"&nbsp"+$next_level_<?php echo $object_name?>+"&nbsp"+"$</b>"+"&nbsp";
			</script>
	</div>

	<div id="next_level_<?php echo $object_name?>_2" class="next_level_object_2" style="padding-left: 5px; margin-top:<?php echo $object_margin_nl?>%">
			<script type="text/javascript">
				document.getElementById('next_level_<?php echo $object_name?>_2').innerHTML = "<b>Улучшить:"+"&nbsp"+$next_level_<?php echo $object_name?>+"&nbsp"+"$</b>"+"&nbsp";
			</script>
	</div>

	<script type="text/javascript">setInterval(function() {if ($money < $next_level_<?php echo $object_name?>) {$('#next_level_<?php echo $object_name?>').css('display','none');$('#next_level_<?php echo $object_name?>_2').css('display','block')}}, 0);</script>

	<div id="deal_<?php echo $object_name?>" class="deal_object" style="padding-left: 5px; margin-top:<?php echo $object_margin?>%">
			<script type="text/javascript">
				$deal_<?php echo $object_name?> = Number(localStorage.getItem('deal_<?php echo $object_name?>'));
				if($used_dealers > 0) {$('.deal_object').css('display','block');$('.deal_object_2').css('display','none');}
				document.getElementById('deal_<?php echo $object_name?>').innerHTML = "<b>"+"&nbsp&nbsp&nbsp&nbsp&nbsp"+$deal_<?php echo $object_name?>+"&nbsp"+"</b>"+"&nbsp";
			</script>
	</div>
	<div id="deal_<?php echo $object_name?>_2" class="deal_object_2" style="padding-left: 5px; margin-top:<?php echo $object_margin?>%">
			<script type="text/javascript">
				document.getElementById('deal_<?php echo $object_name?>_2').innerHTML = "<b>"+"&nbsp&nbsp&nbsp&nbsp&nbsp"+$deal_<?php echo $object_name?>+"&nbsp"+"</b>"+"&nbsp";
			</script>
	</div>
	<div id="deal_<?php echo $object_name?>_minus" class="deal_object_minus" style="cursor: pointer; padding-left: 5px; margin-top:<?php echo $object_margin?>%"><b>-</b></div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#cost_dealer').click(function(){
				$('#deal_<?php echo $object_name?>').css('display','block');$('#deal_<?php echo $object_name?>_2').css('display','none');
				if ($money < $next_level_<?php echo $object_name?>) {$('#next_level_<?php echo $object_name?>').css('display','none');$('#next_level_<?php echo $object_name?>_2').css('display','block')}
			});
		});
	</script>

	<div id="work_<?php echo $object_name?>" class="work_object" style="padding-left: 5px; margin-top:<?php echo $object_margin_ob?>%">
			<script type="text/javascript">
				$work_<?php echo $object_name?> = Number(localStorage.getItem('work_<?php echo $object_name?>'));
				if($used_workers > 0) {$('.work_object').css('display','block');$('.work_object_2').css('display','none');}
				document.getElementById('work_<?php echo $object_name?>').innerHTML = "<b>"+"&nbsp&nbsp&nbsp&nbsp&nbsp"+$work_<?php echo $object_name?>+"&nbsp"+"</b>"+"&nbsp";
			</script>
	</div>
	<div id="work_<?php echo $object_name?>_2" class="work_object_2" style="padding-left: 5px; margin-top:<?php echo $object_margin_ob?>%">
			<script type="text/javascript">
				document.getElementById('work_<?php echo $object_name?>_2').innerHTML = "<b>"+"&nbsp&nbsp&nbsp&nbsp&nbsp"+$work_<?php echo $object_name?>+"&nbsp"+"</b>"+"&nbsp";
			</script>
	</div>
	<div id="work_<?php echo $object_name?>_minus" class="work_object_minus" style="cursor: pointer; padding-left: 5px; margin-top:<?php echo $object_margin_ob?>%"><b>-</b></div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#cost_worker').click(function(){
				$('#work_<?php echo $object_name?>').css('display','block');$('#work_<?php echo $object_name?>_2').css('display','none');
				if ($money < $next_level_<?php echo $object_name?>) {$('#next_level_<?php echo $object_name?>').css('display','none');$('#next_level_<?php echo $object_name?>_2').css('display','block')}
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#cost_ucher').click(function(){
				$('#ucher_<?php echo $object_name?>').css('display','block');$('#ucher_<?php echo $object_name?>_2').css('display','none');
				if ($money < $next_level_<?php echo $object_name?>) {$('#next_level_<?php echo $object_name?>').css('display','none');$('#next_level_<?php echo $object_name?>_2').css('display','block')}
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#next_level_<?php echo $object_name?>').click(function(){
				if (($money < $quest_money) && ($quest_end == 0)) {
					$quest_money = $quest_money/$level_quest_money;
					$level_quest_money = $level_quest_money-1;
					$quest_passed = $quest_passed-1;
				if ($quest_passed <0) {$quest_passed =0}};
				localStorage.setItem('quest_passed',$quest_passed);
				if ($level_quest_money < 1) {$level_quest_money =1}
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#next_level_game_button').click(function(){
				object_perem =0; $level_<?php echo $object_name?> =0; $next_level_<?php echo $object_name?> =20; $deal_<?php echo $object_name?> =0; $work_<?php echo $object_name?> =0;
				localStorage.setItem('<?php echo $object_name?>',object_perem);
				localStorage.setItem('level_<?php echo $object_name?>',$level_<?php echo $object_name?>);
				localStorage.setItem('next_level_<?php echo $object_name?>',$next_level_<?php echo $object_name?>);
				localStorage.setItem('deal_<?php echo $object_name?>',$deal_<?php echo $object_name?>);
				localStorage.setItem('work_<?php echo $object_name?>',$work_<?php echo $object_name?>);
					$q1_lost = 10000*$level_game; $q2_lost = 10000*$level_game; $q3_lost = 10000*$level_game; $q4_lost = 10000*$level_game;
					localStorage.setItem('q1_lost',$q1_lost);
					localStorage.setItem('q2_lost',$q2_lost);
					localStorage.setItem('q3_lost',$q3_lost);
					localStorage.setItem('q4_lost',$q4_lost);
					$q_all = 0;
					$used_workers = $col_workers;
					localStorage.setItem('used_workers',$used_workers);
					$used_dealers = $col_dealers;
					localStorage.setItem('used_dealers',$used_dealers);
				if($level_game > 1) {$('#quest_block,#box_timer,#box_timer_2').css('display','block')};
				$('#<?php echo $object_name?>_section').css('display','none');$('#forest_section,#wood_sword_section').css('display','block');
				document.getElementById('<?php echo $object_name?>').innerHTML = "<b>"+object_perem+"&nbsp"+"</b>";
				document.getElementById('level_<?php echo $object_name?>').innerHTML = "<b>Уровень "+$level_<?php echo $object_name?>+"&nbsp"+"</b>";
				document.getElementById('deal_<?php echo $object_name?>').innerHTML = "<b>"+"&nbsp&nbsp&nbsp&nbsp&nbsp"+$deal_<?php echo $object_name?>+"&nbsp"+"</b>"+"&nbsp";
				document.getElementById('deal_<?php echo $object_name?>_2').innerHTML = "<b>"+"&nbsp&nbsp&nbsp&nbsp&nbsp"+$deal_<?php echo $object_name?>+"&nbsp"+"</b>"+"&nbsp";
				document.getElementById('work_<?php echo $object_name?>').innerHTML = "<b>"+"&nbsp&nbsp&nbsp&nbsp&nbsp"+$work_<?php echo $object_name?>+"&nbsp"+"</b>"+"&nbsp";
				document.getElementById('work_<?php echo $object_name?>_2').innerHTML = "<b>"+"&nbsp&nbsp&nbsp&nbsp&nbsp"+$work_<?php echo $object_name?>+"&nbsp"+"</b>"+"&nbsp";
				document.getElementById('next_level_<?php echo $object_name?>_2').innerHTML = "<b>Улучшить:"+"&nbsp"+$next_level_<?php echo $object_name?>+"&nbsp"+"$</b>"+"&nbsp";
				document.getElementById('next_level_<?php echo $object_name?>').innerHTML = "<b>Улучшить:"+"&nbsp"+$next_level_<?php echo $object_name?>+"&nbsp"+"$</b>"+"&nbsp";
				document.location.href='wheel_lucky.php';
			});
		});
	</script>

	<!-- -----------------------------------------------IF------------------------------------------ -->
	<script type="text/javascript">
		$(document).ready(function(){
			setInterval(function() {
				if($deal_<?php echo $object_name?> > 0) {$('#deal_<?php echo $object_name?>_minus').css('display','block')}
				if($work_<?php echo $object_name?> > 0) {$('#work_<?php echo $object_name?>_minus').css('display','block')}
				if ($money >= $next_level_<?php echo $object_name?>) {$('#next_level_<?php echo $object_name?>').css('display','block');$('#next_level_<?php echo $object_name?>_2').css('display','none')} else {$('#next_level_<?php echo $object_name?>').css('display','none');$('#next_level_<?php echo $object_name?>_2').css('display','block')}
			},0);
		});
	</script>
	<!-- ------------------------------------------------------------------------------------------- -->

	<script type="text/javascript">
		$(document).ready(function(){
			$('#next_level_<?php echo $object_name?>').click(function(){
				$money = $money - $next_level_<?php echo $object_name?>;
				$level_<?php echo $object_name?> = $level_<?php echo $object_name?> +1;
				localStorage.setItem('level_<?php echo $object_name?>',$level_<?php echo $object_name?>);
				$next_level_<?php echo $object_name?> = $next_level_<?php echo $object_name?> *2;
				localStorage.setItem('next_level_<?php echo $object_name?>',$next_level_<?php echo $object_name?>);
				if ($money >= $cost_dealer) {$('#cost_dealer').css('display','block');$('#cost_dealer_2').css('display','none')}
				if ($money >= $cost_worker) {$('#cost_worker').css('display','block');$('#cost_worker_2').css('display','none')}
				if ($money >= $cost_ucher) {$('#cost_ucher').css('display','block');$('#cost_ucher_2').css('display','none')}
				if($next_level_<?php echo $object_name?> >= 1000000){var $col_symbol = $next_level_<?php echo $object_name?>.toString().length; var $big_level_object = (Math.round(($next_level_<?php echo $object_name?>/1000) * 10) / 10000).toFixed(2)+'^'+($col_symbol-1);
			document.getElementById('next_level_<?php echo $object_name?>').innerHTML = "<b>Улучшить:"+"&nbsp"+$big_level_object+"&nbsp"+"$</b>"+"&nbsp";
			document.getElementById('next_level_<?php echo $object_name?>_2').innerHTML = "<b>Улучшить:"+"&nbsp"+$big_level_object+"&nbsp"+"$</b>"+"&nbsp";} else {document.getElementById('next_level_<?php echo $object_name?>').innerHTML = "<b>Улучшить:"+"&nbsp"+$next_level_<?php echo $object_name?>+"&nbsp"+"$</b>"+"&nbsp";
			document.getElementById('next_level_<?php echo $object_name?>_2').innerHTML = "<b>Улучшить:"+"&nbsp"+$next_level_<?php echo $object_name?>+"&nbsp"+"$</b>"+"&nbsp";};
				document.getElementById('level_<?php echo $object_name?>').innerHTML = "<b>Уровень "+$level_<?php echo $object_name?>+"&nbsp"+"</b>";
				money();
			});
		});

	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#deal_<?php echo $object_name?>').click(function(){
				$('#deal_<?php echo $object_name?>_minus').css('display','block');
					$deal_<?php echo $object_name?> = $deal_<?php echo $object_name?> +1;
					localStorage.setItem('deal_<?php echo $object_name?>',$deal_<?php echo $object_name?>);
					$used_dealers = $used_dealers -1;
					localStorage.setItem('used_dealers',$used_dealers);
					if ($used_dealers <= 0) {$('.deal_object').css('display','none');$('.deal_object_2').css('display','block');}
					document.getElementById('col_dealers').innerHTML = "<b>Торговцы:"+"&nbsp"+$used_dealers+"&nbsp"+"/"+"&nbsp"+$col_dealers+"</b>"+"&nbsp";
					document.getElementById('deal_<?php echo $object_name?>').innerHTML = "<b>"+"&nbsp&nbsp&nbsp&nbsp&nbsp"+$deal_<?php echo $object_name?>+"&nbsp"+"</b>"+"&nbsp";
					document.getElementById('deal_<?php echo $object_name?>_2').innerHTML = "<b>"+"&nbsp&nbsp&nbsp&nbsp&nbsp"+$deal_<?php echo $object_name?>+"&nbsp"+"</b>"+"&nbsp";
					document.getElementById('col_workers').innerHTML = "<b>Рабочие:"+"&nbsp"+$used_workers+"&nbsp"+"/"+"&nbsp"+$col_workers+"</b>"+"&nbsp";
					money();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#deal_<?php echo $object_name?>_minus').click(function(){
				$deal_<?php echo $object_name?> = $deal_<?php echo $object_name?> -1;
				localStorage.setItem('deal_<?php echo $object_name?>',$deal_<?php echo $object_name?>);
				$used_dealers = $used_dealers +1;
				localStorage.setItem('used_dealers',$used_dealers);
				if ($deal_<?php echo $object_name?> <= 0) {$('#deal_<?php echo $object_name?>_minus').css('display','none')}
				if ($used_dealers > 0) {$('.deal_object').css('display','block');$('.deal_object_2').css('display','none');}
				document.getElementById('col_dealers').innerHTML = "<b>Торговцы:"+"&nbsp"+$used_dealers+"&nbsp"+"/"+"&nbsp"+$col_dealers+"</b>"+"&nbsp";
				document.getElementById('deal_<?php echo $object_name?>').innerHTML = "<b>"+"&nbsp&nbsp&nbsp&nbsp&nbsp"+$deal_<?php echo $object_name?>+"&nbsp"+"</b>"+"&nbsp";
				document.getElementById('deal_<?php echo $object_name?>_2').innerHTML = "<b>"+"&nbsp&nbsp&nbsp&nbsp&nbsp"+$deal_<?php echo $object_name?>+"&nbsp"+"</b>"+"&nbsp";
				document.getElementById('col_workers').innerHTML = "<b>Рабочие:"+"&nbsp"+$used_workers+"&nbsp"+"/"+"&nbsp"+$col_workers+"</b>"+"&nbsp";
				money();
			});
			$('#next_level_game_button').click(function(){
				$('#deal_<?php echo $object_name?>_minus').css('display','none');
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#work_<?php echo $object_name?>').click(function(){
				$('#work_<?php echo $object_name?>_minus').css('display','block');
				$work_<?php echo $object_name?> = $work_<?php echo $object_name?> +1;
				localStorage.setItem('work_<?php echo $object_name?>',$work_<?php echo $object_name?>);
				$used_workers = $used_workers -1;
				localStorage.setItem('used_workers',$used_workers);
				if ($used_workers <= 0) {$('.work_object').css('display','none');$('.work_object_2').css('display','block');}
				document.getElementById('col_workers').innerHTML = "<b>Рабочие:"+"&nbsp"+$used_workers+"&nbsp"+"/"+"&nbsp"+$col_workers+"</b>"+"&nbsp";
				document.getElementById('work_<?php echo $object_name?>').innerHTML = "<b>"+"&nbsp&nbsp&nbsp&nbsp&nbsp"+$work_<?php echo $object_name?>+"&nbsp"+"</b>"+"&nbsp";
				document.getElementById('work_<?php echo $object_name?>_2').innerHTML = "<b>"+"&nbsp&nbsp&nbsp&nbsp&nbsp"+$work_<?php echo $object_name?>+"&nbsp"+"</b>"+"&nbsp";
				document.getElementById('col_dealers').innerHTML = "<b>Торговцы:"+"&nbsp"+$used_dealers+"&nbsp"+"/"+"&nbsp"+$col_dealers+"</b>"+"&nbsp";
				money();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#work_<?php echo $object_name?>_minus').click(function(){
				$work_<?php echo $object_name?> = $work_<?php echo $object_name?> -1;
				localStorage.setItem('work_<?php echo $object_name?>',$work_<?php echo $object_name?>);
				$used_workers = $used_workers +1;
				localStorage.setItem('used_workers',$used_workers);
				if ($work_<?php echo $object_name?> <= 0) {$('#work_<?php echo $object_name?>_minus').css('display','none')}
				if ($used_workers > 0) {$('.work_object').css('display','block');$('.work_object_2').css('display','none');}
				document.getElementById('col_dealers').innerHTML = "<b>Торговцы:"+"&nbsp"+$used_dealers+"&nbsp"+"/"+"&nbsp"+$col_dealers+"</b>"+"&nbsp";
				document.getElementById('work_<?php echo $object_name?>').innerHTML = "<b>"+"&nbsp&nbsp&nbsp&nbsp&nbsp"+$work_<?php echo $object_name?>+"&nbsp"+"</b>"+"&nbsp";
				document.getElementById('work_<?php echo $object_name?>_2').innerHTML = "<b>"+"&nbsp&nbsp&nbsp&nbsp&nbsp"+$work_<?php echo $object_name?>+"&nbsp"+"</b>"+"&nbsp";
				document.getElementById('col_workers').innerHTML = "<b>Рабочие:"+"&nbsp"+$used_workers+"&nbsp"+"/"+"&nbsp"+$col_workers+"</b>"+"&nbsp";
				money();
			});
			$('#next_level_game_button').click(function(){
				$('#work_<?php echo $object_name?>_minus').css('display','none');
			});
		});
	</script>

	<div id="object_name" class="object" style="padding-left: 5px; margin-top:<?php echo $object_margin_ob?>%">

		<script type="text/javascript">
			$(document).ready(function() {
				var object_perem = <?php echo $object_perem?>;
				var object_name = <?php echo $object_name?>;
				var object_class = <?php echo $object_class?>;
				setInterval(function() {
// -----forest_class-----
				object_perem = Number(localStorage.getItem(object_name.id));
				if (Number(localStorage.getItem(object_name.id)) ==0){object_perem = 0};
				if((object_class.id == 'forest') && (object_name.id !== 'forest')) {$forest = Number(localStorage.getItem('forest')); $forest = $forest-$level_<?php echo $object_name?>-($work_<?php echo $object_name?>*$level_<?php echo $object_name?>); if ($forest < 0) {$forest = 0};
				if(Number(localStorage.getItem('forest')) > 0) {object_perem = object_perem + $level_<?php echo $object_name?> + ($work_<?php echo $object_name?>*$level_<?php echo $object_name?>) - $deal_<?php echo $object_name?>; trend_perem = $level_<?php echo $object_name?> + ($work_<?php echo $object_name?>*$level_<?php echo $object_name?>); document.getElementById("box_"+object_name.id).innerHTML = "<h5 class='trend_perem'>"+trend_perem+"/сек</h5>"}
				};
				if((object_class.id == 'forest') && (object_name.id == 'forest')) {object_perem = object_perem + $level_<?php echo $object_name?> + ($work_<?php echo $object_name?>*$level_<?php echo $object_name?>) - $deal_<?php echo $object_name?>; trend_perem = $level_<?php echo $object_name?> + ($work_<?php echo $object_name?>*$level_<?php echo $object_name?>); document.getElementById("box_"+object_name.id).innerHTML = "<h5 class='trend_perem'>"+trend_perem+"/сек</h5>"}
				
// -----metal_class-----
				if((object_class.id == 'metal') && (object_name.id !== 'metal')) {$metal = Number(localStorage.getItem('metal')); $metal = $metal-$level_<?php echo $object_name?>-($work_<?php echo $object_name?>*$level_<?php echo $object_name?>);if ($metal < 0) {$metal = 0}; localStorage.setItem('metal',$metal);
				if(Number(localStorage.getItem('metal')) > 0) {object_perem = object_perem + $level_<?php echo $object_name?> + ($work_<?php echo $object_name?>*$level_<?php echo $object_name?>) - $deal_<?php echo $object_name?>; trend_perem = $level_<?php echo $object_name?> + ($work_<?php echo $object_name?>*$level_<?php echo $object_name?>); document.getElementById("box_"+object_name.id).innerHTML = "<h5 class='trend_perem'>"+trend_perem+"/сек</h5>"}
				};
				if((object_class.id == 'metal') && (object_name.id == 'metal')) {object_perem = object_perem + $level_<?php echo $object_name?> + ($work_<?php echo $object_name?>*$level_<?php echo $object_name?>) - $deal_<?php echo $object_name?>; trend_perem = $level_<?php echo $object_name?> + ($work_<?php echo $object_name?>*$level_<?php echo $object_name?>); document.getElementById("box_"+object_name.id).innerHTML = "<h5 class='trend_perem'>"+trend_perem+"/сек</h5>"}

				if (object_perem < 0) {object_perem = 0}
				localStorage.setItem(object_name.id,object_perem);
				if (object_perem > 0) {$money = $money + ($deal_<?php echo $object_name?>)*$level_game*<?php echo $object_id?>;}
				document.getElementById(object_name.id).innerHTML = "<b>"+object_perem+"&nbsp"+"</b>";
				if(object_perem > 0){localStorage.setItem('money',$money)};

				}, 1000);



				$('#box_<?php echo $object_name?>').click(function(){
					object_perem = Number(localStorage.getItem('<?php echo $object_name?>'));
// -----forest_class-----
				if((object_class.id == 'forest') && (object_name.id !== 'forest')) {$forest = Number(localStorage.getItem('forest')); $forest = $forest-$level_<?php echo $object_name?>-($work_<?php echo $object_name?>*$level_<?php echo $object_name?>);if ($forest < 0) {$forest = 0}; localStorage.setItem('forest',$forest);
				if(Number(localStorage.getItem('forest')) > 0) {object_perem = object_perem + $level_<?php echo $object_name?> + ($work_<?php echo $object_name?>*$level_<?php echo $object_name?>) - $deal_<?php echo $object_name?>;}
				};
				if((object_class.id == 'forest') && (object_name.id == 'forest')) {object_perem = object_perem + $level_<?php echo $object_name?> + ($work_<?php echo $object_name?>*$level_<?php echo $object_name?>) - $deal_<?php echo $object_name?>;}
// -----metal_class-----
				if((object_class.id == 'metal') && (object_name.id !== 'metal')) {$metal = Number(localStorage.getItem('metal')); $metal = $metal-$level_<?php echo $object_name?>-($work_<?php echo $object_name?>*$level_<?php echo $object_name?>);if ($metal < 0) {$metal = 0}; localStorage.setItem('metal',$metal);
				if(Number(localStorage.getItem('metal')) > 0) {object_perem = object_perem + $level_<?php echo $object_name?> + ($work_<?php echo $object_name?>*$level_<?php echo $object_name?>) - $deal_<?php echo $object_name?>;}
				};
				if((object_class.id == 'metal') && (object_name.id == 'metal')) {object_perem = object_perem + $level_<?php echo $object_name?> + ($work_<?php echo $object_name?>*$level_<?php echo $object_name?>) - $deal_<?php echo $object_name?>;}

				if (object_perem < 0) {object_perem = 0}
				localStorage.setItem(object_name.id,object_perem);
					$('#box_<?php echo $object_name?>').css('box-shadow','inset 0px 0px 20px green');
					setTimeout(function() { $('#box_<?php echo $object_name?>').css('box-shadow','none') }, 100);
				});

				$('#<?php echo $object_name?>').click(function(){
					if(object_perem > 0){$money = $money+object_perem*$level_game*<?php echo $object_id?>};
					if ($money >= $next_level_<?php echo $object_name?>) {$('#next_level_<?php echo $object_name?>').css('display','block');$('#next_level_<?php echo $object_name?>_2').css('display','none')}
					if ($money >= $cost_dealer) {$('#cost_dealer').css('display','block');$('#cost_dealer_2').css('display','none')}
					if ($money >= $cost_worker) {$('#cost_worker').css('display','block');$('#cost_worker_2').css('display','none')}
					if ($money >= $cost_ucher) {$('#cost_ucher').css('display','block');$('#cost_ucher_2').css('display','none')}
					money();
					object_perem = 0;
					localStorage.setItem('<?php echo $object_name?>',object_perem);
				});
				$('#next_level_game_button').click(function(){
					object_perem = 0;
				});
			});
			function object(){
			if(object_perem >= 1000000){big_object()} else {small_object()};
				}
				function big_object(){
					var $col_symbol = object_perem.toString().length; $big_object = (Math.round((object_perem/1000) * 10) / 10000).toFixed(2)+'^'+($col_symbol-1);
					document.getElementById('<?php echo $object_name?>').innerHTML = "<b>"+$big_object+"&nbsp"+"</b>";
				}
				function small_object(){
					document.getElementById('<?php echo $object_name?>').innerHTML = "<b>"+object_perem+"&nbsp"+"</b>";
				}
		</script>
	</div>

	</section>

	<?php } ?>

	<!-- -----------------------------------------------TIMER------------------------------------------ -->

	<div id="unvisible" style="top:top_timer%"><div id="timer"></div><div id="speed_timer"></div></div>
	
			<script type="text/javascript">
				$(document).ready(function(){
					function timer_func(){
						timer_speed = Number(localStorage.getItem('timer_speed'));
					
					if($timer > 0) {$timer = $timer - 1; localStorage.setItem('timer',$timer);}
					if ($timer <= 0) {
						$level_timer = $level_timer +1; localStorage.setItem('level_timer',$level_timer);
						$visible_object = $level_timer+1; localStorage.setItem('visible_object',$visible_object);
						$timer = $level_timer*900/$col_uchers;
						$.ajax({url: 'select.php',type: 'POST',dataType: 'html',data: {send:$visible_object},success: function(data){$lt = '#'+data+'_section'; $($lt).css({'display':'block'}); var coords_unvisible = ($('#box_'+data).offset().top); $('#unvisible').offset({top:coords_unvisible});}});
					};
					$d = Math.floor($timer/86400);
					$h = Math.floor($timer/3600-$d*24); if ($h<10) {$h="0"+$h};
					$m = Math.floor($timer/60-$d*24*60-$h*60); if ($m<10) {$m="0"+$m};
					$s = Math.floor($timer-$d*86400-$h*3600-$m*60); if ($s<10) {$s="0"+$s};

					document.getElementById('timer').innerHTML = "<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"+$h+":"+$m+":"+$s+"</h1>";
					if($timer > 86400) {
						document.getElementById('timer').innerHTML = "<h1>&nbsp&nbsp&nbsp&nbsp"+$d+"д/"+$h+":"+$m+":"+$s+"</h1>";
					}
					if(bonus_ucher_timer > 0) {document.getElementById('speed_timer').innerHTML = "<h4>&nbsp&nbsp&nbsp&nbsp (x"+speed_bonus_ucher+")</h4>"} else {document.getElementById('speed_timer').innerHTML = ""}

					if(brilliant >= 5) {$('#bonus_ucher_15min').addClass('open').removeClass('close')} else {$('#bonus_ucher_15min').addClass('close').removeClass('open')}
					if(brilliant >= 8) {$('#bonus_ucher_30min').addClass('open').removeClass('close')} else {$('#bonus_ucher_30min').addClass('close').removeClass('open')}
					if(brilliant >= 14) {$('#bonus_ucher_1hour').addClass('open').removeClass('close')} else {$('#bonus_ucher_1hour').addClass('close').removeClass('open')}
					if(brilliant >= 70) {$('#bonus_ucher_6hour').addClass('open').removeClass('close')} else {$('#bonus_ucher_6hour').addClass('close').removeClass('open')}
					if(brilliant >= 200) {$('#bonus_ucher_1day').addClass('open').removeClass('close')} else {$('#bonus_ucher_1day').addClass('close').removeClass('open')}
					if(brilliant >= 500) {$('#update_bonus_ucher').addClass('open').removeClass('close')} else {$('#update_bonus_ucher').addClass('close').removeClass('open')}
					if(brilliant >= bonus_day_update) {$('#bonus_day_update').addClass('open').removeClass('close')} else {$('#bonus_day_update').addClass('close').removeClass('open')}
					}
					setTimeout(function ts() {
						timer_func();
					setTimeout(ts, timer_speed);
					}, 1000);
				});
			</script>
	</div>

	<!-- -----------------------------------------------TREND------------------------------------------ -->
	<script type="text/javascript">
		setInterval(function() {
			setTimeout(function() {old_money = Number(localStorage.getItem('money'));},1000);
			trend = Number(localStorage.getItem('money'))-old_money;
			document.getElementById('trend').innerHTML = "<h5>"+trend+"/сек</h5>";
			localStorage.setItem('trend',trend);
		},1000);
	</script>

	<!-- -----------------------------------------------QUEST------------------------------------------ -->

	<div id="box_timer" class="box"><div id="box_timer_2"></div></div>
	<div id="box_timer_pause"><h2>||</h2></div>
	<script type="text/javascript">
		$(document).ready(function(){
			if($level_game > 1){
				$('#quest_block,#box_timer,#box_timer_2').css('display','block');
				$('#box_timer_pause').css('display','none');
			}
		});
	</script>
	<div id="questions">
		<script type="text/javascript">
		quest_money();
		</script>
	</div>

	<div id="next_level_game">
		<script type="text/javascript">
		document.getElementById('next_level_game').innerHTML = "<h1>Переход на следующий уровень города</h1><h2>Вы можете остаться на этом уровне города и заработать больше очков славы для получения большего количества наград, либо перейти на следующий уровень, доход на котором, при продаже товаров будет больше. При переходе на следующий уровень прогресс города теряется. Торговцы, рабочие и ученые остаются без изменений.</h2><br><div id='cancel_level_game_button'><b>ОТМЕНА</b></div><div id='next_level_game_button'><b>ПЕРЕЙТИ</b></div>";
		</script>
	</div>

<!-- -----------------------------------------------QUEST_BLOCK------------------------------------------ -->
<div id="quest_block">
	<script type="text/javascript">
		$(document).ready(function(){
			var i=0;
			setInterval(function() {
				$('#box_timer_2').css('transform','rotate('+i+'deg)');i=i+p;
				localStorage.setItem('i',i); 
				if(i == 355) {$('#box_timer').css('box-shadow','0px 0px 20px red')}; if(i == 360) {$('#box_timer').css('box-shadow','0px 0px 0px red')};
				if (i == 360) {i = 0;
				};
			},27.77);
		});
</script>
<!-- -----------------------------------------------QUEST_BOX_1------------------------------------------ -->
	
	<script type="text/javascript">
		function quest_box_1(){
			<?php require('levels.php');?>
			$.ajax({url: 'select.php',type: 'POST',dataType: 'html',data: {send:levels[0]},success: function(obj1){

		$('#quest_block').append('<div id="quest_box_1" class="quest_box"><div id="q_'+obj1+'" class="q" style="display:block"></div>');
			document.getElementById('q_'+obj1).style.backgroundImage = "url('media/images/"+obj1+".jpg')";
			document.getElementById('q_'+obj1).innerHTML = '<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'+$q1_lost+'</h1>';
			setInterval(function() {
				if(localStorage.getItem('i') == 360) {
				if($("div").is("#quest_box_1")){
				var quest_object_1 = localStorage.getItem(obj1);
				$q1_lost = $q1_lost - quest_object_1;
				localStorage.setItem('q1_lost',$q1_lost);
				document.getElementById('q_'+obj1).innerHTML = '<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'+$q1_lost+'</h1>';
				localStorage.setItem(obj1,0);
				if($q1_lost <= 0) {$q1_koeff = $q1_koeff+1; $q1_lost = 10000*$level_game*$q1_koeff; $q_all = $q_all+1; $('#quest_box_1').remove()};
				if($q_all == 4) {$quest_end = 1; $quest_passed = $quest_passed + 1; localStorage.setItem('quest_passed',$quest_passed); $q_all = 0; quest_box_1()};
				$('#next_level_game_button').click(function(){
					$('#q_'+obj1).remove(); $('#quest_box_1').remove();
				});
				};
				};
			},25);
			}});
		};	
	</script>

<!-- -----------------------------------------------QUEST_BOX_2------------------------------------------ -->

	<script type="text/javascript">
		function quest_box_2(){
		<?php require('levels.php');?>
			$.ajax({url: 'select.php',type: 'POST',dataType: 'html',data: {send:levels[1]},success: function(obj2){

		$('#quest_block').append('<div id="quest_box_2" class="quest_box"><div id="q_'+obj2+'" class="q" style="display:block"></div>');
			document.getElementById('q_'+obj2).style.backgroundImage = "url('media/images/"+obj2+".jpg')";
			document.getElementById('q_'+obj2).innerHTML = '<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'+$q2_lost+'</h1>';
			setInterval(function() {
				if(localStorage.getItem('i') == 360) {
				if($("div").is("#quest_box_2")){
				var quest_object_2 = localStorage.getItem(obj2);
				$q2_lost = $q2_lost - quest_object_2;
				localStorage.setItem('q2_lost',$q2_lost);
				document.getElementById('q_'+obj2).innerHTML = '<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'+$q2_lost+'</h1>';
				localStorage.setItem(obj2,0);
				if($q2_lost <= 0) {$q2_koeff = $q2_koeff+1; $q2_lost = 10000*$level_game*$q2_koeff; $q_all = $q_all+1; $('#quest_box_2').remove()};
				if($q_all == 4) {$quest_end = 1; $quest_passed = $quest_passed + 1; $q_all = 0; quest_box_2()};
				$('#next_level_game_button').click(function(){
				if(levels[1] !== 0) {
				$('#q_'+obj2).remove(); $('#quest_box_2').remove();
				}
			});
				};
				};
			},25);
			}});
		};	
	</script>

		<!-- -----------------------------------------------QUEST_BOX_3------------------------------------------ -->

	<script type="text/javascript">
		function quest_box_3(){
		<?php require('levels.php');?>
			$.ajax({url: 'select.php',type: 'POST',dataType: 'html',data: {send:levels[2]},success: function(obj3){

		$('#quest_block').append('<div id="quest_box_3" class="quest_box"><div id="q_'+obj3+'" class="q" style="display:block"></div>');
			document.getElementById('q_'+obj3).style.backgroundImage = "url('media/images/"+obj3+".jpg')";
			document.getElementById('q_'+obj3).innerHTML = '<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'+$q3_lost+'</h1>';
			setInterval(function() {
				if(localStorage.getItem('i') == 360) {
				if($("div").is("#quest_box_3")){
				var quest_object_3 = localStorage.getItem(obj3);
				$q3_lost = $q3_lost - quest_object_3;
				localStorage.setItem('q3_lost',$q3_lost);
				document.getElementById('q_'+obj3).innerHTML = '<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'+$q3_lost+'</h1>';
				localStorage.setItem(obj3,0);
				if($q3_lost <= 0) {$q3_koeff = $q3_koeff+1; $q3_lost = 10000*$level_game*$q3_koeff; $q_all = $q_all+1; $('#quest_box_3').remove()};
				if($q_all == 4) {$quest_end = 1; $quest_passed = $quest_passed + 1; $q_all = 0; quest_box_3()};
				$('#next_level_game_button').click(function(){
				if(levels[2] !== 0) {
				$('#q_'+obj3).remove(); $('#quest_box_3').remove();
				}
			});
				};
				};
			},25);
			}});
		};	
	</script>

		<!-- -----------------------------------------------QUEST_BOX_4------------------------------------------ -->

	<script type="text/javascript">
		function quest_box_4(){
		<?php require('levels.php');?>
			$.ajax({url: 'select.php',type: 'POST',dataType: 'html',data: {send:levels[3]},success: function(obj4){

		$('#quest_block').append('<div id="quest_box_4" class="quest_box"><div id="q_'+obj4+'" class="q" style="display:block"></div>');
			document.getElementById('q_'+obj4).style.backgroundImage = "url('media/images/"+obj4+".jpg')";
			document.getElementById('q_'+obj4).innerHTML = '<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'+$q4_lost+'</h1>';
			setInterval(function() {
				if(localStorage.getItem('i') == 360) {
				if($("div").is("#quest_box_4")){
				quest_object_4 = localStorage.getItem(obj4);
				$q4_lost = $q4_lost - quest_object_4;
				localStorage.setItem('q4_lost',$q4_lost);
				document.getElementById('q_'+obj4).innerHTML = '<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'+$q4_lost+'</h1>';
				localStorage.setItem(obj4,0);
				if($q4_lost <= 0) {$q4_koeff = $q4_koeff+1; $q4_lost = 10000*$level_game*$q4_koeff; $q_all = $q_all+1; $('#quest_box_4').remove()};
				if($q_all == 4) {$quest_end = 1; $quest_passed = $quest_passed + 1; $q_all = 0; quest_box_4()};
				$('#next_level_game_button').click(function(){
				if(levels[3] !== 0) {
				$('#q_'+obj4).remove(); $('#quest_box_4').remove();
				}
			});
				};
				};
			},25);
			}});
		};	
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			if($level_game >= 2) {
			if($q1_lost > 0) {<?php require('levels.php');?>quest_box_1()};
			if(($q2_lost > 0) && (levels[1] !== 0)){<?php require('levels.php');?>quest_box_2()};
			if(($q3_lost > 0) && (levels[2] !== 0)){<?php require('levels.php');?>quest_box_3()};
			if(($q4_lost > 0) && (levels[3] !== 0)){<?php require('levels.php');?>quest_box_4()};
			};
			$('#next_level_game_button').click(function(){
				quest_box_1(); quest_box_2(); quest_box_3(); quest_box_4();
			});
		});
	</script>
	
	<!-- <script>
		$(document).ready(function(){
			setInterval(function() {
				var elem = document.elementFromPoint(15,100).id.slice(4);
				$('#'+elem+'_section').css('opacity','0.01');
				var elem2 = document.elementFromPoint(15,160).id.slice(4);
				$('#'+elem2+'_section').css('opacity','1'); 
			});
   		});
  	</script> -->

</div>

<?php require_once('bonus.php');?>

<?php require_once('templates/bottom.php');?>
