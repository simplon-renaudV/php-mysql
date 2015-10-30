<!doctype html>
  <html lang="fr">

    <head>
      <meta charset="utf-8">
      <title>Contact</title>
      <link rel="stylesheet" href="style.css"/>
    </head>

    <body>
    <?php
		try
    	{
    		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    	}

    	catch (Exception $e)
    	{
    		die('Erreur : '.$e->getMessage());
    	}

    	$contacts = $bdd->query('SELECT * FROM CV');

    	while ($donnees = $contacts->fetch())
    	{
    		echo '<br><br>Id : '.$donnees['id'].'<br>Nom : '.$donnees['nom'].'<br>Prénom : '.$donnees['prenom'].'<br>Mail : '.$donnees['mail'].'<br>Téléphone : '.$donnees['tel'].'<br>Objet : '.$donnees['objet'].'<br>Message : '.$donnees['message'];
    	}
	?>
	<form name="suppr" method="post" action="supprimer.php">
		<input type="number" name="sup_id" id="sup_id">
		<input type="submit" value="Supprimer"/>
	</form>
