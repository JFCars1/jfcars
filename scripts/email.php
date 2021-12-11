<?php
        $nome = str_replace(" ","",trim($_POST['nome']));
        $email =  $_POST['email'];
        $message =  $_POST['message'];
        $to ="jfcars14@gmail.com";
        $subject ="Contato-";
        mail($to, $subject." ".$email, $message,  "From: ". $nome);
        header('Location: http://univaptec.hol.es');
?>