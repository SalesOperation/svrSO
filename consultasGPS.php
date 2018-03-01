<?php
	header('Access-Control-Allow-Origin: *');
	$url = 'http://iteshn.hol.es/server_app/svrConsultasSO.php';
	// create curl resource 
        try{
             $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, $url); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 
        echo $output;

        // close curl resource to free up system resources 
        curl_close($ch);
        echo $url;   
        }catch(Exception  $ex){
               echo $ex;
        }
        

?>










