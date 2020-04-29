<?php

if (isset ($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailfrom = $_POST ['mail'];
    $message = $_POST  ['message'];

    $mailto = "twili23@mail.wvu.edu";
    $headers = "From: ".$mailFrom;
    $txt ="Email from" .$name.". \n\n".$message;
    mail($mailto, $subject, $txt, $headers);
    header("location: index.php?mailsend");

}