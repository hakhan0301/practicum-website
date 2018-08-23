<?php

echo "php loaded"
if(isset($_POST['submit'])){
    echo "php submitted"

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "visionary.amb@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}

?>