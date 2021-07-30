<?php
	include 'mesFonctionsSQL.php';
	include 'mesFonctionTable.php';
	$action = $_GET["action"];

	if ($action == "DELETE") {
		$id = $_GET["id"];
	} else {
		$id = $_GET["id"];
		$nom = $_GET["nom"];
		$prenom = $_GET["prenom"];
		$age = $_GET["age"];
		$adresse = $_GET["adresse_email"];
		
	}
	

	if ($action == "CREATE") {
		createUser($nom, $prenom, $age, $adresse_email);

		echo "user creer <br>";
		echo "<a href='index.php'>Liste des etudiants</a>";
		
	}
	
	if ($action == "UPDATE") {
		updateUser($id, $nom, $prenom, $age, $adresse_email);
		echo "user update <br>";
		echo "<a href='index.php'>Liste des etudiants</a>";
	}
	if ($action == "DELETE") {
		deleteUser($id);
		echo "user delete <br>";
		echo "<a href='index.php'>Liste des etudiants</a>";
	}
	

	
?>