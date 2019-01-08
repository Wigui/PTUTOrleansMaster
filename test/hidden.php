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
            <div class="col-lg-5" class="col-xs-11" class="centered"  class="custom-control custom-checkbox custom-control-inline">
                <form method="POST" action="Envoie.php" enctype="multipart/form-data">
                    <fieldset class="card">
                        <h4>Questions Préliminaires : </h4>
                        <div class="decal">
                            <p>Avez vous lu et accepté la charte des Bénévoles ?</p>
                            <div class="custom-control custom-radio custom-control-inline"> 
                                <input type="radio" name="reglement" value="Oui" class="custom-control-input reglement" id="defaultChecked2"/>
                                <label class="custom-control-label" for="defaultChecked2">Oui</label>  
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="reglement" value="Non" class="custom-control-input reglement" id="defaultUnchecked2" checked/>
                                <label class="custom-control-label" for="defaultUnchecked2">Non</label>
                            </div>
                            <br/><br/>    
                        </div>
                    </fieldset>
            </div>
        </div>
        <div class="row hidden cache">
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
        <div class="row hidden cache">
            <div class="col-lg-5">
        <div class="text-center">
            <br><button type="submit" value="Envoyer "class="btn btn-primary" >Envoyer !</button><br><br><br><br>
        </div>
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
    // console.log( "Handler for .change() called." );
    $(".cache").toggleClass( "hidden" );
    // if($(this).val()=="Oui"){
    //     $(".cache").toggleClass( "hidden" );
    // }
    // else if($(this).val()=="Non"){
    //     $( ".cache" ).toggleClass( "hidden" );
    // }
    });
});
</script>

</html>