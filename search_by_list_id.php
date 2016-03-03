<?php

include 'lib/initialize.php';

print_start_html();
print_tests_html();

$headers = array(
	'Accept'          => 'application/json',
	'Accept-Encoding' => 'gzip, deflate, br',
	'Accept-Language' => 'pt-BR,pt;q=0.8,en-US;q=0.5,en;q=0.3',
	'Authorization'   => $WP['API_KEY'],
	'Connection'      => 'keep-alive',
	'Content-Type'    => 'application/json',
	'User-Agent'      => 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:44.0) Gecko/20100101 Firefox/44.0'
);
$options = array();

echo '<h1>Searching for: <a href="https://www.wattpad.com/list/294352190" target="_blank">(294352190) WattpadWatcher</a></h1>';
$response = Requests::get('https://api.wattpad.com/v4/lists/294352190', $headers, $options);
assure_response($response);
print_response_json_html($response);
flush();

echo '<h1>Searching for: <a href="https://www.wattpad.com/list/297985322" target="_blank">(297985322) Lista de leituras de W4ttp4dW4tch3r</a></h1>';
$response = Requests::get('https://api.wattpad.com/v4/lists/297985322', $headers, $options);
assure_response($response);
print_response_json_html($response);
flush();

print_end_html();
