Com <?php get_header(); ?>
  <section class="container">
    <div class="my-5 text-center">
      <span class="h6 ">TUDO DE MELHOR PARA VOCÊ!</span>
      <h2 class="display-4">Aproveite as Vantagens</h2>
      <div class="row col-lg">
        <form class="col-lg text-justify">
          <div class="form-row">
            <div class="form-group col-lg-6">
              <label for="inputNome">Nome</label>
              <input type="text" class="form-control" id="inputNome" placeholder="Nome Completo">
            </div>

            <div class="form-group col-lg-6">
              <label for="inputCPF">CPF</label>
              <input type="text" class="form-control" id="inputCPF" placeholder="xxx.xxx.xxx-xx">
            </div>

            <div class="form-group col-lg-6">
              <label for="inputemail">E-mail</label>
              <input type="text" class="form-control" id="inputemail" placeholder="example@example.com.br">
            </div>

            <div class="form-group col-lg-6">
              <label for="inputpassword">Senha</label>
              <input type="password" class="form-control" id="inputpassword" placeholder="**********">
            </div>

            <div class="form-group col-12">
              <label for="inputendereco">Endereço</label>
              <input type="password" class="form-control" id="inputendereco" placeholder="Rua,Bairro e numero">
            </div>

            <div class="form-group col-md-6">
              <label for="inputcidade">Cidade</label>
              <input type="password" class="form-control" id="inputcidade">
            </div>

            <div class="form-group col-md-3">
              <label for="inputcidade">Estado</label>
              <select id="inputcidade" class="form-control">
                <option>Selecione o Estado</option>
                <option>Rio de Janeiro</option>
                <option>São Paulo</option>
                <option>Paraná</option>
              </select>
            </div>

            <div class="form-group col-md-3">
              <label for="inputcidade">CEP</label>
              <input type="password" class="form-control" id="inputcidade" placeholder="xxxxx-xx">
            </div>
          </div>
            <div class="rounded box-shadow py-3 form-group " style="background-color: blanchedalmond;">
              <h2 class="h6 text-center">FORMA DE PAGAMENTO</h2>
              <nav class="nav btn-group mb-3 px-2" id="formaPagamento" role="tablist">
                <button type="button" class="btn active btn-sm" id="nav-cartao-tab" data-toggle="tab"  href="#nav-cartao" role="tab" aria-controls="nav-cartao" aria-selected="true" style="background-color:rgb(238, 202, 149);">Cartão de Crédito</button>
                <button type="button" class="btn btn-sm" id="nav-boleto-tab" data-toggle="tab"  href="#nav-boleto" role="tab" aria-controls="nav-boleto" aria-selected="false" style="background-color:rgb(238, 202, 149);">Boleto Bancário</button>

              </nav>
              <div class="tab-content " id="formaPagamentoConteudo">
                <div class="tab-pane fade show active text-justify" id="nav-cartao" role="tabpanel" aria-labelledby="nav-cartao-tab">
                  <div class="form-row px-2">
                    <div class="form-group col-md-6">
                      <label for="inputcartao">Nome no Cartão</label>
                      <input type="text" class="form-control" id="inputcartao" placeholder="Nome impresso no cartão">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputcidade">Mês</label>
                      <select id="inputcidade" class="form-control">
                        <option>Expira mês...</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                      </select>
                    </div>

                    <div class="form-group col-md-3">
                      <label for="inputano">Ano</label>
                      <select id="inputano" class="form-control">
                        <option>Expira Ano...</option>
                        <option>2024</option>
                        <option>2025</option>
                        <option>2026</option>
                        <option>2027</option>
                        <option>2028</option>
                        <option>2029</option>
                        <option>20230</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputcartaonumero">Número do Cartão</label>
                      <input type="text" class="form-control" id="inputcartaonumero" placeholder="5555 5555 5555 5555">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputcartaoseguranca">Código de Segurança</label>
                      <input type="text" class="form-control" id="inputcartaoseguranca" placeholder="xxx">
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade text-justify" id="nav-boleto" role="tabpanel" aria-labelledby="nav-boleto-tab">
                  <p>Clique em contratar plano, que enviaremos o boleto bancário no seu e-mail</p>
                </div>
              </div>

            </div>

            <div class="form-check text-justify">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Concordo com os termos e condições
              </label>
            </div>
            <button type="submit" class="btn text-justify"  style="background-color:rgb(238, 202, 149);">Contratar Plano</button>
        </form>

        <div class="col-lg-5 my-4">
          <div class="col-lg ">
            <div class="rounded  p-3 box-shadow" style="background-color: blanchedalmond;">
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
            
                    <div class="col justify-align-center">
                        <span class="h4">R$5.000,00</span>
                    </div>
                </div>
            </div>
        </div>
        </div>

      </div>
    </div>
  </section>

  <?php get_footer(); ?>

  <script src="./js/jquery-3.3.1.slim.min.js"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/bootstrap.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>