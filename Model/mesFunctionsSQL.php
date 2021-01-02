<?php 
    
    function getDatabaseConnexion() {
		try {
		    $user = "root";
			$pass = "";
			$pdo = new PDO('mysql:host=localhost;dbname=act', $user, $pass);
			 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
			
		} catch (PDOException $e) {
		    print "Erreur !: " . $e->getMessage() . "<br/>";
		    die();
		}
	}
	
	
    
	       // cardio
	
	   function getAllUsers() {
		  $con = getDatabaseConnexion();
		  $requete = 'SELECT * from cardio';
		  $rows = $con->query($requete);
		  return $rows;
	  }

	
	  function createUser($type, $titre, $description) {
		  try {
			  $con = getDatabaseConnexion();
			  $sql = "INSERT INTO cardio (type, titre, description) 
					VALUES ('$type', '$titre', '$description')";
	    	  $con->exec($sql);
		  }
	      catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	      }
	  }

	
	  function readUser($id) {
		  $con = getDatabaseConnexion();
		  $requete = "SELECT * from cardio where id = '$id' ";
		  $stmt = $con->query($requete);
		  $row = $stmt->fetchAll();
		  if (!empty($row)) {
			return $row[0];
		 }
		
	}

	
	  function updateUser($id, $type, $titre, $description) {
		  try {
			  $con = getDatabaseConnexion();
			  $requete = "UPDATE cardio set 
						type = '$type',
						titre = '$titre',
						description = '$description'
						where id = '$id' ";
			 $stmt = $con->query($requete);
		 }
	     catch(PDOException $e) {
	    	 echo $requete . "<br>" . $e->getMessage();
	     }
	}

	
	  function deleteUser($id) {
		  try {
			  $con = getDatabaseConnexion();
			  $requete = "DELETE from cardio where id = '$id' ";
			  $stmt = $con->query($requete);
		 }
	      catch(PDOException $e) {
	    	 echo $sql . "<br>" . $e->getMessage();
	     }
	 }   

	 function getNewUser() {
		 $user['id'] = "";
		 $user['type'] = "";
		 $user['titre'] = "";
		 $user['description'] = "";
		
	 }


	   // Aerobic
	 

	 function getAllUsers1() {
		$con = getDatabaseConnexion();
		$requete = 'SELECT * from aerobic';
		$rows = $con->query($requete);
		return $rows;
	}

  
	function createUser1($type, $titre, $description) {
		try {
			$con = getDatabaseConnexion();
			$sql = "INSERT INTO aerobic (type, titre, description) 
				  VALUES ('$type', '$titre', '$description')";
			$con->exec($sql);
		}
		catch(PDOException $e) {
		  echo $sql . "<br>" . $e->getMessage();
		}
	}

  
	function readUser1($id) {
		$con = getDatabaseConnexion();
		$requete = "SELECT * from aerobic where id = '$id' ";
		$stmt = $con->query($requete);
		$row = $stmt->fetchAll();
		if (!empty($row)) {
		  return $row[0];
	   }
	  
  }

  
	function updateUser1($id, $type, $titre, $description) {
		try {
			$con = getDatabaseConnexion();
			$requete = "UPDATE aerobic set 
					  type = '$type',
					  titre = '$titre',
					  description = '$description'
					  where id = '$id' ";
		   $stmt = $con->query($requete);
	   }
	   catch(PDOException $e) {
		   echo $requete . "<br>" . $e->getMessage();
	   }
  }

  
	function deleteUser1($id) {
		try {
			$con = getDatabaseConnexion();
			$requete = "DELETE from aerobic where id = '$id' ";
			$stmt = $con->query($requete);
	   }
		catch(PDOException $e) {
		   echo $sql . "<br>" . $e->getMessage();
	   }
   }   

   function getNewUser1() {
	   $user['id'] = "";
	   $user['type'] = "";
	   $user['titre'] = "";
	   $user['description'] = "";
	  
   }

    

	 // Sport
   

   function getAllUsers2() {
	  $con = getDatabaseConnexion();
	  $requete = 'SELECT * from sportdecombat';
	  $rows = $con->query($requete);
	  return $rows;
  }


  function createUser2($type, $titre, $description) {
	  try {
		  $con = getDatabaseConnexion();
		  $sql = "INSERT INTO sportdecombat (type, titre, description) 
				VALUES ('$type', '$titre', '$description')";
		  $con->exec($sql);
	  }
	  catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	  }
  }


  function readUser2($id) {
	  $con = getDatabaseConnexion();
	  $requete = "SELECT * from sportdecombat where id = '$id' ";
	  $stmt = $con->query($requete);
	  $row = $stmt->fetchAll();
	  if (!empty($row)) {
		return $row[0];
	 }
	
}


  function updateUser2($id, $type, $titre, $description) {
	  try {
		  $con = getDatabaseConnexion();
		  $requete = "UPDATE sportdecombat set 
					type = '$type',
					titre = '$titre',
					description = '$description'
					where id = '$id' ";
		 $stmt = $con->query($requete);
	 }
	 catch(PDOException $e) {
		 echo $requete . "<br>" . $e->getMessage();
	 }
}


  function deleteUser2($id) {
	  try {
		  $con = getDatabaseConnexion();
		  $requete = "DELETE from sportdecombat where id = '$id' ";
		  $stmt = $con->query($requete);
	 }
	  catch(PDOException $e) {
		 echo $sql . "<br>" . $e->getMessage();
	 }
 }   

 function getNewUser2() {
	 $user['id'] = "";
	 $user['type'] = "";
	 $user['titre'] = "";
	 $user['description'] = "";
	
 }
    


 ?>