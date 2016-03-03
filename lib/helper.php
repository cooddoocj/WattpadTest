<?php

include 'const.php';

function assure_response($response) {
	if ($response->status_code == 200)
		return;

	echo 'Error! Response dumped:<br /><br />';
	echo '<pre>';
	print_r($response);
	echo '</pre><br /><br />';
	die();
}

function is_logged_in() {
	return isset($_SESSION['username']) && isset($_SESSION['access_token']);
}

function print_header_html() {
	global $BASE_URL;

	if (is_logged_in()) {
		echo '<div>Username: ' . $_SESSION['username'] . '<br />';
		echo 'Access Token: ' . $_SESSION['access_token'] . '<br />';
		echo '<a href="' . $BASE_URL . '/oauth/logout.php">Log Out</a></div>';
	}
	else
		echo '<div><a href="' . $BASE_URL . '/oauth/login.php">Log In</a></div>';

	echo '<hr />';
}

function print_start_html() {
	echo '<html><head><meta charset="UTF-8" /><title>Wattpad Test</title></head><body>';
	print_header_html();
}

function print_end_html() {
	echo '</body></html>';
}

function print_tests_html() {
	echo '<div>';
	echo '<a href="search_by_text.php">Searches by Text Test</a>';
	echo '</div>';
	echo '<hr />';
}

function print_response_json_html($response) {
	$json = json_decode($response->body);
	echo '<pre>' . print_r($json, TRUE) . '</pre>';
}
