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
    <link rel="stylesheet" type="text/css" href="TestForm-dalby2.css">
</head>
<body>
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse" id="mainNav">
        <img src="photos/logoai.png" alt="orleansMaster"/>
        <div class="container" >
        
            <div class="progress"style="width: 1000px;">
<div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
60%
</div>
</div>
        </div>
    </nav>

</br></br></br></br></br>
<div id="CentrePage">
<form method="POST" action="recupEtInsert.php" enctype="multipart/form-data">
</br>

    <fieldset>
    <div class="QuestionsPréléminaires">
    
        <p>Questions Préléminaires :</p>
        </div>    
        <p>Avez vous déjà bénévole pour cet évènement ? </p>
        <label for="dejBene">Oui</label>
        <input type="radio" name="dejBene" checked="checked" value="Oui"/>
        <label for="dejBene">Non</label>
        <input type="radio" name="dejBene" value="Non"/><br/>
        <p>Êtes-vous licencié(e) à la FFBAD ou autre Fédération Nationale de Badminton ?</p>
        <label for="licence">Oui</label>
        <input type="radio" name="licence" checked="checked" value="Oui"/>
        <label for="licence">Non</label>
        <input type="radio" name="licence" value="Non"/><br/>
        <p>Par quel(s) moyen savez-vous entendue parler de cet évènement?<br/>(Indiquer votre réponse dans la zone de texte ci-dessous)</p>
        <textarea name="textarea" cols="70" rows="7"></textarea><br/>
        <p>Acceptez-vous le règlement de cette inscription en tant que bénévoles ?</p>
        <label for="reglement">Oui</label>
        <input type="radio" name="reglement" checked="checked" value="Oui"/>
        <label for="reglement">Non</label>
        <input type="radio" name="reglement" value="Non"/>
    </fieldset>
    
</br>

    <fieldset>
    <div class="MesInformationsPersonnelles">
    
        <p>Mes Informations personnelles : </p>
        </div>
        <p>Nom : </p>
        <input type="text" name="nom"/><br/>
        <p>Prénom :</p>
        <input type="text" name="prenom"/>
        <br/><br/>
        <p>Date de Naissance : </p>
        <input type="text" name="age"/>
        <p>Année</p>
        <br/><br/>
        <p>Mail : </p>
        <input type="text" name="mail"/>
        <p>Numéro de Téléphone : </p>
        <input type="text" name="numeroTel"/>
        <p>Club : </p>
        <input type="text" name="club"/>
        <p>Taille de T-Shirt :</p>
        <select name="t-shirt">
            <option value="tailleS">S</option>
            <option value="tailleM">M</option>
            <option value="tailleL">L</option>
            <option value="tailleXL">XL</option>
            <option value="tailleXXL">XXL</option>
            <option value="tailleXXXL">XXXL</option>
        </select><br/><br/>
        <p>Langue étrangères : (3 maximum)</p>
        <select name="lang1">
            <option value="aucune">Aucune</option>
            <option value="anglais">Anglais</option>
            <option value="allemand">Allemand</option>
            <option value="arabe">Arabe</option>
            <option value="mandarin">Mandarin</option>
            <option value="espagnole">Espagnole</option>
        </select>
        <select name="lang2">
            <option value="aucune">Aucune</option>
            <option value="anglais">Anglais</option>
            <option value="allemand">Allemand</option>
            <option value="arabe">Arabe</option>
            <option value="mandarin">Mandarin</option>
            <option value="espagnole">Espagnole</option>
        </select>
        <select name="lang3">
            <option value="aucune">Aucune</option>
            <option value="anglais">Anglais</option>
            <option value="allemand">Allemand</option>
            <option value="arabe">Arabe</option>
            <option value="mandarin">Mandarin</option>
            <option value="espagnole">Espagnole</option>
        </select><br/><br/>
        <!-- <input type="button" value="Ajouter Une langue"/><br /> -->
    </fieldset>
    
</br>

    <fieldset>
    <div class="MonPoste">
    
        <p>Mon poste :</p>
        </div>
        <p>Choix n°1 :</p>
        <select name="post1">
            <option value="info">Informatique</option>
            <option value="plateau">Plateau</option>
            <option value="com">Communication</option>
            <option value="buvette">Buvette</option>
            <option value="gestJoueurs">Gestion des joueurs</option>
            <option value="officielsTech">Officiel Technique</option>
            <option value="restBene">Restaurant bénévole</option>
        </select>
        <br/>
        <p>Choix n°2 :</p>
        <select name="post2">
            <option value="info">Informatique</option>
            <option value="plateau">Plateau</option>
            <option value="com">Communication</option>
            <option value="buvette">Buvette</option>
            <option value="gestJoueurs">Gestion des joueurs</option>
            <option value="officielsTech">Officiel Technique</option>
            <option value="restBene">Restaurant bénévole</option>
        </select>
        <br/>
        <p>Choix n°3 :</p>
        <select name="post3">
            <option value="info">Informatique</option>
            <option value="plateau">Plateau</option>
            <option value="com">Communication</option>
            <option value="buvette">Buvette</option>
            <option value="gestJoueurs">Gestion des joueurs</option>
            <option value="officielsTech">Officiel Technique</option>
            <option value="restBene">Restaurant bénévole</option>
        </select>
        <br/>
        <p>Informations sur les postes à compléter</p>
    </fieldset>
    
</br>

    <fieldset>
    <div class="MesDisponibilités">
    
        <p>Mes disponibilités :</p>
        </div>
        <p>Veuillez rentrer vos disponibilités :</p>
        <label for="marMat">Mardi : matin (8h-15h)</label>
        <input type="checkbox" name="horaire[]" value="marMat"/>
        <label for="marAprem">après-midi (15h-22h)</label>
        <input type="checkbox" name="horaire[]" value="marAprem"/>
        <br/><br/>
        <label for="merMat">Mercredi : matin (8h-15h)</label>
        <input type="checkbox" name="horaire[]" value="merMat"/>
        <label for="merAprem">après-midi (15h-22h)</label>
        <input type="checkbox" name="horaire[]" value="merAprem"/>
        <br/><br/>
        <label for="jeuMat">Jeudi : matin (8h-15h)</label>
        <input type="checkbox" name="horaire[]" value="jeuMat"/>
        <label for="jeuAprem">après-midi (15h-22h)</label>
        <input type="checkbox" name="horaire[]" value="jeuAprem"/>
        <br/><br/>
        <label for="venMat">Vendredi : matin (8h-15h)</label>
        <input type="checkbox" name="horaire[]" value="venMat"/>
        <label for="venAprem">après-midi (15h-22h)</label>
        <input type="checkbox" name="horaire[]" value="venAprem"/>
        <br/><br/>
        <label for="samMat">Samedi : matin (8h-15h)</label>
        <input type="checkbox" name="horaire[]" value="samMat"/>
        <label for="samAprem">après-midi (15h-22h)</label>
        <input type="checkbox" name="horaire[]" value="samAprem"/>
        <br/><br/>
        <label for="dimMat">Dimanche : matin (8h-15h)</label>
        <input type="checkbox" name="horaire[]" value="dimMat"/>
        <label for="dimAprem">après-midi (15h-22h)</label>
        <input type="checkbox" name="horaire[]" value="dimAprem"/>
        <br/>
    </fieldset>

</br>

    <fieldset>
    <div class="MailRécapitulatif">
    
        <p>Mail récapitulatif :</p>
        </div>
        <p>Afin de finaliser votre inscription en tant que bénévole un e-mail de confirmation a été envoyer à l'adresse mail que vous avez indiquer.</p>
        <p>Veuillez cliquer sur le lien fournit avec le mail afin de valider votre inscription.</p>
        <p>(Si vous ne recevez aucun mail <a href="#">Cliquer ici</a>)</p>
    </fieldset>
       
</br>
    <button type="submit" value="Envoyer "class="btn btn-primary">Envoyer !</button>
</br></br></br></br>    



</div>
  <!-- Pour prog
    <label for="scales">Scales</label>
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
    <input type="reset" value="Rétablir" /> -->

</form>
</div>

</body>

<!-- Footer -->


    <!-- Footer Elements -->
   
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="color:white;">© 2018 Copyright:
      <a href="https://www.orleansinternational.fr/"> orleansinternational.fr</a>
    </div>
    <!-- Copyright -->

  
  <!-- Footer -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.16/js/mdb.min.js"></script>
</html>