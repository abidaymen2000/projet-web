<?php 
	
	   include "../config.php";
	
       function readUser($id) {
        $con = config::getConnexion();
        $requete = "SELECT * from info where id = '$id' ";
        $stmt = $con->query($requete);
        $row = $stmt->fetchAll();
          if (!empty($row)) {
                return $row[0];
            }
                                    
        }

 ?>


<html>
    <head>
       
        <style type="text/css">
        span.surligne1{font-style:italic; background-color: #ffff00;}
        span.surligne2{font-style:italic; background-color: #ff99ff;}
        span.surligne3{font-style:italic; background-color: #ff9999;}
        span.surligne4{font-style:italic; background-color: #9999ff;}
        </style>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="../assetes/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assetes/css/flexslider.css">
        <link rel="stylesheet" href="../assetes/css/jquery.fancybox.css">
        <link rel="stylesheet" href="../assetes/css/responsive.css">
        <link rel="stylesheet" href="../assetes/css/font-icon.css">
        <link rel="stylesheet" href="../assetes/css/animate.min.css">
        <link rel="stylesheet" href="../assetes/css/style.css">
        <link rel="stylesheet" href="../assetes/css/recherche.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

        </head>
        <body>
 
 <?php     
  
 if(isset($_GET['search'])){
     
    $con=mysqli_connect("localhost","root","","act");
    $q=$_GET['search'];
    $s=explode(" ",$q);
    $sql="SELECT * from info";

    $i=0;
    foreach($s as $mot){

        if(strlen($mot)>3){
        if($i==0){
            $sql.=" WHERE ";
        }
        else{
            $sql.=" OR ";
        }
        $sql.="contenu LIKE '% $mot %'";
        $i++;  
    }
}
     $req= mysqli_query($con,$sql) or die (mysqli_error());
     ?>
     <script> 
     alert("VOTRE RECHERCHE EST EFFECTUEE AVEC SUCCES!");
     </script>
     <section class="banner" role="banner">
            <header id="header">
              <div class="main">
                <form action="../controller/RecherhceInfo.php" method="get">
                 <input type="text"  id="search" name="search" placeholder="Recherche"> 
                 <button type="submit"> <i class="fas fa-search"></i> </button>  
                </form>
               </div>
              <div class="header-content clearfix"> <span class="logo">Body build</span>
                <nav class="navigation" role="navigation">
                  <ul class="primary-nav">
                  
                    <li><a href=../View/activite.php>Acceuil</a></li>
                       
                  </ul>
                </nav>
                <a href="#" class="nav-toggle">Menu<span></span></a> </div>
            </header>
            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                  <div class="banner-text text-center">
                    <h1>VOTRE RECHERCHE EST EFFECTUEE AVEC SUCCES!</h1>
                    </div>
                </div>
              </div>
            </section>
     <div class="w3-panel w3-green w3-center">
     
     </div>
     <div class="w3-container w3-border w3-large">
     <h2 class="w3-text-red" style="text-shadow:1px 1px 0 #444"> <?php echo mysqli_num_rows($req)."resultat";?> </h2>
     </div>
     <?php
     while($d=mysqli_fetch_assoc($req)) {
      ?>
      <div>
     <h2><?php echo "<h1>{$d["titre"]}</h1>"; ?></h2>
     </div>
     <?php
     $c = $d["contenu"];
     
     $i=0;
     foreach($s as $mot){
if(strlen($mot)>3){
    $i++;
    if($i>4){$i=1;}
    $c = str_ireplace($mot, '<span class ="surligne'.$i.'">'.$mot.'</span>',$c);
}
}
 echo "<p>{$c}</p>";
     
     }
    }

     
    
 
 ?>
 </body>
 </html>
 