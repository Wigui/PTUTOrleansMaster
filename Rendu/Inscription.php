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
    <div class="col-lg-5">
    <p class="Attention"><span class="souligne">ATTENTION </span>: Tout dossier non complet (Formulaire d'inscription + Charte validée + Photo) sera systématiquement rejeté. Fermeture des inscriptions le 1er février 2019.</p>
    </div>
    </div>
        <div class="row" class="centered">
        
        <div class="col-lg-5">
                    <fieldset class="card">
                        <div class="decal2">
                        
                <h4>Les frais pris en charge par l’organisation :</h4><br>
                <ul>
                <li>Les frais de repas durant toute la durée de la compétition du samedi 16 mars au dimanche 24 mars au palais des sports,</li>
                <li>Les frais d’hôtel incluant le petit déjeuner à l’hôtel Adagio, 2 à 3 personnes par chambre en lit simple (suivant les jours de présences retenues),</li>
                <li>Les frais de transport limité à 60€ par personne pour ceux qui habitent en dehors de l’agglomération Orléanaise,</li>
                <li>Les T-Shirts fournis par nos partenaires pendant la compétition.</li></ul>
                        </div>
                    </fieldset>
                </div>
        </div>
        <form method="POST" action="Envoi.php" enctype="multipart/form-data" onSubmit="return valider()">
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
                                <input name="dejBene" value="Non" type="radio" class="custom-control-input" id="defaultUnchecked" checked/>
                                <label class="custom-control-label" for="defaultUnchecked">Non</label>
                            </div>
                            <br/><br/>    
                            <p>Êtes-vous licencié(e) à la FFBAD ou autre Fédération Nationale de Badminton ?</p>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="licence" value="Oui" type="radio" class="custom-control-input" id="defaultChecked1"/>
                                <label class="custom-control-label" for="defaultChecked1">oui</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="licence" value="Non" type="radio" class="custom-control-input" id="defaultUnchecked1" checked/>
                                <label class="custom-control-label" for="defaultUnchecked1">Non</label>
                            </div>
                            <br/><br/> 
                            <p>Par quel(s) moyen avez-vous entendu parlé de cet évènement?</p>
                            <div class="md-form mb-4 pink-textarea active-pink-textarea">
    							<textarea name="textarea" type="text" id="form18" class="md-textarea form-control" rows="1" onblur="validationDej(this)"></textarea>
    							<label for="form18">(Cliquer pour répondre)</label>
                            </div>
                            <p>Souhaitez vous participer au tournoi des bénévoles le vendredi 22 mars au matin ?</p>
                            <div class="custom-control custom-radio custom-control-inline"> 
                                <input type="radio" name="tourbene" value="Oui" class="custom-control-input" id="defaultChecked3"/>
                                <label class="custom-control-label" for="defaultChecked3">Oui</label>  
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="tourbene" value="Non" class="custom-control-input" id="defaultUnchecked3" checked/>
                                <label class="custom-control-label" for="defaultUnchecked3">Non</label>
                            </div>
                            <br/><br/> 
                            <p>Souhaitez vous participer à la soirée des bénévoles le vendredi 22 mars au soir ?</p>
                            <div class="custom-control custom-radio custom-control-inline"> 
                                <input type="radio" name="soirbene" value="Oui" class="custom-control-input" id="defaultChecked4"/>
                                <label class="custom-control-label" for="defaultChecked4">Oui</label>  
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="soirbene" value="Non" class="custom-control-input" id="defaultUnchecked4" checked/>
                                <label class="custom-control-label" for="defaultUnchecked4">Non</label>
                            </div>
                            <br/><br/> 
                            <p>Souhaitez vous participer à la sortie au musée des beaux d'arts le samedi 23 mars au matin ?</p>
                            <div class="custom-control custom-radio custom-control-inline"> 
                                <input type="radio" name="visbene" value="Oui" class="custom-control-input" id="defaultChecked5"/>
                                <label class="custom-control-label" for="defaultChecked5">Oui</label>  
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="visbene" value="Non" class="custom-control-input" id="defaultUnchecked5" checked/>
                                <label class="custom-control-label" for="defaultUnchecked5">Non</label>
                            </div>
                            <br/><br/>
                            <a href="pdf/charteBeneTest.pdf" target="_blank">
                                <p>Prendre connaissance de la charte des Bénévoles (cliquer ici)</p>
                            </a>
                            <p id="charte" >Avez vous lu et accepté la charte des bénévoles ?</p>
                            <div class="custom-control custom-radio custom-control-inline"> 
                                <input type="radio" name="reglement" value="Oui" class="custom-control-input reglement" id="defaultChecked2"/>
                                <label class="custom-control-label" for="defaultChecked2">Oui</label>  
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="reglement" value="Non" class="custom-control-input reglement" id="defaultUnchecked2" checked />
                                <label class="custom-control-label" for="defaultUnchecked2">Non</label>
                            </div>
                            <br/><br/>
                            <p class="Attention">Vous devez accepter la charte des bénévoles pour poursuivre votre inscription.</p>
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
                                    <textarea name="nom" type="text" id="form18" class="md-textarea form-control" rows="1" required onblur="validationNom(this)"></textarea>
                                    <label for="form18">Votre nom</label>
                                </div>
                                <div class="md-form mb-4 pink-textarea active-pink-textarea">
                                    <textarea name="prenom" type="text" id="form19" class="md-textarea form-control" rows="1" required onblur="validationPrenom(this)"></textarea>
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
                                    <textarea name="mail" type="text" id="form21" class="md-textarea form-control" rows="1" required onblur="validationEmail(this)"></textarea>
                                    <label for="form21">Votre adresse mail</label>
                                </div>
                                <div class="md-form mb-4 pink-textarea active-pink-textarea">
                                    <textarea name="numeroTel" type="text" id="form22" class="md-textarea form-control"     rows="1" required onblur="validationNum(this)"></textarea>
                                    <label for="form22">Votre numéro de téléphone</label>
                                </div>
                                <div class="md-form mb-4 pink-textarea active-pink-textarea">
                                    <textarea name="club" type="text" id="form23" class="md-textarea form-control" rows="1" onblur="validationDej(this)"></textarea>
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
                        <p class="bold"> Samedi 16 Mars : </p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="sam2Mat" type="checkbox" class="custom-control-input" id="defaultChecked14">
                                <label class="custom-control-label" for="defaultChecked14">matin (9h-15h)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="sam2Aprem" type="checkbox" class="custom-control-input" id="defaultUnchecked14">
                                <label class="custom-control-label" for="defaultUnchecked14">après-midi (15h-21h)</label>
                            </div>
                            <br/><br/>
                        <p class="bold"> Dimanche 17 Mars : </p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="dim2Mat" type="checkbox" class="custom-control-input" id="defaultChecked13">
                                <label class="custom-control-label" for="defaultChecked13">matin (9h-15h)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="dim2Aprem" type="checkbox" class="custom-control-input" id="defaultUnchecked13">
                                <label class="custom-control-label" for="defaultUnchecked13">après-midi (15h-21h)</label>
                            </div>
                            <br/><br/>
                            <p class="bold"> Lundi 18 Mars : </p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="lunMat" type="checkbox" class="custom-control-input" id="defaultChecked12">
                                <label class="custom-control-label" for="defaultChecked12">matin (9h-15h)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="lunAprem" type="checkbox" class="custom-control-input" id="defaultUnchecked12">
                                <label class="custom-control-label" for="defaultUnchecked12">après-midi (15h-21h)</label>
                            </div>
                            <br/><br/>
                            <p class="bold"> Mardi 19 Mars : </p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="marMat" type="checkbox" class="custom-control-input" id="defaultChecked6">
                                <label class="custom-control-label" for="defaultChecked6">matin (8h-15h)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="marAprem" type="checkbox" class="custom-control-input" id="defaultUnchecked6">
                                <label class="custom-control-label" for="defaultUnchecked6">après-midi (15h-22h)</label>
                            </div>
                            <br/><br/>
                            <p class="bold"> Mercredi 20 Mars : </p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="merMat" type="checkbox" class="custom-control-input" id="defaultChecked7">
                                <label class="custom-control-label" for="defaultChecked7">matin (8h-15h)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="merAprem" type="checkbox" class="custom-control-input" id="defaultUnchecked7">
                                <label class="custom-control-label" for="defaultUnchecked7">après-midi (15h-22h)</label>
                            </div>
                            <br/><br/>
                            <p class="bold"> Jeudi 21 Mars : </p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="jeuMat" type="checkbox" class="custom-control-input" id="defaultChecked8">
                                <label class="custom-control-label" for="defaultChecked8">matin (8h-15h)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="jeuAprem" type="checkbox" class="custom-control-input" id="defaultUnchecked8">
                                <label class="custom-control-label" for="defaultUnchecked8">après-midi (15h-22h)</label>
                            </div>
                            <br/><br/>
                            <p class="bold"> Vendredi 22 Mars : </p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="venMat" type="checkbox" class="custom-control-input" id="defaultChecked9">
                                <label class="custom-control-label" for="defaultChecked9">matin (8h-15h)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="venAprem" type="checkbox" class="custom-control-input" id="defaultUnchecked9">
                                <label class="custom-control-label" for="defaultUnchecked9">après-midi (15h-22h)</label>
                            </div>
                            <br/><br/>
                            <p class="bold"> Samedi 23 Mars : </p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="samMat" type="checkbox" class="custom-control-input" id="defaultChecked10">
                                <label class="custom-control-label" for="defaultChecked10">matin (9h-15h)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="samAprem" type="checkbox" class="custom-control-input" id="defaultUnchecked10">
                                <label class="custom-control-label" for="defaultUnchecked10">après-midi (15h-21h)</label>
                            </div>
                            <br/><br/>
                            <p class="bold"> Dimanche 24 Mars : </p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="dimMat" type="checkbox" class="custom-control-input" id="defaultChecked11">
                                <label class="custom-control-label" for="defaultChecked11">matin (9h-15h)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="horaire[]" value="dimAprem" type="checkbox" class="custom-control-input" id="defaultUnchecked11">
                                <label class="custom-control-label" for="defaultUnchecked11">après-midi (15h-21h)</label>
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
<script type="text/javascript"  >


function validationDej(champ)
{
var expressionReguliere = /^[^\\/<>^()_]+$/;
if ((champ.value)!=""){
if (expressionReguliere.test(champ.value))
{


champ.style.backgroundColor = "white";
champ.style.color= "black";
}
else
{
champ.style.backgroundColor = "rgb(229, 36, 33,0.7  )";
champ.style.borderRadius=('3px');
champ.style.color= "white";

}
}}

console.log("salut");
workp=false;
workn=false;
worke=false;
workt=false;

function validationPrenom(champ)
{

var expressionReguliere = /^[^\\/<>^()]+$/;
if ((champ.value)!=""){
if (expressionReguliere.test(champ.value))
{

workp=true;
champ.style.backgroundColor = "white";
champ.style.color= "black";
}
else
{
champ.style.backgroundColor = "rgb(229, 36, 33,0.7  )";
champ.style.borderRadius=('3px');
champ.style.color= "white";
workp=false;
} }


}

function validationNom(champ)
{
var expressionReguliere = /^[^\\/<>^()_]+$/;
if ((champ.value)!=""){
if (expressionReguliere.test(champ.value))
{

workn=true;
champ.style.backgroundColor = "white";
champ.style.color= "black";
}
else
{
champ.style.backgroundColor = "rgb(229, 36, 33,0.7  )";
champ.style.borderRadius=('3px');
champ.style.color= "white";
workn=false;
}
}}

function validationEmail(champ)
{
console.log (champ.value);
if ((champ.value)!=""){
var expressionReguliereMail = /^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;
if (expressionReguliereMail.test(champ.value))
{

worke=true;
champ.style.backgroundColor = "white";
champ.style.color= "black";
}
else
{
champ.style.backgroundColor = "rgb(229, 36, 33,0.7  )";
champ.style.borderRadius=('3px');
champ.style.color= "white";

worke=false;
}
}
}

function validationNum(champ)
{

var expressionReguliereNum = /^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$/;
if ((champ.value)!=""){
if (expressionReguliereNum.test(champ.value))
{

workt=true;
champ.style.backgroundColor = "white";
champ.style.color= "black";
}
else
{
champ.style.backgroundColor = "rgb(229, 36, 33,0.7  )";
champ.style.borderRadius=('3px');
champ.style.color= "white";
workt=false;
}
}}
function valider(){
    console.log(workn)
    console.log(workp)
    console.log(worke)
    console.log(workt)
   if (!workn || !workp || !worke || !workt){
	return false;
   }
   else{
	return true;
   }
}
    </script>
<script type="text/javascript" src="js/script.js"></script>
</html>