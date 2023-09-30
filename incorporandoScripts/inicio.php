<?php
    include("menu.php"); // se não encontrar o script retorna um warnind
?>
CONTEUDO DA PAGINA

<?php
    require("menu.php"); // se não encontrar o script retorna um fatal error
?>

<?php
    include_once("menu.php"); // variação once = o script só pode ser chamado uma vez na pagina
?>

<?php
    require_once("menu.php");
?>