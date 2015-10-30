<?php
	try
   	{
   		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
   	}

   	catch (Exception $e)
   	{
   		die('Erreur : '.$e->getMessage());
   	}

	switch ($_POST['a_mod'])
	{
    	case "nom":
        	$req = $bdd->prepare('UPDATE CV SET nom = :new_val WHERE id = :mod_id');
        	break;

    	case "prenom":
        	$req = $bdd->prepare('UPDATE CV SET prenom = :new_val WHERE id = :mod_id');
        	break;

    	case "mail":
        	$req = $bdd->prepare('UPDATE CV SET mail = :new_val WHERE id = :mod_id');
		   	break;

		case "tel":
        	$req = $bdd->prepare('UPDATE CV SET tel = :new_val WHERE id = :mod_id');
		   	break;

		case "objet":
        	$req = $bdd->prepare('UPDATE CV SET objet = :new_val WHERE id = :mod_id');
		   	break;

		case "message":
        	$req = $bdd->prepare('UPDATE CV SET message = :new_val WHERE id = :mod_id');
		   	break;		   	
	}


	$req->execute(array(

    'new_val' => $_POST['new_val'],
    'mod_id' => $_POST['mod_id']
    ));

?>