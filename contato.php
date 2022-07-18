<?php
// include do footer

include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>
<div class="m-5" id="contato" style="text-align: center; color: white">
<?php
if (isset ( $_POST['txtNome']) ) {
    $nome = strtoupper( $_POST['txtNome']);
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $telefone = $_POST['txtTelefone'];
    $mensagem = $_POST['txtMensagem'];
 echo $nome. "<br>". $email."<br>". $telefone."<br>". $mensagem;
}
?>

<h1 style="color: fuchsia; font-size: 65px; font-family: Brush Script MT, Brush Script Std, cursive; text-align: center;">Contato</h1>
<form action="./contato.php" method="post">
    <ul style=" list-style: none;">
        <li>
        <label for="txtNome">Nome Completo</label>
        <input type="text" name="txtNome" id="txtNome">
        </li>
        <li>
        <label for="txtSenha">Senha</label>
        <input type="text" name="txtSenha" id="txtSenha">
        </li>
        <li>
        <label for="txtEmail">E-mail</label>
        <input type="text" name="txtEmail" id="txtEmail">
        </li>
        <li>
        <label for="txtTelefone">Telefone</label>
        <input type="text" name="txtTelefone" id="txtTelefone">
        </li>
        <li>
        <label for="txtMensagem">Mensagem</label>
        <input type="text" name="txtMensagem" id="txtMensagem">
        </li>
        <input type="submit" value="Cadastrar">
    </ul>
</form>
</div>
<?php
// include do footer
include_once './includes/_footer.php';
?>