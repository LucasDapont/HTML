<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$browser = $_POST["browser"];
$comentario = $_POST["comentario"];
if (isset($_POST["sexo"]))
    $sexo = $_POST["sexo"];
else
    $sexo = false;
if (isset($_POST["box"]))
    $box = $_POST["box"];
else
    $box = false;
$erro = 0;
$mens_erro = "";
if ($nome == "") {
    $erro = +1; 
    $mens_erro = "$erro - Digite o nome.<br>";
}
if ($sexo == false) {
    $erro = +1;  
    $mens_erro = $mens_erro . "$erro - Informe o sexo.<br>";
}
if ($email == "") {
    $erro = +1; 
    $mens_erro = $mens_erro . "$erro - Digite seu email.<br>";
}
if ($browser == "Browser") {
    $erro = +1; 
    $mens_erro = $mens_erro . "$erro - Selecione um browser.<br>";
}
if ($erro > 0) {
    print "<em>Formulário não preenchido corretamente</em>.<br><br>";
    print $mens_erro;
    print "<br><input type='button' value='Corrigir' onclick='javascript:history.go(-1)'>"; // Fix the onclick attribute
} else {
    print "Nome: <strong> $nome</strong><br><br> ";
    print "Sexo: <strong> $sexo</strong><br><br>";
    print "E-mail: <strong> $email</strong><br><br>";
    print "Browser: <strong> $browser</strong><br><br>";
    $total = count($box); 
    print "Esportes:";
    for ($i = 0; $i < $total; $i++) {
        print("<strong> $box[$i] </strong> ");
        if ($i < ($total - 1))
            print " , ";
        else
            print " . ";
    }
    print "<br><br>Comentario:<strong>$comentario</strong><br>";
}
?>
