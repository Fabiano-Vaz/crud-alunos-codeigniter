<div class="container bootstrap snippets bootdey">
  <div class="panel-body inf-content">


    <div class="row">
      <div class="col-md-4">
        <!-- Foto do Aluno -->
        <a class="image-link" href="<?= $aluno['foto_base64'] ?>" data-lightbox="<?= $aluno['id'] ?>">
          <img class="shadow rounded-circle m-3" width="100%" src="<?= $aluno['foto_base64'] ?>" />
        </a>
      </div>
      <div class="col-md-6 m-5">
        <strong>Informações</strong><br>
        <div class="table-responsive">

          <!-- INICIO DA TABELA -->
          <table class="table table-user-information">
            <tbody>
              <tr>
                <td>
                  <strong>
                    <span class="glyphicon glyphicon-asterisk text-primary"></span>
                    Codigo
                  </strong>
                </td>
                <td class="text-muted">
                  <!-- ID do aluno -->
                  <?= $aluno['id'] ?>
                </td>
              </tr>
              <tr>
                <td>
                  <strong>
                    <span class="glyphicon glyphicon-user  text-primary"></span>
                    Name
                  </strong>
                </td>
                <!-- Nome do aluno -->
                <td class="text-muted">
                  <?= $aluno['nome'] ?>
                </td>
              </tr>
              <tr>
                <td>
                  <strong>
                    <span class="glyphicon glyphicon-user  text-primary"></span>
                    Endereco
                  </strong>
                </td>
                <!-- Endereço -->
                <td class="text-muted">
                  <?= $aluno['endereco'] ?>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <hr>
        <div class="text-right">
          <!-- Botões de controles -->
          <?= anchor("Alunos/delete/" . $aluno['id'], "Deletar", array("class" => "btn btn-danger")) ?>
          <?= anchor("Alunos/editar", "Editar", array("class" => "btn btn-primary",  "data-toggle" => "modal", "data-target" => "#editModal")) ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<?php $this->load->view("Modais/editAluno"); ?>