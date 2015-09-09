<?php
	$first_name = "Harri";
	$last_name = "Ruttas";
	echo $first_name." ".$last_name;
?>
<br>
<?php

	$age = 5;

	//testib loogikat, juhul kui vanus on väiksem 
	//kui 18 siis kirjuta "alaealine" , muul juhul "täisaealine" 

	if($age < 18) {
		//tõene
		echo "alaealine";
	} 
	else {
		//väär
		echo "täisaealine";
	}

?>
<br>
<?php
	//vastavalt vanusele trükime nii mitu korda välja sõne "palju"

	for($i = 0 ; $i < $age; $i = $i + 1) {

		// tegevus mis kordub
		echo "palju".$i." ";
	}
	
	echo "õnne!";


?>
<br>
<?php

	//trükkivälja kuupäev: nädalapäev, kp kuu aasta
	echo date ("l,j, F, Y ,e ");
?>