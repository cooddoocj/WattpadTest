<?php

include '../lib/initialize.php';

if (!isset($_GET['code']))
	header('Location: ' . $BASE_URL);

$headers = array();
$data = array(
	'apiKey' => $WP['API_KEY'],
	'secret' => $WP['SECRET'],
	'authCode' => $_GET['code'],
	'redirectUri' => $WP['OAUTH_CALLBACK_URL']
);

$response = Requests::post($WP['OAUTH_AUTHORIZATION_URL'], $headers, $data);

assure_response($response);

$json = json_decode($response->body);
$_SESSION['username'] = $json->auth->username;
$_SESSION['access_token'] = $json->auth->token;

header('Location: ' . $BASE_URL);
