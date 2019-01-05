<?php
var_dump($_POST);


try{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','root');
    echo "BDD OK";
}
catch(Exception $e){
    die('Erreur :'.$e->getMessage());
}

    echo 'je rentre dans l insertion';
    //On récupère les valeurs entrées par l'utilisateur :
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];


    $req=$bdd->prepare('INSERT INTO 
    test (idTest,nom,prenom)
    VALUES(NULL,:nom,:prenom)');


    $req->execute(array(
        'nom'=>$nom,
        'prenom'=>$prenom
    ));


?>
