<?php
	header('Access-Control-Allow-Origin: *');

	$url = 'http://iteshn.hol.es/server_app/svrConsultasSO.php';
	$xml = '';

	$request = new HTTPRequest($url, HTTP_METH_POST);
	$request->setRawPostData($xml);
	$request->send();
	$response = $request->getResponseBody();

	echo $response;

?>










