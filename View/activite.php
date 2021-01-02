<?PHP
 include "../controller/RecherhceInfo.php";
 
?>



<!DOCTYPE html>
<html lang="fr">

	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bodybuild</title>
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
                    <li><a href="#intro">Intro</a></li>
                    <li><a href="#type">Les types de musculation</a></li>
                    <li><a href="#methodes">Les méthodes les plus populaires</a></li>
                    <li><a href=/front/View/index2.php#body>Acceuil</a></li>
                       
                  </ul>
                </nav>
                <a href="#" class="nav-toggle">Menu<span></span></a> </div>
            </header>
            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                  <div class="banner-text text-center">
                    <h1>Quels sont les différents types de musculation possible ?</h1>
                    </div>
                </div>
              </div>
            </section>
            <br />
            <div class="alert alert-info">
            <p>Pour <strong>faire travailler vos muscles</strong>, il existe une multitude de méthodes. Selon l’objectif que vous visez, <strong>différents types d’exercices</strong> seront adaptés à votre entraînement.<br/>
                    Nous avons vu dans un précédent article comment préparer un planning de musculation efficace et pertinent, nous allons aujourd’hui nous intéresser aux différents types de travail que vous pouvez effectuer dans le cadre de la musculation.
                <br/> </p>
            </div>
            
    <section id="intro" class="section intro">
                <div class="container">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2>"DÉCOUVRIR TOUS LES SECRETS"</h2>
                        <h2>"PRISE DE MUSCLE RAPIDE SANS GRAS"</h2>
                    </div>
                </div>
    </section>
            <br />
             <div class="container">
                <div>
               <img src="../assetes/img/body2.jpg" alt="body2" style="width:600px;height:300px;">
                </div>
             </div>

             <!-- musculation section -->
    <section class="musculation">
          <div class="container"> 
          <?php
           $ActivitesC = readUser('1');
          ?>
            <h3><?php echo $ActivitesC['titre'] ?></h3>
             <p>Pratiquer la musculation implique de forcer sur ses muscles pour les faire travailler. Lorsque le muscle subit un choc, les fibres musculaires sont sollicitees. En se reconstruisant, c’est elles qui permettent de developper la masse musculaire.</p>
             <br>
             <p>En parallele, voici egalement une <strong>video explicative</strong> des resultats a esperer apres des mois de musculation :</p>
             <div class="video">
             <iframe width="853" height="480" src="https://www.youtube.com/embed/2yZuxkuyWA8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
             </div>
        <div>
        <?php
           $ActivitesC = readUser('2');
          ?>
            <h3><?php echo $ActivitesC['titre'] ?></h3>
            <p>
                Avant de s’interesser aux differents types de musculation, il est primordial de comprendre le fonctionnement du muscle pendant l’effort, afin de pouvoir realiser des gestes et des series efficaces. On distingue differents types de contraction, qui interviennent tour a tour lors de votre entrainement.
            </p>
            <p>
                La contraction concentrique : il s’agit de la plus connue. C’est celle qui intervient lorsque vous mettez votre muscle en action. Lorsque le muscle se met en mouvement, les unites contractiles se rapprochent et provoquent le gonflement.
            </p>
            <p>
                La contraction excentrique : c’est l’effet contraire. Il s’agit de l’etirement du muscle, qui survient lorsque vous relachez. Cette contraction permet de controler et de freiner le mouvement.
            </p>
            <p>
                La contraction isometrique : ce type de contraction se caracterise par l’absence de mouvement. Il s’agit de la resistance du muscle a une pression ou a une charge. Lorsque le muscle est en contraction isometrique, il faut jouer sur la duree pour le faire travailler. A l’inverse, les contractions excentriques et concentriques impliquent un certain nombre de repetitions pour agir sur le muscle.
            </p>
        </div>
    </div>
    </section>
         <!-- intro section -->

    <section id="type" class="musculation">
        <div class="container">
        <?php
           $ActivitesC = readUser('3');
          ?>
            <h3><?php echo $ActivitesC['titre'] ?></h3>
            <p>
                Nous verrons plus en detail <strong>les exercices a pratiquer en fonction de votre objectif</strong> et <stong>les methodes de musculation les plus reputees</stong>, dans les paragraphes suivants. Il est cependant important de faire la difference entre deux types d’entrainement de musculation :
            </p>
            <p>
                <strong>La musculation au poids de corps</strong> : Cette <strong>methode de travail</strong> ne necessite aucun accessoire, vous n’aurez besoin que de votre corps pour la pratiquer. Elle est essentielle lorsque l’on debute : il est evidemment important de d’abord maitriser les mouvements avant d’y ajouter les charges. Mais elle peut aussi convenir a des pratiquants de musculation d’un niveau plus avance, car differentes astuces permettent d’ajouter de la difficulte, sans rajouter de charges externes.
            </p>
            <p>
                De nombreuses idees reçues laissent a penser que la musculation au poids de corps n’est plus efficace a force de s’entrainer : c’est tout à fait faux. <strong>Ce type de musculation</strong> peut être <strong>beaucoup plus intense qu’avec des charges</strong>, selon le positionnement de votre corps ou selon les appuis au sol.
            </p>
            <p>
                <strong>La musculation avec poids libres</strong> : Ce <strong>type de travail</strong> implique de realiser les mouvements <strong>en ajoutant une charge grace a des halteres, des disques, des kettlebells.</strong> En ajoutant du poids, vous augmentez l’intensite de l’entrainement et vous invitez votre muscle à travailler davantage. Les poids libres vous donnent l’avantage de pouvoir ajuster la charge en fonction de votre niveau et de suivre plus facilement votre evolution.
            </p>
            <img src="../assetes/img/body3.jpg" alt="body3" style="width:336px;height:450px;">
            <br />
            <p>
                Il faut savoir que <strong>ces deux types d’entrainement</strong> peuvent tout a fait etre complementaires et qu’il n’existe pas une méthode plus efficace que l’autre.Vous pouvez tout a fait <strong>inclure des exercices au poids de corps et des series avec des charges dans votre programme de musculation.</strong>
            </p>
            <p style="color:rgb(6, 139, 46);text-align:center;font-size:150%;"> 
                Justement, casser la routine est un excellent moyen de rebooster votre motivation et d’obtenir des resultats probants.
            </p>
        
            <?php
           $ActivitesC = readUser('4');
          ?>
            <h3><?php echo $ActivitesC['titre'] ?></h3>

           <p style="color:rgb(6, 139, 46);text-align:center;font-size:150%;">
            Si differentes methodes d’entrainement existent, il est primordial de <strong>definir vos objectifs</strong> avant de vous orienter vers un type de musculation.
           </p>
           <?php
           $ActivitesC = readUser('5');
          ?>
            <h4><?php echo $ActivitesC['titre'] ?></h4>
           <p>
            Si vous debutez la musculation avec pour objectif de perdre votre gras et de secher, vous devrez adapter vos seances. Pour perdre du poids rapidement, il est important d’inclure autant de cardio dans votre entrainement que de musculation. L’equilibre entre les deux est primordial car c’est ce qui vous permettra de ne pas perdre de masse musculaire.
           </p>
           <p>
            Un programme mixte est une alternative ideale pour avoir un impact considerable sur la perte de gras : il sera impossible d’obtenir les mêmes resultats en effectuant uniquement du cardio ou de la musculation. Dans votre programme de sèche, il faudra recourir a des charges legeres a moyennes : votre regime alimentaire vous imposera des restrictions caloriques, vos capacites seront donc réduites.
           </p>
           <?php
           $ActivitesC = readUser('6');
          ?>
            <h4><?php echo $ActivitesC['titre'] ?></h4>
           <p>
            La prise de masse est une phase d’entrainement intense et specifique pour prendre de la masse musculaire rapidement. Cette etape doit intervenir apres une seche car elle n’est pas pertinente si votre taux de gras est trop important. La prise de masse doit s’envisager uniquement si votre physique est adapte.
           </p>
           <p>
            Ce type de musculation va impliquer d’effectuer des exercices de base avec des charges lourdes. Pour ne pas stagner, vous devrez etre reactif et augmenter regulierement vos charges. Votre muscle s’habituera rapidement a l’effort et ne progressera plus si vous ne variez pas les poids. Vous devez atteindre une intensite maximale en entrainement.
           </p>
        
           <?php
           $ActivitesC = readUser('7');
          ?>
            <h3><?php echo $ActivitesC['titre'] ?></h3>

            <p style="color:rgb(6, 139, 46);text-align:center;font-size:150%;">
                Le type de musculation pourra se definir egalement <strong>en fonction de votre morphologie.</strong> Meme si vous revez d’avoir des muscles de bodybuilder, il faut savoir que certains corps ne s’y prêtent pas et que votre morphologie de base sera determinante dans votre programme d’entrainement.
            </p>
            <?php
           $ActivitesC = readUser('8');
          ?>
            <h4><?php echo $ActivitesC['titre'] ?></h4>
            <p>
                <strong>Ce type de morphologie</strong> correspond aux personnes minces. Ce sont generalement celles qui peuvent manger de tout et qui prendront rarement du poids. Dans ce cas de figure, cela signifie aussi <strong>qu’il sera plus difficile de prendre de la masse musculaire.</strong> L’ectomorphe devra privilegier un entrainement court avec des exercices de base. Pour prendre du muscle, il devra prendre du poids et donc multiplier les repas.
            </p>
            <?php
           $ActivitesC = readUser('9');
          ?>
            <h4><?php echo $ActivitesC['titre'] ?></h4>
            <p>
                Les endomorphes ont des os plus lourds ainsi qu’une taille et des hanches plus larges. Ils ne rencontrent aucun probleme pour prendre du poids mais eprouvent plus de difficultes pour s’en debarrasser. L’endomorphe ne devra pas seulement s’attarder sur la musculation mais aussi <strong>realiser des entrainements de cardio reguliers.</strong> Concernant le <strong>type de musculation</strong>, il devra s’entrainer avec des charges moderees.
            </p>
            <?php
           $ActivitesC = readUser('10');
          ?>
            <h4><?php echo $ActivitesC['titre'] ?></h4>
            <p>
                Cette morphologie est ideale pour être bodybuilder. Caracterisee par un physique taille « en V », elle permet de <strong>supporter une grande masse musculaire</strong> tout en conservant une belle harmonie. Les mesomorphes pourront miser sur un <strong>entrainement long et intense</strong> et pratiquer le cardio de maniere moderee.
            </p>
        </div>
    </section>
     
    <section id="methodes" class="musculation">
        <div class="container">
        <?php
           $ActivitesC = readUser('11');
          ?>
            <h3><?php echo $ActivitesC['titre'] ?></h3>
            <p style="color:rgb(6, 139, 46);text-align:center;font-size:150%;">
                Parmi les <strong>differents types de musculation</strong>, certaines methodes ont fait leurs preuves et sont tres repandues dans l’univers de la salle. Zoom sur ces entrainements reputes !
            </p>
            <?php
           $ActivitesC = readUser('12');
          ?>
            <h4><?php echo $ActivitesC['titre'] ?></h4>
            <p>
                Le Full Body implique de <strong>travailler la totalite du corps pendant une seance.</strong> Tous les muscles sont sollicites et on retrouve lors d’un entrainement la plupart des mouvements de base. Ce <strong>type de travail</strong> peut etre realise sur deux ou trois seances par semaine : comme tous les groupes musculaires sont mis a rude epreuve, il est important d’observer des jours de repos.
            </p>
            <?php
           $ActivitesC = readUser('13');
          ?>
            <h4><?php echo $ActivitesC['titre'] ?></h4>
            <p>
                Contrairement au Full body, <strong>ce type d’entrainement se focalise sur quelques groupes musculaires lors d’une seance.</strong> Par exemple, vous allez travailler le lundi les abdominaux, les cuisses et les fessiers le lendemain et les epaules et les triceps le jour suivant. En travaillant ainsi, vos muscles auront le temps de recuperer et vous pourrez realiser des entrainements pratiquement tous les jours (conservez tout de même un jour de repos total par semaine).
            </p>
            <?php
           $ActivitesC = readUser('14');
          ?>
            <h4><?php echo $ActivitesC['titre'] ?></h4>
            <p>
                Le Cross Fit fait de nombreux nouveaux adeptes chaque jour ! <strong>Cette methode d’entrainement americaine</strong> combine <strong>des exercices de cardio a des series de musculation.</strong> Une seance dure generalement entre 30 et 45 minutes et se revele être tres intense.
            </p>
            <?php
           $ActivitesC = readUser('15');
          ?>
            <h4><?php echo $ActivitesC['titre'] ?></h4>
            <p>
                « L’entrainement par intervalles à haute intensite » est un <strong>type de musculation</strong> qui propose <strong>des phases d’exercices a haute intensite, combinees a des etapes de recuperation active.</strong> Tres plebiscitee par les personnes qui manquent de temps et qui souhaitent des resultats rapides, cette methode augmente vos performances grace a des exercices tres courts mais tres intenses. Elle regroupe :
            </p>
            <?php
           $ActivitesC = readUser('16');
          ?>
            <h5><?php echo $ActivitesC['titre'] ?></h5>
            <p>
                C’est un travail <strong>cardio tres intense et tres court</strong> qui s’effectue sur des series de 20 secondes, suivies d’une pause de 10 secondes. Le circuit doit etre realise 8 fois.
            </p>
            <?php
           $ActivitesC = readUser('17');
          ?>
            <h5><?php echo $ActivitesC['titre'] ?></h5>
            <p>
                Sur le meme principe, <strong>ce type d’entrainement</strong> consiste a travailler pendant 60 secondes puis a observer une phase de recuperation de 75 secondes.
            </p>
            <?php
           $ActivitesC = readUser('18');
          ?>
            <h4><?php echo $ActivitesC['titre'] ?></h4>
            <p>
                Cette <strong>methode</strong> est <strong>tres repandue et appreciee</strong> car elle permet de realiser des exercices sans aucun materiel, uniquement au poids de corps. Tres pratique, elle inclue des mouvements basiques et simples a memoriser, a effectuer n’importe ou.
            </p>
            <?php
           $ActivitesC = readUser('19');
          ?>
            <h4><?php echo $ActivitesC['titre'] ?></h4>
            <p>
                Le « Total Resistance Exercice » s’effectue au poids de corps, grace a des sangles ajustables. De plus en plus present dans les salles de sport, le TRX est un moyen efficace de s’entrainer sans charge exterieure et de varier les exercices, pour casser la routine.
            </p>
        </div>
    </section>

    <br />
    <br />

 <!-- musculation section -->

 <!-- Footer section -->
 <footer class="footer">
    <div class="container-fluid">
    <div id="map-row" class="row">
        <div class="col-xs-12">    
            <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe> 
          
              <div id="map-overlay" class="col-xs-5 col-xs-offset-6">
                <h2 style="margin-top:0;color:#fff;">Contact us</h2>
                <address style="color:#fff;">
                    <strong>Company name</strong><br>
                    Life style.<br>
                    Marsa-tn<br>
                    Tunis<br>
                    V6G 1G9<br>
                    <abbr title="Phone">Tel:</abbr> (216) 21-461-637
                </address>
                  © 2020 Company Name. <strong>Life style.</strong>
            </div>
        </div>
         </div>
    </div>
    </footer>
    <!-- Footer section -->

    </body>

</html>