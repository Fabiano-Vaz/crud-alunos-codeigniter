
<div class="modal fade" role="dialog" tabindex="-1" id="user-form-modal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Criar Novo Usuário</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="py-1">
          <form class="form" novalidate="">
            <div class="row">
              <div class="col-12 col-sm-6 mb-3">
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label>Name</label>
                      <input class="form-control" type="text" name="name" placeholder="" value="<?= $aluno['nome'] ?>" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                <div class="mb-2"><b>Foto de Perfil</b></div>
                <div class="row">
                  <div class="col">
                    <label>image</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label>Endereco</label>
                      <input class="form-control" type="text" placeholder="endereco" value="<?= $aluno['endereco'] ?>" />
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col d-flex justify-content-end">
                <button class="btn btn-primary" type="submit">Salvar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>