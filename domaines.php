<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>À propos |RTN</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/webfonts/all.css">
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



  #chat-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh; /* Réglage de la hauteur pour centrer verticalement également */
        }

        #chat-form {
            text-align: center;
        }


  </style>
</head>
<body>
  <!-- Barre de navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand category-card" href="#"><img src="../css/img/images.ico" alt="Logo de l'entreprise" height="40">RTN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item category-card">
            <a class="nav-link" href="../accueil.php">Accueil</a>
          </li>
          <li class="nav-item category-card">
          <a class="nav-link" href="apropos.php">À propos</a>
        </li>
        <li class="nav-item category-card">
          <a class="nav-link" href="expertise.php">Expertise</a>
        </li>
          <li class="nav-item category-card">
            <a class="nav-link" href="formations.php">Formations</a>
          </li>
          <li class="nav-item category-card">
            <a class="nav-link" href="contacts.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Section d'en-tête -->
  <header class="bg-primary text-white text-center py-5 category-card">
    <div class="container">
      <h1 class="display-4">Bienvenue chez RTN</h1>
      <p class="lead">Boostez votre carrière avec nos formations de qualité</p>
      <a href="menu/formations.php" class="btn btn-light btn-lg category-card">Découvrez nos formations</a>
    </div>
  </header>

  <!-- Section d'en-tête -->
  <header id="about" class="text-light text-center py-5 category-card" style="background-image: url('../img/6.jpg'); background-size: cover; background-position: center;">
  <!--header class="bg-secondary text-light text-center py-5 category-card"-->
    <div class="container">
      <h1 class="display-4">Nos domaines d'intervention</h1>
      <p class="lead">RTN propose ses compétences pour accompagner toutes les sociétés et administration publiques souhaitant former leur collaborateurs administratifs et/ou informatiques dans le domaine des systèmes libres, du Management et de la gestion des projets d’entreprise.</p>
      <a href="#intervention"><i class="fa fa-chevron-down fa-2x text-white"></a></i>
    </div>
  </header>

   <section id="intervention" class="py-5 bg-primary text-light text-center">
    <div class="container">
      <h2 class="text-center">RTN intervient dans la mise en œuvre des solutions d’entreprise et surtout dans la formation des ressources humaines aux technologies de l’information et de la communication.</h2>
      <div class="row mt-4">
        <div class="col-md-4">
        <div class="card mb-4 category-card">
            <div class="card-body text-center text-primary">
              <i class="fas fa-poll fa-2x mb-3"></i>
              <h5 class="card-title">Conception et mise en œuvre des Réseaux Informatiques</h5>
            </div>
        </div>
      </div>
        <div class="col-md-4">
        <div class="card mb-4 category-card">
            <div class="card-body text-center text-primary">
              <i class="fas fa-poll fa-2x mb-3"></i>
              <h5 class="card-title">Installation et Administration de serveurs Web</h5>
            </div>
        </div>
      </div>
        <div class="col-md-4">
        <div class="card mb-4 category-card">
            <div class="card-body text-center text-primary">
              <i class="fas fa-poll fa-2x mb-3"></i>
              <h5 class="card-title">Interconnexion des Réseaux Linux & Windows</h5>
            </div>
        </div>
      </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-4">
        <div class="card mb-4 category-card">
            <div class="card-body text-center text-primary">
              <i class="fas fa-poll fa-2x mb-3"></i>
              <h5 class="card-title">Administration Réseaux</h5>
            </div>
        </div>
      </div>
        <div class="col-md-4">
        <div class="card mb-4 category-card">
            <div class="card-body text-center text-primary">
              <i class="fa fa-html5 fa-2x mb-3"></i>
              <h5 class="card-title">Administration système Linux</h5>
            </div>
          </a>
        </div>
      </div>
        <div class="col-md-4">
        <div class="card mb-4 category-card">
            <div class="card-body text-center text-primary">
              <i class="fas fa-poll fa-2x mb-3"></i>
              <h5 class="card-title">Administration des Serveurs et Sécurité</h5>
            </div>
          </a>
        </div>
      </div>
        <div class="card mb-4 category-card">
            <div class="card-body text-center text-primary">
              <h5 class="card-title"><i class="fa fa-users fa-2x mb-3"></i>&nbspFormation et encadrement du personnel des entreprises aux technologies Informatiques</h5>
            </div>
      </div>
    </div>
  </section>

   <!-- Section À propos -->
  <section id="about" class="py-5 bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
        </div>
        <div class="col-lg-6">
        </div>
      </div>
    </div>
  </section>

 <!-- Boutons d'envoi de mails et d'appels -->
  <section class="py-5">
    <div class="container text-center">
      <a href="mailto:contact@entreprise.com" class="btn btn-primary">Envoyer un e-mail</a>
      <a href="tel:1234567890" class="btn btn-primary">Appeler</a>
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

  </section>

  <!-- Section Entreprises partenaires -->
  <section class="bg-light py-5">
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
  </section>


  <!-- Vidéos -->
  <section class="bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-4 category-card">Vidéos</h2>
      <div class="row">
        <div class="col-md-2">
          <div class="video-container category-card">
            

            <iframe src="https://www.youtube.com/embed/_t6zrLt18u8" frameborder="0" allowfullscreen></iframe>

          </div>
        </div>
        <div class="col-md-2">
          <div class="video-container category-card">
            <iframe src="https://www.youtube.com/embed/Q6pcdjApvnk" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-2">
          <div class="video-container category-card">
            <iframe src="https://www.youtube.com/embed/PnGJFqj2kIw" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-2">
          <div class="video-container category-card">
            <iframe src="https://www.youtube.com/embed/vHzYKQfyFAQ" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-2">
          <div class="video-container category-card">
            <iframe src="https://www.youtube.com/embed/ycsQHZKku1g" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-2">
          <div class="video-container category-card">
            <iframe src="https://www.youtube.com/embed/kiLspVor4sc" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
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
      </div>
      <div class="row mt-3">
        <div class="col-md-12">
          <p>&copy; 2023 Réseaux et Techniques Numériques. Tous droits réservés.<span id="developer-name"></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bouton Scroll To Top -->
  <div id="scrollToTop" class="show category-card">
    <i class="bi bi-arrow-up-circle-fill"></i>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
    // Afficher ou masquer le bouton Scroll To Top
    $(window).scroll(function () {
      if ($(this).scrollTop() > 200) {
        $('#scrollToTop').addClass('show');
      } else {
        $('#scrollToTop').removeClass('show');
      }
    });

    // Animation de scroll vers le haut de la page
    $('#scrollToTop').click(function () {
      $('html, body').animate({ scrollTop: 0 }, 'slow');
      return false;
    });
  </script>
</body>
</html>