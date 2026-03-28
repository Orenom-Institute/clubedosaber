<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Bem vindo ao Clube</title>
  <meta http-equiv="refresh" content="600;url=/index.php" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta name="keywords" content="deschooling unschooling homeschooling worldschooling learning">
  <meta name="description" content="comunidade voltada para a curadoria de desescolarização.">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />

  <!-- FAVICON -->
  <link rel="shortcut icon" href="/imagens/icones/favicon-32x32.png" type="image/png" sizes="32x32" />

  <!-- CSS -->
  <link rel="stylesheet" href="/includes/css/clubedosaber.css">

  <!-- Link fontes -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Link Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- scripts do Bootstrap (jQuery e Popper.js) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <!-- o popper.min.js deve ficar antes do bundle.min.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://md-block.verou.me/md-block.js" type="module"></script>
  <script src="/includes/js/scrollpage.js"></script>

</head>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:#E2E2E2;">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php">
      <img src="/imagens/logos/logo-clube-e2e.png" alt="">
    </a>

    <!-- Botão de colapso para telas menores -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="navbar-nav ml-auto">

        <!-- Início -->
        <a class="nav-link active" href="/inicio.php">Início</a>

        <!-- Institucional -->
        <a class="nav-link" href="/institucional/institucional.php">Institucional</a>

        <!-- Curadoria -->
        <div class="nav-item dropdown dmenu">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navbarDropdown">Curadoria</a>
          <div class="dropdown-menu sm-menu">
            <a class="dropdown-item" href="/curadoria/curadoria.php">Sobre Curadoria</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://raindrop.io/clubedosaber/aprendizagem-44418252"
              target="_blank">Aprendizagem</a>
            <a class="dropdown-item" href="https://raindrop.io/clubedosaber/competencias-44418265"
              target="_blank">Competências</a>
            <a class="dropdown-item" href="https://raindrop.io/clubedosaber/homeschooling-44418151"
              target="_blank">Homeschooling</a>
            <a class="dropdown-item" href="https://raindrop.io/clubedosaber/unschooling-44418150"
              target="_blank">Unschooling</a>
          </div>
        </div>

        <!-- Blog -->
        <a class="nav-link" href="https://clubedosaber.substack.com" target="_black">Blog</a>

        <!-- Feeds -->
        <a class="nav-link" href="https://alltop.com/my/clubedosaber" target="_black">Feeds</a>

        <!-- Eventos -->
        <a class="nav-link" href="https://raindrop.io/clubedosaber/eventos-44415659" target="_blank">Eventos</a>

        <!-- Cursos
    <a class="nav-link" href="https://raindrop.io/clubedosaber/cursos-44470852" target=" _blank">Cursos</a> -->

        <!-- Loja
    <a class="nav-link" href="https://clubedossaberes.com.br" target="_black">Sebo</a> -->

        <!-- Contato -->
        <a class="nav-link" href="/contato/contato.php">Contato</a>

        <!-- Login -->
        <?php
        if (isset($_SESSION["cpf"]) and isset($_SESSION["cnpj"])) {
          for ($i = 0; $i < 20; $i++)
            echo "&nbsp;";
          echo "<a class='nav-link btn btn-sm btn-primary text-white' href='/login/login.php' style='font-size:18px;'>Login</a>";
        }
        ?>
      </div>
    </div>
  </div>
</nav>