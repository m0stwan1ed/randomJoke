<?php
	$json = file_get_contents('http://ec2-35-156-131-145.eu-central-1.compute.amazonaws.com/list');//get json
	$objectJson = json_decode($json);//decode json
	
	$pos = rand(0, 9);//random 0-9
	
	//output
	echo $objectJson[$pos] -> author;
	echo '<br>';
	echo $objectJson[$pos] -> content;
	echo '<br>';
	echo $objectJson[$pos] -> id;
	echo '<br>';
	echo $objectJson[$pos] -> year;
?>