<?php
//------------------------------------------------------PART GUILLAUME LESAGE-------------------------------------------------------
function calculAge($age){
    $res=date('Y')-$age;
    return $res;
}
if(stristr($_POST['dejBene'],"oui")){
    $dejBene=true;
}
else{
    $dejBene=false;
}
if(stristr($_POST['licence'],"oui")){
    $licence=true;
}
else{
    $licence=false;
}
$textarea=$_POST['textarea'];
if(stristr($_POST['reglement'],"oui")){
    $reglement=true;
}
else{
    $reglement=false;
}
 //verif pour Guillaume Laurent: coder toute les verif de champs (tu les trouve sur le net facilement)

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$club=$_POST['club'];
$age=@calculAge($_POST['age']);
$mail=$_POST['mail'];
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
echo $dispo.'<br>';
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
print_r($tablo);
echo '<br>';
$nbDeDispo=0;
foreach($tablo as $key=>$value){
    if(stristr($dispo,$key)){
        $tablo[$key]=true;
        $nbDeDispo+=1;
    }
    else{
        $tablo[$key]=false;
    }
}
print_r($tablo);
foreach ($tablo as $key=>$value) {
    ${$key}=$value;
}

$bdd = new PDO('mysql:host=localhost;dbname=v1;charset=utf8','root','root');

$req=$bdd->prepare('INSERT INTO infoperso(
    idPerso,
    dejBene,
    licence,
    textarea,
    reglement,
    nom,
    prenom,
    club,
    age,
    mail,
    numeroTel,
    tShirt,
    lang1,
    lang2,
    lang3,
    post1,
    post2,
    post3,
    marMat,
    marAprem,
    merMat,
    merAprem,
    jeuMat,
    jeuAprem,
    venMat,
    venAprem,
    samMat,
    samAprem,
    dimMat,
    dimAprem
    )
    VALUES (
    :idPerso,
    :dejBene,
    :licence,
    :textarea,
    :reglement,
    :nom,
    :prenom,
    :club,
    :age,
    :mail,
    :numeroTel,
    :tShirt,
    :lang1,
    :lang2,
    :lang3,
    :post1,
    :post2,
    :post3,
    :marMat,
    :marAprem,
    :merMat,
    :merAprem,
    :jeuMat,
    :jeuAprem,
    :venMat,
    :venAprem,
    :samMat,
    :samAprem,
    :dimMat,
    :dimAprem)');
$perso =array(
    'idPerso'=>NULL,
    'dejBene'=>$dejBene,
    'licence'=>$licence,
    'textarea'=>$textarea,
    'reglement'=>$reglement,
    'nom'=>$nom,
    'prenom'=>$prenom,   
    'club'=>$club,
    'age'=>$age,
    'mail'=>$mail,
    'numeroTel'=>$numeroTel,
    'tShirt'=>$tShirt,
    'lang1'=>$lang1,
    'lang2'=>$lang2,
    'lang3'=>$lang3,
    'post1'=>$post1,
    'post2'=>$post2,
    'post3'=>$post3,
    'marMat'=>$marMat,
    'marAprem'=>$marAprem,
    'merMat'=>$merMat,
    'merAprem'=>$merAprem,
    'jeuMat'=>$jeuMat,
    'jeuAprem'=>$jeuAprem,
    'venMat'=>$venMat,
    'venAprem'=>$venAprem,
    'samMat'=>$samMat,
    'samAprem'=>$samAprem,
    'dimMat'=>$dimMat,
    'dimAprem'=>$dimAprem,  
  );
var_dump($perso);
$req->execute($perso);
echo '<br>';
foreach ($perso as $key => $value) {
    echo $key.' : '.$value.'<br>';    # code...
}
/*
$req2=$bdd->prepare("INSERT INTO `infoperso` (`idPerso`, `dejBene`, `licence`, `textarea`, `reglement`, `nom`, `prenom`, `club`, `age`, `mail`, `numeroTel`, `tShirt`, `lang1`, `lang2`, `lang3`, `poste1`, `poste2`, `poste3`, `marMat`, `marAprem`, `merMat`, `merArem`, `jeuMat`, `jeuAprem`, `venMat`, `venAprem`, `samMat`, `samAprem`, `dimMat`, `dimAprem`) VALUES (NULL, '1', '1', '', '1', '', '', '', '20', '', '', '', '', '', '', '', '', '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0');
$req2->execute();
*/
//liste des condition : 
//plus de 1 checkbox cochée (j'ai crée une var: nbDeDispo ligne 274)
//email correct
//tout les champ sont remplie
//les champ ne contiennent pas de balise html ou php




?>