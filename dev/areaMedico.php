<?php
include 'head.php';
?>
<body class="area-medico">
    <!--[if lt IE 7]>
        <p class="browsehappy">Seu navegador está <strong>desatualizado</strong>. Por favor <a href="http://browsehappy.com/">atualize seu navegador</a> para uma melhor navegação</p>
    <![endif]-->

<?php
include 'header.php';
?>

      <main>

        <div class="container">
            <div id="viewlet-above-content">
              <div id="portal-breadcrumbs">
                <span id="breadcrumbs-you-are-here">Você está aqui:</span>
                <span id="breadcrumbs-home">
                    <a href="#">Página Inicial</a>
                </span>
              </div><!-- ./portal-breadcrumbs -->
            </div><!-- ./viewlet-above-content -->

            <div class="col-2 remove-margin">

              <div class="title-header">
                <p>
                  ÁREA DO MÉDICO
                </p>
                <ul class="menu-title-header">
                  <li>
                    <a href="#">
                      Editar senha
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Importar Lattes
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Perguntas frequentes
                    </a>
                  </li>
                </ul>
              </div><!-- ./title-header -->

              <p>
                Nullam in tortor quis felis vestibulum efficitur ut nec lectus. Praesent sed justo rhoncus, facilisis enim vitae, convallis sem. Morbi eros justo, sagittis ac ultrices vel, efficitur et magna. Donec sodales cursus ipsum. Pellentesque eu porttitor sapien. Praesent convallis auctor nisi, in volutpat eros condimentum ac. Nulla vitae lacus sed justo commodo blandit. Donec felis dui, sodales ut
Donec auctor nulla ornare ante semper, sit amet mollis lectus gravida. Maecenas risus augue, placerat vitae sem at, vehicula vehicula felis.
              </p>

              <div class="ds-tabs">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Dados Pessoais</a></li>
                    <li role="presentation"><a href="#espec" aria-controls="espec" role="tab" data-toggle="tab">Especialidades</a></li>
                    <li role="presentation"><a href="#formAcad" aria-controls="formAcd" role="tab" data-toggle="tab">Formação Acadêmica</a></li>
                    <li role="presentation"><a href="#dadosProf" aria-controls="dadosProf" role="tab" data-toggle="tab">Dados Profissionais</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home">

                            <form role="form" action="" class="ds-dados" method="post" >
                                <div class="form-row">
                                  <div class="form-group">
                                    <label for="lb-nome">Nome</label>
                                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do completo do Cara" disabled>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group">
                                    <label for="lb-mae">Nome da Mãe</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Nome do completo da Mãe do Cara" disabled>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <label for="lb-cpf">CPF</label>
                                  <div class="form-group">
                                    <input type="email" class="form-control" id="cpf" name="cpf" placeholder="CPF do Cara" disabled>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <label for="lb-dataNasc">Data de Nascimento</label>
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="dataNasc" id="dataNasc" placeholder="Data de Nascimento do Cara" disabled>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <label for="lb-cidade">Cidade</label>
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade que o Cara nasceu" disabled>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <label for="lb-estado">Estado</label>
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado que o Cara nasceu" disabled>
                                  </div>
                                </div>
                                <div class="form-row">

                                  <div class="row">
                                    <div class="form-group col-md-6">
                                      <label for="lb-crm">CRM</label>
                                      <input type="text" class="form-control" name="crm" id="crm" placeholder="Cadastro do Cara" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="lb-uf">UF</label>
                                      <input type="text" class="form-control" name="crmUF" id="crmUF" placeholder="Estado do Cadastro do Cara" disabled>
                                    </div>
                                  </div>
                                </div>

                            </form>


                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="espec">
                      <form role="form" action="" class="ds-dados" method="post" >
                          <div class="form-row">
                            <div class="form-group">
                              <label for="lb-nome">Nome</label>
                              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do completo do Cara" disabled>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group">
                              <label for="lb-mae">Nome da Mãe</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="Nome do completo da Mãe do Cara" disabled>
                            </div>
                          </div>
                          <div class="form-row">
                            <label for="lb-cpf">CPF</label>
                            <div class="form-group">
                              <input type="email" class="form-control" id="cpf" name="cpf" placeholder="CPF do Cara" disabled>
                            </div>
                          </div>
                          <div class="form-row">
                            <label for="lb-dataNasc">Data de Nascimento</label>
                            <div class="form-group">
                              <input type="text" class="form-control" name="dataNasc" id="dataNasc" placeholder="Data de Nascimento do Cara" disabled>
                            </div>
                          </div>
                          <div class="form-row">
                            <label for="lb-cidade">Cidade</label>
                            <div class="form-group">
                              <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade que o Cara nasceu" disabled>
                            </div>
                          </div>
                          <div class="form-row">
                            <label for="lb-estado">Estado</label>
                            <div class="form-group">
                              <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado que o Cara nasceu" disabled>
                            </div>
                          </div>
                          <div class="form-row">

                            <div class="row">
                              <div class="form-group col-md-6">
                                <label for="lb-crm">CRM</label>
                                <input type="text" class="form-control" name="crm" id="crm" placeholder="Cadastro do Cara" disabled>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="lb-uf">UF</label>
                                <input type="text" class="form-control" name="crmUF" id="crmUF" placeholder="Estado do Cadastro do Cara" disabled>
                              </div>
                            </div>
                          </div>

                      </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="formAcad">

                      <form role="form" action="" class="ds-dados" method="post" >
                          <div class="form-row">
                            <div class="form-group">
                              <label for="lb-nome">Nome</label>
                              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do completo do Cara" disabled>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group">
                              <label for="lb-mae">Nome da Mãe</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="Nome do completo da Mãe do Cara" disabled>
                            </div>
                          </div>
                          <div class="form-row">
                            <label for="lb-cpf">CPF</label>
                            <div class="form-group">
                              <input type="email" class="form-control" id="cpf" name="cpf" placeholder="CPF do Cara" disabled>
                            </div>
                          </div>
                          <div class="form-row">
                            <label for="lb-dataNasc">Data de Nascimento</label>
                            <div class="form-group">
                              <input type="text" class="form-control" name="dataNasc" id="dataNasc" placeholder="Data de Nascimento do Cara" disabled>
                            </div>
                          </div>
                          <div class="form-row">
                            <label for="lb-cidade">Cidade</label>
                            <div class="form-group">
                              <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade que o Cara nasceu" disabled>
                            </div>
                          </div>
                          <div class="form-row">
                            <label for="lb-estado">Estado</label>
                            <div class="form-group">
                              <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado que o Cara nasceu" disabled>
                            </div>
                          </div>
                          <div class="form-row">

                            <div class="row">
                              <div class="form-group col-md-6">
                                <label for="lb-crm">CRM</label>
                                <input type="text" class="form-control" name="crm" id="crm" placeholder="Cadastro do Cara" disabled>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="lb-uf">UF</label>
                                <input type="text" class="form-control" name="crmUF" id="crmUF" placeholder="Estado do Cadastro do Cara" disabled>
                              </div>
                            </div>
                          </div>

                      </form>

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="dadosProf">

                      <form role="form" action="" class="ds-dados" method="post" >
                          <div class="form-row">
                            <div class="form-group">
                              <label for="lb-nome">Nome</label>
                              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do completo do Cara" disabled>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group">
                              <label for="lb-mae">Nome da Mãe</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="Nome do completo da Mãe do Cara" disabled>
                            </div>
                          </div>
                          <div class="form-row">
                            <label for="lb-cpf">CPF</label>
                            <div class="form-group">
                              <input type="email" class="form-control" id="cpf" name="cpf" placeholder="CPF do Cara" disabled>
                            </div>
                          </div>
                          <div class="form-row">
                            <label for="lb-dataNasc">Data de Nascimento</label>
                            <div class="form-group">
                              <input type="text" class="form-control" name="dataNasc" id="dataNasc" placeholder="Data de Nascimento do Cara" disabled>
                            </div>
                          </div>
                          <div class="form-row">
                            <label for="lb-cidade">Cidade</label>
                            <div class="form-group">
                              <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade que o Cara nasceu" disabled>
                            </div>
                          </div>
                          <div class="form-row">
                            <label for="lb-estado">Estado</label>
                            <div class="form-group">
                              <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado que o Cara nasceu" disabled>
                            </div>
                          </div>
                          <div class="form-row">

                            <div class="row">
                              <div class="form-group col-md-6">
                                <label for="lb-crm">CRM</label>
                                <input type="text" class="form-control" name="crm" id="crm" placeholder="Cadastro do Cara" disabled>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="lb-uf">UF</label>
                                <input type="text" class="form-control" name="crmUF" id="crmUF" placeholder="Estado do Cadastro do Cara" disabled>
                              </div>
                            </div>
                          </div>

                      </form>

                    </div>
                  </div>
              </div><!-- ./tabs -->




            </div> <!-- ./col-2 -->

            <aside class="espace-left">
              <a href="" class="ad">
                <img src="assets/img/propaganda1.jpg" alt="">
              </a>
              <a href="" class="ad">
                <img src="assets/img/propaganda2.jpg" alt="">
              </a>
              <a href="" class="ad">
                <img src="assets/img/propaganda3.jpg" alt="">
              </a>
              <a href="" class="ad">
                <img src="assets/img/propaganda1.jpg" alt="">
              </a>

              <a href="" class="ad">
                <img src="assets/img/propaganda2.jpg" alt="">
              </a>


            </aside>

        </div><!-- ./container -->

      </main>




<?php
include 'footer.php';
?>
