<?php
var_dump($_POST);

    //On récupère les valeurs entrées par l'utilisateur :
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];

    echo "nom : ".$nom;
    echo "prenom : ".$prenom;
?>

<!-- HTML-->
<input type="hidden" id="..." value=<?php echo $nom; ?>/>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Test Formulaire</title>
</head>
<body>
    <form method="POST" action="test.php" enctype="multipart/form-data">         

        <textarea name="nom" type="text" value=<?php echo $nom; ?> id="form18"></textarea>
        <label for="form18">Votre nom</label>
        <textarea name="prenom" type="text" value=<?php echo $prenom; ?> id="form19"></textarea>
        <label for="form19">Votre prénom</label>
        <button type="submit" value="Envoyer">Envoyer !</button>
    </form>


</form>
</body>
</html>
