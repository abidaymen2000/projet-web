<?php
require "../config.php" ;
class loginC
{
	function AjouterUser($User)
	{
		//require_once "config.php" ;
		$sql = "insert into formulaire (last_name,first_name,user_email,mdp) values(:last_name,:first_name,:user_email,:mdp)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;
			$req->BindValue(':last_name',$User->getnom()) ;
			$req->BindValue(':first_name',$User->getprenom()) ;
			$req->BindValue(':user_email',$User->getemail()) ;
			$req->BindValue(':mdp',$User->getmdp()) ;
			$req->execute();
			return true ;
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
	}
	function AfficherSign($User)
	{
		echo "last_name: ".$User->getnom()."<br>";
		echo "first_name: ".$User->getprenom()."<br>";
		echo "user_email: ".$User->getemail()."<br>";
		echo "mdp: ".$User->getmdp()."<br>";
	}
	function afficher_Sign_return()
	{
		//require_once "config.php" ;
		$sql="SElECT * From formulaire";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e)
		{
            die('Erreur: '.$e->getMessage());
        }
		
	}
	function supprimer($last_name)
	{ 
		//require_once "config.php" ;
		$sql="DELETE FROM formulaire where last_name= :last_name";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':last_name',$last_name);
		try{
            $req->execute();
        }
        catch (Exception $e)
		{
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherclients($str){
		$sql="select * from formulaire where last_name like '%".$str."%' or first_name like '%".$str."%' or user_email like '%".$str."%' or id like '%".$str."%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifieretat($id_client,$etat)
   {  
		$sql = "UPDATE carte SET etat='$etat' WHERE id_client=:id_client ";
	
	$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_client',$id_client);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	
 }
	


function rechercherCardio($str){
	$sql="select * from cardio where type like '%".$str."%' or titre like '%".$str."%' or description like '%".$str."%'";
	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

function rechercherAerobic($str){
	$sql="select * from aerobic where type like '%".$str."%' or titre like '%".$str."%' or description like '%".$str."%'";
	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}
function rechercherSport($str){
	$sql="select * from sportdecombat where type like '%".$str."%' or titre like '%".$str."%' or description like '%".$str."%'";
	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

}
?>