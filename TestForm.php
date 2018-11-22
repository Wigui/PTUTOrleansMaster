<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Test Formulaire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<h1>Ceci est un test !</h1>

<form method="POST" action="test.php" enctype="multipart/form-data">

    <fieldset>
        <legend> Questions Préléminaires : </legend>
        <p>Avez vous déjà bénévole pour cet évènement ? </p>
        Oui <input type="radio" name="event" checked="checked" />
        Non <input type="radio" name="event" /><br />
    </fieldset>

    <fieldset>
        <legend> Saisie des Informations personnelles : </legend>
        <p>Nom : </p>
        <input type="text" name="nom"/><br/>
        <p>Prénom :</p>
        <input type="text" name="prenom"/>
        <br/><br/>
        <p>Date de Naissance : </p>
        <input type="text" name="jour"/>
        <p>Jour</p>
        <input type="text" name="mois"/>
        <p>Mois</p>
        <input type="text" name="annee"/>
        <p>Année</p>
        <br/><br/>
        <p>Mail : </p>
        <input type="text" name="mail"/>
        <p>Numéro de Téléphone : </p>
        <input type="text" name="numeroTel"/>
        <p>Club : </p>
        <input type="text" name="club"/>
        <p>Taille de T-Shirt :</p>
        <select name="select">
            <option value="tailleS">S</option>
            <option value="tailleM">M</option>
            <option value="tailleL">L</option>
            <option value="tailleXL">XL</option>
            <option value="tailleXXL">XXL</option>
            <option value="tailleXXXL">XXXL</option>
        </select><br/><br/>
        <p>Langue étrangères : (3 maximum)</p>
        <select name="select">
            <option value="aucune">Aucune</option>
            <option value="anglais">Anglais</option>
            <option value="allemand">Allemand</option>
            <option value="arabe">Arabe</option>
            <option value="mandarin">Mandarin</option>
            <option value="espagnole">Espagnole</option>
        </select>
        <select name="select">
            <option value="aucune">Aucune</option>
            <option value="anglais">Anglais</option>
            <option value="allemand">Allemand</option>
            <option value="arabe">Arabe</option>
            <option value="mandarin">Mandarin</option>
            <option value="espagnole">Espagnole</option>
        </select>
        <select name="select">
            <option value="aucune">Aucune</option>
            <option value="anglais">Anglais</option>
            <option value="allemand">Allemand</option>
            <option value="arabe">Arabe</option>
            <option value="mandarin">Mandarin</option>
            <option value="espagnole">Espagnole</option>
        </select><br/><br/>
        <!-- <input type="button" value="Ajouter Une langue"/><br /> -->
    </fieldset>
 
    Case à cocher :
    <input type="checkbox" name="checkbox_1" checked="checked" />
    <input type="checkbox" name="checkbox_2" />
    <input type="checkbox" name="checkbox_3" /><br />
 
    Bouton radio à sélectionner :
    <input type="radio" name="radio" checked="checked" />
    <input type="radio" name="radio" />
    <input type="radio" name="radio" /><br />
 
    Envoy de fichier :
    <input type="file" name="file" /><br />
 
    Bloc de texte (plusieurs lignes) :
    <textarea name="textarea" cols="20" rows="7"></textarea><br />
 
    Liste de valeurs :
    <select name="select">
        <option value="Option 1">Option 1</option>
        <option value="Option 2">Option 2</option>
        <option value="Option 3">Option 3</option>
    </select><br/>
 
    Champ caché :
    <input type="hidden" name="hidden" /><br />
 
    Image servant de bouton :
    <input type="image" src="http://www.developpez.net/forums/images/logo16.gif" /><br />
 
    Bouton minimal :
    <input type="button" value="Bouton inutile" /><br />
 
    Bouton d'envoi :
    <input type="submit" value="Envoyer" /><br />
 
    Bouton de réinitialisation :
    <input type="reset" value="Rétablir" />
</form>

</body>
</html>