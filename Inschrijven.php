<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Scouts Brakel-Lierde</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v2.5.0
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-phone"></i>Bieke Matthijs: 0472/30 74 90 , Arthur Wuytens: 0472/27 23 28 , Britt Blommaert: 0494/81 80 30
        <i class="icofont-envelope"></i><a href="mailto:groepsleiding@scoutsbrakel.be.">groepsleiding@scoutsbrakel.be</a>        

      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span>Scouts Inschrijving</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Start</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
<?php
    if(isset($_POST["verstuur"]))
    {
        $mysqli= new MySQLi ("localhost", "root", "", "scobra");
        if(mysqli_connect_errno())
        {
            trigger_error("Fout bij verbinding: ".$mysqli->error);
        }
        else
        {
            $sql = "INSERT INTO tblLeden(voornaam, naam, geboortedatum, geslacht, email, telefoonnummer, gemeente, postcode, straat, huisnummer, voornaamOuder1, naamOuder1, voornaamOuder2, naamOuder2, emailOuder, telefoonnummerOuder, rekeningnummer, scoutingOpMaat)
                    VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                
                if($stmt = $mysqli->prepare($sql))
                {
                    $stmt->bind_param("ssssssssssssssssssi",$Voornaam, $Naam, $Geboortedatum, $Geslacht, $Mail, $Telefoonnummer, $Gemeente, $Postcode, $Straat, $Huisnummer, $VoornaamOuder1, $NaamOuder1, $VoornaamOuder2, $NaamOuder2, $EmailOuder, $TelefoonnummerOuder, $Rekeningnummer, $ScoutingOpMaat);
                    
                    $Voornaam = $mysqli->real_escape_string($_POST["voornaam"]);
                    $Naam = $mysqli->real_escape_string($_POST["naam"]);
                    $Geboortedatum = $mysqli->real_escape_string($_POST["geboortedatum"]);
                    $Geslacht = $mysqli->real_escape_string($_POST["geslacht"]);
                    $Mail = $mysqli->real_escape_string($_POST["mail"]);
                    $Telefoonnummer = $mysqli->real_escape_string($_POST["telnr"]);
                    $Gemeente = $mysqli->real_escape_string($_POST["gemeente"]);
                    $Postcode = $mysqli->real_escape_string($_POST["postcode"]);
                    $Straat = $mysqli->real_escape_string($_POST["straat"]);
                    $Huisnummer = $mysqli->real_escape_string($_POST["huisnr"]);
                    $VoornaamOuder1 = $mysqli->real_escape_string($_POST["voornaamO1"]);
                    $NaamOuder1 = $mysqli->real_escape_string($_POST["naamO1"]);
                    $VoornaamOuder2 = $mysqli->real_escape_string($_POST["voornaamO2"]);
                    $NaamOuder2 = $mysqli->real_escape_string($_POST["naamO2"]);
                    $EmailOuder = $mysqli->real_escape_string($_POST["mailO"]);
                    $TelefoonnummerOuder = $mysqli->real_escape_string($_POST["telnrO"]);
                    $Rekeningnummer = $mysqli->real_escape_string($_POST["reknr"]);
                    $ScoutingOpMaat = $mysqli->real_escape_string($_POST["SoM"]);
                    
                    
                    
                                    
                    if(!$stmt->execute())
                    {
                        echo "Het uitvoeren van de query is mislukt:";
                    }
                    else
                    {
                        echo "Het updaten is gelukt";                       
                    }
                    $stmt->close();
                }
                else
                {
                    echo "Er zit een fout in de query";
                }
        }
    }        
?>

<html>
<head>
    <title>Inschrijven</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
    <h1>Inschrijvingsformulier</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        
        <h4>Voornaam:<input type="text" name="voornaam" id="voornaam" value="<?php if(isset($_POST["voornaam"])){echo $Voornaam;} ?>"/>
            Naam:<input type="text" name="naam" id="naam"></h4>
        
        <h4>Geboortedatum:<input type="date" name="geboortedatum" id="geboortedatum"></h4>
        
        <h4>Geslacht:</h4>
        <p>Man:<input type="radio" name="geslacht" id="geslacht" value="man"><p>Vrouw:<input type="radio" name="geslacht" id="geslacht" value="vrouw"></p>
        
        <h4>Email:<input type="email" name="mail" id="mail">Telefoonnummer<input type="text" name="telnr" id="telnr"></h4>
        
        <h4>Adresgegevens:</h4>
        
        <p>Gemeente:<input type="text" name="gemeente" id="gemeente">Postcode:<input type="text" name="postcode" id="postcode"></p>
        
        <p>Straat:<input type="text" name="straat" id="straat">Huisnummer:<input type="text" name="huisnr" id="huisnr"></p>
        
        <h4>Voornaam ouder1:<input type="text" name="voornaamO1" id="voornaamO1">Naam ouder1:<input type="text" name="naamO1" id="naamO1"></h4>
        
        <h4>Voornaam ouder2:<input type="text" name="voornaamO2" id="voornaamO2">Naam ouder2:<input type="text" name="naamO2" id="naamO2"></h4>
        
        <h4>Email ouder:<input type="email" name="mailO" id="mailO">Telefoonnummer ouder:<input type="text" name="telnrO" id="telnrO"></h4>
        
        <h4>Rekeningnummer:<input type="text" id="reknr" name="reknr"></h4>
        
        <h4>Wenst u financiële ondersteuning(Scouting Op Maat?)</h4>
        
        <h4>Ja:<input type="radio" name="SoM" id="SoM">Nee:<input type="radio" name="SoM" id="SoM"></h4>
        
        
        <input type="submit" value="verstuur" name="verstuur">
    </form>
        
        <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Start
            </a>
          </li>          
        </ul>
      </div>
    </div>
  </nav>
        <!-- Page Content -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>