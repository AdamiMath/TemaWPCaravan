<?php 

//Template Name: Contato

?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section class="container">
    <div class="my-5 text-center">
      <span class="h6 d-block">POSSUI ALGUMA DÚVIDA?</span>
      <h2 class="display-4"><?php the_title() ?></h2>
    </div>
    <div class="row">
      <div class="col-lg">
        <form class="rounded p-3 box-shadow" style="background-color: blanchedalmond;" action="">
          <div class="form-group">
            <label for="clienteNome">Nome</label>
            <input type="text" class="form-control" id="exampleInputEmail1">
          </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group"> 
              <label for="clienteMensagem"></label>
              <textarea id="clienteMensagem" class="form-control"  rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
        </form>
      </div>
      <div class="col-lg">
        <h2 class="h6">NOSSO ENDEREÇO</h2>
        <img class="img-fluid box-shadown rounded mb-4" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mapa.png" alt="mapa da localização">
        <h2 class="h6">DADOS DE CONTATO</h2>
            <ul class="list-unstyled text-seconday">
              <li>caravan@caravan.com.br</li>
              <li>(xx) xxxx-xxxx</li>
              <li>De Seg. à Sex</li>
            </ul>
            <h2 class="h6">REDES SOCIAIS</h2>
        
      </div>
    </div>
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
</body>

<?php endwhile; else: endif?>

</html>