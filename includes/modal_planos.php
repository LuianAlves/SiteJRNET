<section id="mplanos" class="mplanos">
    <div class="container">

        <!-- Modal Basico -->
        <div class="modal fade" id="modalBasico" tabindex="-1" role="dialog" aria-labelledby="modalPacoteBasico" aria-hidden="true">
            <div class="modal-dialog cascading-modal" role="document">
                <div class="modal-content">
                    <!-- Menu do Modal -->
                    <div class="modal-c-tabs">
                        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                            <li class="nav-item">
                                <a href="#precosPlano" class="nav-link active" data-toggle="tab" role="tab">
                                    Pacote Básico
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#contratarPlano" class="nav-link" data-toggle="tab" role="tab">
                                    Contratar Agora
                                </a>
                            </li>
                        </ul>
                        <!-- Aba do Modal -->
                        <div class="tab-content">

                            <!-- Preços do Plano -->
                            <div class="tab-pane fade in show active" id="precosPlano" role="tabpanel">
                                <div class="modal-body mb-1">
                                    <p>
                                    <table class="table table-sm table-bordered">
                                        <thead class="thead-light">
                                            <tr class="text-center">
                                                <th scope="col">Planos</th>
                                                <th scope="col">Valores</th>
                                                <th scope="col">Paramount Plus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td class="font-weight-bold">20 Megas</td>
                                                <td>R$ 49,99</td>
                                                <td>R$ 9,99</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="font-weight-bold">30 Megas</td>
                                                <td>R$ 59,99</td>
                                                <td>R$ 9,99</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <div class="options text-center text-center mt-1">
                                        <p> Não está conseguindo?
                                            <a href="Contato.php" class="blue-text">Entre em Contato</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Contratar Plano -->
                            <div class="tab-pane fade" id="contratarPlano" role="tabpanel">
                                <div class="modal-body mb-1">
                                    <!-- Formulário -->
                                    <div class="col-12 mt-3">
                                        <form action="zcontratar.php" method="post" role="form" class="email-form">

                                            <!-- Nome - Email -->
                                            <div class="row mt-2">
                                                <div class="col-6 form-gruop">
                                                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required />
                                                </div>
                                                <div class="col-6 form-gruop">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail (Opcional)" />
                                                </div>
                                            </div>

                                            <!-- Telefone - CEP -->
                                            <div class="row">
                                                <div class="col-6 form-gruop">
                                                    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" required />
                                                </div>
                                                <div class="col-6 form-gruop">
                                                    <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço/CEP (Opcional)" />
                                                </div>
                                            </div>

                                            <!-- Planos -->
                                            <div class="row">
                                                <div class="col-6 form-gruop">
                                                    <select class="form-select" name="plano" id="plano">
                                                        <option value="20">Pacote Básico - 20Mbs</option>
                                                        <option value="30">Pacote Básico - 30Mbs</option>
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
                                            <div class="text-center my-3"><button type="submit">Enviar</button></div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Footer do Modal -->
                                <div class="modal-footer">
                                    <div class="options text-center text-center mt-1">
                                        <p> Não está conseguindo?
                                            <a href="Contato.php" class="blue-text">Entre em Contato</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Intermediario -->
        <div class="modal fade" id="modalIntermediario" tabindex="-1" role="dialog" aria-labelledby="modalPacoteIntermediario" aria-hidden="true">
            <div class="modal-dialog cascading-modal" role="document">
                <div class="modal-content">
                    <!-- Menu do Modal -->
                    <div class="modal-c-tabs">
                        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                            <li class="nav-item">
                                <a href="#precosPlano1" class="nav-link active" data-toggle="tab" role="tab">
                                    Pacote Intermediário
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#contratarPlano1" class="nav-link" data-toggle="tab" role="tab">
                                    Contratar Agora
                                </a>
                            </li>
                        </ul>
                        <!-- Aba do Modal -->
                        <div class="tab-content">
                            <!-- Preços do Plano -->
                            <div class="tab-pane fade in show active" id="precosPlano1" role="tabpanel">
                                <div class="modal-body mb-1">
                                    <p>
                                    <table class="table table-sm table-bordered">
                                        <thead class="thead-light">
                                            <tr class="text-center">
                                                <th scope="col">Planos</th>
                                                <th scope="col">Valores</th>
                                                <th scope="col">Paramount Plus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td class="font-weight-bold">50 Megas</td>
                                                <td>R$ 69,99</td>
                                                <td>R$ 9,99</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="font-weight-bold">80 Megas</td>
                                                <td>R$ 79,99</td>
                                                <td>R$ 9,99</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </p>
                                </div>
                                <!-- Footer do modal -->
                                <div class="modal-footer">
                                    <div class="options text-center text-center mt-1">
                                        <p> Não está conseguindo?
                                            <a href="Contato.php" class="blue-text">Entre em Contato</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Contratar Plano -->
                            <div class="tab-pane fade" id="contratarPlano1" role="tabpanel">
                                <div class="modal-body mb-1">
                                    <!-- Formulário -->
                                    <div class="col-12 mt-3">
                                        <form action="zcontratar.php" method="post" role="form" class="email-form">
                                            <!-- Nome - Email -->
                                            <div class="row mt-2">
                                                <div class="col-6 form-gruop">
                                                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required />
                                                </div>
                                                <div class="col-6 form-gruop">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail (Opcional)" />
                                                </div>
                                            </div>

                                            <!-- Telefone - CEP -->
                                            <div class="row">
                                                <div class="col-6 form-gruop">
                                                    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" required />
                                                </div>
                                                <div class="col-6 form-gruop">
                                                    <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço/CEP (Opcional)" />
                                                </div>
                                            </div>

                                            <!-- Planos -->
                                            <div class="row">
                                                <div class="col-8 form-gruop">
                                                    <select class="form-select" name="plano" id="plano">
                                                        <option value="50">Pacote Intermediário - 50Mbs</option>
                                                        <option value="80">Pacote Intermediário - 80Mbs</option>
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
                                            <div class="text-center my-3"><button type="submit">Enviar</button></div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Footer do Modal -->
                                <div class="modal-footer">
                                    <div class="options text-center text-center mt-1">
                                        <p> Não está conseguindo?
                                            <a href="Contato.php" class="blue-text">Entre em Contato</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Avançado -->
        <div class="modal fade" id="modalAvancado" tabindex="-1" role="dialog" aria-labelledby="modalPacoteAvancado" aria-hidden="true">
            <div class="modal-dialog cascading-modal" role="document">
                <div class="modal-content">
                    <!-- Menu do Modal -->
                    <div class="modal-c-tabs">
                        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                            <li class="nav-item">
                                <a href="#precosPlano2" class="nav-link active" data-toggle="tab" role="tab">
                                    Pacote Avançado
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#contratarPlano2" class="nav-link" data-toggle="tab" role="tab">
                                    Contratar Agora
                                </a>
                            </li>
                        </ul>
                        <!-- Aba do Modal -->
                        <div class="tab-content">
                            <!-- Preços do Plano -->
                            <div class="tab-pane fade in show active" id="precosPlano2" role="tabpanel">
                                <div class="modal-body mb-1">
                                    <p>
                                    <table class="table table-sm table-bordered">
                                        <thead class="thead-light">
                                            <tr class="text-center">
                                                <th scope="col">Planos</th>
                                                <th scope="col">Valores</th>
                                                <th scope="col">Paramount Plus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td class="font-weight-bold">100 Megas</td>
                                                <td>R$ 99,99</td>
                                                <td><b>Acesso Gratuito</b></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="font-weight-bold">200 Megas</td>
                                                <td>R$ 129,99</td>
                                                <td><b>Acesso Gratuito</b></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="font-weight-bold">300 Megas</td>
                                                <td>R$ 149,99</td>
                                                <td><b>Acesso Gratuito</b></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="font-weight-bold">400 Megas</td>
                                                <td>R$ 169,99</td>
                                                <td><b>Acesso Gratuito</b></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="font-weight-bold">500 Megas</td>
                                                <td>R$ 199,99</td>
                                                <td><b>Acesso Gratuito</b></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </p>
                                </div>
                                <!-- Footer do modal -->
                                <div class="modal-footer">
                                    <div class="options text-center text-center mt-1">
                                        <p> Não está conseguindo?
                                            <a href="Contato.php" class="blue-text">Entre em Contato</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Contratar Plano -->
                            <div class="tab-pane fade" id="contratarPlano2" role="tabpanel">
                                <!-- Body do Modal -->
                                <div class="modal-body mb-1">
                                    <!-- Formulário -->
                                    <div class="col-12 mt-3">
                                        <form action="zcontratar.php" method="post" role="form" class="email-form">
                                            <!-- Nome - Email -->
                                            <div class="row mt-2">
                                                <div class="col-6 form-gruop">
                                                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required />
                                                </div>
                                                <div class="col-6 form-gruop">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail (Opcional)" />
                                                </div>
                                            </div>

                                            <!-- Telefone - CEP -->
                                            <div class="row">
                                                <div class="col-6 form-gruop">
                                                    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" required />
                                                </div>
                                                <div class="col-6 form-gruop">
                                                    <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço/CEP (Opcional)" />
                                                </div>
                                            </div>

                                            <!-- Planos -->
                                            <div class="row">
                                                <div class="col-8 form-gruop">
                                                    <select class="form-select" name="plano" id="plano">
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
                                            <div class="text-center my-3"><button type="submit">Enviar</button></div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Footer do Modal -->
                                <div class="modal-footer">
                                    <div class="options text-center text-center mt-1">
                                        <p> Não está conseguindo?
                                            <a href="Contato.php" class="blue-text">Entre em Contato</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>