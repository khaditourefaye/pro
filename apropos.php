<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>À propos |RTN</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  <style>
    body{
      background-color: grey;
    }
    /* Styles personnalisés */

    /* Barre de navigation */
    .navbar {
      background-color: #343a40;
    }

    .navbar-brand {
      font-weight: bold;
      color: #fff;
    }

    .navbar-nav .nav-link {
      color: #fff;
    }

    /* Section À propos */
    section:nth-child(2) {
      padding-top: 80px;
      padding-bottom: 80px;
    }

    .partner-card {
      height: 100%;
    }







    /* Carrousel d'images */
    #imageCarousel {
      width: 100%;
    }

    /* Vidéos */
    .video-container {
      position: relative;
      width: 100%;
      padding-bottom: 56.25%;
      height: 0;
      overflow: hidden;
    }

    .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }

    




    .category-card {
      transition: transform 0.3s ease-in-out;
    }

    .category-card:hover {
      transform: scale(1.1);
    }

    /* Pied de page */
    footer {
      background-color: #343a40;
      color: #fff;
    }

    footer p {
      margin: 0;
    }
    /* Bouton Scroll To Top */
    #scrollToTop {
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background-color: blue;
      color: #fff;
      text-align: center;
      line-height: 50px;
      cursor: pointer;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s, visibility 0.3s;
    }

    #scrollToTop.show {
      opacity: 1;
      visibility: visible;
    }



                    .section-coloree {
            background-color: #ffffff; /* Couleur de fond personnalisée */
            padding: 20px; /* Espacement intérieur du conteneur */
        }
        .section-coloree1 {
            background-color: #ffffff; /* Couleur de fond personnalisée */
            padding: 20px; /* Espacement intérieur du conteneur */
        }
        .section-coloree2 {
            background-color: #ffffff; /* Couleur de fond personnalisée */
            padding: 20px; /* Espacement intérieur du conteneur */
        }
        
        .ligne-horizontale {
            border-top: 3px solid #1b019b; /* Couleur personnalisée */
            margin: 20px auto; /* Centrer la ligne horizontale et ajouter de l'espace vertical */
            width: 50%; /* Largeur personnalisée */
        }
        .section-coloree3 {
            background-color: #ffffff; /* Couleur de fond personnalisée */
            padding: 20px; /* Espacement intérieur du conteneur */
        }



.section-bordure {
    border: 2px solid #000;
    padding: 10px; /* Optionnel : ajoute un espace entre le contenu et la bordure */
}














  </style>
</head>
<body>
  <!-- Barre de navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand category-card" href="#"><img src="../img/logo-rtn" alt="Logo de l'entreprise" height="40">RTN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item category-card">
          <a class="nav-link" href="#">Accueil</a>
        </li>
         <li class="nav-item category-card">
          <a class="nav-link" href="../menu/apropos.php">À propos</a>
        </li>
        <li class="nav-item category-card">
          <a class="nav-link" href="../menu/expertise.php">Expertise</a>
        </li> 
        <li class="nav-item category-card">
          <a class="nav-link" href="../menu/domaines.php">Domaines d'intervention</a>
        </li>
        <li class="nav-item category-card">
          <a class="nav-link" href="../menu/formations.php">Formations</a>
        </li>
        <li class="nav-item category-card">
          <a class="nav-link" href="../menu/contacts.php">Contact</a>
        </li>
      </ul>
      </div>
    </div>
  </nav>

<!-- Carrousel d'images -->
  <section class="py-5 bg-light ;">
    
    <div class="container">
      <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              
          </div>
          <div class="carousel-item">
            <img src="../img/d.jpg" class="d-block w-100" alt="Image 2">
          </div>
          <div class="carousel-item">
            <img src="../img/d.jpg" class="d-block w-100" alt="Image 3">
          </div>
        </div>


  <section id="about" class="py-5 bg-light" style="background-image: url('../img/6.jpg'); background-size: cover; background-position: center;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <!-- Contenu texte -->
        <h2 class="display-5 text-center" style="color: #ffffff;">QUI SOMMES-NOUS</h2>
        <h2 class="category-card" style="color: #ffffff;">Réseaux et Techniques Numériques</h2>
        <p class="text-center category-card" style="color: #ffffff">
            <p style="color: #ffffff;">R.T.N est une société (SARL) dirigée par une équipe de professionnels qualifiés, d’ingénieurs, de diplômés de troisième cycle en réseau et de certifiés en administration réseaux et Linux.</p>

            <p style="color: #ffffff;">RTN est une société spécialisée en Logiciels Libres et centrée sur les services informatiques, techniques numériques et télécommunications.</p>

          <p style="color: #ffffffff;">Elle dispense des formations rigoureuses basées sur des supports de cours, fruits de recherches approfondies. Ces supports testés et avérés permettent aux apprenants d’être aussitôt opérationnels.
        </p>
      </div>
      <div class="col-lg-6">
         <p>

                  <h3 style="color: #ffffff;">Le groupe RTN/EC2LT est formé de deux labels :<h3>
                    <p style="color: #ffffff;">Réseaux et Techniques Numériques<p>
                      <p style="color: #ffffff;">Ecole Centrale des Logiciels Libres et de Télécommunications</p>
                      </p>
        <!-- Image -->
        <img src="../img/11.jpg" alt="Image À propos" class="img-fluid">
      </div>
      </div>
      </div>
    </div>
</section>

  <section>
  <div class="container text-center section-coloree">
    <div class="text-center mb-4">
        <h3>Le groupe RTN/EC2LT est formé de deux labels :</h3>
    </div>
    
    <p class="section-coloree1">
       
          RTN propose ses compétences pour accompagner toutes les sociétés et administration publiques souhaitant former leur collaborateurs administratifs et/ou informatiques dans le domaine des systèmes libres (bureautique, systèmes d’exploitation, réseaux Internet et Intranet, développement etc.) du Management et de la gestion des projets d’entreprise.
    </p>
    
    <!-- Ligne horizontale -->
     <hr class="ligne-horizontale">
     <div class="owl-carousel" id="text-slider">
      <div class="item">
    <div>
      <script>
        $(document).ready(function(){
       $("#text-slider").owlCarousel({
       items: 1, // Nombre d'éléments à afficher
       loop: true, // Boucle de défilement
       autoplay: true, // Lecture automatique
       autoplayTimeout: 1000, // Délai entre les slides (en millisecondes)
      autoplayHoverPause: true // Pause de la lecture automatique lorsque survolé
      });
      });
</script>
<script>
    $(document).ready(function(){
    $("#text-slider").owlCarousel({
    items: 1, // Nombre d'éléments à afficher
    loop: true, // Boucle de défilement
    autoplay: true, // Lecture automatique
    autoplayTimeout: 1000, // Délai entre les slides (en millisecondes)
    autoplayHoverPause: true // Pause de la lecture automatique lorsque survolé
    });
    });
</script>


    <p class="section-coloree2">
        RTN intervient dans la mise en oeuvre des solutions d'entreprise et surtout dans la formation des ressources humaines et technologies de l'information et de la communication
    </p>
    </div>

           <script>
                $(document).ready(function(){
                $("#text-slider").owlCarousel({
                  items: 2, // Nombre d'éléments à afficher
                  loop: true, // Boucle de défilement
                  autoplay: true, // Lecture automatique
                  autoplayTimeout: 500, // Délai entre les slides (en millisecondes)
                  autoplayHoverPause: true // Pause de la lecture automatique lorsque survolé
                });
                });
          </script>
          <script>
          $(document).ready(function(){
          $("#text-slider1").owlCarousel({
                items: 2, // Nombre d'éléments à afficher
                loop: true, // Boucle de défilement
                autoplayautoplay: true, // Lecture automatique
                autoplayTimeout: 500, // Délai entre les slides (en millisecondes)
                autoplayHoverPause: true // Pause de la lecture automatique lorsque survolé
                });
                });
          </script>
          <div>
      <p class="section-coloree3">
      RTN a su diversifier ses domaines de compétences afin de proposer aux entreprises et administrations des offres de servives dans plusieurs secteurs informatiques.
    </p>
  </div>
</div>
</section>



 
                                  
   

                             <section id="about" class="py-5" style="background-color: #555b61;padding: 20px;">

                                       <div class="container">
                                      <!-- Ligne 1 : Image + Texte -->
                                      <div class="row">
                                        <div class="col-md-6">
                                          <img src="../img/image2.jpg" class="img-fluid" alt="Image 1">
                                        </div>
                                        <div class="col-md-6">
                                          <h2 style="color: #ffffff;">Notre principal objectif</h2>

                                          <h6 style="color: #ffffff;">Conseiller et former le personnel des entreprises qui veulent disposer des logiciels libres et adaptés à leurs besoins minimisant ainsi les coûts d’investissements en réseaux informatiques tout en leur apportant une sécurité avancée.</h6>
                                        </div>
                                      </div>
                                      
                                      <!-- Ligne 2 : Texte + Image -->
                                      <div class="row">
                                        <div class="col-md-6">
                                          <h2 style="color: #ffffff;">Notre mission</h2>
                                          <h6 style="color: #ffffff;">Notre mission vise à accroître la compétitivité de nos clients par la valorisation des composantes informatiques, logicielles et réseaux constituants leur système d’information. Il s’agit de générer des gains importants de productivité via la valorisation des outils logiciels métiers préexistants et ceci, sans rupture des cycles d’exploitation de service de l’entreprise et sans remise en cause organisationnelle.</h6>
                                        </div>
                                        <div class="col-md-6">
                                          <img src="../img/image1.jpg" class="img-fluid" alt="Image 2">
                                        </div>
                                      </div> 
                                      </div>















        <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Suivant</span>
        </button>
      </div>
    </div>
  </section>

  


   

  

  <!-- Section Entreprises partenaires -->
  <section class="bg-light py-5 margin-top: 0;">
    <div class="container">
      <h2 class="text-center mb-4">Ils nous font confiances</h2>
      <div class="row">
        <div class="col-md-3">
          <div class="card partner-card category-card">
            <img src="../img/LPI.jpg" class="card-img-top" alt="Entreprise partenaire 1">
            
          </div>
        </div>
        <div class="col-md-3">
          <div class="card partner-card category-card">
            <img src="../img/HAYO.jpg" class="card-img-top" alt="Entreprise partenaire 2">
            
          </div>
        </div>
        <div class="col-md-3">
          <div class="card partner-card category-card">
            <img src="../img/CCNA.jpg" class="card-img-top" alt="Entreprise partenaire 3">
            
          </div>
        </div>
         <div class="col-md-3">
          <div class="card partner-card category-card">
            <img src="../img/people-input.jpg" class="card-img-top" alt="Entreprise partenaire 3">
            
          </div>
        </div>
      </div>
    </div>
     >
  </section>
 
   <!-- Pied de page -->
  <footer class="bg-dark text-white text-center py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5>Nos domaines d'innovation</h5>
          <p>Conception et mise en œuvre des Réseaux Informatiques</p>
          <p>Administration système Linux</p>
          <p>Administration Réseaux</p>
          <p>Administration des Serveurs et Sécurité</p>
          <p>Installation et Administration de serveurs Web</p>
          <p>Interconnexion des Réseaux Linux & Windows</p>
          <p>Formation et encadrement du personnel des entreprises aux technologies Informatiques</p>
        </div>
        <div class="col-md-3">
          <h5>Nos expertises</h5>
          <p>Une expertise unique en développement d’application : Web, téléphonie, SVI …</p>
          <p>Une expertise unique en formation et certification …</p>
          <p>Une expertise en  logiciels libres …</p>
          <p>Une expertise en ingénierie des réseaux …</p>
        </div>
        <div class="col-md-3">
          <h5>Actualités</h5>
          <p>Wind River annonce Wind River Studio Linux Services, pour répondre aux défis de la sécurité, des défauts, de la conformité</p>
          <p>Une fuite de documents montre que le gang de pirates informatiques, Conti, aide Poutine dans l’ombre</p>
          <p>Un grand pari pour éliminer le besoin de mots de passe dans le monde, La FIDO Alliance affirme avoir trouvé la pièce manquante sur la voie d’un avenir sans mot de passe</p>
        </div>
        <div class="col-md-3">
          <h5>Contact</h5>
          <p><i class="fa fa-map-marker"></i>&nbspLiberté 2, derrière immeuble BICIS, Jet d’eau – Dakar – Sénégal</p>
          <p> <i class="fa fa-phone"></i>&nbsp(+221) 33 824 10 60</p>
          <p> <i class="fa fa-mobile"></i>&nbsp(+221) 77 466 71 63</p>
          <p> <i class="fa fa-envelope-open"></i>&nbsprtn@rtn.sn</p>
        </div>


                <div id="chat-container">
               <form id="chat-form">
               <input type="text" id="user-input" placeholder="Posez une question...">
               <button type="submit" class="btn btn-primary">Envoyer</button>
               </form>
              </div>
                    <script src="https://cdn.jsdelivr.net/npm/rasa-webchat@1.0.0/lib/index.min.js"></script>
                      <script>
                         WebChat.default.init({
                         selector: "#webchat",
                         initPayload: "/get_started",
                        customData: {"language": "fr"},
                        socketUrl: "http://localhost:5005"
                          });
                    </script>

      </div>
      <div class="row mt-3">
        <div class="col-md-12">
          <p>&copy; 2023 Réseaux et Techniques Numériques. Tous droits réservés. | Développé par <span id="developer-name">Ibou DIEYE</span> | Sénégalais </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


</body>
</html>