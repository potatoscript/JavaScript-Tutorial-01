<?php

$datalist=array();
$data=array();

$d = $_POST['data'];

$data[0]="No";
$data[1]="Name";
$data[2]="Age";
$data[3]=" ";
array_push($datalist,$data);

$array = array("Volvo", "BMW", "Toyota");
$n =1;
foreach ($array as $value) {
	
	if (!in_array($n, $array_d))
	{
	  $data[0]=$n;
		$data[1]=$value;
		$data[2]="30";
		$data[3]='<svg onclick="Delete('.$n.')" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
		  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
		  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
		</svg>';
		array_push($datalist,$data);
	}
	
	$n++;
}

/*
if($table=="1"){
	
	
	$data[0]="2";
	$data[1]="Michael";
	$data[2]="50";
	$data[3]="X";
	array_push($datalist,$data);
	
	$data[0]="3";
	$data[1]="Mike";
	$data[2]="20";
	$data[3]="X";
	array_push($datalist,$data);
}

if($table=="2"){
	$data[0]="1";
	$data[1]="ABC";
	$data[2]="20";
	array_push($datalist,$data);
	$data[0]="2";
	$data[1]="XXX";
	$data[2]="10";
	array_push($datalist,$data);
}
*/
echo json_encode($datalist);

?>