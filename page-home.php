<?php 

//Template Name: Home da Caravan

?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/california.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption">
                <h5>Califórnia</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dublin.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption">
                <h5>Dublin</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/paris.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption ">
                <h5>Paris</h5>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselcidades" role=" button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselcidades" role=" button" data-slide="next">
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

  <section class="py-5 bg-light text-center">
    <div class=" container">
      <div class="my-5">
        <span class="h6 d-block">TUDO DE MELHOR PRA VOCÊ!</span>
        <h2 class="display-4">Aproveite as Vantagens</h2>
      </div>

      <div class="row">
        <div class="col-xl-4 col-md-6">
          <div class="d-flex justify-content-center" style="height: 100px;">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icones/passaporte.svg" alt="Passaporte" srcset="">
          </div>
          <h3>Documentos</h3>
          <p>Verificação de todos os documentos necessários para efetuar a viagem</p>
        </div>

        <div class="col-xl-4 col-md-6">
          <div class="d-flex justify-content-center" style="height: 100px;">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icones/passagens.svg" alt="Passaporte" srcset="">
          </div>
          <h3>Passagens</h3>
          <p>Máxima confiança na compra das passagens</p>
        </div>

        <div class="col-xl-4 col-md-6">
          <div class="d-flex justify-content-center" style="height: 100px;">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icones/translado.svg" alt="Passaporte" srcset="">
          </div>
          <h3>Translado</h3>
          <p>Toda a necessidade de translado efetuada por nós.</p>
        </div>

        <div class="col-xl-4 col-md-6">
          <div class="d-flex justify-content-center" style="height: 100px;">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icones/praias.svg" alt="Passaporte" srcset="">
          </div>
          <h3>Praias</h3>
          <p>VAS melhores praias, nós levamos você.</p>
        </div>

        <div class="col-xl-4 col-md-6">
          <div class="d-flex justify-content-center" style="height: 100px;">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icones/bagagens.svg" alt="Passaporte" srcset="">
          </div>
          <h3>bagagens</h3>
          <p>Toda a locamação de bagagens feitas por nós</p>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="d-flex justify-content-center" style="height: 100px;">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icones/turismo.svg" alt="Passaporte" srcset="">
          </div>
          <h3>Turismo</h3>
          <p>Temos guias para que seu turismo seja o melhor possível sempre</p>
        </div>

      </div>
      <a href="planos.html" class="btn btn-outline-secondary mt-4">Comprar Planos</a>
  </section>
  <section id="home-quote" class="p-md-5">
    <blockquote class="blockquote text-center text-white p-md-5 p-3">
      <p class="display-4"><em>"A Felicidade não está na estrada que leva a algum lugar. A Felicidade é a própria estrada "</em></p>
      <footer class="blockquote-footer text-white">Bob Dylan<cite></cite></footer>
    </blockquote>
  </section>
   
  <section class="container">
    <div class="my-5 text-center">
      <span class="h6 d-block">AINDA ESTÁ COM DÚVIDAS?</span>
      <h2 class="display-4">Perguntas Frequentes</h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-5 mr-5 pt-2" id="perguntasFrequentes" data-children=".pergunta">
        <a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes" href="#pgt1" aria-expanded="true" aria-controls="pgt1"> →É possível cancelar a viagem?</a>
        <div id="pgt1" class="collapse show" role="tabpanel">
          <p>Você pode cancelar a viagem sem custos até 48 horas antes da data agendada. Para fazer isso, acesse sua conta no site 
            ou no aplicativo da empresa de viagens, encontre sua reserva, e siga as instruções de cancelamento. Certifique-se de verificar os termos
            e condições da reserva para garantir que está dentro do prazo estipulado. 
            Se tiver dúvidas, entre em contato com o serviço de atendimento ao cliente da empresa de viagens para obter assistência.</p>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-5 mr-5 pt-2" id="perguntasFrequentes" data-children=".pergunta">
        <a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes" href="#pgt2" aria-expanded="true" aria-controls="pgt2"> →É possível mudar o destino?</a>
        <div id="pgt2" class="collapse" role="tabpanel">
          <p class="text-justify">Sim, é possível mudar o destino de sua viagem, sujeito à disponibilidade e políticas da empresa. 
            Para fazer isso, entre em contato com nosso atendimento ao cliente, informe o novo destino desejado e esteja preparado
             para ajustar datas e itinerários, se necessário. Lembre-se de que podem haver custos adicionais associados à mudança, 
             e é aconselhável entrar em contato o mais cedo possível para discutir suas opções..</p>
        </div>
      </div>
    </div>

    <div class="row justify-content-center text-black">
      <div class="col-5 mr-5 pt-2" id="perguntasFrequentes" data-children=".pergunta">
        <a class="lead text-black" data-toggle="collapse" data-parent="#perguntasFrequentes" href="#pgt3" aria-expanded="true" aria-controls="pgt3"> →O que acontece se eu perder o voo?</a>
        <div id="pgt3" class="collapse" role="tabpanel">
          <p class="text-justify ">Informe-os imediatamente e siga suas orientações. Consulte as políticas da companhia aérea para reagendamento ou reembolso. 
            Custos adicionais podem ser aplicados.Se tiver um seguro de viagem, verifique se cobre perda de voos.
           </p>
        </div>
      </div>
    </div>

    <div class="text-center mr-5 pt-5">
      <p class="h6">Tem Alguma dúvida ainda?</p>
      <a class="btn btn-success btn-lg" href="">Entre em contato conosco pelo nosso WhatsApp</a>
    </div>
  </section>
  <?php get_footer(); ?>
  <?php endwhile; else: endif?>
</body>


</html>