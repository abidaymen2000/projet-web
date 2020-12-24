<?php
	include 'mesFunctionsSQL.php';
	include 'mesFunctionsTable.php';
	
	$id = $_GET["id"];
	if ($id == 0) {
		$user = getNewUser();
		$action = "CREATE";
		$libelle = "Creer";
	} else {
		$user = readUser($id);
		$action = "UPDATE";
		$libelle = "Mettre a jour";
	}
	
	


?>

<html>
<header>
	<link rel="stylesheet" href="style.css">
</header>
<body>

		
	<form action="createUpdate.php" method="get">
	<p>	
		<a href="index.php">Liste des activitees</a>

		<input type="hidden" name="id" value="<?php echo $user['id'];  ?>"/>
		<input type="hidden" name="action" value="<?php echo $action;  ?>"/>
		
		 <div>
        	<label for="type">type :</label>
        	<input type="text" id="type" name="type" value="<?php echo $user['type'];  ?>">
	    </div>
	    <div>
	        <label for="titre">titre :</label>
	        <input type="text" id="titre" name="titre" value="<?php echo $user['titre'];  ?>">
	    </div>
	    <div>
	        <label for="description">description :</label>
	        <textarea id="description" name="description" placeholder="<?php echo $user['description'];  ?>"></textarea>
	    </div>
		<div class="button">
			<button type="submit"><?php echo $libelle;  ?></button>
		</div>
	</p>
	</form>
	<br>

	<?php if ($action!="CREATE") { ?>
	<form action="createUpdate.php" method="get">
		<input type="hidden" name="action" value="DELETE"/>
		<input type="hidden" name="id" value="<?php echo $user['id'];  ?>"/>
		<p>
		<div class="button">
			<button type="submit">Supprimer</button>
		</div>
		</p>
	</form>
	<?php } ?>

</body>
</html>