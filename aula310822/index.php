<?php 
include_once('./templates/header.php');

include_once('./config/conexao.php');

if(isset($conexao)){
    ?>
    <h2>Banco de dados conectado</h2>
    <form class="formulario" action="config/inserir.php" method="post">
        <span>Nome:</span>
        <input type="text" name="nome" id="nome">
        <span>Sobrenome:</span>
        <input type="text" name="sobrenome" id="sobrenome">
        <span>Telefone:</span>
        <input type="text" name="telefone" id="telefone">
        <input type="hidden" name="gravar" value="grava">
        <input type="submit" value="Via botao" name="botao">
    </form>

    <?php
}

include_once('./templates/footer.php');