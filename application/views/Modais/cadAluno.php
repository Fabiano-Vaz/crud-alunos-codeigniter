<div class="modal fade" role="dialog" tabindex="-1" id="cadModal">
  <div class="modal-dialog modal-lg" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cadastrar novo aluno</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="py-1">
          <!-- Inicio do FORM -->
          <form action="<?= base_url() ?>Alunos/novo" class="form" method="post">
            <div class="row">
              <div class="col-12 col-sm-4 mb-3">
                <div class="mb-2">Foto de Perfil</div>
                <div class="row">
                  <div class="col">
                    <!-- url da foto do perfil -->
                    <input name="foto_url" id="foto_url" accept="image/jpeg" type="file" class="dropify" data-height="100" data-allowed-file-extensions="jpg jpeg" />
                  </div>
                </div>
                <!-- base64 da foto do perfil preenchido via ajax -->
                <input hidden class="form-control" type="text" name="foto_base64" id="foto_base64" value="" />
              </div>
              <div class="col-12 col-sm-8 mb-3">
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label>Name</label>
                      <input class="form-control" type="text" name="nome" placeholder="Nome" value="" />
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="row mt-3">
              <div class="col">
                <div class="form-group">
                  <label>Endereco</label>
                  <textarea class="form-control" type="text" name="endereco" placeholder="Endereço" value=""></textarea>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col d-flex justify-content-end">
                <!-- enviar submit -->
                <button class="btn btn-primary" type="submit">Salvar</button>
              </div>
            </div>
            <!-- Fim do FORM -->
          </form>
        </div>
      </div>
    </div>
  </div>
</div>