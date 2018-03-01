<?php
header('Access-Control-Allow-Origin: *');
try{
	if(isset($_POST['op'])){
		$option = $_POST['op'];	
	}else{
		$option = 0;
	}

	switch ($option) 
	{
		case 1:
			$vResult = getLogin($_POST['user'], $_POST['pwd']);
			echo $vResult;
			break;
		
		default:
			echo json_encode(array("result"=>0, "msj"=>"no data found"));
			break;
	}

}catch(Exception $e){
	echo $e->getMessage();
}

//Get Login
function getLogin($vUser, $vPwd){
	include 'dblink.php';
	$vLic = '0';
	$vPwd = 'na-';

	if($vResult = $con->query('SELECT * FROM tbl_users where user_id =\'' . $vUser . '\' and password=\''. $vPwd .'\' and state=1')){
		while($vRow = $vResult->fetch_assoc()){
			$vLic = $vRow["licence"];
			break;
		}
	}else{
		return json_encode(array("result"=>99, "msj"=>$con->error));
	}
	return json_encode(array("result"=>1, "msj"=>"success", "lic"=>$vLic));
}

//Get EC
function getEC($id_cliente){
	include 'dblink.php';

	if($vResult = $con->query('SELECT * FROM tbl_saldos where user_id =\'' . $id_cliente . '\'')){
		while($vRow = $vResult->fetch_assoc()){
			$vLic = $vRow[""];
			break;
		}
	}else{
		return json_encode(array("result"=>99, "msj"=>$con->error));
	}
	return json_encode(array("result"=>1, "msj"=>"success", "lic"=>$vLic));
}


//Notificatios Push
function getPushNot(){
	$arr = array();

	array_push($arr, array("name"=>"xx", "age"=>8));

	echo json_encode($arr);
}

?>
