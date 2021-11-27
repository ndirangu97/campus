<?php

$name=$_POST['name'];
$visitorEmail=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$emailFrom='hezworldcampus@gmail.com ';

$emailSubject='New Form Submission';

$emailBody='User Name: $name.\n'.
            'User Email:$visitorEmail.\n'.
            'Subject: $subject.\n'.
            'User Message : $visitorEmail.\n';
  
$to='hezronndirangu97@gmail.com';

$headers='From : $emailFrom \r\n';
$headers.='Reply -To: $visitorEmail \r\n';

mail($to,$emailSubject,$emailBody,$headers);

header('Location : contactus.html');










?>