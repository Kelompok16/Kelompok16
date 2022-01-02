<?php
$to_email = $_POST['mail'];
$subject = "UAS WEB Design";
$body ="\r\n nama: ". $_POST['nama']."\r\n nomorhp: ". $_POST['nomorhp']. "\r\n pesan:".$_POST['pesan'];
$headers = "From: Kelompok 16";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
    header("LOCATION: index.html");
} else {
    echo "Email sending failed...";
}
