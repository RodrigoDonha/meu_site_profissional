<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../../vendor/autoload.php';

// var_dump($senha);
// print_r($_ENV);
// print_r(getenv());
// die();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

    $mail = new PHPMailer(true);
    try {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();

        $senha = $_ENV['MINHA_SENHA'];
        $address_email = $_ENV['ADDRESS_EMAIL'];
        $pswd_email = $_ENV['PSWD_EMAIL'];

        // Configurações do servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.titan.email'; // Servidor SMTP do seu provedor de e-mail
        $mail->SMTPAuth = true;
        $mail->Username = $address_email; // Seu endereço de e-mail
        $mail->Password = $pswd_email; // Sua senha de e-mail
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Remetente e destinatário
        $mail->setFrom($mail->Username, $name);
        $mail->addAddress($mail->Username);

        // Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = 'Nova mensagem de ' . $name;
        $mail->Body    = "Nome: $name<br>E-mail: $email<br><br>Mensagem:<br>$message<br><br>Mensagem originaria do site protifólio profissional." 
        ;

        $mail->send();
        // echo 'Mensagem enviada com sucesso!';
        header('Location: /index.html?status=success');
        exit();
    } catch (Exception $e) {
        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
    }
}
?>
