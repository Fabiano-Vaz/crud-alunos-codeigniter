<div class="modal fade" role="dialog" tabindex="-1" id="editModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">


      <div class="modal-header">
        <h5 class="modal-title">Editar aluno</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="py-1">
          <!-- inicio do FORM -->
          <form action="<?= base_url() ?>alunos/salvar/<?=$aluno['id']?>" class="form" method="post">

          <!-- input hiddens de ID e base64 para enviar de forma oculta para o model -->
          <input hidden class="form-control" type="text" name="id" id="id" value="<?=$aluno['id']?>" />
          <input hidden class="form-control" type="text" name="foto_base64" id="foto_base64" value="<?=$aluno['foto_base64']?>" />
             
            <div class="row">
              <div class="col-12 col-sm-4 mb-3">
                <div class="mb-2">Foto de Perfil</div>
                <div class="row">
                  <div class="col">
                    <!-- url da foto de perfil -->
                    <input name="foto_url" id="foto_url" accept="image/jpeg" data-max-file-size="3M" type="file" class="dropify" data-height="100" data-allowed-file-extensions="jpg jpeg"  />
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-8 mb-3">
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label>Name</label>
                      <!-- variavel com nome do aluno -->
                      <input class="form-control" type="text" name="nome" placeholder="Nome" value="<?=$aluno['nome']?>" />
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="row mt-3">
              <div class="col">
                <div class="form-group">
                  <label>Endereco</label>
                  <!-- variavel com endereco -->
                  <textarea class="form-control" type="text" name="endereco" placeholder="Endereço" ><?=$aluno['endereco']?></textarea>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col d-flex justify-content-end">
                <button class="btn btn-primary" type="submit">Salvar</button>
              </div>
            </div>
            <!-- fim do FORM -->
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
