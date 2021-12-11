<?php
  //Variáveis
  $Nome = $_POST['Nome'];
  $Email = $_POST['Email'];
  $Mensagem = $_POST['Mensagem'];
  $data_envio = date('d/m/Y');


  //Compo E-mail
  $arquivo = "
    <html>
      <p><b>Nome: </b>$Nome</p>
      <p><b>Email: </b>$Email</p>
      <p><b>Mensagem: </b>$Mensagem</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b></p>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "jfcars14@gmail.com";
  $assunto = "Contato pelo Site";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $Nome <$Email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=../contato.html'>";
?>