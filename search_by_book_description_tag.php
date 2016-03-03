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

echo '<h1>Searching for: <a href="https://www.wattpad.com/story/51991223" target="_blank">[BW51991223] (51991223) Quia Nominor Uir</a></h1>';
$response = Requests::get('https://api.wattpad.com/v4/stories?query=BW51991223', $headers, $options);
assure_response($response);
print_response_json_html($response);
flush();

echo '<h1>Searching for: <a href="https://www.wattpad.com/story/57884456" target="_blank">[BW57884456] (57884456) O Único Homem da Minha Mulher Sou Eu</a></h1>';
$response = Requests::get('https://api.wattpad.com/v4/stories?query=BW57884456', $headers, $options);
assure_response($response);
print_response_json_html($response);
flush();

print_end_html();
