<?php

//recebendo os dados
$recebenome = $_POST["nome"];
$recebefone = $_POST["fone"];
$recebemail = $_POST["email"];
$recebemsg = $_POST["msg"]

$headers = "MIME-VERSION: 1.0"
$headers = "Content-type:text/html; charset-uf -8 \n";
$headers = "form: Formulario de contato \n";


$para ="andreluiz@microabbade.com.br "; 

$mensagem = "<h2>De:</h2> ";
$mensagem = $recebenome;
$mensagem = "<h3>Contato:</h3";
$mensagem = $recebefone, " - e-mail: " .$recebemail;
$mensagem = "<p>";


//enviando a mensagem
mail($para, 'Técnico de informatica - De: ' .$recebenome, $mensagem, $headers)

//resposta automática
$mensagem2 "<p>Olá <strong>" .$recebenome. "</strong>.<p>Agradecemos sua visita ao nosso site.</p><br>"

$envia = mail($recebemail, "Agradecemos sua visita", $mensagem2 = "<p>Atendimento</p>")

echo '<script>'