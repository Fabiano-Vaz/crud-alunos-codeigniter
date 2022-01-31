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
              <table class="table table-bordered">
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
                    <tr>
                      <td class="align-middle text-center">
                        <div class="bg-light d-inline-flex justify-content-center align-items-center align-top"></div>
                        <label class="text-muted"><?= $aluno['id']?></label>
                      </td>
                      <td class="align-middle text-center">
                        <img class="shadow rounded-circle" width="60px" src="<?= $aluno['foto_base64'] ?>" />
                      </td>
                      <td class="text-nowrap align-middle"><?= $aluno['nome'] ?></td>
                      <td class="text-nowrap align-middle"><?= $aluno['endereco'] ?></td>
                      <td class="text-center align-middle">
                        <div class="btn-group align-top">
                          <?= anchor("Alunos/detalhe?id=".$aluno['id'], "Detalhes", array("class" => "btn btn-sm btn-outline-secondary badge")); ?>
                          <button class="btn btn-sm btn-outline-secondary badge" type="button"><i class="fa fa-trash"></i></button>
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
            <div class="d-flex justify-content-center">
              <ul class="pagination mt-3 mb-0">
                <li class="disabled page-item"><a href="#" class="page-link">‹</a></li>
                <li class="active page-item"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">›</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>