<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KPI TV - Сообщение отправлено</title>
    <style>
        body {
            background: #fff;
        }

        .mainblock {
            width: 600px;
            height: 200px;
            margin: 100px auto;
            padding-top: 80px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.18);
            background: #fff; /* fallback for old browsers */

        }

        .logo {
            display: block;
            width: 300px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="mainblock">
        <div class="logo">


<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$subject = htmlspecialchars($subject);
$message = htmlspecialchars($message);

$name = urldecode($name);
$email = urldecode($email);
$subject = urldecode($subject);
$message = urldecode($message);

$name = trim($name);
$email = trim($email); 
$subject = trim($subject);
$message = trim($message); 

$headers = 'From: root@romion.me' . "\r\n" .
    'Reply-To: kpitube@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

echo "Name: ".$name;
echo "<br>";
echo "Email: ".$email;
echo "<br>";
echo "Subject: ".$subject;
echo "<br>";
echo "Message: ".$message;
echo "<br>";echo "<br>";


if (mail("web-63pgp@mail-tester.com", "KPITV.info: ".$subject, "Имя: ".$name."\nE-mail: ".$email."\n\n".$message,  $headers))
 {     echo "сообщение успешно отправлено от ".$name; 
} else { 
    echo "при отправке сообщения возникли ошибки";
}?>

        </div>
    </div>

</body>
</html>