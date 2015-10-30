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
	<form name="modif" method="post" action="modifier.php">
        <input type="radio" name="a_mod" value="nom" checked/><label>Nom</label><br>
        <input type="radio" name="a_mod" value="prenom" checked/><label>Prenom</label><br>
        <input type="radio" name="a_mod" value="mail" checked/><label>Mail</label><br>
        <input type="radio" name="a_mod" value="tel" checked/><label>Tel</label><br>
        <input type="radio" name="a_mod" value="objet" checked/><label>Objet</label><br>
        <input type="radio" name="a_mod" value="message" checked/><label>Message</label><br>
        <input type="number" name="mod_id" id="mod_id">
        <textarea placeholder="Nouvelle valeur" name="new_val"></textarea>

        <input type="submit" value="Modifier"/>
	</form>
