<?php
error_reporting(E_ALL);
$liuting=array("beautiful","kind","ugly","short");
$lizhiguo=array("standsome","hight","husband");
if(isset($_GET['type'])){
	switch($_GET['type']){
		case "liuting":
		print json_encode($liuting[array_rand($liuting)]);
		break;
		case "lizhiguo":
		print json_encode($lizhiguo[array_rand($lizhiguo)]);
		break;
		default:
		print json_decode("n/a");
		break;
	}
}
?>