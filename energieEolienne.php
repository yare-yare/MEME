<!DOCTYPE html>
<html lang="en">
<head>
<!--
Gestion des autorisation
http://www.templatemo.com/tm-486-new-event
-->
<title>Ministere des mines, de l'energie et de l'environnement</title>
<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">
	<!-- Main Style Css -->
    
<!-- Main css -->
<link rel="stylesheet" href="css/ele.css">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
<script language="javascript" type="text/javascript">
    function dynamicdropdown(listindex)
    {
        switch (listindex)
        {
        case "Rabat-Salé-Kénitra" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Rabat");
            document.getElementById("province").options[2]=new Option("Salé");
			document.getElementById("province").options[3]=new Option("Skhirate, Témara");
			document.getElementById("province").options[4]=new Option("Kénitra");
			document.getElementById("province").options[5]=new Option("Khémisset");
			document.getElementById("province").options[6]=new Option("Sidi Kacem");
			document.getElementById("province").options[7]=new Option("Sidi Slimane");
            break;
        case "Casablanca-Settat" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Casablanca");
            document.getElementById("province").options[2]=new Option("Mohammédia");
            document.getElementById("province").options[3]=new Option("El Jadida");
			document.getElementById("province").options[4]=new Option("Nouaceur");
			document.getElementById("province").options[5]=new Option("Médiouna");
			document.getElementById("province").options[6]=new Option("Benslimane");
			document.getElementById("province").options[7]=new Option("Berrechid");
			document.getElementById("province").options[8]=new Option("Settat");
			document.getElementById("province").options[9]=new Option("Sidi Bennour");
            break;
		case "Fès - Meknès" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Fès");
            document.getElementById("province").options[2]=new Option("Meknès");
            document.getElementById("province").options[3]=new Option("El Hajeb");
			document.getElementById("province").options[4]=new Option("Ifrane");
			document.getElementById("province").options[5]=new Option("Moulay Yaâcoub");
			document.getElementById("province").options[6]=new Option("Séfrou");
			document.getElementById("province").options[7]=new Option("Boulemane");
			document.getElementById("province").options[8]=new Option("Taounate");
			document.getElementById("province").options[9]=new Option("Taza");
            break;
		case "Marrakech-Safi" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Marrakech");
            document.getElementById("province").options[2]=new Option("Chichaoua");
            document.getElementById("province").options[3]=new Option("Al Haouz");
			document.getElementById("province").options[4]=new Option("El Kelaâ des Sraghna");
			document.getElementById("province").options[5]=new Option("Essaouira");
			document.getElementById("province").options[6]=new Option("Rehamna");
			document.getElementById("province").options[7]=new Option("Safi");
			document.getElementById("province").options[8]=new Option("Youssoufia");
            break;
		case "Tanger – Tétouan – Al Hoceima" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Tanger, Assilah");
            document.getElementById("province").options[2]=new Option("M’diq, Fnideq");
            document.getElementById("province").options[3]=new Option("Tétouan");
			document.getElementById("province").options[4]=new Option("Fahs, Anjra");
			document.getElementById("province").options[5]=new Option("Larache");
			document.getElementById("province").options[6]=new Option("Al Hoceïma");
			document.getElementById("province").options[7]=new Option("Chefchaouen");
			document.getElementById("province").options[8]=new Option("Ouezzane");
            break;
		case "Oriental" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Oujda, Angad");
            document.getElementById("province").options[2]=new Option("Nador");
            document.getElementById("province").options[3]=new Option("Driouch");
			document.getElementById("province").options[4]=new Option("Jerada");
			document.getElementById("province").options[5]=new Option("Berkane");
			document.getElementById("province").options[6]=new Option("Taourirt");
			document.getElementById("province").options[7]=new Option("Guercif");
			document.getElementById("province").options[8]=new Option("Figuig");
            break;
		case "Béni Mellal-Khénifra" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Béni, Mellal");
            document.getElementById("province").options[2]=new Option("Azilal");
            document.getElementById("province").options[3]=new Option("Fquih Ben Salah");
			document.getElementById("province").options[4]=new Option("Khénifra");
			document.getElementById("province").options[5]=new Option("Khouribga");
            break;
		case "Drâa-Tafilalet" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Errachidia");
            document.getElementById("province").options[2]=new Option("Ouarzazate");
            document.getElementById("province").options[3]=new Option("Midelt");
			document.getElementById("province").options[4]=new Option("Tinghir");
			document.getElementById("province").options[5]=new Option("Zagora");
            break;
		case "Souss-Massa" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Agadir Ida, Outanane");
            document.getElementById("province").options[2]=new Option("Inezgane, Aït Melloul");
            document.getElementById("province").options[3]=new Option("Chtouka, Aït Baha");
			document.getElementById("province").options[4]=new Option("Taroudant");
			document.getElementById("province").options[5]=new Option("Tiznit");
			document.getElementById("province").options[6]=new Option("Tata");
            break;
		case "Guelmim-Oued Noun" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Guelmim");
            document.getElementById("province").options[2]=new Option("Assa-Zag");
            document.getElementById("province").options[3]=new Option("Tan Tan");
			document.getElementById("province").options[4]=new Option("Sidi Ifni");
            break;
		case "Laâyoune-Sakia El Hamra" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Laâyoune");
            document.getElementById("province").options[2]=new Option("Boujdour");
            document.getElementById("province").options[3]=new Option("Tarfaya");
			document.getElementById("province").options[4]=new Option("Es-Semara");
            break;
		case "Dakhla-Oued Ed Dahab" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Oued Ed Dahab");
            document.getElementById("province").options[2]=new Option("Aousserd");
            break;
        }
        return true;
    }
    </script>
</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse" class="form-v10">

<!-- =========================
     PRE LOADER       
============================== -->
<div class="preloader">

	<div class="sk-rotating-plane"></div>

</div>


<!-- =========================
     NAVIGATION LINKS     
============================== -->

<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">

		<!-- navbar header -->
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<img src="images/roy.png"> 
		</div>

		<div class="collapse navbar-collapse">

			<ul class="nav navbar-nav navbar-right">
				<li><a href="home.php" class="smoothScroll">Home</a></li>
				<li><a href="#ajouter" class="smoothScroll">Ajouter Un Projet</a></li>
				<li><a href="#overview" class="smoothScroll">Rechercher</a></li>
				<li><a href="#speakers" class="smoothScroll">Alertes</a></li>
			</ul>

		</div>

	</div>
</div>


<!-- =========================
    INTRO SECTION   
============================== -->
<section id="intro" class="parallax-section">
	<div class="container">
		<div class="row">

		<div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="0.6s" >
			<h2 style="color: black;" >Direction des Energies Renouvelables et de l'energie eolienne</h2>
			<h4 style="color: white;" >Dossiers de demande d'autorisation provisoire pour le développement des projets EnR dans le cadre de la loi 13-09</h4>
		</div>

		</div>
	</div>
</section>


<!-- =========================
   REGISTER SECTION   
============================== -->

		

<!-- =========================
    PROGRAM SECTION   
============================== -->

<div id=ajouter>
<div class="big-container">
        <div class="container">
            <div class="form-container">
                <h2 class="form-title">Informations Générales</h2>
                <form class="first-form">
                    
					<input name="Numero" type="text" class="form-input-numero" id="Numero" placeholder="Numéro">
                    <input name="Developpeur" type="text" class="form-input-dev" id="Developpeur" placeholder="Développeur">
                    <input name="Nom du projet" type="text" class="form-input-nom" id="Nom du projet" placeholder="Nom du projet">
                    <input name="Puissance" type="text" class="form-input-pui" id="Puissance" placeholder="Puissance (MW)">
					<select name="Region" id="Region"  class="form-select-reg" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" required>
                            <option value="">Région</option>
                            <option value="Tanger – Tétouan – Al Hoceima">Tanger – Tétouan – Al Hoceima</option>
                            <option value="Oriental">Oriental</option>
                            <option value="Fès - Meknès">Fès - Meknès</option>
                            <option value="Rabat-Salé-Kénitra">Rabat-Salé-Kénitra</option>
                            <option value="Béni Mellal-Khénifra">Béni Mellal-Khénifra</option>
                            <option value="Casablanca-Settat">Casablanca-Settat</option>
                            <option value="Marrakech-Safi">Marrakech-Safi</option>
                            <option value="Drâa-Tafilalet">Drâa-Tafilalet</option>
                            <option value="Souss-Massa">Souss-Massa</option>
                            <option value="Guelmim-Oued Noun">Guelmim-Oued Noun</option>
                            <option value="Laâyoune-Sakia El Hamra">Laâyoune-Sakia El Hamra</option>
                            <option value="Dakhla-Oued Ed Dahab">Dakhla-Oued Ed Dahab</option>
                        </select>
						  <script type="text/javascript" language="JavaScript">
                                document.write('<select name="province" id="province"><option value="">Selectionner province</option></select>')
                          </script>
					    <noscript>
						<select name="Province" id="Province"  class="form-select-reg" required>
                            <option value="">Selectionner province</option>
                            <option value="Oued Ed Dahab">Oued Ed Dahab</option>
                            <option value="Aousserd">Aousserd</option>
                        </select>
						</noscript>
						<input name="Localite" type="text" class="form-input-loc" id="Localite" placeholder="Localité">
					<input name="Depot au MEME" type="text" class="form-input-nom" id="Depot au MEME" placeholder="Dépôt au MEME">
					<input name="Envoi du dossier à l'ONEE" type="text" class="form-input-env" id="Envoi du dossier à l'ONEE" placeholder="Envoi du dossier à l'ONEE">
					<input name="Etat D'avancement" type="text" class="form-input-env" id="Etat D'avancement" placeholder="Etat D'avancement">
					<button type="submit" class="btn">Ajouter Le Projet</button>
				</form>
            </div>
        </div>
    </div>

</div>










<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- =========================
     SCRIPTS   
============================== -->
<script src="js_/jquery.js"></script>
<script src="js_/bootstrap.min.js"></script>
<script src="js_/jquery.parallax.js"></script>
<script src="js_/owl.carousel.min.js"></script>
<script src="js_/smoothscroll.js"></script>
<script src="js_/wow.min.js"></script>
<script src="js_/custom.js"></script>
<script>
	if ( window.history.replaceState ) {
	  window.history.replaceState( null, null, window.location.href );
	}
	</script>
</body>
</html>