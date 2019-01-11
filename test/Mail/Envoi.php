<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Test Formulaire</title>
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.16/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">   
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <h3>Formulaire d'inscription bénévole</h3>
    </header>
    <div class="row">
        <div class="saut"></div>
    </div>
    <div class="row">
        <div class="merci">
            <p> Merci d'avoir renseigné ce Formulaire</p>
        </div>
    </div>

</body>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.16/js/mdb.min.js"></script>
</html>

<?php

if(stristr($_POST['dejBene'],"oui")){
    $dejBene=1;
}
else{
    $dejBene=0;
}
if(stristr($_POST['licence'],"oui")){
    $licence=1;
}
else{
    $licence=0;
}
$textarea=$_POST['textarea'];
if(stristr($_POST['reglement'],"oui")){
    $reglement=1;
}
else{
    $reglement=0;
}
if(stristr($_POST['tourbene'],"oui")){
    $tourbene=1;    
}
else{
    $tourbene=0;
}
if(stristr($_POST['soirbene'],"oui")){
    $soirbene=1;
}
else{
    $soirbene=0;
}
if(stristr($_POST['visbene'],"oui")){
    $visbene=1;
}
else{
    $visbene=0;
}
if(stristr($_POST['permis'],"oui")){
    $permis=1;
}
else{
    $permis=0;
}

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$club=$_POST['club'];
$date_naissance = $_POST['date'][0] . '/' . $_POST['date'][1] . '/' . $_POST['date'][2];
if(isset($_POST['mail']))
{
$mail = htmlspecialchars($_POST['mail']);
if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $mail))
{
$mail_verif = '1';
}
else
{
$mail_verif = '0';

}};

$numeroTel=$_POST['numeroTel'];
$tShirt=$_POST['t-shirt'];
$lang1=$_POST['lang1'];
$lang2=$_POST['lang2'];
$lang3=$_POST['lang3'];
$post1=$_POST['post1'];
$post2=$_POST['post2'];
$post3=$_POST['post3'];
$dispo='jour: ';
foreach ($_POST['horaire'] as $value) {

    $dispo=$dispo.':'.$value;

}
// JSON_Encode

$tablo = array(
"marMat"=>0,
"marAprem"=>0,
"merMat"=>0,
"merAprem"=>0,
"jeuMat"=>0,
"jeuAprem"=>0,
"venMat"=>0,
"venAprem"=>0,
"samMat"=>0,
"samAprem"=>0,
"dimMat"=>0,
"dimAprem"=>0);

$nbDeDispo=0;
foreach($tablo as $key=>$value){
    if(stristr($dispo,$key)){
        $tablo[$key]=1;
        $nbDeDispo+=1;
    }
    else{
        $tablo[$key]=0;
    }
}

foreach ($tablo as $key=>$value) {
    ${$key}=$value;
}

$entete  = 'MIME-Version: 1.0' . "\r\n";
$entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$entete .= 'From: ' . $_POST['email'] . "\r\n";

$message = "<h1>Bénévolat Orléans Master Badminton</h1>
        <p>Bonjour </p>".$nom." ".$prenom.",<br>
        <br>
        <p>Nous avons bien enregistré votre demande d’inscription bénévole à l’Orléans Master Badminton 2019. Nous vous prions de bien vouloir relire les informations qui ont été saisies dans notre espace bénévole informatique :</p><br>
        <br>
        <br>
        <h2>Informations prélimitaire</h2><br>
        <br>
        <p>Participation aux années précédentes  : ".$_POST['dejBene'].'<br>
        Êtes-vous licencié(e) à la FFBAD ou autre Fédération Nationale de Badminton ? '..'<br>
        Participation au tournoi des bénévoles le 22 mars au matin ? '..'<br>
        Souhaitez vous participer à la soirée des bénévoles le vendredi 22 mars au soir ? '.."<br>
        Souhaitez vous participer à la sortie au musée des beaux d'arts le samedi 23 mars au matin ? "..'<br>
        <br>
        Informations personnelles :<br>
        <br>
        <b>Nom : </b> '. $_POST['nom'] . '<br>
        Prenom : '..'<br>
        Date de naissance : '.. '<br>
        <b>Email : </b>'. $_POST['email'] . '<br>
        Numéro de Teléphone : '..'<br>
        Taille de T-Shirt : '..'<br>
        Langue étrangères : '.. '<br>
        Possession du permis (B) de conduire ? '..'<br>
        <br>
        Vos choix de poste : <br>
        <br>
        Choix n°1'..'<br>
        Choix n°1'..'<br>
        Choix n°1'..'<br>
        <br>
        Vos disponibilités :<br>
        <br>
        </p>';

$retour = mail($mail, "Vérification d'inscription", $message, $entete);
if($retour) {
    echo '<p>Votre message a bien été envoyé.</p>';
}

?>
