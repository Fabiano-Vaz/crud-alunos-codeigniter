<div class="container">
    <form action="salvar/<?= $produto['id'] ?>" method="post">

        <input type="hidden" name="id" id="id" value="<?= $produto['id'] ?>" />

        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" value="<?= $produto['nome']?>" />

        <label for="preco">Preço</label>
        <input type="text" name="preco" class="form-control" value="<?= $produto['preco']?>" />

        <label for="descricao">Descrição</label>
        <textarea name="descricao" id="descricao" class="form-control"><?= $produto['descricao']?></textarea>

        <button type="submit" name="" class="btn btn-primary">Salvar</button>

        <?= anchor("produtos/index", "Voltar", array("class" => "btn btn-primary")) ?>

    </form>
</div>