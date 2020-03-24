<?php
$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
if($nome){
    //criar um arquivo de texto, caso ele não exista, e acrescenata o  nome e a quebra de linha
    //O atributo FILE_APPEND acrescenta $nome no arquivo sem apagar o que já tinha antes.
    file_put_contents("tex.php", $nome."\n",FILE_APPEND);

    //header('Location: 'página') -> redireciona para a página indicada atualizando-a, contudo 
    //se der F5 não haverá a solicitação do reenvio de dados do formulário 
    header('Location: index.php');
}
?>
<form method="post">
    <input type="text" name='nome'>
    <input type="submit" value="Enviar">
</form>