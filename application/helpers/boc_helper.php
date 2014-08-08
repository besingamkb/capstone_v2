<?php 

function dprint($array) {
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}

function contextJson() {
	header('content-type: application/json');
}

function contextXml() {
	header("Content-type: text/xml");
}

function redirect($url) {
	header('Location:'. $url);
}

?>