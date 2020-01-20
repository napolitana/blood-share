<section class="cadastro" id="idCadastro">
    <div class="container">
        <h2 class="text-center">Cadastre-se aqui</h2>
        <div class="form">
          <form class="needs-validation" id="cad-usuario" action="" method="POST" name="formCadastro" novalidate>
              <div class="form-row">
                    <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                        <label for="validationName">Nome *</label>
                        <input name="txtNome" type="text" class="form-control" id="validationName" required>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                        <label for="validationSobrenome">Sobrenome *</label>
                        <input name="txtSobrenome" type="text" class="form-control" id="validationSobrenome" required>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                        <label for="validationNascimento">Data de Nascimento *</label>
                        <input name="mskDataDeNascimento" type="date" class="form-control" id="validationNascimento" required>
                        <div class="invalid-feedback">
                            Por favor, informe sua data de nascimento.
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                        <label for="CPF">CPF *</label>
                        <input name="mskCpf" type="text" class="form-control" id="_cpf" onKeyPress="MascaraCPF(mskCpf);" maxlength="14" required>
                        <div class="invalid-feedback" id="avisoCPF" style="display: none">
                            Por favor, informe um CPF válido.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                        <label for="validationEmail">E-mail *</label>
                        <input name="txtEmail" type="text" class="form-control" id="validationEmail" onBlur = "campoEmail(txtEmail)" required>
                        <div class="invalid-feedback" id="avisoEMAIL" style="display: none">
                            Por favor, informe um endereço de e-mail válido.
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                        <label for="validationCelular">Telefone/Celular</label>
                        <input name="txtTelefone" type="text" attrname="telephone1" class="form-control" id="validationCelular">
                    </div>
                </div>
                <div class="form-group">
                    <label for="tipoSanguineo">Selecione o seu tipo sanguíneo *</label>
                    <select class="form-control" id="tipoSanguineo" name="optTipoSanguineo">
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                        <option>O+</option>
                        <option>O-</option>
                    </select>
                </div>

              <button class="btn btn-primary float-right" type="submit" id="salvar" value="Salvar">Cadastrar</button>
        </form>
      </div>
</section>
