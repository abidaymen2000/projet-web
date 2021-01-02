<html>
<head>
<meta charset="utf8">
</head>



<body>
<?php 

include "../Model/User2.php";
$c=new config();
$conn=$c->getConnexion();
$user=new User($_POST['user_email'],$conn);
$u=$user->Logedin($conn,$_POST['user_email']);
$vide=false;

if (!empty($_POST['user_email']) )

{
	
	foreach($u as $t)
	{
		$vide=true;
	if ($t['user_email']==$_POST['user_email'] )
	{	
        echo '<meta http-equiv="refresh" content="0;URL=../View/mail.php">'; 
        
	}
		
		
	
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page login
         echo '<meta http-equiv="refresh" content="0;URL=mdp_oub.php">'; 
      } 
}	  
 
else {
     // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'il faut tout remplir...\')">'; 
         // puis on le redirige vers la page login
         echo '<meta http-equiv="refresh" content="0;URL=mdp_oub.php">';  
}  

?> 
</body>
</html>