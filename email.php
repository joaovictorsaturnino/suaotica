<?php 

if(isset($_POST['email']) && !empty($_POST['email'])){
    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $whats = addslashes($_POST['whats']);
    $capital = addslashes($_POST['capital']);
    $to = "contato@suaotica.org";
    $subject = "Contato - Sua Otica - Franquia";
    $body = "Nome: ".$nome. "\r\n".
            "Email: ".$email. "\r\n".
            "WhatsApp: ".$whats."\r\n".
            "Capital Inicial Planejado: ".$capital;
    $header = "From:suporte@suaotica.org"."\r\n".
                "Reply-To:".$email."\r\n".
                "X=Mailer:PHP/".phpversion();
    if(mail($to,$subject,$body,$header)){
        alert("Email Enviado Com Sucesso!");
    }else{
        alert("O Email não pode ser enviado");
    }
}
?>