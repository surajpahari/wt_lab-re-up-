
<?php
//demostration of array in php
$name=['ram','shyam',"hari"];
foreach ($name as $nam){
	echo($nam."  "); 
}
$name_roll = array('suraj' => 45, 'chals'=>62, 'binod'=>12);
foreach ($name_roll as $key => $value) {
	  echo($key.":".$value."  ");
}

 ?>