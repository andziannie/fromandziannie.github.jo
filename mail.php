<?

$name = $_POST{'name'};
$prenom = $_POST{'prenom'};
$tel = $_POST{'tel'};
$email = $_POST{'email'};



$email_message = "

Nom: ".$name"
Prenom: ".$email"
Email: ".$email"
Telephone: ".$tel"


";

mail("jaustinaokongo@gmail.com", "NOUVEAU MESSAGE", $email_message)








>