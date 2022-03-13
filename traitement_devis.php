<?php
include 'devis.php';


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];

$date = $_POST['date'];
$service = $_POST['service'];

if(isset($_POST['envoyer'])){
    $insert_dem =$bdd->prepare("INSERT INTO inscription(id,nom,prenom,telephone,adress) VALUES(?,?,?,?,?)");
    $insert_dem->execute(array($id,$nom,$prenom,$telephone,$adress));


    $id_dem = $bdd->lastInsertId();
    $inser = $bdd->prepare("INSERT INTO devis(id_devis,date_devis,service_devis,date_deb_travaux,date_fin_travaux)VALUES(?,?,?,?,?)");
    $inser->execute(array($id_dem,$service_devis,$date));
    header("Location:index.php");

}else{
    echo "echouer";
}