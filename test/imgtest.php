<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Test Formulaire</title>
</head>
<body>
    <form method="POST" action="imgtest.php" enctype="multipart/form-data">         

            <label for="photo" >
            Ajoutez une photo (formats attendus : .png, .jpeg, .jpg, .gif | taille maximale : 3 Mo) :<br /></label>
            <input type="file" id="photo" name="photo" />

            <input type="submit" name="submit" value="Envoyer" />
    </form>
</form>
</body>
</html>

<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['photo']) AND $_FILES['photo']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['photo']['size'] <= 3145728)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['photo']['name']);
                var_dump( $infosfichier);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        $dest='images/';
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['photo']['tmp_name'], $dest . $_FILES['photo']['name']);
                        
                        $info = new SplFileInfo($_FILES['photo']['name']);
                        $ext=$info->getExtension();
                        echo $ext;
                        $nom='test';
                        rename($dest.$_FILES['photo']['name'], $dest.$nom .'.'. $ext);
                        echo "L'envoi a bien été effectué !";
                }
                else
                {
                    echo 'extention non-autorisee';
                }
        }
        else
        {
            echo 'image trop grosse';
        }
}
elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_NO_FILE)
{
    echo 'fichier inexistant';
}
elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_PARTIAL)
{
    echo 'fichier uploadé que partiellement';
}
elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_INI_SIZE)
{
    echo 'fichier trop gros';
}
elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_FORM_SIZE)
{
    echo 'fichier trop gros';
}
elseif (!isset($_FILES['photo']))
{
    echo 'pas de variable';
}
else
{
    echo 'probleme a l\'envoi';
}

echo "<br/><br/><br/><br/>";
$op="lolilol";
$utain='bouffon';

$rass=$op.'_'.$utain;
$rass=strtoupper($rass);
echo $rass;
?>