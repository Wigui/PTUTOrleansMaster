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
$nom2=$nom;
$prenom=$_POST['prenom'];
$prenom2=$prenom;
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
"sam2Mat"=>0,
"sam2Aprem"=>0,
"dim2Mat"=>0,
"dim2Aprem"=>0,
"lunMat"=>0,
"lunAprem"=>0,    
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
}
catch(Exception $e){
    die('Erreur :'.$e->getMessage());
} 

$req2=$bdd->prepare(
    "INSERT INTO infoperso (idPerso, dejBene, licence, textarea, reglement, tourbene, soirbene, visbene, nom, prenom, club, date_naissance, mail, numeroTel, tShirt, lang1, lang2, lang3, permis, post1, post2, post3, sam2Mat, sam2Aprem, dim2Mat, dim2Aprem, lunMat, lunAprem, marMat, marAprem, merMat, merAprem, jeuMat, jeuAprem, venMat, venAprem, samMat, samAprem, dimMat, dimAprem) 
    VALUES (NULL, :dejBene, :licence, :textarea, :reglement, :tourbene, :soirbene, :visbene, :nom, :prenom, :club, :date_naissance, :mail, :numeroTel, :tShirt, :lang1, :lang2, :lang3, :permis, :post1, :post2, :post3, :sam2Mat, :sam2Aprem, :dim2Mat, :dim2Aprem, :lunMat, :lunAprem, :marMat, :marAprem, :merMat, :merAprem, :jeuMat, :jeuAprem, :venMat, :venAprem, :samMat, :samAprem, :dimMat, :dimAprem)"
    );


$req2->execute(array(
    'dejBene'=>$dejBene, 
    'licence'=>$licence, 
    'textarea'=>$textarea, 
    'reglement'=>$reglement,
    'tourbene'=>$tourbene,
    'soirbene'=>$soirbene,
    'visbene'=>$visbene,
    'nom'=>$nom, 
    'prenom'=>$prenom, 
    'club'=>$club, 
    'date_naissance'=>$date_naissance, 
    'mail'=>$mail, 
    'numeroTel'=>$numeroTel, 
    'tShirt'=>$tShirt, 
    'lang1'=>$lang1, 
    'lang2'=>$lang2, 
    'lang3'=>$lang3,
    'permis'=>$permis,
    'post1'=>$post1, 
    'post2'=>$post2, 
    'post3'=>$post3,
    'sam2Mat'=>$sam2Mat,
    'sam2Aprem'=>$sam2Aprem,
    'dim2Mat'=>$dim2Mat,
    'dim2Aprem'=>$dim2Aprem,
    'lunMat'=>$lunMat,
    'lunAprem'=>$lunAprem,
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
    'dimAprem'=>$dimAprem
));

if (isset($_FILES['photo']) AND $_FILES['photo']['error'] == 0)
{
        if ($_FILES['photo']['size'] <= 3145728)
        {
                $infosfichier = pathinfo($_FILES['photo']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        $dest='photos/';
                        move_uploaded_file($_FILES['photo']['tmp_name'], $dest . $_FILES['photo']['name']);
                        $info = new SplFileInfo($_FILES['photo']['name']);
                        $ext=$info->getExtension();
                        $nomphoto=strtoupper($nom2.'_'.$prenom2);
                        $nomphoto = str_replace(CHR(32),"",$nomphoto); 
                        rename($dest.$_FILES['photo']['name'], $dest.$nomphoto.'.'.$ext);
                }
                else
                {
                    $message='Extention non-autorisee';
 
                    echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
                }
        }
        else
        {
            $message='Image trop voluminueuse';
            echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
        }
}
elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_NO_FILE)
{
    $message='Fichier inexistant';
    echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
}
elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_PARTIAL)
{
    $message='Fichier uploadé que partiellement';
    echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
}
elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_INI_SIZE)
{
    $message='Fichier trop voluminueux';
    echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
}
elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_FORM_SIZE)
{
    $message='Fichier trop voluminueux';
    echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
}
elseif (!isset($_FILES['photo']))
{
    $message='Pas de variable';
    echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
}
else
{
    $message='Probleme a l\'envoi';
    echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
}

?>
