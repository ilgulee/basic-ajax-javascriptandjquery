<?php

	$data = $_REQUEST;
	$user_input = $_REQUEST['user_input'];
	$response = strtoupper( $user_input );
	echo $response;

?>