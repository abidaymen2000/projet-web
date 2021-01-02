<?php
$link=mysqli_connect("localhost","root","") or die ("Erreur");
mysqli_select_db( $link ,'cmnts') or die("La base de donnée est introuvable.");

if($_POST)
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
    
 if($_POST['name']!=='' && $_POST['email']!=='' && $_POST['comments']!=='')
{mysqli_query($link,'INSERT INTO cmnt (name,email,comments) VALUES ("'.$name.'","'.$email.'","'.$comments.'")') or die ('Erreur: '.mysqli_error($link)); ?>
<a href=../View/index2.php#achat>Acceuil</a>
<?php  
echo "message envoyer";
}else echo "erreur , il faut tout remplir";
}
?>