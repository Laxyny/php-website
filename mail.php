<?php

$to = "test@site.fr";

$subject = "Sujet du message";

$message = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus rem nostrum eaque, qui dolore voluptatibus nam? Debitis officia recusandae quia illum dicta, blanditiis, corporis, nihil odit quae aut repudiandae ducimus.";

$message = wordwrap($message, 70, "\r\n");

$headers = [
    "From" => "no-reply@site.fr",
    "Replay-To" => "mail@site.fr",
    "Cc" => "copie@site.fr",
    "Bcc" => "copieinvisible@site.fr",
    "Content-Type" => "text/html; charset=utf-8"
];

mail($to, $subject, $message, $headers);