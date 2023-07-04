<?php

include __DIR__ . "route.php";
include __DIR__ . "banquinho.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);