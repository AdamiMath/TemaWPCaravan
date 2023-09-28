<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <title><?php bloginfo('name'); ?></title>

<!-- Header WP -->
<?php wp_head(); ?>
<!-- fechamento Header WP -->
</head>

<body>

  <!-- Modal  -->
  <div class="modal" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginTitulo" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLoginTitulo">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="loginEmail">Email</label>
              <input type="email" class="form-control" id="loginEmail" aria-describedby="emailHelp" placeholder="Seu email">
              <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Senha</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
            </div>
            <div class="form-group form-check">
           
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
       
        </div>
      </div>
    </div>
  </div>
  <!-- Fecha Modal  -->

  <nav class="navbar navbar-expand-md navbar-light fixed-top py-3 box-shadow" style="background-color: blanchedalmond;">
    <a href="/" class="navbar-brand">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/caravan.svg" alt="Caravan">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Locais</a>
          <div class="dropdown-menu" aria-labelledby="navbarScrollingDropdown" style="background-color: blanchedalmond;">
            <a href="locais.php" class="dropdown-item">California</a>
            <a href="locais.php" class="dropdown-item">Paris</a>
            <a href="locais.php" class="dropdown-item">Doublin</a>
          </div>
        </li>
        <li class=" nav-item active">
          <a href="planos.php" class="nav-link">Planos</a>
        </li>
        <li class="nav-item active">
          <a href="contato.php" class="nav-link">Contato</a>
        </li>
        <li class="nav-item active">
          <a href="" data-toggle="modal"  data-target="#modalLogin" class="nav-link">Login<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a href="inscricao.php" class="btn btn-outline-secondary ml-md-3">Inscreva-se</a>
        </li>
      </ul>
    </div>
  </nav>