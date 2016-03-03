<?php

include '../lib/initialize.php';

unset($_SESSION['username']);
unset($_SESSION['access_token']);

header('Location: ' . $BASE_URL);
