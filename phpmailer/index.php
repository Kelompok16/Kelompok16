<?php
 date_default_timezone_set('Etc/UTC');
 require '../PHPMailerAutoload.php';
 //Membuat instance PHPMailer baru
 $mail = new PHPMailer;
 //Memberi tahu PHPMailer untuk menggunakan SMTP
 $mail->isSMTP();
 //Mengaktifkan SMTP debugging
 // 0 = off (digunakan untuk production)
 // 1 = pesan client
 // 2 = pesan client dan server
 $mail->SMTPDebug = 2;
 //HTML-friendly debug output
 $mail->Debugoutput = 'html';
 //hostname dari mail server
 $mail->Host = 'smtp.gmail.com';
 // gunakan
 // $mail->Host = gethostbyname('smtp.gmail.com');
 // jika jaringan Anda tidak mendukung SMTP melalui IPv6
 //Atur SMTP port - 587 untuk dikonfirmasi TLS, a.k.a. RFC4409 SMTP submission
 $mail->Port = 587;
 //Set sistem enkripsi untuk menggunakan - ssl (deprecated) atau tls
 $mail->SMTPSecure = 'tls';
 //SMTP authentication
 $mail->SMTPAuth = true;
 //Username yang digunakan untuk SMTP authentication - gunakan email gmail
 $mail->Username = "kelompok167pmn1@gmail.com";
 //Password yang digunakan untuk SMTP authentication
 $mail->Password = "rafimualif";
 //Email pengirim
 $mail->setFrom('kelompok167pmn1@gmail.com', 'First Last');
 //Alamat email alternatif balasan
 $mail->addReplyTo('kelompok167pmn1@gmail.com', 'First Last');
 //Email tujuan
 $mail->addAddress('kelompok167pmn1@gmail.com', 'John Doe');
 //Subject email
 $mail->Subject = 'PHPMailer GMail SMTP test';
 //Membaca isi pesan HTML dari file eksternal, mengkonversi gambar yang di embed,
 //Mengubah HTML menjadi basic plain-text
 $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
 //Replace plain text body dengan cara manual
 $mail->AltBody = 'This is a plain-text message body';
 //Attach file gambar
 $mail->addAttachment('images/phpmailer_mini.png');
 //mengirim pesan, mengecek error
 if (!$mail->send()) {
 echo "Email Error: " . $mail->ErrorInfo;
 } else {
 echo "Pesan Terkirim!";
 }