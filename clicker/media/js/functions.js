
// -----MONEY-----
function money(){
	if($money >= 1000000){big_money()} else {small_money()};
}

function big_money() {
	var $col_symbol = $money.toString().length; $big_money = (Math.round(($money/1000) * 10) / 10000).toFixed(2)+'^'+($col_symbol-1);
	document.getElementById('money').innerHTML = "<b><h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"+$big_money+"&nbsp"+"</h1></b>";
}

function small_money(){
	document.getElementById('money').innerHTML = "<b><h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"+$money+"&nbsp"+"</h1></b>";
}

// -----DIALER-----
function cost_dealer(){
	if($cost_dealer >= 1000000){big_cost_dealer()} else {small_cost_dealer()};
}

function big_cost_dealer() {
	var $col_symbol = $cost_dealer.toString().length; $big_cost_dealer = (Math.round(($cost_dealer/1000) * 10) / 10000).toFixed(2)+'^'+($col_symbol-1);
	document.getElementById('cost_dealer').innerHTML = "<b>Цена: "+$big_cost_dealer+"&nbsp"+"$</b>"+"&nbsp";
	document.getElementById('cost_dealer_2').innerHTML = "<b>Цена: "+$big_cost_dealer+"&nbsp"+"$</b>"+"&nbsp";
}

function small_cost_dealer(){
	document.getElementById('cost_dealer').innerHTML = "<b>Цена: "+$cost_dealer+"&nbsp"+"$</b>"+"&nbsp";
	document.getElementById('cost_dealer_2').innerHTML = "<b>Цена: "+$cost_dealer+"&nbsp"+"$</b>"+"&nbsp";
}

// -----WORKER-----
function cost_worker(){
	if($cost_worker >= 1000000){big_cost_worker()} else {small_cost_worker()};
}

function big_cost_worker() {
	var $col_symbol = $cost_worker.toString().length; $big_cost_worker = (Math.round(($cost_worker/1000) * 10) / 10000).toFixed(2)+'^'+($col_symbol-1);
	document.getElementById('cost_worker').innerHTML = "<b>Цена: "+$big_cost_worker+"&nbsp"+"$</b>"+"&nbsp";
	document.getElementById('cost_worker_2').innerHTML = "<b>Цена: "+$big_cost_worker+"&nbsp"+"$</b>"+"&nbsp";
}

function small_cost_worker(){
	document.getElementById('cost_worker').innerHTML = "<b>Цена: "+$cost_worker+"&nbsp"+"$</b>"+"&nbsp";
	document.getElementById('cost_worker_2').innerHTML = "<b>Цена: "+$cost_worker+"&nbsp"+"$</b>"+"&nbsp";
}

// -----UCHER-----
function cost_ucher(){
	if($cost_ucher >= 1000000){big_cost_ucher()} else {small_cost_ucher()};
}

function big_cost_ucher() {
	var $col_symbol = $cost_ucher.toString().length; $big_cost_ucher = (Math.round(($cost_ucher/1000) * 10) / 10000).toFixed(2)+'^'+($col_symbol-1);
	document.getElementById('cost_ucher').innerHTML = "<b>Цена: "+$big_cost_ucher+"&nbsp"+"$</b>"+"&nbsp";
	document.getElementById('cost_ucher_2').innerHTML = "<b>Цена: "+$big_cost_ucher+"&nbsp"+"$</b>"+"&nbsp";
}

function small_cost_ucher(){
	document.getElementById('cost_ucher').innerHTML = "<b>Цена: "+$cost_ucher+"&nbsp"+"$</b>"+"&nbsp";
	document.getElementById('cost_ucher_2').innerHTML = "<b>Цена: "+$cost_ucher+"&nbsp"+"$</b>"+"&nbsp";
}
// -----QUEST-----
function quest_end(){
	$quest_passed = $quest_passed + 1;
	$q1_lost =0; $q2_lost =0; $q3_lost =0; $q4_lost =0;
	$q1_need = $q1_need*2; $q2_need = $q2_need*2; $q3_need = $q3_need*2; $q4_need = $q4_need*2;
	$q_all = 0; $quest_end = 1; 
	$('#quest_box_1, #quest_box_2, #quest_box_3, #quest_box_4').css('display','block');
}

function quest_money(){
	if($quest_money >= 1000000){big_quest_money()} else {small_quest_money()};
}

function big_quest_money() {
	var $col_symbol = $quest_money.toString().length; $big_quest_money = (Math.round(($quest_money/1000) * 10) / 10000).toFixed(2)+'^'+($col_symbol-1);
	document.getElementById('questions').innerHTML = "<h2>Наберите "+$big_quest_money+"$ для получения очков славы за деньги</h2>";
}

function small_quest_money(){
	document.getElementById('questions').innerHTML = "<h2>Наберите "+$quest_money+"$ для получения очков славы за деньги</h2>";
}
