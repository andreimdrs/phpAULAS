<?php
$dbSQLite = new SQLite3('/database.db');
$dbMySQL = new mysqli('127.0.0.1', 'root', '', 'banco');

$query = $dbSQLite->query('SELECT * FROM users');
$query2 = 
//em continuacao, veja chat gpt

