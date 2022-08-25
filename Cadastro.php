<!-- Include Header -->
<?php include('includes/header.php'); ?>
<!-- Include Navbar -->
<?php include('includes/design.php'); ?>

<!-- Identificação de Página -->
<div class="container breadcrumb-perso">
    <div class="breadcrumb-perso-item">Ficha de Cadastro</div>
    <a href="Planos.php" class="breadcrumb-perso-item">Planos</a>
    <a href="Index.php" class="breadcrumb-perso-item"><i class="bi bi-house-fill"></i>Início</a>
</div>

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
                                    <option selected disabled>Escolher plano</option>
                                    <option class="fw-bold">Planos com TV</option>
                                    <option value="50 megas com Tv">Plano de 50mbs</option>
                                    <option value="100 megas com Tv">Plano de 100mbs</option>
                                    <option value="200 megas com Tv">Plano de 200mbs</option>
                                    <option value="300 megas com Tv">Plano de 300mbs</option>
                                    <option value="500 megas com Tv">Plano de 500mbs</option>
                                    <option value=""></option>
                                    <option class="fw-bold">Planos sem TV</option>
                                    <option value="50 megas sem Tv">Plano de 50mbs</option>
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


<!-- Include Footer -->
<?php include('includes/footer.php'); ?>