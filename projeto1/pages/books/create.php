<?php

 if (! hasUser()) {
    header('Location: /');
 }

 $method = $_SERVER['REQUEST_METHOD'];
 if ($method == 'GET') {
    include __DIR__ . '/../../pages/books/create.php';
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Livro</title>
</head>
<body>
    
</body>
</html>

