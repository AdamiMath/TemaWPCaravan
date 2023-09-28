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

<!--Fim da Navegação-->

  <section class="py-5 bg-light text-center">
    <div class=" container">
      <div class="my-5">
        <span class="h6 d-block">SEU PLANO, SUA VIAGEM</span>
        <h2 class="display-4">Escolha o Plano</h2>
      </div>

      <div class="row">
        <div class="col-lg mb-5">
            <div class="rounded p-3 box-shadow" style="background-color: blanchedalmond;">
                <h2>Gold</h2>
                <ul class="lista-plano list-unstyled text-justify">
                    <li>→ 15 dias de viagem</li>
                    <li>→ 2 destinos diferentes</li>
                    <li>→ 80% dos gastos pago pela empresa</li>
                    <li>→ 3 ingressos para eventos</li>
                </ul>
                <form>
                <div class="form-group bg-transparent">
                    <select class="form-control bg-transparent" id="inputCidades">
                      <option>Selecione a Cidade</option>
                      <option>Dublin</option>
                      <option>Paris</option>
                      <option>California</option>
                    </select>
                  </div>
                </form>
                <div class="row mt-4 align-items-">
                    <div class="col">
                        <a href="inscricao.html" class="btn btn-lg btn-block" style="background-color:rgb(238, 202, 149);">Comprar Plano</a>
                    </div>
                    <div class="col">
                        <span class="h4">R$5.000,00</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg ">
            <div class="rounded p-3 box-shadow" style="background-color: blanchedalmond;">
                <h2>Platinum  <span style="background-color:rgb(238, 202, 149) ;" class="badge">Novo</span></h2>
       
                <ul class="lista-plano list-unstyled text-justify">
                    <li>→ 15 dias de viagem</li>
                    <li>→ 2 destinos diferentes</li>
                    <li>→ 80% dos gastos pago pela empresa</li>
                    <li>→ 3 ingressos para eventos</li>
                </ul>
                <form>
                <div class="form-group bg-transparent">
                    <select class="form-control bg-transparent" id="inputCidades">
                      <option>Selecione a Cidade</option>
                      <option>Dublin</option>
                      <option>Paris</option>
                      <option>California</option>
                    </select>
                  </div>
                </form>
                <div class="row mt-4 align-items-">
                    <div class="col">
                        <a href="inscricao.html" class="btn btn-lg btn-block" style="background-color:rgb(238, 202, 149);">Comprar Plano</a>
                    </div>
                    <div class="col">
                        <span class="h4">R$5.000,00</span>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

  </section>
 
<!-- Começo do Footer-->
<?php get_footer(); ?>

  <script src="./js/jquery-3.3.1.slim.min.js"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/bootstrap.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>