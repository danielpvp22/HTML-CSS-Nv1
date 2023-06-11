<?php
  if(isset($_POST['email'])) {

    // informações do destinatário
    $email_to = "seu_email@provedor.com";
    $email_subject = "Assunto do e-mail";

    function died($error) {
      // mensagens de erro
      echo "Desculpe, mas ocorreu um erro no formulário. ";
      echo "Os seguintes erros foram encontrados:<br /><br />";
      echo $error."<br /><br />";
      echo "Por favor, corrija-os e tente novamente.<br /><br />";
      die();
    }

    // validação dos dados do formulário
    if(!isset($_POST['nome']) ||
      !isset($_POST['email']) ||
      !isset($_POST['cep']) ||
      !isset($_POST['rua']) ||
      !isset($_POST['numero']) ||
      !isset($_POST['cidade']) ||
      !isset($_POST['uf'])) {
      died('Desculpe, mas ocorreu um erro no formulário.');
    }

    $nome = $_POST['nome'];
    $email_from = $_POST['email'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];

    // criação do email
    $email_message = "Detalhes do formulário abaixo:\n\n";
    $email_message .= "Nome: ".$nome."\n";
    $email_message .= "E-mail: ".$email_from."\n";
    $email_message .= "CEP: ".$cep."\n";
    $email_message .= "Rua: ".$rua."\n";
    $email_message .= "numero".$numero."\n"; 
    $email_message .= "cidade".$cidade."\n";
    $email_message .= "uf".$uf."\n"; 

    // cabeçalhos do e-mail
    $headers = 'From: '.$email_from."\r\n".
      'Reply-To: '.$email_from."\r\n" .
      'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>
  <!-- mensagem de envio do e-mail -->
  Obrigado por entrar em contato. Retornaremos o mais breve possível.
<?php
  }
?>