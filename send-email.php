<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0; url=http://localhost/MyPortfolioV2/main.php">
    <title>My Portfolio</title>
</head>
<body>
    <?php 
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    require "vendor/autoload.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = "tokiMailPro@gmail.com";
    $mail->Password = "rfnw qquv wkss swcy";

    $mail->setFrom($email, $name);
    $mail->addAddress("killiantonione@gmail.com", "Toki"); // nous je crois

    $mail->Subject = "Nouveau mail de : ".$name;
    $mail->Body = "Email: ".$email."\n\n".$message;

    $mail->send();
    ?>
    <script>
        alert("<?php echo $name;?>, votre message a bien été envoyer !");
    </script>
</body>
</html>