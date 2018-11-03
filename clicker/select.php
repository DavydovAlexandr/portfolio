<?php
$result = $_POST['send'];

require_once('config.php');

	$query = "SELECT object_name FROM objects WHERE object_id=$result";
	$cat=mysql_query($query);
				if(!$cat){
					exit($query);
				}
			while($obj=mysql_fetch_array($cat)){
				$object_name = $obj['object_name'];
				echo $object_name;
}?>