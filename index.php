<!-- Header -->
<?php include('includes/header.php'); ?>

<!-- Navbar -->
<?php include('includes/design.php'); ?>

<!-- Identificação de Página -->
<div class="container breadcrumb-perso">
  <div class="breadcrumb-perso-item">/</div>
  <a href="#" class="breadcrumb-perso-item"><i class="bi bi-house-fill"></i>Início</a>
</div>

<!-- Carousel Index - Primeira Section -->
<section id="index-carousel">
  <div class="index-container">
    <div id="indexCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <ol class="carousel-indicador" id="index-carousel-indicador"></ol>
      <div class="carousel-inner" role="listbox">
        <!-- Primeiro slide -->
        <div class="carousel-item active" style="background-image: url(assets/img/slides/slide_01.jpg);">
          <div class="carousel-container" data-aos="fade-up" data-aos-delay="100">
            <div class="carousel-content">
              <h1 class="animate__animated animate__fadeInDown">Bem Vindo á <span>JRNET</span>.</h1>
              <h2 class="animate__animated animate__fadeInUp">
                Há alguns anos na área tecnológica trazendo
                um novo conceito tanto em navegação casual quanto profissional.
              </h2>
              <div class="d-flex justify-content-center">
                <a href="Empresa.php" class="btn-empresa scrollto animate__animated animate__fadeInUp">Sobre Nós</a>
                <a href="Planos.php" class="btn-planos scrollto animate__animated animate__fadeInUp"><i class="bx bx-chevron-right-square"></i><span>Nossos Planos</span></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Segundo Slide -->
        <div class="carousel-item" style="background-image: url(assets/img/slides/slide_02.jpg);">
          <div class="carousel-container">
            <div class="carousel-content">
              <h1 class="animate_animated animate_fadeInDown">Teste sua <span>Velocidade</span></h1>
              <h2 class="animate_animated animate_fadeInUp">Veja sua velocidade de internet em tempo real com nosso medidor de velocidade</h2>
              <div class="d-flex justify-content-center">
                <a href="Teste.php" class="btn-planos scrollto animate__animated animate__fadeInUp"><i class="bx bx-tachometer"></i><span>Medidor de Velocidade</span></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Terceiro Slide -->
        <!-- <div class="carousel-item" style="background-image: url(assets/img/slides/slide_03.jpg);">
          <div class="carousel-container">
            <div class="carousel-content">
              <h1 class="animate_animated animate_fadeInDown">Paramount Plus</h1>
              <h2 class="animate_animated animate_fadeInUp">
                Tenha acesso a mais de 30.000 episódios de séries e filmes para assistir em casa
                com sua família. Conteúdos originais da Paramount e transmissões ao vivo da NFL e
                Champions League.
              </h2>
              <div class="d-flex justify-content-center">
                <a href="Teste.php" class="btn-planos scrollto animate__animated animate__fadeInUp"><i class="bx bx-tachometer"></i><span>Medidor de Velocidade</span></a>
              </div>
            </div>
          </div>
        </div> -->

        <!-- Troca de Slides -->
        <button class="carousel-control-prev" type="button" data-bs-target="#indexCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#indexCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Cards Index - Segunda Section -->
<section id="icon-index" class="icon-index">
  <div class="container">
    <div class="row">
      <!-- Primeiro card -->
      <div class="col-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
        <div class="icon-index-box">
          <div class="icon"><i class="bx bx-dollar"></i></div>
          <h4 class="titulo-icon-box"><a href="https://jrnetsp.sgp.net.br/accounts/central/login">Segunda Via</a></h4>
          <p class="texto-box">Retire sua segunda via através da nossa central do assinante agora mesmo!</p>
          <div class="icon-footer"><a href="https://jrnetsp.sgp.net.br/accounts/central/login"><i class="bx bx-chevron-right-circle"></i></a></div>
        </div>
      </div>
      <!-- Segundo Card -->
      <div class="col-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
        <div class="icon-index-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4 class="titulo-icon-box"><a href="Cadastro.php">Cadastro Online</a></h4>
          <p class="texto-box">
            Realize o cadastro em nosso site e agilize no dia da instalação!
          </p>
          <div class="icon-footer"><a href="Cadastro.php" class="d-flex"><i class="bx bx-chevron-right-circle"></i></a></div>
        </div>
      </div>
      <!-- Terceiro Card -->
      <div class="col-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
        <div class="icon-index-box">
          <div class="icon"><i class="bx bx-paragraph"></i></div>
          <h4 class="titulo-icon-box"><a href="Contato.php">Canais de TV</a></h4>
          <p class="texto-box">
            Adquira nossa pacote de planos com TV.
          </p>
          <div class="icon-footer"><a href="Contato.php" class="d-flex"><i class="bx bx-chevron-right-circle"></i></a></div>
        </div>
      </div>
      <!-- Quarto Card -->
      <div class="col-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="500">
        <div class="icon-index-box">
          <div class="icon"><i class="bx bx-braille"></i></div>
          <h4 class="titulo-icon-box"><a href="Planos.php">Nossos Pacotes</a></h4>
          <p class="texto-box">
            Veja qual o plano mais acessível para você
          </p>
          <div class="icon-footer"><a href="Planos.php" class="d-flex"><i class="bx bx-chevron-right-circle"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Preços Index - Terceira Section -->
<section id="precos-index" class="precos-index">
  <div class="container">
    <div class="index-titulo" data-aos="fade-left" data-aos-delay="100">
      <h2>Preços</h2>
      <p>Nossos Preços</p>
    </div>
    <div class="row mt-5" data-aos="fade-down">

      <!-- Pacote Básico -->
      <div class="col-lg-4 col-md-6 col-12 mt-lg-0 mt-3">
        <div class="box" data-toggle="modal" data-target="#modalBasico" data-aos="zoom-in" data-aos-delay="200">
          <h3>Pacote Básico</h3>
          <h4><sup>R$</sup>49,99<span>/ mês</span></h4>
          <ul>
            <li>Paramount Plus por mais <b>R$ 9,99</b></li>
            <li class="na">Planos acima de 100 Megas</li>
            <li>Preços mais Acessíveis</li>
            <li>Qualidade de Navegação</li>
            <li>Rapidez no Suporte Técnico</li>
          </ul>
          <div class="btn-precos">
            <a href="#" class="btn-planos scrollto animate__animated animate__fadeInUp"><i class="bx bxs-chevrons-right"></i><span>Visualize</span></a>
          </div>
        </div>
      </div>

      <!-- Pacote Intermediário -->
      <div class="col-lg-4 col-md-6 col-12 mt-lg-0 mt-3">
        <div class="box cabo" data-toggle="modal" data-target="#modalIntermediario" data-aos="zoom-in" data-aos-delay="300">
          <h3>Pacote Intermediário</h3>
          <h4><sup>R$</sup>69,99<span>/ mês</span></h4>
          <ul>
            <li>Paramount Plus por mais <b>R$ 9,99</b></li>
            <li class="na">Planos acima de 100 Megas</li>
            <li>Planos contratados com mais Frequência</li>
            <li>Qualidade de Navegação</li>
            <li>Rapidez no Suporte Técnico</li>
          </ul>
          <div class="btn-precos">
            <a href="#" class="btn-planos scrollto animate__animated animate__fadeInUp"><i class="bx bxs-chevrons-right"></i><span>Visualize</span></a>
          </div>
        </div>
      </div>

      <!-- Pacote Avançado -->
      <div class="col-lg-4 col-md-6 col-12 align-items-center mt-lg-0 mt-3">
        <div class="box" data-toggle="modal" data-target="#modalAvancado" data-aos="zoom-in" data-aos="400">
          <span class="fibra">Avançado</span>
          <h3>Pacote Avançado</h3>
          <h4><sup>R$</sup>99,99<span>/ mês</span></h4>
          <ul>
            <li><b>Paramount Plus Integrado</b></li>
            <li><b>Planos acima de 100 Megas</b></li>
            <li>Melhores Planos</li>
            <li>Qualidade de Navegação</li>
            <li>Rapidez no Suporte Técnico</li>
          </ul>
          <div class="btn-precos">
            <a href="#" class="btn-planos scrollto animate__animated animate__fadeInUp"><i class="bx bxs-chevrons-right"></i><span>Visualize</span></a>
          </div>
        </div>
      </div>
    </div>
</section>

<!-- Modal Planos -->
<?php include('includes/modal_planos.php'); ?>

<!--- Teste de Velocidade - Quarta Section -->
<section id="teste" class="teste">
  <div class="container">

    <div class="index-titulo mb-5" data-aos="fade-left" data-aos-delay="100">
      <h2>Medidor</h2>
      <p class="mt-2">Faça o Teste</p>
    </div>
    <div class="row" data-aos="fade-up" data-aos-delay="200">
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="frame" data-aos-delay="200">
          <iframe width="100%" height="650px" frameborder="0" src="https://jrnetcomunicacao.speedtestcustom.com"></iframe>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Formulário de Cadastro -->
<section id="forml" class="forml section-bg">
    <div class="container">
        <div class="index-titulo" data-aos="fade-left" data-aos-delay="100">
            <h2>Cadastre-se</h2>
            <p>Formulário de Cadastro</p>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                <!-- Informações -->
                <div class="informacoes">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 info">
                            <i class="bi bi-geo-alt mt-1"></i>
                            <h4>Localização</h4>
                            <p>Grajaú, Zona Sul - SP</p>
                        </div>
                        <div class="col-lg-3 col-md-6 info mt-lg-0 mt-md-0 mt-4">
                            <i class="bi bi-phone mt-1"></i>
                            <h4>Telefone</h4>
                            <p>(11) 9 4397-2578</p>
                        </div>
                        <div class="col-lg-4 info mt-lg-0 mt-4">
                            <i class="bi bi-envelope mt-1"></i>
                            <h4>E-mail</h4>
                            <p>Contato@jrnetcomunicacao.com.br</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Valores -->
                <div class="col-lg-6 col-md-5 mt-3" data-aos="fade-up" data-aos-delay="300">
                    <div id="duvidas" class="duvidas">
                        <div class="container">
                            <div class="lista-duvidas">
                                <ul>
                                    <!-- Pacote Básico -->
                                    <li data-aos="fade-up">
                                        <i class="bx bx-dollar icon-help"></i><a data-bs-toggle="collapse" class="collapse  tittle-duvidas" data-bs-target="#planos-basico">
                                            Pacote Básico<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="planos-basico" class="collapse" data-bs-parent=".lista-duvidas">
                                            <p>
                                            <table class="table table-sm table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col">Planos</th>
                                                        <th scope="col">Valores</th>
                                                        <th class="text-center" scope="col">TV + Stream de filmes/séries</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="font-weight-bold">50 Megas</td>
                                                        <td>R$ 59,99</td>
                                                        <td class="text-center fw-bold">Não possui</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">50 Megas</td>
                                                        <td>R$ 69,99</td>
                                                        <td class="text-center fw-bold">Integrado</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">100 Megas</td>
                                                        <td>R$ 79,99</td>
                                                        <td class="text-center fw-bold">Integrado</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">200 Megas</td>
                                                        <td>R$ 89,99</td>
                                                        <td class="text-center fw-bold">Integrado</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </p>
                                        </div>
                                    </li>

                                    <!-- Pacote Intermediario -->
                                    <li data-aos="fade-up" data-aos-delay="100">
                                        <i class="bx bx-dollar icon-help"></i><a data-bs-toggle="collapse" class="collapse tittle-duvidas" data-bs-target="#planos-intermediario">
                                            Pacote Intermediario<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="planos-intermediario" class="collapse" data-bs-parent=".lista-duvidas">
                                            <p>
                                            <table class="table table-sm table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col">Planos</th>
                                                        <th scope="col">Valores</th>
                                                        <th class="text-center" scope="col">TV + Stream de filmes/séries</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="font-weight-bold">300 Megas</td>
                                                        <td>R$ 99,99</td>
                                                        <td class="text-center fw-bold">Integrado</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </p>
                                        </div>
                                    </li>

                                    <!-- Pacote Avançado -->
                                    <li data-aos="fade-up" data-aos-delay="200">
                                        <i class="bx bx-dollar icon-help"></i><a data-bs-toggle="collapse" class="collapse tittle-duvidas" data-bs-target="#planos-avancado">
                                            Pacote Avançado<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="planos-avancado" class="collapse" data-bs-parent=".lista-duvidas">
                                            <p>
                                            <table class="table table-sm table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col">Planos</th>
                                                        <th scope="col">Valores</th>
                                                        <th class="text-center" scope="col">TV + Stream de filmes/séries</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="font-weight-bold">500 Megas</td>
                                                        <td>R$ 119,99</td>
                                                        <td class="text-center fw-bold">Integrado</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formulário -->
                <div class="col-lg-6 col-md-7 mt-3" data-aos="fade-up" data-aos-delay="300">
                    <form action="zcadastro.php" method="post" role="form" class="email-form">

                        <!-- Nome - Email -->
                        <div class="row mt-2">
                            <div class="col-6 form-gruop">
                                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" />
                            </div>
                            <div class="col-6 form-gruop">
                                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" />
                            </div>
                        </div>

                        <!-- RG - CPF -->
                        <div class="row">
                            <div class="col-6 form-gruop">
                                <input type="text" class="form-control" name="rg" id="rg" placeholder="RG (Opcional)" />
                            </div>
                            <div class="col-6 form-gruop">
                                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF (Opcional)" />
                            </div>
                        </div>

                        <!-- Telefone - CEP -->
                        <div class="row">
                            <div class="col-6 form-gruop">
                                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone (Opcional)" />
                            </div>
                            <div class="col-6 form-gruop">
                                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço/CEP" />
                            </div>
                        </div>

                        <!-- Planos -->
                        <div class="row">
                            <div class="col-8 form-gruop">
                                <select class="form-select" name="plano" id="plano">
                                    <option selected>-- Pacote de Planos</option>
                                    <option value="20">Pacote Básico - 20Mbs</option>
                                    <option value="30">Pacote Básico - 30Mbs</option>
                                    <option value="50">Pacote Intermediário - 50Mbs</option>
                                    <option value="80">Pacote Intermediário - 80Mbs</option>
                                    <option value="100">Pacote Avançado - 100Mbs</option>
                                    <option value="200">Pacote Avançado - 200Mbs</option>
                                    <option value="300">Pacote Avançado - 300Mbs</option>
                                    <option value="400">Pacote Avançado - 400Mbs</option>
                                    <option value="500">Pacote Avançado - 500Mbs</option>
                                </select>
                            </div>
                        </div>
                        <!-- Mensagem -->
                        <div class="row">
                            <div class="col-12 form-group">
                                <textarea class="form-control" name="mensagem" rows="5" placeholder="Digite sua Mensagem (Opcional)"></textarea>
                            </div>
                        </div>
                        <!-- Botão Enviar -->
                        <div class="text-center my-3"><button type="submit">Enviar Cadastro</button></div>
                    </form>
                </div>
            </div>
        </div>
</section>

<!-- Footer -->
<?php include('includes/footer.php'); ?>