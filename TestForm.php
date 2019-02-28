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
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <h3>Formulaire d'inscription bénévole</h3>
    </header>
    <div class="container-12" class="centered" id="formContainer">
        <div class="row" class="centered">
            <div class="col-lg-5" class="col-xs-11" class="centered"  class="custom-control custom-checkbox custom-control-inline">
                <form method="POST" action="recupEtInsert.php" enctype="multipart/form-data">
                    <fieldset class="card">
                        <h4>Questions Préliminaires : </h4>
                        <div class="decal">
                            <p>Avez vous déjà été bénévole pour cet évènement ?</p>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="dejBene" value="Oui" type="radio" class="custom-control-input" id="defaultChecked"/>
                                <label class="custom-control-label" for="defaultChecked">oui</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="dejBene" value="Non" type="radio" class="custom-control-input" id="defaultUnchecked"/>
                                <label class="custom-control-label" for="defaultUnchecked">Non</label>
                            </div>
                            <br/><br/>    
                            <p>Êtes-vous licencié(e) à la FFBAD ou autre Fédération Nationale de Badminton ?</p>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="licence" value="Oui" type="radio" class="custom-control-input" id="defaultChecked1"/>
                                <label class="custom-control-label" for="defaultChecked1">oui</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="licence" value="Non" type="radio" class="custom-control-input" id="defaultUnchecked1"/>
                                <label class="custom-control-label" for="defaultUnchecked1">Non</label>
                            </div>
                            <br/><br/> 
                            <div class="md-form mb-4 pink-textarea active-pink-textarea">
    							<textarea name="textarea" type="text" id="form18" class="md-textarea form-control" rows="1"></textarea>
    							<label for="form18">Par quel(s) moyen avez-vous entendu parlé de cet évènement?<br>(Cliquer pour répondre)</label>
    						</div>
                            <p>Acceptez-vous le règlement de cette inscription en tant que bénévoles ?</p>
                            <div class="custom-control custom-radio custom-control-inline"> 
                                <input type="radio" name="reglement" value="Oui" class="custom-control-input" id="defaultChecked2"/>
                                <label class="custom-control-label" for="defaultChecked2">Oui</label>  
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="reglement" value="Non" class="custom-control-input" id="defaultUnchecked2"/>
                                <label class="custom-control-label" for="defaultUnchecked2">Non</label>
                            </div>
                        </div>
                    </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                    <fieldset class="card">
                        <h4>Mes informations personnelles : </h4>
                        <div class="decal">
                            <div class="md-form mb-4 pink-textarea active-pink-textarea">
                                <textarea name="nom" type="text" id="form18" class="md-textarea form-control" rows="1"></textarea>
                                <label for="form18">Votre nom</label>
                            </div>
                            <div class="md-form mb-4 pink-textarea active-pink-textarea">
                                <textarea name="prenom" type="text" id="form19" class="md-textarea form-control" rows="1"></textarea>
                                <label for="form19">Votre prénom</label>
                            </div>
                            <div class="md-form mb-4 pink-textarea active-pink-textarea">
                                <textarea name="age" type="text" id="form20" class="md-textarea form-control" rows="1"></textarea>
                                <label for="form20">Votre année de naissance</label>
                            </div>
                            <div class="md-form mb-4 pink-textarea active-pink-textarea">
                                <textarea name="mail" type="text" id="form21" class="md-textarea form-control" rows="1"></textarea>
                                <label for="form21">Votre adresse mail</label>
                            </div>
                            <div class="md-form mb-4 pink-textarea active-pink-textarea">
                                <textarea name="numeroTel" type="text" id="form22" class="md-textarea form-control" rows="1"></textarea>
                                <label for="form22">Votre numéro de téléphone</label>
                            </div>
                            <div class="md-form mb-4 pink-textarea active-pink-textarea">
                                <textarea name="club" type="text" id="form23" class="md-textarea form-control" rows="1"></textarea>
                                <label for="form23">Votre club</label>
                            </div>
                        <p>Taille de T-Shirt :</p>
                        <select name="t-shirt"  class="browser-default custom-select">
                            <option value="tailleS">S</option>
                            <option value="tailleM">M</option>
                            <option value="tailleL">L</option>
                            <option value="tailleXL">XL</option>
                            <option value="tailleXXL">XXL</option>
                            <option value="tailleXXXL">XXXL</option>
                        </select><br/><br/>
                        <p>Langues étrangères : (3 maximum)</p>
                        <select name="lang1"  class="browser-default custom-select" class="col-lg-2">
                            <option value="aucune">Aucune</option>
                            <option value="anglais">Anglais</option>
                            <option value="allemand">Allemand</option>
                            <option value="arabe">Arabe</option>
                            <option value="mandarin">Mandarin</option>
                            <option value="espagnole">Espagnole</option>
                        </select>
                        <select name="lang2"  class="browser-default custom-select"> 
                            <option value="aucune">Aucune</option>
                            <option value="anglais">Anglais</option>
                            <option value="allemand">Allemand</option>
                            <option value="arabe">Arabe</option>
                            <option value="mandarin">Mandarin</option>
                            <option value="espagnole">Espagnole</option>
                        </select>
                        <select name="lang3"  class="browser-default custom-select">
                            <option value="aucune">Aucune</option>
                            <option value="anglais">Anglais</option>
                            <option value="allemand">Allemand</option>
                            <option value="arabe">Arabe</option>
                            <option value="mandarin">Mandarin</option>
                            <option value="espagnole">Espagnole</option>
                        </select><br/><br/>
                        <!-- <input type="button" value="Ajouter Une langue"/><br /> -->
                    </div>
                    </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                    <fieldset class="card">
                        <div class="decal">
                            <h4>Mon poste :</h4><br/>
                            <div class="decal">
                                <p class="bold">Choix n°1 :</p>
                                <select name="post1"  class="browser-default custom-select">
                                    <option value="info">Informatique</option>
                                    <option value="plateau">Plateau</option>
                                    <option value="com">Communication</option>
                                    <option value="buvette">Buvette</option>
                                    <option value="gestJoueurs">Gestion des joueurs</option>
                                    <option value="officielsTech">Officiel Technique</option>
                                    <option value="restBene">Restaurant bénévole</option>
                                </select>
                                <br/><br/>
                                <p class="bold">Choix n°2 :</p>
                                <select name="post2"  class="browser-default custom-select">
                                    <option value="info">Informatique</option>
                                    <option value="plateau">Plateau</option>
                                    <option value="com">Communication</option>
                                    <option value="buvette">Buvette</option>
                                    <option value="gestJoueurs">Gestion des joueurs</option>
                                    <option value="officielsTech">Officiel Technique</option>
                                    <option value="restBene">Restaurant bénévole</option>
                                </select>
                                <br/><br/>
                                <p class="bold">Choix n°3 :</p>
                                <select name="post3"  class="browser-default custom-select">
                                    <option value="info">Informatique</option>
                                    <option value="plateau">Plateau</option>
                                    <option value="com">Communication</option>
                                    <option value="buvette">Buvette</option>
                                    <option value="gestJoueurs">Gestion des joueurs</option>
                                    <option value="officielsTech">Officiel Technique</option>
                                    <option value="restBene">Restaurant bénévole</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                    <fieldset class="card">
                        <h4>Mes disponibilités :</h4><br/>
                        <div class="decal">
                            <p class="bold"> Mardi : </p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="marMat" type="checkbox" class="custom-control-input" id="defaultChecked3">
                                <label class="custom-control-label" for="defaultChecked3">matin (8h-15h)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="marAprem" type="checkbox" class="custom-control-input" id="defaultUnchecked3">
                                <label class="custom-control-label" for="defaultUnchecked3">après-midi (15h-22h)</label>
                            </div>
                            <br/><br/>
                            <p class="bold"> Mercredi : </p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="merMat" type="checkbox" class="custom-control-input" id="defaultChecked4">
                                <label class="custom-control-label" for="defaultChecked4">matin (8h-15h)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="merAprem" type="checkbox" class="custom-control-input" id="defaultUnchecked4">
                                <label class="custom-control-label" for="defaultUnchecked4">après-midi (15h-22h)</label>
                            </div>
                            <br/><br/>
                            <p class="bold"> Jeudi : </p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="jeuMat" type="checkbox" class="custom-control-input" id="defaultChecked5">
                                <label class="custom-control-label" for="defaultChecked5">matin (8h-15h)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="jeuAprem" type="checkbox" class="custom-control-input" id="defaultUnchecked5">
                                <label class="custom-control-label" for="defaultUnchecked5">après-midi (15h-22h)</label>
                            </div>
                            <br/><br/>
                            <p class="bold"> Vendredi : </p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="venMat" type="checkbox" class="custom-control-input" id="defaultChecked6">
                                <label class="custom-control-label" for="defaultChecked6">matin (8h-15h)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="venAprem" type="checkbox" class="custom-control-input" id="defaultUnchecked6">
                                <label class="custom-control-label" for="defaultUnchecked6">après-midi (15h-22h)</label>
                            </div>
                            <br/><br/>
                            <p class="bold"> Samedi : </p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="samMat" type="checkbox" class="custom-control-input" id="defaultChecked7">
                                <label class="custom-control-label" for="defaultChecked7">matin (8h-15h)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="samAprem" type="checkbox" class="custom-control-input" id="defaultUnchecked7">
                                <label class="custom-control-label" for="defaultUnchecked7">après-midi (15h-22h)</label>
                            </div>
                            <br/><br/>
                            <p class="bold"> Dimanche : </p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="dimMat" type="checkbox" class="custom-control-input" id="defaultChecked8">
                                <label class="custom-control-label" for="defaultChecked8">matin (8h-15h)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="dimAprem" type="checkbox" class="custom-control-input" id="defaultUnchecked8">
                                <label class="custom-control-label" for="defaultUnchecked8">après-midi (15h-22h)</label>
                            </div>                        
                            <br/><br/>
                        </div>
                    </fieldset>
                    <div class="text-center">
                        <br><button type="submit" value="Envoyer "class="btn btn-primary" >Envoyer !</button><br><br><br><br>
                    </div>
                </form>
            </div>
        </div>
<!--    <div class="row">
            <div class="col-lg-5">
                <form method="POST" action="recupEtInsert.php" enctype="multipart/form-data">
                    <fieldset class="card">
                        <h4>Mail récapitulatif :</h4>
                        <div class="decal">
                            <p>Afin de finaliser votre inscription en tant que bénévole, un e-mail de confirmation a été envoyé à l'adresse mail que vous avez indiqué.</p>
                            <p>Veuillez cliquer sur le lien fourni avec le mail afin de valider votre inscription.</p>
                            <p>(Si vous ne recevez aucun mail, veuillez <a href="#">cliquer ici</a>)</p>
                        </div>
                    </fieldset>
                </form>   
            </div>  
        </div> 
-->

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
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.16/js/mdb.min.js"></script>
</html>