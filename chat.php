<?php
	require_once ('config/config.php');
	$event = $_GET['event'];
	if($event == 'set'){
		$message = $_GET['message'];
		$name = $_GET['name'];
		$hour = date("H");
		$time = date("$hour:i:s");
		if(!$message == ""){
		$query="INSERT INTO $tbl_chat VALUES(Null,'$name','$message','$time')";
			$result=mysql_query($query);

		echo "[".$time."] ";echo $name.": ";echo $message;
		}
	}
	if($event == 'get'){
		$query = "SELECT * FROM $tbl_chat ORDER BY id";
			$result=mysql_query($query);
		if(!$result){
			exit($query);
		}
		while($res = mysql_fetch_array($result)){
			$msg[] = array("id"=>$res['id'],"time"=>$res['time'],"name"=>$res['name'],"posts"=>$res['message']);
		}
	echo json_encode($msg);
	}

	if($event == 'set_author'){
		$name = $_GET['name'];
		$f = fopen("log.txt", "a+"); fwrite($f, $name." ".date('d-m-Y H:i:s')."\r\n"); fclose($f);
	}
?>