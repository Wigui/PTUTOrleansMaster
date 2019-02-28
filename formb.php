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
class Database
{
	private $_host='mysql:host=localhost;dbname=V1;charset=utf8';
	private $_username='root';
	private $_password='root';
	private $_bdd;
	public function getHost(){
		return $this->_host;
	}
	public function setHost($host){
		$this->_host=$host;
	}
	function connexion()
	{
		try{
			$this->setbdd(new PDO($this->getHost(),$this->getUsername(),$this->getPassword()));			
		}
		catch(Exeption $e) {
			die('Erreur: '.$e->getMessage());
		}
	}
function addMember(){
	return 'INSERT INTO infoperso (nom,prenom,club) VALUES (:nom,:prenom,:club)';

}

}
function insertMember(){
	$bdd=new Database();
	$bdd->connexion();
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$club=$_POST['club'];
	$query = $bdd->getBdd()->prepare($bdd->addMember());
	$array=array(
		'nom' => $nom,
		'prenom'=> $prenom,
		'club'=> $club,
	);
	$query->execute($array);

}
$options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
insertMember();
?>
</body>
</html>