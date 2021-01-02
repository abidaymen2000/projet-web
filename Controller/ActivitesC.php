<?PHP
include "../config.php";
require_once '../Model/Activites.php';

class ActivitesC
{
		  
	                     //Cardio
	function ajouterCardio($activite)
	{
		$sql = "INSERT INTO cardio (type, titre, description) 
			VALUES (:type,:titre,:description)";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				'type' => $activite->gettype(),
				'titre' => $activite->gettitre(),
				'description' => $activite->getdescription(),
				
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	function afficherCardio()
	{

		$sql = "SELECT * FROM cardio";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function supprimerCardio($id)
	{
		$sql = "DELETE FROM cardio WHERE id= :id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function modifierCardio($activite, $id)
	{
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'UPDATE cardio SET 
						type = :type, 
						titre = :titre,
						description = :description
						
					WHERE id = :id'
			);
			$query->execute([
				'type' => $activite->gettype(),
				'titre' => $activite->gettitre(),
				'description' => $activite->getdescription(),
				'id' => $id
			]);
			echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}

	function recupererCardio($id)
	{
		$sql = "SELECT * from cardio where id=$id";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$user = $query->fetch();
			return $user;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function recupererCardio1($id)
	{
		$sql = "SELECT * from cardio where id=$id";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$user = $query->fetch(PDO::FETCH_OBJ);
			return $user;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}


                                  //Aerobic
function ajouterAerobic($activite)
	{
		$sql = "INSERT INTO aerobic (type, titre, description) 
			VALUES (:type,:titre,:description)";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				'type' => $activite->gettype(),
				'titre' => $activite->gettitre(),
				'description' => $activite->getdescription(),
				
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	function afficherAerobic()
	{

		$sql = "SELECT * FROM aerobic";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function supprimerAerobic($id)
	{
		$sql = "DELETE FROM aerobic WHERE id= :id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function modifierAerobic($activite, $id)
	{
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'UPDATE aerobic SET 
						type = :type, 
						titre = :titre,
						description = :description
						
					WHERE id = :id'
			);
			$query->execute([
				'type' => $activite->gettype(),
				'titre' => $activite->gettitre(),
				'description' => $activite->getdescription(),
				'id' => $id
			]);
			echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}

	function recupererAerobic($id)
	{
		$sql = "SELECT * from aerobic where id=$id";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$user = $query->fetch();
			return $user;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

									   //SPORT DE COMBAT
									   
	function ajouterSPORT($activite)
	{
		$sql = "INSERT INTO sportdecombat (type, titre, description) 
			VALUES (:type,:titre,:description)";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				'type' => $activite->gettype(),
				'titre' => $activite->gettitre(),
				'description' => $activite->getdescription(),
				
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	function afficherSPORT()
	{

		$sql = "SELECT * FROM sportdecombat";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function supprimerSPORTc($id)
	{
		$sql = "DELETE FROM sportdecombat WHERE id= :id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function modifierSPORT($activite, $id)
	{
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'UPDATE sportdecombat SET 
						type = :type, 
						titre = :titre,
						description = :description
						
					WHERE id = :id'
			);
			$query->execute([
				'type' => $activite->gettype(),
				'titre' => $activite->gettitre(),
				'description' => $activite->getdescription(),
				'id' => $id
			]);
			echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}

	function recupererSPORT($id)
	{
		$sql = "SELECT * from sportdecombat where id=$id";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$user = $query->fetch();
			return $user;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}




}
?>