<?php
var_dump($_POST);
//------------------------------------------------------PART GUILLAUME LESAGE-------------------------------------------------------
function calculAge($age){
    $res=date('Y')-$age;
    return $res;
}
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
 //verif pour Guillaume Laurent: coder toute les verif de champs (tu les trouve sur le net facilement)

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$club=$_POST['club'];
$age=@calculAge($_POST['age']);
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
if(preg_match('`[0-9]{10,14}`',$numeroTel))
{
  $numeroTel_verif='1';
}
else
{
  $numeroTel_verif='0';
}
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


try{
    $bdd = new PDO('mysql:host=localhost;dbname=v1;charset=utf8','root','root');
    echo "BDD OK";
}
catch(Exception $e){
    die('Erreur :'.$e->getMessage());
}

$query='SELECT COUNT(*) FROM ma_table WHERE nom = "$nom" AND prenom="$prenom"';
$slut=$bdd->query($query);
echo $slut; 

$req2=$bdd->prepare("INSERT INTO `infoperso` (`idPerso`, `dejBene`, `licence`, `textarea`, `reglement`, `nom`, `prenom`, `club`, `age`, `mail`, `numeroTel`, `tShirt`, `lang1`, `lang2`, `lang3`, `poste1`, `poste2`, `poste3`, `marMat`, `marAprem`, `merMat`, `merAprem`, `jeuMat`, `jeuAprem`, `venMat`, `venAprem`, `samMat`, `samAprem`, `dimMat`, `dimAprem`) VALUES (NULL, '$dejBene', '$licence', '$textarea', '1', '$nom', '$prenom', '$club', '20', '$mail', '$numeroTel', '$tShirt', '$lang1', '$lang2', '$lang3', '$post1', '$post2', '$post3', '$marMat', '$marAprem', '$merMat', '$merAprem', '$jeuMat', '$jeuAprem', '$venMat', '$venAprem', '$samMat', '$samAprem', '$dimMat', '$dimAprem')");

// if (($reglement=1) and ($nom!=NULL) and ($prenom!=NULL) and ($club!=NULL) and ($age!=NULL) and ($mail!=NULL) and ($numeroTel!=NULL) and ($mail_verif=1) and ($numeroTel_verif=1) and ($nbDeDispo>=1)){

if($req2->execute()){
    echo 'sa fonctionne';
}

//liste des condition :
//plus de 1 checkbox cochée (j'ai crée une var: nbDeDispo ligne 274)
//email correct
//tout les champ sont remplie
//les champ ne contiennent pas de balise html ou php

?>
