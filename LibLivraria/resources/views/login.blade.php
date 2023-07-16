<!DOCTYPE html>
<html>
<head>
  <title>Tela de Registro - RPG Maker Style</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/css/styles.css">
  

</head>
<body>
  <div class="overlay">
    <div class="container text-center">
  <h1 class="mb-4"><i class="bi bi-book-half"></i>LibMaker</h1>
  <form action="/teste" method="get">
    <div class="form-group text-left">
      <label for="email" class="light-mode">
        <i class="bi bi-envelope"></i>
        Email
      </label>
      <input type="email" class="form-control" name="email" placeholder="Digite seu email">
    </div>
    <div class="form-group text-left">
      <label for="senha">
        <i class="bi bi-lock"></i>
        Senha
      </label>
      <input type="password" class="form-control" name="senha" placeholder="Digite sua senha">
    </div>
    <div class="form-group text-center">
      <input type="submit" class="btn btn-dark" value="Registrar">
    </div>
    <p class="register-link text-center">Não possui conta? <a href="/register">Registre-se</a></p>
  </form>
  <div class="dark-mode-toggle">
    <button class="btn btn-dark" onclick="toggleDarkMode()">
      <i class="bi bi-moon-stars-fill"></i>
    </button>
    
  </div>
</div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="/js/dark-mode.js"></script>
  
</body>
</html>