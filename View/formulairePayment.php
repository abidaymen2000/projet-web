<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulaire de Paiement exemple</title>
    <link href="../assetes/css/payment_form.css" rel="stylesheet">
</head>

<body>
  <section class="banner" role="banner">
    <header id="header">
      <div class="header-content clearfix"> <span class="logo">Life-Style</span>
        <nav class="navigation" role="navigation">
          <ul class="primary-nav">
            <li><a href="index2.php">Acceuil</a></li>
            <li><a href="#services">Actualiser</a></li>
          </ul>
        </nav>
        <a href="#" class="nav-toggle">Menu<span></span></a> </div>
    </header>
  



  <div class="container">
    <form action="../Controller/AbonemenT.php" method="post">
        <h1>Formulaire de Paiement</h1>
        <p>Ce formulaire est suivi par <strong><abbr title="required">ADMINASTRATION</abbr></strong>.</p>
        <section>
            <h2>Information de contact</h2>
            <fieldset>
              <legend>Type d'Abonnement</legend>
              <ul>
                  <li>
                  <div>
                    <input type="radio" id="Musculation/Cardio" name="type" value="Musculation/Cardio"
                    checked>
                    <label for="Musculation/Cardio"> Musculation/Cardio</label>
                    </div>
                  </li>
                  <li>
            
                  <div>
                  <input type="radio" id="Toutes Activités" name="type" value="Toutes Activités">
                   <label for="Toutes Activités">Toutes Activites</label>
                     </div>
        
                  </li>
              </ul>
            </fieldset>
            <fieldset>
                  <legend>Durée d'Abonnement</legend>
              <ul>
              <li>
                  <div>
                    <input type="radio" id="1 Mois" name="dure" value="1 Mois" checked>
                     <label for="1 Mois">1 Mois</label>
                   </div>
                </li>
                  
                <li>
                  <div>
                    <input type="radio" id="3 Mois" name="dure" value="3 Mois">
                     <label for="3 Mois">3 Mois</label>
                   </div>
                  </li>
                  
                  <li>
                  <div>
                    <input type="radio" id="6 Mois" name="dure" value="6 Mois">
                     <label for="6 Mois">6 Mois</label>
                   </div>
                  </li>
    
                  <li>
                  <div>
                    <input type="radio" id="9 Mois" name="dure" value="9 Mois">
                     <label for="9 Mois">9 Mois</label>
                   </div>
                  </li>

                  <li>
                  <div>
                    <input type="radio" id="12 Mois" name="dure" value="12 Mois">
                     <label for="12 Mois">12 Mois</label>
                   </div>
                  </li>
              </ul>
            </fieldset>
            <p>
              <label for="Nom">
                <span>Nom: </span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="text" id="name" name="nom">
            </p>

            <p>
              <label for="mail">
                <span>E-mail: </span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="email" id="mail" name="Email">
            </p>

            <p>
              <label for="pwd">
                <span>Mot de passe: </span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="password" id="pwd" name="MotDePasse">
            </p>

        </section>
        <section>
            <h2>Information de Paiement</h2>
            <p>
              <label for="card">
                <span>Type de carte:</span>
              </label>

              <select id="card" name="TypeDeCarte">
                <option value="visa">Visa</option>
                <option value="Mastercard">Mastercard</option>
                <option value="Carte bancaire">Carte bancaire</option>
              </select>
            </p>

            <p>
              <label for="number">
                <span>Numero de Carte:</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
                <input type="tel" id="number" name="NumeroDeCarte">
            </p>

            <p>
              <label for="date">
                <span>Date d'Expiration:</span>
                <strong><abbr title="required">*</abbr></strong>
                <em>Mise comme mm/dd/yyyy</em>
              </label>
              <input type="date" id="date" name="DateDExpiration">
            </p>
            </section>
        <section>
            <p> <button type="submit" id="submit" name="submit">Valider le paiement</button> </p>
        </section>
    </form>
  </div>
  </section>
</body>

</html>