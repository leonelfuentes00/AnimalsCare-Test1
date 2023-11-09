<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Full_Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone_Number'];
    $message = $_POST['Mensaje'];

    $to = 'lmfuentes00@gmail.com'; //luego reemplazar con mail animals care 
    $subject = 'Nuevo mensaje del formulario';

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    $email_body = "Nombre: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Número Telefónico: $phone\n";
    $email_body .= "Mensaje:\n$message";

    mail($to, $subject, $email_body, $headers);
}
?>
