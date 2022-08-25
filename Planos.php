<!-- Title -->
<title>Planos</title>

<!-- Include Header -->
<?php include('includes/header.php'); ?>
<!-- Include Navbar -->
<?php include('includes/design.php'); ?>


<!-- Identificação de Página -->

<div class="container breadcrumb-perso mb-4">
  <div class="breadcrumb-perso-item">Planos</div>
  <a href="index.php" class="breadcrumb-perso-item"><i class="bi bi-house-fill"></i>Home</a>
</div>

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
<!-- Modal -->
<?php include('includes/modal_planos.php'); ?>

<!-- Footer -->
<?php include('includes/footer.php'); ?>