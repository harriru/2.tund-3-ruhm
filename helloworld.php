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