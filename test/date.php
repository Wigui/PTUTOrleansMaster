<h1> Inscription </h1> <br/>
	<?php 
 
		if (isset($_POST['nom']) AND isset($_POST['date'])) {
 
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$pseudo = $_POST['pseudo'];
			$date_naissance = $_POST['date'][0] . '-' . $_POST['date'][1] . '-' . $_POST['date'][2];
			$pass = $_POST['pass'];
			$pass2 = $_POST['pass2'];
			$mail = $_POST['mail'];
			$mail2 = $_POST['mail2'];
 
			if ($pass != $pass2 OR $mail != $mail2) {
 
				echo '<div id="msgerreur"><img src="panneau_attention.png"/> Les <strong>"Mots De Passe"</strong> et/ou <strong>"Mails"</strong> ne sont pas identiques</div><br/>';
 
			}
			else {
			$ajout_mbr = "INSERT INTO membres VALUES('', '$nom', '$prenom', '$pseudo', '$date_naissance', '$mail', '$mdp')";
			$exe = $exe = mysql_query($ajout_mbr) or die ('erreur : '.mysql_error());
			}
 
 
		}
 
 
	?>
	<div id="central">
 
<form method="POST" action="inscription.php">
<table>
	<tr>
		<td><label for="nom"> <span class="idform"> Nom: </span> </label></td> <td><input type="text" name="nom" id="nom"></td>
	</tr>
	<tr>
		<td><label for="prenom"> <span class="idform"> Prenom: </span> </label></td> <td><input type="text" name="prenom" id="prenom"></td>
	</tr>
	<tr>
		<td><label for="pseudo"> <span class="idform"> Pseudo*:  </span></label></td> <td><input type="text" name="pseudo" id="pseudo"></td>
	</tr>
	<tr>
        <td><label for="date"> <span class="idform"> Date de naissance*:  </span></label></td> 
        <td>
            <select name="date[]"> 
                <?php for ($k=1 ; $k<32 ; $k++) {echo '<option value="'.$k.'">'.$k.'</option>';} ?>
            </select>
            <select name="date[]"> 
                <?php for ($k=1 ; $k<13 ; $k++) {echo '<option value="'.$k.'">'.$k.'</option>';} ?>
            </select>
            <select name="date[]"> 
                <?php for ($k=2019 ; $k>1899 ; $k--) {echo '<option value="'.$k.'">'.$k.'</option>';} ?>
            </select>
        </td> 
	</tr>
	<tr>
		<td><label for="pass"> <span class="idform"> Mot de passe*:  </span></label></td> <td><input type="password" name="pass" id="pass"/></td>
	</tr>
	<tr>
		<td><label for="pass2"> <span class="idform"> Confirmation mot de passe*:  </span></label></td> <td><input type="password" name="pass2" id="pass2"/></td>
	</tr>
	<tr>
		<td><label for="mail"> <span class="idform"> Mail*:  </span></label></td> <td><input type="text" name="mail" id="mail"></td>
	</tr>
	<tr>
		<td><label for="mail2"> <span class="idform"> Confirmation Mail*:  </span></label></td> <td><input type="text" name="mail2" id="mail2"></td>
	</tr>
	<tr>
		<td><input type="submit" value="S'inscrire"></td>
	</tr>
</table>
</form>
	</div>