<div class="col">
  <div class="e-tabs mb-3 px-3">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#"><i class="fas fa-users mr-1"></i>Alunos</a>
      </li>
    </ul>
  </div>

  <div class="row flex-lg-nowrap">
    <div class="col mb-3">
      <div class="e-panel card">
        <div class="card-body">
          <div class="card-title">
            <h6 class="mr-2"><span>Tabela</span><small class="px-1">de alunos cadastrados:</small></h6>
          </div>
          <div class="e-table">
            <div class="table-responsive table-lg mt-3">
              <table class="table table-bordered table_aluno mb-5">
                <thead>

                  <!-- Cabeçalio da Tabela -->
                  <tr>
                    <th class="text-center">
                      <label class="text-muted">*</label>
                    </th>
                    <th>Foto</th>
                    <th class="max-width">Nome</th>
                    <th class="max-width">Endereco</th>
                    <th class="text-center">Ação</th>
                  </tr>
                </thead>
                <tbody>


                  <!-- Loop de rows da tabela -->
                  <?php
                  foreach ($alunos as $aluno) { ?>
                    <tr class="tr_aluno">
                      <td class="align-middle text-center">
                        <div class="bg-light d-inline-flex justify-content-center align-items-center align-top"></div>
                        <label class="text-muted"><?= $aluno['id'] ?></label>
                      </td>
                      <td class="align-middle text-center">
                        <a class="image-link" href="<?= $aluno['foto_base64'] ?>" data-lightbox="<?= $aluno['id'] ?>">
                          <img class="shadow rounded-circle" width="60px" src="<?= $aluno['foto_base64'] ?>" />
                        </a>
                      </td>
                      <td class="text-nowrap align-middle"><?= $aluno['nome'] ?></td>
                      <td class="text-nowrap align-middle"><?= $aluno['endereco'] ?></td>
                      <td class="text-center align-middle">
                        <div class="btn-group align-top">
                          <?= anchor("Alunos/detalhe?id=" . $aluno['id'], "Detalhes", array("class" => "btn btn-sm btn-outline-secondary badge")); ?>
                          <a href="<?= base_url() ?>alunos/delete/<?= $aluno['id'] ?>" class="btn btn-sm btn-outline-secondary badge text-muted" type="button"><i class="fa fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                  <!---- fim do loop --------->


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>