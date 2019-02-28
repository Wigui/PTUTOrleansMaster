<!DOCTYPE html>
<?php
function connectV1(){
	$bdd = new PDO('mysql:host=localhost;dbname=v1;charset=utf8','root','root');
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>V1</title>
</head>
<body>
<form name="Inscription" method="post" action="form.php">
	Nom: <input type="txt" name="nom" value=""/></br>
	Prénom: <input type="txt" name="prenom" value=""/></br>
	Club: <input type="txt" name="club" value=""/></br>
  P1: <input type="txt" name="poste1" value="Serveur"/></br>
  P2: <input type="txt" name="poste2" value="Danseur"/></br>
  P3: <input type="txt" name="poste3" value="Music"/></br>
  Jd: <input type="txt" name="joursDispo" value="Lundi"/></br>
  Hd: <input type="txt" name="heuresDispo" value="16h"/></br>
	<input type="submit" name="valider" value="Valider">
</form>
<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=v1;charset=utf8','root','root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$incomplet=empty($nom)||empty($prenom)||empty($club);
if (isset($_POST['valider']))
{
$erreur=false;
if(empty($_POST['nom']))
  {
    //ereur au niveau du pseudo
    $erreur= true;
  }
  if(empty($_POST['prenom']))
  {
    //erreur au niveau du message
    $erreur= true;
  }
  if(empty($_POST['club']))
  {
    //erreur au niveau du message
    $erreur= true;
  }
  if(empty($_POST['poste1']))
  {
    //erreur au niveau du message
    $erreur= true;
  }  
  if(empty($_POST['joursDispo']))
  {
    //erreur au niveau du message
    $erreur= true;
  }
  if(empty($_POST['heuresDispo']))
  {
    //erreur au niveau du message
    $erreur= true;
  }
if(!$erreur)
{
 
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$club=$_POST['club'];
  $poste1=$_POST['poste1'];
  $poste2=$_POST['poste2'];
  $poste3=$_POST['poste3'];
  $joursDispo=$_POST['joursDispo'];
  $heuresDispo=$_POST['heuresDispo'];
	$req=$bdd->prepare('INSERT INTO infoperso(nom,prenom,club,poste1,poste2,poste3,joursDispo,heuresDispo) VALUES (:nom,:prenom,:club,:poste1,:poste2,:poste3,:joursDispo,:heuresDispo)');
	$req->execute(array(
  
	'nom'=>$nom,
	'prenom'=>$prenom,
	'club'=>$club,
  'poste1'=>$poste1,
  'poste2'=>$poste2,
  'poste3'=>$poste3,
  'joursDispo'=>$joursDispo,
  'heuresDispo'=>$heuresDispo,

  ));
  echo "Okay";
	
	// $rep=$bdd->query('SELECT * FROM infoperso');
	// $donnees=$rep->fetch();
}
else{
	echo 'remplie les champ poto</br>';
}
}


// echo $donnees['nom']." ";
// echo $donnees['prenom'];
// echo (' club'.$donnees['club'].'</br>');
?>






</body>
</html>