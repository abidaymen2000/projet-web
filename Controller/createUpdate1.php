<?php
	include '../Model/mesFunctionsSQL.php';
	include 'mesFunctionsTable1.php';
	$action = $_GET["action"];
	if ($action == "DELETE") {
		$id = $_GET["id"];
	} else {
		$id = $_GET["id"];
		$type = $_GET["type"];
		$titre = $_GET["titre"];
		$description = $_GET["description"];
		
	}
	

	if ($action == "CREATE") {
		createUser1($type, $titre, $description);

		echo "activite cree <br>";
		echo "<a href='../Views/tables.php'>Liste des activite </a>";
		
	}
	
	if ($action == "UPDATE") {
		updateUser1($id, $type, $titre, $description);
		echo "activite  update <br>";
		echo "<a href='../Views/tables.php'>Liste des activite </a>";
	}
	if ($action == "DELETE") {
		deleteUser1($id);
		echo "user delete <br>";
		echo "<a href='../Views/tables.php'>Liste des activite </a>";
	}
	

	
?>