
<?PHP
include "../Controller/ActivitesC2.php";

$ActivitesC = new ActivitesC2();
$listeUsers = $ActivitesC->afficherCardio();
$listeUsers1 = $ActivitesC->afficherCardio();

$AerobiC = new ActivitesC2();
$listeAerobic = $AerobiC->afficherAerobic();
$listeAerobic1 = $AerobiC->afficherAerobic();

$SporT = new ActivitesC2();
$listeSport = $SporT->afficherSPORT();
$listeSport1 = $SporT->afficherSPORT();

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="webthemez.com">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Salle de Sport</title>
<link rel="stylesheet" href="../assetes/css/bootstrap.min.css">
<link rel="stylesheet" href="../assetes/css/flexslider.css">
<link rel="stylesheet" href="../assetes/css/jquery.fancybox.css">
<link rel="stylesheet" href="../assetes/css/main.css">
<link rel="stylesheet" href="../assetes/css/responsive.css">
<link rel="stylesheet" href="../assetes/css/font-icon.css">
<link rel="stylesheet" href="../assetes/css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

<!-- header section -->
<section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix"> <span class="logo"><a href="">Life-Style</a></span>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
          <li><a href="#intro">Info</a></li>
          <li><a href="#services">Activités</a></li>
          <li><a href="#package">Paquets</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#teams">Notre équipe</a></li>
          <li><a href="#testimonials">certificat</a></li>
          <li><a href="#contact">contact us</a></li>
          <li><a href="http://localhost/front/View/index.php">se deconnecter</a></li>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">
        <h1>Sport & Life</h1>
        <p>L'activité physique et le sport occupent une place de plus en plus importante dans la vie quotidienne.
           Mais quels sont les bienfaits de cette pratique en termes de santé et de bien-être ? Combien en faire par semaine ?
        .<br/> </p></div>
      <!-- banner text --> 
    </div>
  </div>
</section>
<!-- header section --> 
<!-- intro section -->
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>Boost your Healt and Life</h3>
      <p>Il a été clairement démontré que la pratique régulière d'une activité physique peut contribuer à diminuer le risque des maladies cardio-vasculaires et diminuer le risque d'hypertension artérielle.</p> 
        <a href="#package" class="btn btn-large">Paquets</a> 
    </div>
  </div>
</section>
<!-- intro section --> 
<!-- services section -->
<section id="services" class="services service-section">
  <div class="container">
  <div class="section-header">
                <h2 class="wow fadeInDown animated">Fitness Workouts</h2>
                <p class="wow fadeInDown animated">Bienvenu, cher client ici tu trouvera toutes les activités de notre salle de SPORT!<br>toutes les cours sont de 2h.</p>
            </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 col-sm-4 services text-center"> <i class='fas fa-heart' style='font-size:48px;color:hsl(115, 67%, 57%)'></i>
        <div class="services-content">
          <h5>Cardio</h5>
          <table border="1">
            <tr>
            <?PHP
	          	foreach ($listeUsers as $user) {
		        ?>
              <td><h6 class="w3-center" style="color:goldenrod;"> <?PHP echo $user['titre']; ?> </h6></td>
              <?php } ?>
            </tr>
            <tr>
            <?PHP
	          	foreach ($listeUsers1 as $user) {
		        ?>
              <td><p class="w3-center"> <?PHP echo $user['description']; ?> </p></td>
              <?php } ?>
            </tr>
        </table>
        </div>
      </div>
            
      <div class="col-md-8 col-md-offset-2 col-sm-4 services text-center"> <i class='fas fa-suitcase' style='font-size:48px;color:hsl(115, 67%, 57%)'></i>
        <div class="services-content">
          <h5>Aerobic</h5>
          <table border="1">
            <tr>
            <?PHP
	          	foreach ($listeAerobic as $user) {
		        ?>
              <td><h6 class="w3-center" style="color:goldenrod;"> <?PHP echo $user['titre']; ?> </h6></td>
              <?php } ?>
            </tr>
            <tr>
            <?PHP
	          	foreach ($listeAerobic1 as $user) {
		        ?>
              <td><p class="w3-center"> <?PHP echo $user['description']; ?> </p></td>
              <?php } ?>
            </tr>
            </tr>
          </table>
          </div>
          </div>

          <div class="col-md-8 col-md-offset-2 col-sm-4 services text-center"> <i class='fas fa-fire-alt' style='font-size:48px;color:hsl(115, 67%, 57%)'></i>
        <div class="services-content">
          <h5>sport de combat</h5>
          <table border="1">
            <tr>
            <?PHP
	          	foreach ($listeSport as $user) {
		        ?>
              <td><h6 class="w3-center" style="color:goldenrod;"> <?PHP echo $user['titre']; ?> </h6></td>
              <?php } ?>
            </tr>
            <tr>
            <?PHP
	          	foreach ($listeSport1 as $user) {
		        ?>
              <td><p class="w3-center"> <?PHP echo $user['description']; ?> </p></td>
              <?php } ?>
            </tr>
        </table>
      </div>
      </div>
      <br>
      <br>
      <div class="col-md-8 col-md-offset-2 col-sm-4 services text-center"> <i class='fas fa-dumbbell' style='font-size:48px;color:hsl(115, 67%, 57%)'></i>
        <div class="services-content">
          <h5 id="body">Bodybuild</h5>
          <table border="1">
           <td>
           <p>Pratiquer la musculation implique de forcer sur ses muscles pour les faire travailler. Lorsque le muscle subit un choc, les fibres musculaires sont sollicitées. En se reconstruisant, c’est elles qui permettent de développer la masse musculaire.</p>
          </td>
        </table>
    
        <p>Pour plus d'info:</p>
        <nav>
          <button style='font-size:24px'><a href="/front/View/activite.php">Cliquez-ici!</a><br><i class='fas fa-dumbbell'></i></button>
        </nav>
        </div>
         
      </div>
    </div>
  </div>
</section>
<!-- services section --> 
<!-- package section -->
<section id="package" class="packageList">
  <div class="container">
      <div class="section-header">
                <h2 class="wow fadeInDown animated">Package</h2>
                <p class="wow fadeInDown animated">cherche pas, ici sont les meilleurs prix!.</p>
            </div>
    <div class="row">  
            <div class="col-md-6">
            
            	<div class="package wow fadeInLeft animated" data-wow-offset="250" data-wow-delay="200ms">
                <h5>Abonnement 1 mois toutes les activités</h5>
                <ul class="list-default">
                  <li>cet abonnement n'est ni remboursable ni transférable.
                   </li>
                  <li>06:30 - 21:30 H</li>
                  <li>Accès illimité à tous les cours et les espaces </li>
                </ul>
                <strong class="price"><small>dt</small>100</strong>
            </div><!-- end package -->
            
            <div class="package wow fadeInLeft animated" data-wow-offset="200" data-wow-delay="300m">
              <h5>Abonnement 3 mois toutes les activités </h5>
                <ul class="list-default">
                  <li>cet abonnement est  remboursable ou transférable en cas de maladie ou grossesse
                  </li>
                 <li>06:30 - 21:30 H</li>
                 <li>Accès illimité à tous les cours et les espaces </li>
                </ul>
                <strong class="price"><small>dt</small>250</strong>
            </div><!-- end package -->
            
            <div class="package no-border wow fadeInLeft animated" data-wow-offset="150" data-wow-delay="400m" >
              <h5>Abonnement 12 mois toutes les activités</h5>
                <ul class="list-default">
                  <li>cet abonnement est  remboursable ou transférable en cas de maladie ou grossesse
                  </li>
                 <li>06:30 - 21:30 H</li>
                 <li>Accès illimité à tous les cours et les espaces </li>
                </ul>
                <strong class="price"><small>dt</small>900</strong>
            </div><!-- end package -->
            
        </div><!-- end col-md-6 -->
        <div class="col-md-6">
        
          <div class="package wow fadeInRight animated" data-wow-offset="250" data-wow-delay="500m" >
              <h5>Abonnement 1 mois musculation</h5>
                <ul class="list-default">
                  <li>cet abonnement n'est ni remboursable ni transférable.
                  </li>
                 <li>06:30 - 21:30 H</li>
                 <li>Accès illimité uniquement au salle de musculation (bicyclette et tapis roulant) </li>
                </ul>
                <strong class="price"><small>dt</small>60</strong>
            </div><!-- end package -->
            
            <div class="package wow fadeInRight animated" data-wow-offset="200" data-wow-delay="600m">
              <h5>Abonnement 3 mois musculation</h5>
                <ul class="list-default">
                  <li>cet abonnement est  remboursable ou transférable en cas de maladie ou grossesse
                  </li>
                 <li>06:30 - 21:30 H</li>
                 <li>Accès illimité uniquement au salle de musculation (bicyclette et tapis roulant) </li>
                </ul>
                <strong class="price"><small>dt</small>150</strong>
            </div><!-- end package -->
            
            <div class="package no-border wow fadeInRight animated" data-wow-offset="150" data-wow-delay="700m">
              <h5>Abonnement 12 mois musculation</h5>
                <ul class="list-default">
                  <li>cet abonnement est  remboursable ou transférable en cas de maladie ou grossesse
                  </li>
                 <li>06:30 - 21:30 H</li>
                 <li>Accès illimité uniquement au salle de musculation (bicyclette et tapis roulant) </li>
                </ul>
                <strong class="price"><small>dt</small>580</strong>
                </div><!-- end package -->
                
                <div id="achat" class="package no-border wow fadeInRight animated" data-wow-offset="150" data-wow-delay="700m">
                  <h5>Achat:</h5>
                <nav>
                  <button style='font-size:24px'><a href="/front/View/formulairePayment.php">Cliquez-ici!</a><br><i class="fas fa-shopping-cart"></i></button>
                </nav>
                </div>
                
            </div><!-- end col-md-6 -->
        </div><!-- end row -->    
  </div>
</section>
<!-- package section --> 

<!-- gallery section -->
<section id="gallery" class="gallery section">
  <div class="container">
    <div class="section-header">
                <h2 class="wow fadeInDown animated">Gallery</h2>
                <p class="wow fadeInDown animated">amuse toi avec ces photos pour avoir une idée sur notre merveilleuse salle de sport .</p>
            </div>
    <div class="row no-gutter">
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/01.jpg" class="work-box"> <img src="images/portfolio/01.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
             <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/02.jpg" class="work-box"> <img src="images/portfolio/02.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/03.jpg" class="work-box"> <img src="images/portfolio/03.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/04.jpg" class="work-box"> <img src="images/portfolio/04.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption"> 
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/05.jpg" class="work-box"> <img src="images/portfolio/05.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/06.jpg" class="work-box"> <img src="images/portfolio/06.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/07.jpg" class="work-box"> <img src="images/portfolio/07.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/08.jpg" class="work-box"> <img src="images/portfolio/08.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
             <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
    </div>
  </div>
</section>
<!-- gallery section --> 
<!-- our team section -->
<section id="teams" class="section teams">
  <div class="container">
      <div class="section-header">
                <h2 class="wow fadeInDown animated">Our Team</h2>
                <p class="wow fadeInDown animated">l'équipe de notre salle de sport:</p>
            </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="person"><img src="images/team-1.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Abid Aymen</h4>
            <h5 class="role">Founder</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#"><span class="fa fa-google-plus"></span></a></li> 
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="images/team-2.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Turki Khalil</h4>
            <h5 class="role">Master</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li> 
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="images/team-3.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Ben Hafsia Khaled</h4>
            <h5 class="role">Aerobic</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li> 
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="images/team-4.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Ben Jemaa Ghazi</h4>
            <h5 class="role">Marketing</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li> 
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- our team section --> 
<!-- Testimonials section -->
<section id="testimonials" class="section testimonials no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Encore trop nombreux sont les sportifs qui ne déjeunent pas. L’importance des apports en glucides
                   et en protéines du petit déjeuner conditionne tout le déroulement de la journée. Si les apports sont 
                   trop faibles, la vigilance, l’attention et la concentration vont chuter, en partie à cause de 
                   l’hypoglycémie." </h1>
                <p>Chris Mentsl</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"boire régulièrement est le meilleur moyen d’éviter la déshydratation. Il faut s’hydrater avant, pendant et après le sport. Une bonne hydratation permet une meilleure récupération. Les conséquences d’une déshydratation sont : une réduction des performances, les accidents musculaires, troubles digestifs…L’eau est la seule boisson indispensable pour une bonne hydratation, cependant pour les efforts > 1h les boissons de l’effort peuvent apporter un vrai coup de pouce." </h1>
                <p>Kristean velnly</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"les legumes sont de faibles apports caloriques mais ils couvrent les apports nutritionnels en vitamines et minéraux qui auront un impact direct sur la bonne assimilation des nutriments. Ils sont également riches en fibres et facilitent ainsi le transit intestinal." </h1>
                <p>Markus Denny</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Une fois une compétition ou un entraînement terminé, les sportifs ont tendance à oublier de récupérer. Pourtant, après tout effort, le corps à besoin de retrouver son équilibre. Il faut donc être vigilent et compenser toutes les pertes hydro-électrolytiques et renouveler les réserves énergétiques si précieuses pour la reprise de l’entraînement dés le lendemain." </h1>
                <p>John Doe</p>
              </blockquote>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Testimonials section --> 

<!-- contact section -->
<section id="contact" class="section">
<div class="container">
      <div class="section-header">
                <h2 class="wow fadeInDown animated">Nous contacter</h2>
                <p class="wow fadeInDown animated">Si vous avez des questions , des propositions ou des réclamation vous pouvez nous contacter ..</p>
            </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 conForm">       
        <div id="message"></div>
        <form method="post" action="../Controller/Commentaire.php" id="cform">
          <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your name..." >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Email Address..." >
          <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Message..."></textarea>
          <input type="submit" id="submit" name="send" class="submitBnt" value="Send">
          <div id="simple-msg"></div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- contact section --> 


<!-- deconnexion section -->
    <section id="header" class="section">
      <div class="container">
       <div class="section-header">
        <a href= "index.php" > deconnexion </a>
   </section>

<!-- deconnexion section -->
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
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script> 
</body>
</html>