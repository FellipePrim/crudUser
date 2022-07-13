<h1>Editar Usuário</h1>
<?php
    $comando = "SELECT * FROM usuarios WHERE
    id=".$_REQUEST["id"];
    $resultado = $conexao->query($comando);
    $row = $resultado->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <!-- escodendo a URL -->
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php
    print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="
        form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="text" value="<?php print $row->email; ?>" name="email" class="
        form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="
        form-control" required>
    </div>
    <div class="mb-3">
        <label>Data Nascimento</label>
        <input type="date" value="<?php print $row->data_nasc; ?>" name="data_nasc" class="
        form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            Enviar
        </button>
    </div>
</form>