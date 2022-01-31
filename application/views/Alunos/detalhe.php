<div class="container bootstrap snippets bootdey">
	<div class="panel-body inf-content">
		<div class="row">
			<div class="col-md-4">
				<img class="shadow rounded-circle m-3" width="100%" src="<?= $aluno['foto_base64'] ?>" />
			</div>
			<div class="col-md-6 m-5">
				<strong >Informações</strong><br>
				<div class="table-responsive">
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
								<td class="text-muted">
								   <?= $aluno['endereco'] ?>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<hr>
				<div class="text-right">
				<?= anchor("Alunos/editar", "Editar", array("class" => "btn btn-primary",	"data-toggle" => "modal", "data-target" => "#user-form-modal"	)) ?>
				</div>
			</div>
		</div>
	</div>
</div>