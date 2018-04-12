<?php include 'admin/core/init.php';?>
<?php
$success = false;
$error = false;
$nosubNav = true;
?> 
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js">
<head>  
    <?php include 'includes/head-common.php';?>
    <title>Transport - <?=EVENT?></title>	 
    
    <link rel="stylesheet" href="intlTelInput/build/css/intlTelInput.css">
    <script src="intlTelInput/build/js/intlTelInput.js"></script>
</head>
<body class="home page page-id-2">
    <?php // include 'views/header-common1.php';?>
               
	<div id="wrapper" class="home transport"> 
        <div class="container-fluid">
          <div class="row">
              <img class="img img-responsive" style="width: 100%" src="<?=DN?>/img/plan.jpg"/>
          </div>
        </div>
        <div class="sectiongrey">
            <section>
              <div class="separator"> 
                <div class="line"></div>
                <h2>PLANIFIEZ VOTRE VOYAGE <br>/ Plan your trip</h2>
                <div class="line"></div>

              </div>
              <h4>
                  <!-- <span class="lnr lnr-chevron-right"></span>  -->
                  <!-- <span class="light"><small>Transport à Kigali / Transport while in Kigali</small></span> -->
                
              </h4>
                <div class="grid3">
                      <div class="text-">
                          <!-- <h3 class="text-left text-gray"><strong>TRANSPORTATION</strong></h3>
                          <p>Delegates can use prepaid public transportation means provided by Transform Africa Summit. More information will be available on the website closer to the event date.
                          <br>
                            If you have already registered, an email notification will be sent you with transportation options, schedules and routes.  -->
                          <!-- <hr> -->
                          <!-- <a href="#" class="btn btn-platinum">Book Transport</a> -->
                          <!-- </p> -->

                          <h3 class="text-center text-gray lnr lnr-chevron-right"><strong>SE DÉPLACER KIGALI / GETTING AROUND KIGALI</strong></h3>
                          <h3 class="text-center text-gray"><br><br><?=EVENT?> SERVICE DE NAVETTE</h3>
                          <p>Des bus de conférence désignés vous transporteront depuis et vers 
                          l'aéroport, le lieu de la conférence et les hôtels affiliés pendant 
                          le Sommet via des itinéraires dédiés.</p>
                          <p>Le transport sera également fourni pour les événements 
                          sociaux officiels tels que le dîner de gala.</p>
                          <p>Designated conference buses will transport you to and from the airport, 
                          conference venue and affiliated hotels during the Summit 
                          via dedicated routes.</p>

                          <p>Transportation will also be provided to the official social events 
                          such as the Gala dinner.</p>
                          <?php /* ?>
                          <h3 class="text-center text-gray"><?=EVENT_SHORT?>2017 TRAVEL CARD</h3>
                          <p>You can buy your <?=EVENT_SHORT?>2017 Tap n Go card at airport in 
                          the reception lounge and at the inside Kigali Convention Center which 
                          you can use to access the <?=EVENT_SHORT?> Bus shuttle route.</p>
                          <?php */ ?>
                          <div class="col-xs-12 col-sm-12">
                            <b class="text-center text-gray" style="font-size: 1.5em;">Autres options de transport personnalisées / Other personalised transport options:<br><br></b>
                          </div>
                      </div>
                </div>
                <div class="grid3">
                    <article class="col shadow">
                        <figure><img src="img/bmw-i700-2017.png" alt="bmw-i700-2017"></figure><br>
                        <h3>BMW i700 - 2017</h3>
                        <p><a href="<?=DN?>/register/transport/bmw-i700-2017"> Prix: 400$ Par jour</a><br></p>
                        <!-- <p><b>Exclusive Chauffered Vehicles Available</b><br> -->
                        <p><b>Véhicules avec chauffeurs disponibles</b><br>
                        <!-- for the exclusive use by our Client. <br> -->
                        à l'usage exclusif de notre client<br>
                        <!-- The Cost includes: FUEL &amp; DRIVER within Kigali,<br> -->
                        Le coût comprend: Carburant &amp; Chauffeur à Kigali,<br>
                        <!-- not more than 10Hours daily.<br> -->
                        pas plus de 10 heures par jour.<br>
                        <!-- <b>Extra Hours are Invoiced at 30$/Hour</b> -->
                        <b>Les heures supplémentaires sont facturées à 30 $ / heure</b>

                        </p>
                        <!-- <p><a href="<?=DN?>/register/transport/bmw-i700-2017"> Click here to book</a><br></p> -->
                        <p><a href="<?=DN?>/register/transport/bmw-i700-2017"> Cliquez ici pour réserver</a><br></p>
                    </article>
                    <article class="col shadow">
                        <figure><img src="img/toyota-land-cruiser-300-2017.png" alt="toyota-land-cruiser-300-2017"></figure><br>
                        <h3>Toyota land cruiser 300 - 2017</h3>
                        <p><a href="<?=DN?>/register/transport/bmw-i700-2017"> Prix: 400$ Par jour</a><br></p>
                        <!-- <p><b>Exclusive Chauffered Vehicles Available</b><br> -->
                        <p><b>Véhicules avec chauffeurs disponibles</b><br>
                        <!-- for the exclusive use by our Client. <br> -->
                        à l'usage exclusif de notre client<br>
                        <!-- The Cost includes: FUEL &amp; DRIVER within Kigali,<br> -->
                        Le coût comprend: Carburant &amp; Chauffeur à Kigali,<br>
                        <!-- not more than 10Hours daily.<br> -->
                        pas plus de 10 heures par jour.<br>
                        <!-- <b>Extra Hours are Invoiced at 30$/Hour</b> -->
                        <b>Les heures supplémentaires sont facturées à 30 $ / heure</b>

                        </p>
                        <p><a href="<?=DN?>/register/transport/toyota-land-cruiser-300-2017"> Cliquez ici pour réserver</a></p>
                    </article>
                    <article class="col shadow">
                        <figure><img src="img/toyota-prado-2015.png" alt="toyota-prado-2015"></figure><br>
                        <h3>Toyota prado 2015</h3>
                        <p><a href="<?=DN?>/register/transport/bmw-i700-2017"> Prix: 400$ Par jour</a><br></p>
                        <!-- <p><b>Exclusive Chauffered Vehicles Available</b><br> -->
                        <p><b>Véhicules avec chauffeurs disponibles</b><br>
                        <!-- for the exclusive use by our Client. <br> -->
                        à l'usage exclusif de notre client<br>
                        <!-- The Cost includes: FUEL &amp; DRIVER within Kigali,<br> -->
                        Le coût comprend: Carburant &amp; Chauffeur à Kigali,<br>
                        <!-- not more than 10Hours daily.<br> -->
                        pas plus de 10 heures par jour.<br>
                        <!-- <b>Extra Hours are Invoiced at 30$/Hour</b> -->
                        <b>Les heures supplémentaires sont facturées à 30 $ / heure</b>

                        </p>
                        <p><a href="<?=DN?>/register/transport/toyota-prado-2015"> Cliquez ici pour réserver</a><br></p>
                    </article>
                    <div class="clear"></div><br><br><br>
                    <article class="col shadow">
                        <figure><img src="img/mercedes-benz-m-series-2015.png" alt="mercedes-benz-m-series-2015"></figure><br>
                        <h3>Mercedes benz m-series 2015</h3>
                        <p><a href="<?=DN?>/register/transport/bmw-i700-2017"> Prix: 400$ Par jour</a><br></p>
                        <!-- <p><b>Exclusive Chauffered Vehicles Available</b><br> -->
                        <p><b>Véhicules avec chauffeurs disponibles</b><br>
                        <!-- for the exclusive use by our Client. <br> -->
                        à l'usage exclusif de notre client<br>
                        <!-- The Cost includes: FUEL &amp; DRIVER within Kigali,<br> -->
                        Le coût comprend: Carburant &amp; Chauffeur à Kigali,<br>
                        <!-- not more than 10Hours daily.<br> -->
                        pas plus de 10 heures par jour.<br>
                        <!-- <b>Extra Hours are Invoiced at 30$/Hour</b> -->
                        <b>Les heures supplémentaires sont facturées à 30 $ / heure</b>

                        </p>
                        <p><a href="<?=DN?>/register/transport/mercedes-benz-m-series-2015"> Cliquez ici pour réserver</a><br></p>
                    </article>
                    <article class="col shadow">
                        <figure><img src="img/toyota-rav-4.png" alt="toyota-rav-4"></figure><br>
                        <h3>Toyota RAV 4</h3>
                        <p><a href="<?=DN?>/register/transport/bmw-i700-2017"> Prix: 400$ Par jour</a><br></p>
                        <!-- <p><b>Exclusive Chauffered Vehicles Available</b><br> -->
                        <p><b>Véhicules avec chauffeurs disponibles</b><br>
                        <!-- for the exclusive use by our Client. <br> -->
                        à l'usage exclusif de notre client<br>
                        <!-- The Cost includes: FUEL &amp; DRIVER within Kigali,<br> -->
                        Le coût comprend: Carburant &amp; Chauffeur à Kigali,<br>
                        <!-- not more than 10Hours daily.<br> -->
                        pas plus de 10 heures par jour.<br>
                        <!-- <b>Extra Hours are Invoiced at 30$/Hour</b> -->
                        <b>Les heures supplémentaires sont facturées à 30 $ / heure</b>

                        </p>
                        <p><a href="<?=DN?>/register/transport/toyota-rav-4"> Cliquez ici pour réserver</a></p>
                    </article>
                    <article class="col shadow">
                        <figure><img src="img/toyota-hiace-12seater-van.png" alt="toyota-hiace-12seater-van"></figure><br>
                        <h3>Toyota Hiace 12seater Van</h3>
                        <p><a href="<?=DN?>/register/transport/bmw-i700-2017"> Prix: 400$ Par jour</a><br></p>
                        <!-- <p><b>Exclusive Chauffered Vehicles Available</b><br> -->
                        <p><b>Véhicules avec chauffeurs disponibles</b><br>
                        <!-- for the exclusive use by our Client. <br> -->
                        à l'usage exclusif de notre client<br>
                        <!-- The Cost includes: FUEL &amp; DRIVER within Kigali,<br> -->
                        Le coût comprend: Carburant &amp; Chauffeur à Kigali,<br>
                        <!-- not more than 10Hours daily.<br> -->
                        pas plus de 10 heures par jour.<br>
                        <!-- <b>Extra Hours are Invoiced at 30$/Hour</b> -->
                        <b>Les heures supplémentaires sont facturées à 30 $ / heure</b>

                        </p>
                        <p><a href="<?=DN?>/register/transport/toyota-hiace-12seater-van"> Cliquez ici pour réserver</a><br></p>
                    </article>
                    <!-- <article class="col shadow">
                        <figure><img src="img/Green-02.jpg" alt="free-professional-html5-cv-resume-template"></figure><br>
                        <p>Various employee groups whom have their own internal funds also contribute a percentage of their fund.<br><br><br><br>

                        </p>
                    </article> -->
                </div>
                <div class="grid3">
                      <div class="text-">
                          <div class="col-xs-12 col-sm-12">
                            <br><br><br>
                            
                          </div>

                          <p><strong>*S'il vous plaît noter que les prix mentionnés ci-dessus sont des taux quotidiens à partir du moment où vous commencez à utiliser le véhicule, 10heures par jour 30USD seront facturés par heure supplémentaire</strong></p>
                          <p><strong>*Please be advised that the prices mentioned above are daily rates from the time you start using the vehicle, an extra 30USD will be charged per Hour</strong></p>
                          
                        <hr class="hr-book-layout" />
                        <p>
                        
                      </div>


                </div>

            </section>
        </div>
        <?php include 'views/social.php';?>            
    </div><!--wrapper--> 
    <?php // include 'views/footer-common.php';?>
    
</body>
</html>