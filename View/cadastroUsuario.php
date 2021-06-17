<?php
include("header.php");
?>

<div class="container">

    <form action="../Controller/inserirUsuario.php" method="post" class="row g-3">

        <div class="col-12">
            <label for="inputlogin" class="form-label">E-mail</label>
            <input type="e-mail" name="login" class="form-control" id="inputlogin">
        </div>

        <div class="col-12">
            <label for="inputsenha" class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" id="inputsenha">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>

<?php
include("footer.php");
?>