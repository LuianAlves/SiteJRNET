<!-- Include Header -->
<?php include('includes/header.php'); ?>
<!-- Include Navbar -->
<?php include('includes/design.php'); ?>

<!-- Identificação de Página -->
<div class="container breadcrumb-perso">
  <div class="breadcrumb-perso-item">Pacote Intermediário</div>
  <a href="Planos.php" class="breadcrumb-perso-item">Planos</a>
  <a href="index.php" class="breadcrumb-perso-item"><i class="bi bi-house-fill"></i>Início</a>
</div>

<section id="precos-index" class="precos-index">
  <div class="container">
    <div class="index-titulo" data-aos="fade-left" data-aos-delay="100">
      <h2>Preços</h2>
      <p>Nossos Preços</p>
    </div>
    <div class="row justify-content-center mt-5" data-aos="fade-down">
      <!-- Preços - Cabo -->
      <div class="col-lg-4 col-11">
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
    </div>
</section>
<!-- Modal Planos -->
<?php include('includes/modal_planos.php'); ?>

<!-- Include Footer -->
<?php include('includes/footer.php'); ?>