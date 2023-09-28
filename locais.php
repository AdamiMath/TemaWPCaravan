<?php get_header(); ?>
  <section>
    <div class="row bg-dark text-white container-fluid p-0 m-auto">
      <div class="col-lg-7 p-0">
        <div id="carouselcidades" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselcidades" data-slide-to="0" class="active"></li>
            <li data-target="#carouselcidades" data-slide-to="1"></li>
            <li data-target="#carouselcidades" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./img/california.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption">
                <h5>Califórnia</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./img/dublin.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption">
                <h5>Dublin</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./img/paris.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption ">
                <h5>Paris</h5>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselcidades"" role=" button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselcidades"" role=" button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div class="col-lg-5 m-auto pt-4">
        <h1 class="display-4" style="color: white;">Realize a viagem do seu sonho
        </h1>
        <p>O melhor lugar para viajar é com a caravan!</p>
        <form>
          <div class="input-group">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Inscreva-se</button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </section>



   
  <section class="container-fluid">
    <div class="my-5 text-center">
      <span class="h6 d-block">O MELHOR DESTINO DA SUA VIAGEM</span>
      <h1 class="display-4">Descubra Dublin</h1>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md">
          <img class="img-fluid mb-4" src="./img/local/foto-1.jpg" alt="cidade de Dublin">
          <img class="img-fluid mb-4" src="./img/local/foto-2.jpg" alt="cidade de Dublin">
          
        </div>
        <div class="col-md">
          <img class="img-fluid mb-4" src="./img/local/foto-4.jpg" alt="cidade de Dublin">
          <img class="img-fluid mb-4" src="./img/local/foto-5.jpg" alt="cidade de Dublin">
          
        </div>
        <div class="col-md">
          <img class="img-fluid mb-4" src="./img/local/foto-6.jpg" alt="cidade de Dublin">
          <img class="img-fluid mb-4" src="./img/local/foto-7.jpg" alt="cidade de Dublin">
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

  <script src="./js/jquery-3.3.1.slim.min.js"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/bootstrap.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>