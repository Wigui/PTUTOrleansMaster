<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Formulaire Bénévole</title>
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
            <div class="col-lg-5" class="col-xs-11" class="centered">
                <p class="Attention"><span class="souligne">ATTENTION </span>: Tout dossier non complet (Formulaire d'inscription + Charte validée + Photo) sera systématiquement rejeté. Fermeture des inscriptions le 1er février 2019.</p>
            </div>
        </div>
        <form method="POST" action="Envoie.php" enctype="multipart/form-data">
            <div class="row" class="centered">
                <div class="col-lg-5" class="col-xs-11" class="centered"  class="custom-control custom-checkbox custom-control-inline">    
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
                            <p>Par quel(s) moyen avez-vous entendu parlé de cet évènement?</p>
                            <div class="md-form mb-4 pink-textarea active-pink-textarea">
    							<textarea name="textarea" type="text" id="form18" class="md-textarea form-control" rows="1"></textarea>
    							<label for="form18">(Cliquer pour répondre)</label>
                            </div>
                            <p>Souhaitez vous participer au tournoi des bénévoles le vendredi 22 mars au matin ?</p>
                            <div class="custom-control custom-radio custom-control-inline"> 
                                <input type="radio" name="tourbene" value="Oui" class="custom-control-input" id="defaultChecked3"/>
                                <label class="custom-control-label" for="defaultChecked3">Oui</label>  
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="tourbene" value="Non" class="custom-control-input" id="defaultUnchecked3"/>
                                <label class="custom-control-label" for="defaultUnchecked3">Non</label>
                            </div>
                            <br/><br/> 
                            <p>Souhaitez vous participer à la soirée des bénévoles le vendredi 22 mars au soir ?</p>
                            <div class="custom-control custom-radio custom-control-inline"> 
                                <input type="radio" name="soirbene" value="Oui" class="custom-control-input" id="defaultChecked4"/>
                                <label class="custom-control-label" for="defaultChecked4">Oui</label>  
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="soirbene" value="Non" class="custom-control-input" id="defaultUnchecked4"/>
                                <label class="custom-control-label" for="defaultUnchecked4">Non</label>
                            </div>
                            <br/><br/> 
                            <p>Souhaitez vous participer à la sortie au musée des beaux d'arts le samedi 23 mars au matin ?</p>
                            <div class="custom-control custom-radio custom-control-inline"> 
                                <input type="radio" name="visbene" value="Oui" class="custom-control-input" id="defaultChecked5"/>
                                <label class="custom-control-label" for="defaultChecked5">Oui</label>  
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="visbene" value="Non" class="custom-control-input" id="defaultUnchecked5"/>
                                <label class="custom-control-label" for="defaultUnchecked5">Non</label>
                            </div>
                            <br/><br/>
                            <a href="pdf/charteBeneTest.pdf" target="_blank">
                                <p>Prendre connaissance de la charte des Bénévoles (cliquer ici)</p>
                            </a>
                            <p id="charte" >Avez vous lu et accepté la charte des Bénévoles ?</p>
                            <div class="custom-control custom-radio custom-control-inline"> 
                                <input type="radio" name="reglement" value="Oui" class="custom-control-input reglement" id="defaultChecked2"/>
                                <label class="custom-control-label" for="defaultChecked2">Oui</label>  
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="reglement" value="Non" class="custom-control-input reglement" id="defaultUnchecked2" checked />
                                <label class="custom-control-label" for="defaultUnchecked2">Non</label>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="hidden cache" >
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
                                    <tr>
                                        <td><label for="date"> <span class="idform"> Date de naissance*:  </span></label></td><br/><br/>
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
                                </div>
                                <div class="md-form mb-4 pink-textarea active-pink-textarea">
                                    <textarea name="mail" type="text" id="form21" class="md-textarea form-control" rows="1"></textarea>
                                    <label for="form21">Votre adresse mail</label>
                                </div>
                                <div class="md-form mb-4 pink-textarea active-pink-textarea">
                                    <textarea name="numeroTel" type="text" id="form22" class="md-textarea form-control"     rows="1"></textarea>
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
                                <option value="Russe">Russe</option>
                                </select>
                                <select name="lang2"  class="browser-default custom-select"> 
                                <option value="aucune">Aucune</option>
                                <option value="anglais">Anglais</option>
                                <option value="allemand">Allemand</option>
                                <option value="arabe">Arabe</option>
                                <option value="mandarin">Mandarin</option>
                                <option value="espagnole">Espagnole</option>
                                <option value="Russe">Russe</option>
                                </select>
                                <select name="lang3"  class="browser-default custom-select">
                                <option value="aucune">Aucune</option>
                                <option value="anglais">Anglais</option>
                                <option value="allemand">Allemand</option>
                                <option value="arabe">Arabe</option>
                                <option value="mandarin">Mandarin</option>
                                <option value="espagnole">Espagnole</option>
                                <option value="Russe">Russe</option>
                                </select><br/><br/>
                                <p>Avez vous le permis (B) de conduire ?</p>
                                <div class="custom-control custom-radio custom-control-inline"> 
                                <input type="radio" name="permis" value="Oui" class="custom-control-input" id="permischecked"/>
                                <label class="custom-control-label" for="permischecked">Oui</label>  
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="permis" value="Non" class="custom-control-input" id="permisunchecked"/>
                                <label class="custom-control-label" for="permisunchecked">Non</label>
                                </div><br/><br/>
                                <label for="photo" >
                                Ajoutez une photo (formats attendus : .png, .jpeg, .jpg, .gif | taille maximale : 3 Mo) :<br /></label>
                                <input type="file" id="photo" name="photo" />
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
                                    <option value="restauration">Restauration</option>
									<option value="transport">Transport joueurs</option>
									<option value="logistique">Logistique</option>
									<option value="accueil">Accueil</option>
									<option value="vip">Espaces VIP</option>
									<option value="informatique">Informatique</option>
                                    <option value="plateau">Plateau</option>
                                    <option value="communication">Communication</option>
									<option value="comAnimSco">Animation et scolaire</option>
									<option value="competition">Table de marque</option>
                                    <option value="gestJoueurs">Gestion des joueurs</option>
									<option value="placeurs">Placeurs</option>
									<option value="boutique">Boutique officielle</option>
                                    <option value="officielsTech">Officiel Technique/juge de ligne</option>
                                </select>
                                <br/><br/>
                                <p class="bold">Choix n°2 :</p>
                                <select name="post2"  class="browser-default custom-select">
                                    <option value="restauration">Restauration</option>
									<option value="transport">Transport joueurs</option>
									<option value="logistique">Logistique</option>
									<option value="accueil">Accueil</option>
									<option value="vip">Espaces VIP</option>
									<option value="informatique">Informatique</option>
                                    <option value="plateau">Plateau</option>
                                    <option value="communication">Communication</option>
									<option value="comAnimSco">Animation et scolaire</option>
									<option value="competition">Table de marque</option>
                                    <option value="gestJoueurs">Gestion des joueurs</option>
									<option value="placeurs">Placeurs</option>
									<option value="boutique">Boutique officielle</option>
                                    <option value="officielsTech">Officiel Technique/juge de ligne</option>
                                </select>
                                <br/><br/>
                                <p class="bold">Choix n°3 :</p>
                                <select name="post3"  class="browser-default custom-select">
                                    <option value="restauration">Restauration</option>
									<option value="transport">Transport joueurs</option>
									<option value="logistique">Logistique</option>
									<option value="accueil">Accueil</option>
									<option value="vip">Espaces VIP</option>
									<option value="informatique">Informatique</option>
                                    <option value="plateau">Plateau</option>
                                    <option value="communication">Communication</option>
									<option value="comAnimSco">Animation et scolaire</option>
									<option value="competition">Table de marque</option>
                                    <option value="gestJoueurs">Gestion des joueurs</option>
									<option value="placeurs">Placeurs</option>
									<option value="boutique">Boutique officielle</option>
                                    <option value="officielsTech">Officiel Technique/juge de ligne</option>
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
                        <h6>Les horaires sont susceptibles d’être revus et adaptés selon les contraintes de chaque pôle (voir fiche de pôle)</h6><br/>
                        <div class="decal">
                            <p class="bold"> Mardi : </p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="marMat" type="checkbox" class="custom-control-input" id="defaultChecked6">
                                <label class="custom-control-label" for="defaultChecked6">matin (8h-15h)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="marAprem" type="checkbox" class="custom-control-input" id="defaultUnchecked6">
                                <label class="custom-control-label" for="defaultUnchecked6">après-midi (15h-22h)</label>
                            </div>
                            <br/><br/>
                            <p class="bold"> Mercredi : </p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="merMat" type="checkbox" class="custom-control-input" id="defaultChecked7">
                                <label class="custom-control-label" for="defaultChecked7">matin (8h-15h)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="merAprem" type="checkbox" class="custom-control-input" id="defaultUnchecked7">
                                <label class="custom-control-label" for="defaultUnchecked7">après-midi (15h-22h)</label>
                            </div>
                            <br/><br/>
                            <p class="bold"> Jeudi : </p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="jeuMat" type="checkbox" class="custom-control-input" id="defaultChecked8">
                                <label class="custom-control-label" for="defaultChecked8">matin (8h-15h)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="jeuAprem" type="checkbox" class="custom-control-input" id="defaultUnchecked8">
                                <label class="custom-control-label" for="defaultUnchecked8">après-midi (15h-22h)</label>
                            </div>
                            <br/><br/>
                            <p class="bold"> Vendredi : </p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="venMat" type="checkbox" class="custom-control-input" id="defaultChecked9">
                                <label class="custom-control-label" for="defaultChecked9">matin (8h-15h)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="venAprem" type="checkbox" class="custom-control-input" id="defaultUnchecked9">
                                <label class="custom-control-label" for="defaultUnchecked9">après-midi (15h-22h)</label>
                            </div>
                            <br/><br/>
                            <p class="bold"> Samedi : </p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="samMat" type="checkbox" class="custom-control-input" id="defaultChecked10">
                                <label class="custom-control-label" for="defaultChecked10">matin (8h-15h)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="samAprem" type="checkbox" class="custom-control-input" id="defaultUnchecked10">
                                <label class="custom-control-label" for="defaultUnchecked10">après-midi (15h-22h)</label>
                            </div>
                            <br/><br/>
                            <p class="bold"> Dimanche : </p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="dimMat" type="checkbox" class="custom-control-input" id="defaultChecked11">
                                <label class="custom-control-label" for="defaultChecked11">matin (8h-15h)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="dimAprem" type="checkbox" class="custom-control-input" id="defaultUnchecked11">
                                <label class="custom-control-label" for="defaultUnchecked11">après-midi (15h-22h)</label>
                            </div>                        
                            <br/><br/>
                        </div>
                    </fieldset>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-5">
                    <fieldset class="card">
                        <div class="decal">
                            <h4>Critères d’acceptation :</h4><br/>
                            <ol type="1">
                                <li>Les personnes présentes sur un maximum de tranches horaires seront retenues en priorité</li>
                                <li>L’expérience sur d’autres organisations sportives</li>
                                <li>Ordre d’arrivée du dossier complet</li>
                                <li>Participation aux éditions précédentes de l’Orléans Masters (-ex OIC)</li>
                            </ol> 
                        </div>
                    </fieldset>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-5">
                <div class="text-center">
                    <br><button type="submit" value="Envoyer "class="btn btn-primary" >Envoyer !</button><br><br><br><br>
                </div>
            </div>
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
<script type="text/javascript">
$(function(){
    $( ".reglement" ).change(function() {
    // console.log( "change OK" );
        $(".cache").toggleClass( "hidden" );
        if($(this).val()=="Oui"){
            var target = $(this);
	        $('html, body')
                .stop()
                .animate({scrollTop: $(target).offset().top+90}, 1000 );
        }
    // else if($(this).val()=="Non"){
    //     $( ".cache" ).toggleClass( "hidden" );
    // }

    });
});
</script>
</html>