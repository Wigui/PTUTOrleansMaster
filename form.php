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
if(!$erreur)
{
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$club=$_POST['club'];
	$req=$bdd->prepare('INSERT INTO infoperso(nom,prenom,club) VALUES (:nom,:prenom,:club)');
	$req->execute(array(
	'nom'=>$nom,
	'prenom'=>$prenom,
	'club'=>$club,
	));
	$rep=$bdd->query('SELECT * FROM infoperso');
	$donnees=$rep->fetch();
}
else{
	echo 'remplie les champ poto';
}
}

// echo $donnees['nom']." ";
// echo $donnees['prenom'];
// echo (' club'.$donnees['club'].'</br>');
?>






</body>
</html>