<?PHP
include "../config2.php";
require_once '../Model/Commentaires.php';

class CommentaireS
{
		  
	                     
	function ajouterCmnt($activite)
	{
		$sql = "INSERT INTO cmnt (type, titre, description) 
			VALUES (:type,:titre,:description)";
		$db = config2::getConnexion();
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

	function afficherCmnt()
	{

		$sql = "SELECT * FROM cmnt";
		$db = config2::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function supprimerCmnt($id)
	{
		$sql = "DELETE FROM cmnt WHERE id= :id";
		$db = config2::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function modifierCmnt($activite, $id)
	{
		try {
			$db = config2::getConnexion();
			$query = $db->prepare(
				'UPDATE cmnt SET 
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

	function recupererCmnt($id)
	{
		$sql = "SELECT * from cmnt where id=$id";
		$db = config2::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$user = $query->fetch();
			return $user;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function recupererCmnt1($id)
	{
		$sql = "SELECT * from cmnt where id=$id";
		$db = config2::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$user = $query->fetch(PDO::FETCH_OBJ);
			return $user;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
    }
}
?>