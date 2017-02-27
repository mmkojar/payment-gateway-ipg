<?php

date_default_timezone_set('Asia/Kolkata');
$dateTime= date('Y:m:d-H:i:s');


	//$dateTime = date("Y:m:d-H:i:s");

	function getDateTime() {
		global $dateTime;
		return $dateTime;
		
		
		
		
	}

	/*
		Function that calculates the hash of the following parameters:
		 - Store Id
		 - Date/Time(see $dateTime above)
		 - chargetotal
		 - shared secret
	*/
	function createHash($chargetotal,$Currency) {
		// Please change the store Id to your individual Store ID
		$storeId = "3344000159";
		// NOTE: Please DO NOT hardcode the secret in that script. For example read it from a database.
		$sharedSecret = "asdf1234";
		
		$stringToHash = $storeId . getDateTime() . $chargetotal . $Currency . $sharedSecret;
		$ascii = bin2hex($stringToHash);
		
		return sha1($ascii);
	}

	
	
?>
