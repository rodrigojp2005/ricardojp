<?php

if( isset($_POST['email']) && !empty($_POST['email'])){

    $nome = addslashes($_POST['name']);
    $Instagram = addslashes($_POST['Instagram']);
    $whatsapp = addslashes($_POST['whatsapp']);

    $to = "ricardo86j@gmail.com";
    $subject = "Contato - Nave Mídias";
    $body = "Nome: ".$nome. "\r\n".
            "Instagram: ".$Instagram. "\r\n".
            "whatsapp: ".$whatsapp. "\r\n";

    $header = "From: ricardo86j@gmail.com"."\r\n".
                "Reply-to:".$email."\r\n".
                "x=Mailer:PHP/".phpversion();

    if(mail($to,$subject,$body,$header)){
        echo("Cadastro realizado como sucesso!");
    } else{
        echo("Ocorreu um erro tente novamente");
    }

}



?>