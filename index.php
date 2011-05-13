<?php

echo 'Welcome to DylanMagruder.com. You are being redirected to the apropriate page';

// Function detect_mobile will determine whether or not the user is using a mobile phone
function detect_mobile () {
	// Set variable
	$mobile_browser = '0';
	
	// Determine whether or a not a browser is mobile
	if (strpos(strtolower($_SERVER['ALL_HTTP']), 'operamini') !== false) {
		$mobile_browser++;
	} elseif (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'iphone') !== false) {
		$mobile_browser++;
	} elseif (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'android') !== false) {
		$mobile_browser++;
	} elseif (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'webos') !== false) {
		$mobile_browser++;
	} elseif (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'windows') !== false) {
		$mobile_browser=0;
	}
	
	// Tell variable whether or not a browser is mobile
	if ($mobile_browser > 0) {
		return true;
	} else {
		return false;
	}
}

// Use detect_mobile
$mobile = detect_mobile();

if ($mobile == true) {
	header( 'Location: /m/index.html' );
} else {
	header( 'Location: /d/index.html' );
}
?>