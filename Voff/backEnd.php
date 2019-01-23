<style type="text/css">
table, th, td {
	border:black solid 1px;
	border-collapse: collapse;
}
th, td {		
    padding: 5px;
}
.suppr{
	background-color: dimgrey;

}
</style>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=v1;charset=utf8','root','root');
$q=$bdd->query('SELECT * from infoperso');
echo'<table style="border:1px solid black;">';
	echo '<tr>';
	echo
	'<td>ID</td>
	<td>Nom</td>
	<td>Prennom</td>
	<td>Club</td>
	<td>Déja Bénévole</td>
	<td>Licencié</td>
	<td>Remarque</td>
	<td>Reglement</td>
	<td>Numeros de Tel</td>
	<td>Adresse Mail</td>
	<td>Taille t-Shirt</td>
	<td>Langue n°1</td>
	<td>Langue n°2</td>
	<td>Langue n°3</td>
	<td>Poste 1</td>
	<td>Poste 2</td>
	<td>Poste 3</td>
	<td>Dispo:</td>
	</tr>';

while ($donnee=$q->fetch(PDO::FETCH_ASSOC)) {
	echo '<tr>';
	echo 
	'<td>'.$donnee['idPerso'].'</td>
	<td>'.$donnee['nom'].'</td>
	<td>'.$donnee['prenom'].'</td>
	<td>'.$donnee['club'].'</td>	
	<td>'.$donnee['dejBene'].'</td>
	<td>'.$donnee['licence'].'</td>
	<td>'.$donnee['textarea'].'</td>
	<td>'.$donnee['reglement'].'</td>
	<td>'.$donnee['numeroTel'].'</td>
	<td>'.$donnee['mail'].'</td>
	<td>'.$donnee['tShirt'].'</td>
	<td>'.$donnee['lang1'].'</td>
	<td>'.$donnee['lang2'].'</td>
	<td>'.$donnee['lang3'].'</td>
	<td>'.$donnee['poste1'].'</td>
	<td>'.$donnee['poste2'].'</td>
	<td>'.$donnee['poste3'].'</td>
	<td>'.$donnee['marMat'].'</td>
	<td>'.$donnee['marAprem'].'</td>
	<td>'.$donnee['merMat'].'</td>
	<td>'.$donnee['merAprem'].'</td>
	<td>'.$donnee['jeuMat'].'</td>
	<td>'.$donnee['jeuAprem'].'</td>
	<td>'.$donnee['venMat'].'</td>
	<td>'.$donnee['venAprem'].'</td>
	<td>'.$donnee['samMat'].'</td>
	<td>'.$donnee['samAprem'].'</td>
	<td>'.$donnee['dimMat'].'</td>
	<td>'.$donnee['dimAprem'].'</td>';
	echo '</tr>';
}
echo'</table>';
?>