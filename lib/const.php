<?php

$BASE_URL = 'https://barongello.com.br/WattpadTest';

$WP = array(
	'API_KEY'                 => 'JFnEr2JysRsJvwt7thEKPTIyVUBKpthqKuLvX3BZNb4r',
	'SECRET'                  => 'p1SliRZDrS3AIniLc0esb0AgWJTCIn1gj1s70HScx3ut',
	'OAUTH_CALLBACK_URL'      => $BASE_URL . '/oauth/callback.php',
	'OAUTH_AUTHORIZATION_URL' => 'https://api.wattpad.com/v4/auth/token?grantType=authorizationCode'
);

$WP['OAUTH_GET_CODE_URL'] = 'https://www.wattpad.com/oauth/code?api_key=' . $WP['API_KEY'] . '&scope=read&redirect_uri=' . $WP['OAUTH_CALLBACK_URL'];
