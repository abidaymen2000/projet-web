<html>
<head>
<meta charset="utf8">
</head>



<body>
<?php 

include "../Model/User.php";
$conn = config::getConnexion();
$user=new User($_POST['last_name'],$_POST['mdp'],$conn);
$u=$user->Logedin($conn,$_POST['last_name'],$_POST['mdp']);
$vide=false;

if (!empty($_POST['last_name']) && !empty($_POST['mdp']))

{
	if ($_POST['last_name']=="ADMIN"&&$_POST['mdp']=="ADMIN123")
	{
		echo '<meta http-equiv="refresh" content="0;URL=/Back/Views/user.php">'; 
		
	}


	foreach($u as $t)
	{
		$vide=true;
	if ($t['last_name']==$_POST['last_name'] && $t['mdp']==$_POST['mdp'])
	{	
		session_start();
		include_once "../View/index2.php";
		$_SESSION['l']=$_POST['last_name'];
		$_SESSION['p']=$_POST['mdp'];
		$_SESSION['i']=$t['id'];
		header("location:../View/index.php");
	
		exit;
		
	}
		
		
	
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page login
         echo '<meta http-equiv="refresh" content="0;URL=../View/sign.php">'; 
      } 
}	  
 
else {
     // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'il faut tout remplir...\')">'; 
         // puis on le redirige vers la page login
         echo '<meta http-equiv="refresh" content="0;URL=../View/sign.php">';  
}  

?> 
</body>
</html>