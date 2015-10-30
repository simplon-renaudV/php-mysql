 <?php
	try
   	{
   		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
   	}

   	catch (Exception $e)
   	{
   		die('Erreur : '.$e->getMessage());
   	}

   	$req = $bdd->prepare('DELETE FROM CV WHERE id = :supp');
      $req->execute(array('supp' => $_POST['sup_id']));
?>