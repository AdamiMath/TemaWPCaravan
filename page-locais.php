<?php 

//Template Name: Sobre

?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section class="container-fluid">
    <div class="my-5 text-center">
      <span class="h6 d-block">O MELHOR DESTINO DA SUA VIAGEM</span>
      <h1 class="display-4">Descubra Dublin</h1>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md">
          <!-- -->
          <img class="img-fluid mb-4" src="<?php echo get_stylesheet_directory_uri(); ?>/img/local/foto-1.jpg" alt="cidade de Dublin">
          <img class="img-fluid mb-4" src="<?php echo get_stylesheet_directory_uri(); ?>/img/local/foto-2.jpg" alt="cidade de Dublin">
          
        </div>
        <div class="col-md">
          <img class="img-fluid mb-4" src="<?php echo get_stylesheet_directory_uri(); ?>/img/local/foto-4.jpg" alt="cidade de Dublin">
          <img class="img-fluid mb-4" src="<?php echo get_stylesheet_directory_uri(); ?>/img/local/foto-5.jpg" alt="cidade de Dublin">
          
        </div>
        <div class="col-md">
          <img class="img-fluid mb-4" src="<?php echo get_stylesheet_directory_uri(); ?>/img/local/foto-6.jpg" alt="cidade de Dublin">
          <img class="img-fluid mb-4" src="<?php echo get_stylesheet_directory_uri(); ?>/img/local/foto-7.jpg" alt="cidade de Dublin">
        </div>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="my-5 text-center">
      <span class="h6 d-block">DESCUBRA O QUE FAZER NA CIDADE</span>
      <h1 class="display-4">Descubra Dublin</h1>
    </div>

    <table class="table table-hover table-responsive-md">
  <thead>
    <tr>
      <th scope="col">Data</th>
      <th scope="col">Evento</th>
      <th scope="col">Local</th>
      <th scope="col">Ingressos</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">23/10</th>
      <td>Exposição de Obra de Artes</td>
      <td>Dublin</td>
      <td><a class="btn btn-outline-secondary btn-sm" href="">Comprar Aqui</a></td>
    </tr>
    <tr>
      <th scope="row">18/11</th>
      <td>Show de Rock</td>
      <td>Dublin</td>
      <td><a class="btn btn-outline-secondary btn-sm" href="">Comprar Aqui</a></td>
    </tr>
    <tr>
      <th scope="row">15/12</th>
      <td>Corrida de Rua</td>
      <td>Dublin</td>
      <td><a class="btn btn-outline-secondary btn-sm" href="">Comprar Aqui</a></td>
    </tr>
  </tbody>
</table>
  </section>

  <?php get_footer(); ?>
  <?php endwhile; else: endif?>
</body>

</html>