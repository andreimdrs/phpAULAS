<?php
$rotas = [
    "/" => "/pages/home.html",
    "/error" => "/pages/404.php",
    "/cadastro" => "/pages/cadastro.html",
    "/login" => "/pages/login.html"
];


function rotear($uri, $rotas) {
    if (array_key_exists($uri, $rotas)) {
        include __DIR__ . $rotas[$uri];
    } else {
        include __DIR__ . '/pages/404.php';
    }
}