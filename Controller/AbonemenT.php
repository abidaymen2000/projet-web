<?php
$link=mysqli_connect("localhost","root","") or die ("Erreur");
mysqli_select_db( $link ,'abs') or die("La base de donnée est introuvable.");

if($_POST)
{
    $type = $_POST['type'];
    $dure = $_POST['dure'];
    $nom = $_POST['nom'];
    $Email = $_POST['Email'];
    $MotDePasse = $_POST['MotDePasse'];
    $TypeDeCarte = $_POST['TypeDeCarte'];
    $NumeroDeCarte = $_POST['NumeroDeCarte'];
    $DateDExpiration = $_POST['DateDExpiration'];
    
 if($_POST['type']!=='' && $_POST['dure']!=='' && $_POST['nom']!=='' && $_POST['Email']!=='' && $_POST['MotDePasse']!==''  && $_POST['TypeDeCarte']!==''    && $_POST['NumeroDeCarte']!==''  && $_POST['DateDExpiration']!=='' )
{mysqli_query($link,'INSERT INTO abonement (type,dure,nom,Email,MotDePasse,TypeDeCarte,NumeroDeCarte,DateDExpiration) VALUES ("'.$type.'","'.$dure.'","'.$nom.'","'.$Email.'","'.$MotDePasse.'","'.$TypeDeCarte.'","'.$NumeroDeCarte.'","'.$DateDExpiration.'")')or die ('Erreur: '.mysqli_error($link)); ?>
<a href=/front/View/index2.php#achat>Acceuil</a>
<?php  
echo "inscription terminer";
}else echo "erreur , il faut tout remplir";
}
?>