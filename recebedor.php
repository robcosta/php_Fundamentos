<?php
if (isset($_POST['name'])) {
    
    $nome = $_POST['nome'];
    file_put_contents("teste.txt", $nome, FILE_APPEND);
}
?>
<form method="POST">
    <input type="text" name="nome">
    <input type="submit" value="Enviar">
</form>