<?php
include "lib.php";
$bdd=coBdd();

if (isset($_POST['line'])) {
	//echo '<pre>',print_r($_POST),'</pre>';
	//$poids=recupData($_POST['line'], $bdd);
	viewChoicePath($bdd,$_POST['line']);
	//echo $poids;
}
else{
	if (isset($_POST['path'])) {
		$line=$_GET['line'];
		$poids=recupData($line,$_POST['path'], $bdd);
		echo $poids;
	}
	else{
		viewChoiceLine2($bdd);
	}
}
//signUp($bdd,"Rastar","Romain","lloyd");

/*
$ligne=14;
$poids=recupData($ligne, $bdd);
echo $poids;
*/




/*
$sql ="INSERT INTO `busmass`.`emabase` (`id`, `poids`) 
						VALUES(110, 230.50)";
$bdd->exec($sql);	
*/										

?>