<div class="container">
    <div class="main-adm">
      <div class="title">
        <h1>Pessoas cadastradas</h1>
      </div>

      <div class="selecionar-todos">
        <input type="checkbox" id="select_all" name="select_all" onclick="SelecionarTudo();" value="Selecionar todos">
        <label for="select_all">Selecionar todos</label>
      </div>

        <table id="tabela-doadores" class=" table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Tipo Sanguineo</th>
                </tr>
            </thead>
            <tbody>
                <?php include('encheTabela.php') ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>TipoSanguineo</th>
                </tr>
            </tfoot>
        </table>

        <div class="enviar-email d-flex j-end">
          <button type="submit" name="btn-enviar" class="btn btn-success" onclick="Enviar();">Enviar e-mail às pessoas selecionadas</button>
        </div>
    </div>

    <div id="divCorpo" style="z-index: 30000"></div>
</div>
