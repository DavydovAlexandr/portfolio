var first_enter = Number(localStorage.getItem('first_enter'));

// FIRST_ENTER_LEVEL_1
if(first_enter == 0) {
$(document).ready(function(){
	$('#first_enter').css({'display':'block', 'position':'absolute', 'top':'0%', 'left':'0%', 'width':'100%', 'height':'100%','color':'white', 'background':'rgb(0,0,0,0.7)','z-index':'2000'});

$('#first_enter').append('<div id="first_enter_text"></div>');
document.getElementById('first_enter_text').style.display = "block";
document.getElementById('first_enter_text').style.position = "absolute";
document.getElementById('first_enter_text').style.width = "50%";
document.getElementById('first_enter_text').style.height = "auto";
document.getElementById('first_enter_text').style.top = "25%";
document.getElementById('first_enter_text').style.left = "23%";
document.getElementById('first_enter_text').style.background = "rgb(0,0,0,0.6)";
document.getElementById('first_enter_text').style.border = "1px solid white";
document.getElementById('first_enter_text').style.boxShadow = "0px 0px 10px aqua";
document.getElementById('first_enter_text').style.borderRadius = "5px";
document.getElementById('first_enter_text').style.padding = "1%";
document.getElementById('first_enter_text').style.fontSize = "150%";
document.getElementById('first_enter_text').style.cursor = "pointer";

$('#first_enter').append('<div id="pointer" class="mig"></div>');
document.getElementById('pointer').style.display = "none";
document.getElementById('pointer').style.position = "absolute";
document.getElementById('pointer').style.top = "45%";
document.getElementById('pointer').style.left = "45%";
document.getElementById('pointer').style.width = "8%";
document.getElementById('pointer').style.height = "16%";
document.getElementById('pointer').style.backgroundImage = "url('media/images/pointer.png')";
document.getElementById('pointer').style.backgroundSize = "100%";
document.getElementById('pointer').style.backgroundPositionX = "center";

var x = 0;
setTimeout(function(){
	$('#level_game').css({'z-index':'2001'});
	$('#pointer').css({'display':'block'});
},5000);
first_text = "Здравствуйте ! В этой игре у Вас есть замок. С каждым последующим уровнем замка будет расти темп производства ресурсов и их реализации. бла, бла, бла..."; text();

$(document).ready(function(){
	$('#first_enter_text').click(function(){
		document.getElementById('first_enter_text').innerHTML = '';
		x++;
		if(x == 1){$('#level_game').removeClass('shadow'); $('#level_game').css({'z-index':'1999'}); $('#first_enter_text').css({'cursor':'default'}); $('#pointer').css({'display':'none'}); next_1()}
		if(x == 2){next_2()}
		if(x == 8){$('#box_ucher,#col_uchers,#cost_ucher,#cost_ucher_2,#box_worker,#col_workers,#cost_worker,#cost_worker_2').css({'z-index':'1999'}); $('#first_enter_text').css({'cursor':'default'}); $('#pointer').css({'display':'none'}); next_8()}
		if(x == 10){localStorage.setItem('first_enter',1); $('#first_enter').css({'display':'none'})}
	});
});

$(document).ready(function(){
	$('#next_level_forest').click(function(){
		document.getElementById('first_enter_text').innerHTML = '';
		x++;
		if(x == 2){$('#next_level_forest_2').css({'z-index':'2001'}); $('#next_level_forest').css({'z-index':'1999'}); $('#pointer').css({'display':'none'}); next_2()}
		if(x == 5){$('#next_level_forest').removeClass('shadow'); $('#next_level_forest_2').css({'z-index':'1999'}); $('#pointer').css({'display':'none'}); next_5()}
	});
});

$(document).ready(function(){
	$('#forest').click(function(){
		x++;
		if(x == 3){document.getElementById('first_enter_text').innerHTML = ''; $('#pointer').css({'display':'none'}); $('#forest').removeClass('shadow'); $('#money,#money_img').css({'z-index':'2001'}); next_3()}
	});
});

$(document).ready(function(){
	$('#box_forest').click(function(){
		x++;
		if(x == 4){$('#box_forest').removeClass('shadow'); $('#pointer').css({'top':'28%','left':'3.6%'}); next_4()}
	});
});

$(document).ready(function(){
	$('#cost_dealer').click(function(){
		document.getElementById('first_enter_text').innerHTML = '';
		x = 6;
		if(x == 6){$('#box_dealer,#col_dealers,#cost_dealer,#cost_dealer_2').css({'z-index':'1999'}); clearInterval(interval_2); $('#pointer').css({'display':'none'}); next_6()}
	});
});

$(document).ready(function(){
	$('#deal_forest').click(function(){
		document.getElementById('first_enter_text').innerHTML = '';
		x++;
		if(x == 7){$('#deal_forest,#next_level_forest,#next_level_forest_2,#box_forest,#forest').css({'z-index':'1999'}); $('#first_enter_text').css({'cursor':'pointer'}); $('#pointer').css({'display':'none'}); next_7()}
	});
});

$(document).ready(function(){
	$('#quest').click(function(){
		document.getElementById('first_enter_text').innerHTML = '';
		x++;
		if(x == 9){$('#quest').css({'z-index':'1999'}); $('#pointer').css({'display':'none'}); $('#quest').removeClass('shadow'); $('#first_enter_text').css({'visibility':'hidden'}); $('#questions').css({'z-index':'2001'});
	setTimeout(function(){
		$('#first_enter_text').css({'visibility':'visible'}); $('#questions').css({'z-index':'1999','display':'none'}); next_9();
	},4000);
	}
	});
});

function next_1(){
	first_text = "Изначально в замке есть лесопилка, добывающая лес. Нажмите на улучшение лесопилки, чтобы она начала добычу леса..."; text();
	setTimeout(function(){
		$('#next_level_forest').css({'z-index':'2001'}); $('#next_level_forest').addClass('shadow'); $('#pointer').css({'display':'block','top':'25%','left':'7%'});
	},3000);
}

function next_2(){
	first_text = "Теперь давайте продадим лес, чтобы получить немного денег..."; text();
	setTimeout(function(){
		$('#forest').css({'z-index':'2001'});$('#forest').addClass('shadow');
		$('#pointer').css({'display':'block','top':'28%','left':'3.6%'});
	},1000);
}

function next_3(){
	first_text = "Каждый раз нажимая на значок леса, его добыча увеличивается..."; text();
	setTimeout(function(){
		$('#box_forest').css({'z-index':'2001'}); $('#box_forest').addClass('shadow');
		$('#pointer').css({'display':'block','top':'28%','left':'0%'});
	},1000);
}

function next_4(){
	first_text = " Давайте соберём 40$ и улучшим лесопилку..."; text();
	setTimeout(function(){
		$('#box_forest').css({'z-index':'2001'});
	},2000);
}

interval = setInterval(function(){
	if($money >= 40) {x = 4; $('#pointer').css({'top':'25%','left':'7%'}); $('#next_level_forest').css({'z-index':'2001'});$('#next_level_forest').addClass('shadow'); $('#box_forest').removeClass('shadow'); clearInterval(interval)
}
},1000)

interval_2 = setInterval(function(){
	if($money >= 60) {$('#pointer').css({'top':'25%','left':'87%'}); }
},100)

function next_5(){
	first_text = "Прекрасно ! Также в замке можно нанимать торговцев, чтобы они сами продавали лес. Соберите ещё немного денег для найма своего первого торговца..."; text();
	setTimeout(function(){
		$('#box_dealer,#col_dealers,#cost_dealer,#cost_dealer_2').css({'z-index':'2001'}); $('#cost_dealer').addClass('shadow');
		$('#pointer').css({'display':'block','top':'28%','left':'3.6%'});
	},1000);
}

function next_6(){
	first_text = "Теперь поставьте нанятого торговца на продажу леса..."; text();
	setTimeout(function(){
		$('#deal_forest').css({'z-index':'2001'});$('#deal_forest').addClass('shadow'); $('#pointer').css({'display':'block','top':'21%','left':'12.6%'});
	},1000);
}

function next_7(){
	first_text = "Рабочие и учёные нанимаются и ставятся на объекты также. Рабочие добывают больше ресурса, а учёные ускоряют исследование нового объекта..."; text();
	setTimeout(function(){
		$('#box_ucher,#col_uchers,#cost_ucher,#cost_ucher_2,#box_worker,#col_workers,#cost_worker,#cost_worker_2').css({'z-index':'2001'}); $('#pointer').css({'display':'block','top':'43%','left':'45%'});
	},1000);
}

function next_8(){
	first_text = "Для перехода на следующий уровень Вам необходимо выполнить определённое количество заданий. Давайте посмотрим какое задание необходимо выполнить на этом уровне..."; text();
	setTimeout(function(){
		$('#quest').css({'z-index':'2001'}); $('#quest').addClass('shadow'); $('#pointer').css({'display':'block','top':'16%','left':'69%'});
	},1500);
}

function next_9(){
	$('#first_enter_text').css({'cursor':'pointer'});
	first_text = "Прекрасно ! Основное обучение закончено ! Успешного улучшения замка до 2-го уровня !"; text();
	setTimeout(function(){
		$('#pointer').css({'display':'block','top':'38%','left':'45%'});
	},1000);
}

function text(){
	i = -1;
	setInterval(function(){
    if(i>=first_text.length-1) {
    return false
    }
    else {++i;
    document.getElementById('first_enter_text').innerHTML += first_text[i]}
	},50)
}
});
}

// FIRST_ENTER_LEVEL_2
$level_game = Number(localStorage.getItem('level_game'));
if((first_enter == 1) && ($level_game == 2)) {
	$(document).ready(function(){
		$('#first_enter').css({'display':'block', 'position':'absolute', 'top':'0%', 'left':'0%', 'width':'100%', 'height':'100%','color':'white', 'background':'rgb(0,0,0,0.7)','z-index':'2000'});

		$('#first_enter').append('<div id="first_enter_text"></div>');
document.getElementById('first_enter_text').style.display = "block";
document.getElementById('first_enter_text').style.position = "absolute";
document.getElementById('first_enter_text').style.width = "33%";
document.getElementById('first_enter_text').style.height = "auto";
document.getElementById('first_enter_text').style.top = "25%";
document.getElementById('first_enter_text').style.left = "19%";
document.getElementById('first_enter_text').style.background = "rgb(0,0,0,0.6)";
document.getElementById('first_enter_text').style.border = "1px solid white";
document.getElementById('first_enter_text').style.boxShadow = "0px 0px 10px aqua";
document.getElementById('first_enter_text').style.borderRadius = "5px";
document.getElementById('first_enter_text').style.padding = "1%";
document.getElementById('first_enter_text').style.fontSize = "150%";
document.getElementById('first_enter_text').style.cursor = "pointer";

$('#first_enter').append('<div id="pointer" class="mig"></div>');
document.getElementById('pointer').style.display = "none";
document.getElementById('pointer').style.position = "absolute";
document.getElementById('pointer').style.top = "39%";
document.getElementById('pointer').style.left = "32%";
document.getElementById('pointer').style.width = "8%";
document.getElementById('pointer').style.height = "16%";
document.getElementById('pointer').style.backgroundImage = "url('media/images/pointer.png')";
document.getElementById('pointer').style.backgroundSize = "100%";
document.getElementById('pointer').style.backgroundPositionX = "center";

var x = 0;
setTimeout(function(){
	$('#quest_block').css({'z-index':'2001','box-shadow':'0px 0px 10px white'}); $('#pointer').css({'display':'block'});
},2500);
first_text = "На втором уровне появился новый объект - Налог ..."; text_2();

$(document).ready(function(){
	$('#first_enter_text').click(function(){
		document.getElementById('first_enter_text').innerHTML = '';
		x++; console.log(x);
		if(x == 1){$('#pointer').css({'display':'none'}); $('#first_enter_text').css({'cursor':'default'}); next_11()}
		if(x == 3){$('#pointer').css({'display':'none'}); next_13()}
		if(x == 4){localStorage.setItem('first_enter',2); $('#first_enter').css({'display':'none'})}
	});
});

$(document).ready(function(){
	$('#box_timer').click(function(){
		document.getElementById('first_enter_text').innerHTML = '';
		x++; console.log(x);
		if(x == 2){$('#pointer').css({'display':'none'}); $('#first_enter_text').css({'cursor':'pointer'}); $('#forest').css({'z-index':'1999','box-shadow':'none'});next_12()}
	});
});

function next_11(){
	first_text = "Каждые 12 секунд из Ваших запасов забираются все необходимые ресурсы, но в течении этого времени их можно успеть продать. Кроме того, таймер налога можно поставить на паузу..."; text_2();
	$('#box_timer,#box_timer_pause').css({'z-index':'2001','box-shadow':'0px 0px 10px white','opacity':'1'});
	setTimeout(function(){
		$('#pointer').css({'display':'block','top':'28.5%','left':'74.5%'}); $('#forest').css({'z-index':'2001','box-shadow':'0px 0px 10px white'});
	},1000);
}

function next_12(){
	first_text = "При полном сборе налога добавляется очко славы..."; text_2();
	$('#box_timer,#box_timer_pause').css({'z-index':'1999','box-shadow':'none'});
	setTimeout(function(){
		$('#pointer').css({'display':'block','top':'39%','left':'32%'}); $('#quest').css({'z-index':'2001','box-shadow':'0px 0px 10px white'});
	},1000);
}

function next_13(){
	first_text = "Приятной игры !"; text_2();
	$('#quest').css({'z-index':'1999','box-shadow':'none'});
	setTimeout(function(){
		$('#pointer').css({'display':'block','top':'35%','left':'32%'});
	},1000);
}

function text_2(){
	i = -1;
	setInterval(function(){
    if(i>=first_text.length-1) {
    return false
    }
    else {++i;
    document.getElementById('first_enter_text').innerHTML += first_text[i]}
	},50);
}
	});
}