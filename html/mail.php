<?php

$field_about_contact = $_POST['about-contact'];
$field_name = $_POST['name'];
$field_belong = $_POST['belong'];
$field_tel = $_POST['tel'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];

$mail_to = 'matsuda.toru1125@gmail.com';¥
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'About: '.$field_about_contact."\n";
$body_message .= 'Belong: '.$field_belong."\n";
$body_message .= 'Tel: '.$field_tel."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";
$mail_status = mail($mail_to, $subject, $body_message, $headers);
if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        window.location = 'thanks.html#contact（※送信後に移動するページ）';
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        alert('メッセージ送信に失敗しました。こちらのメールアドレスへお問い合わせください。test@gmail.com（※自分のメールアドレス）');
        window.location = 'index.html（※送信失敗後に移動するページ）';
    </script>
<?php
}
?>