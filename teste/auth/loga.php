<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username'], $_POST['password'])) {
        $user = $_POST['username'];
        $passw = $_POST['password'];
    } else {
        header('location: /error');
    }
} else {
    header('location: /error');
}