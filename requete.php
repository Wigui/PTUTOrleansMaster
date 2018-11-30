<!DOCTYPE html>
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
$pop=3;
$bdd = new PDO('mysql:host=localhost;dbname=v1;charset=utf8','root','root');
$variableAPasser='flou';
$i=0;
echo '<input type=hidden id=varpass value='.$variableAPasser.' ?>';
$req=$bdd->query('SELECT * FROM infoperso');
echo'<table style="border:1px solid black;" ><tr>
<th>ID</th>
<th>Prenom</th>
<th>Nom</th>
<th>Club</th>
<th>Poste1</th>
<th>Poste2</th>
<th>Poste3</th>
<th>Jours Dispo</th>
<th>Heures Dispo</th>
<th>Supprimer</th>
</tr>';


while ($tab = $req->fetch()) {
	echo '<tr>';
	echo '<td>'.$tab['idPerso'].'</td>
	<td>'.$tab['prenom'].'</td>
	<td> '.$tab['nom'].'</td>
	<td>'.$tab['club'].'</td>
	<td>'.$tab['poste1'].'</td>
	<td>'.$tab['poste2'].'</td>
	<td>'.$tab['poste3'].'</td>
	<td>'.$tab['joursDispo'].'</td>
	<td>'.$tab['heuresDispo'].'</td>
	<td><form name="pif" method="post" action="requete.php"><input type="submit" class="button" name="supprimer" value="Supprimer"></td></form>';	
	echo '</tr>';

}
echo'</table>';
echo'<script type="text/javascript">
	$var=document.getElementById("varpass").value;
	console.log($var);
</script>';
if (isset($_POST['supprimer'])) {
	$id=$tab['idPerso'];
	echo $id;
	$supprSQL=$bdd->prepare('DELETE FROM `infoperso` WHERE idPerso=$');
	$supprSQL->execute();
	exit;
}
echo $pop;
// $tab=$req->fetch(PDO::FETCH_ASSOC);
// print_r($tab)

// foreach ($tab as $key => $value) {
// 	echo $value;
// }
	



?>
<script type="text/javascript">
	$var=document.getElementById(varpass);
	console.log($var);
</script>

