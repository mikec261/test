<?php
include_once("../Model/classJSON.php");
$jsonData = new CustomJSON();

if(isset($_POST['btnValidate']) and $_POST['btnValidate']==true)
{	
	parse_str($_POST['data'], $formData);

	$unbalancedString = $formData['txtUnbalancedString'];
	$result ='';
	$odd = false;
	$long = strlen($unbalancedString);

	if($long%2!=0){
    	$odd = true;
	}

	// $p1 = )
	$p1 = 0;
	// $p2 = (
	$p2 = 0;

	for($i=0;$i<$long;$i++){ 
        if($unbalancedString[$i]=='(')
       	{$p1++;}else{$p2++;}
	} 

	if($p1 == $p2)
	{ $result = 'balanced';}
    
    if($p1!=$p2 and $odd==true)
    { $result = '-1'; }
	
	if($p1<$p2 and $odd==false)
	{
		$result = $p2-$p1;
		$result = $result/2;
	}

	if($p2<$p1 and $odd==false)
	{
		$result = $p1-$p2;
		$result = $result/2;
	}


	header('Content-type: application/json; charset=utf-8');
    $jsonData->setEstatus(true);
    $jsonData->setMsj(' '.$result);
    echo $jsonData->toJSON();
    exit();
	
}