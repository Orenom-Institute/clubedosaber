<?php
# Atualizando o fuso horário
date_default_timezone_set("America/Sao_Paulo");
# inicializa a sessão
session_start();

# variáveis do sistema
$_SESSION["associados"] = "";
$_SESSION["tempCNPJ"] = "";
$_SESSION["tempSenha"] = "";
$_SESSION["cnpj"] = "";
$_SESSION["contato"] = "";
$_SESSION["cpf"] = "";
$_SESSION["email"] = "";
$_SESSION["home"] = "";
$_SESSION["kolb"] = "";
$_SESSION["lattes"] = "";
$_SESSION["nome"] = "";
$_SESSION["parceiros"] = "";
$_SESSION["passo2"] = "";
$_SESSION["passo3"] = "";
$_SESSION["path"] = $_SERVER["DOCUMENT_ROOT"];
$_SESSION["query"] = "";
?>
<!DOCTYPE html>
<frameset rows="0,*" framespacing="0" border="0" frameborder="0">
 <frame name="head" src="" scrolling="no" noresize target="_self">
  <frame name="main" src="/inicio.php" scrolling="yes" target="_self">
   <noframes>
   </noframes>
</frameset>