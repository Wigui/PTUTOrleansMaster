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
        Êtes-vous licencié(e) à la FFBAD ou autre Fédération Nationale de Badminton ? '.$_POST['licence'].'<br>
        Participation au tournoi des bénévoles le 22 mars au matin ? '.$_POST['tourbene'].'<br>
        Souhaitez vous participer à la soirée des bénévoles le vendredi 22 mars au soir ? '.$_POST['soirbene']."<br>
        Souhaitez vous participer à la sortie au musée des beaux d'arts le samedi 23 mars au matin ? ".$_POST['visbene'].'<br>
        <br>
        Informations personnelles :<br>
        <br>
        <b>Nom : </b> '. $nom . '<br>
        Prenom : '.$prenom.'<br>
        Date de naissance : '.$date_naissance. '<br>
        <b>Email : </b>'. $mail. '<br>
        Numéro de Teléphone : '.$numeroTel.'<br>
        Taille de T-Shirt : '.$tShirt.'<br>
        Langue étrangères : '.$lang1.' / '.$lang2.' / '.$lang3. '<br>
        Possession du permis (B) de conduire ? '.$_POST['permis'].'<br>
        <br>
        Vos choix de poste : <br>
        <br>
        Choix n°1 : '.$post1.'<br>
        Choix n°2 : '.$post2.'<br>
        Choix n°3 : '.$post3.'<br>
        <br>
        Vos disponibilités :<br>
        <br>
        Le Mardi matin (8h-15h) : '.if($tablo["marMat"]==1){echo('Présent')}else{echo('Non Présent')}.'<br>
        Le Mardi après-midi (15h-22h) : '.if($tablo["marAprem"]==1){echo('Présent')}else{echo('Non Présent')}.'<br>
        Le Mercredi matin (8h-15h) : '.if($tablo["merMat"]==1){echo('Présent')}else{echo('Non Présent')}.'<br>
        Le Mercredi après-midi (15h-22h) : '.if($tablo["merAprem"]==1){echo('Présent')}else{echo('Non Présent')}.'<br>
        Le Jeudi matin (8h-15h) : '.if($tablo["jeuMat"]==1){echo('Présent')}else{echo('Non Présent')}.'<br>
        Le Jeudi après-midi (15h-22h) : '.if($tablo["jeuAprem"]==1){echo('Présent')}else{echo('Non Présent')}.'<br>
        Le Vendredi matin (8h-15h) : '.if($tablo["venMat"]==1){echo('Présent')}else{echo('Non Présent')}.'<br>
        Le Vendredi après-midi (15h-22h) : '.if($tablo["marAprem"]==1){echo('Présent')}else{echo('Non Présent')}.'<br>
        Le Samedi matin (9h-15h) : '.if($tablo["samMat"]==1){echo('Présent')}else{echo('Non Présent')}.'<br>
        Le Samedi après-midi (15h-21h) : '.if($tablo["samAprem"]==1){echo('Présent')}else{echo('Non Présent')}.'<br>
        Le Dimanche matin (9h-15h) : '.if($tablo["dimMat"]==1){echo('Présent')}else{echo('Non Présent')}.'<br>
        Le Dimanche après-midi (15h-21h) : '.if($tablo["marAprem"]==1){echo('Présent')}else{echo('Non Présent')}.'<br>
        <br>
        Si une erreur s’est glissée dans cette liste d’information merci de nous contacter à l’adresse e-mail suivante : @  .com .<br>
        <br>
        Vous serez tenu au courant pour l’ensemble des formalités liées à votre inscription à l’Orléans Masters Badminton.<br> 
        <br>
        Nous vous remercions pour votre engagement.<br>
        <br>
        Sportivement,<br>
        L’équipe de l’Orléans Masters Badminton
        </p>';

$retour = mail($mail, "Verification inscription", $message, $entete);
if($retour) {
    echo '<p>Votre message a bien été envoyé.</p>';
}

?>
