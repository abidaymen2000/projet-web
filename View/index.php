<?PHP
include "../Controller/ActivitesC.php";

$ActivitesC = new ActivitesC();
$listeUsers = $ActivitesC->afficherCardio();
$listeUsers1 = $ActivitesC->afficherCardio();

$AerobiC = new ActivitesC();
$listeAerobic = $AerobiC->afficherAerobic();
$listeAerobic1 = $AerobiC->afficherAerobic();

$SporT = new ActivitesC();
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
</head>

<body>

<!-- header section -->
<section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix"> <span class="logo"><a href="index.html">Life-Style</a></span>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
          <li><a href="#intro">Info</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#teams">Notre équipe</a></li>
          <li><a href="#testimonials">Conseils</a></li>
          <li><a href="#contact">se conecter</a></li>
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
      <h2 class="container text-center">Welcome</h2>
            <br>    <br>    <br>    <br>    <br>    <br>
            <form class="text-left clearfix" action="../Controller/connexion.php" method="POST">
              <div class="form-group">
                <input type="text" class="form-control" name="last_name" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="mdp" placeholder="Password">
              </div>
              <div class="container text-center">
                <button type="submit" class="btn btn-main text-center">Login</button>
              </div>
                </form>
                <p><a href="mdp_oub.php"> Mot de passe oublié ?</a></p>
            <p class="mt-20">Nouveau dans ce site ?<a href="page.php"> Créer un compte gratuitement</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- contact section --> 
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