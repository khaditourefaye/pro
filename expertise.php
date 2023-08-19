<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EXPERTISE |RTN</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
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
  <section class="py-5">
    <div class="container">
      <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../css/img/image.jpg" class="d-block w-50" alt="Image 1">
          </div>
          <div class="carousel-item">
            <img src="image5.jpg" class="d-block w-100" alt="Image 2">
          </div>
          <div class="carousel-item">
            <img src="image6.jpg" class="d-block w-100" alt="Image 3">
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

  <!-- Section d'en-tête -->
  <header class="bg-primary text-white text-center py-5 category-card">
    <div class="container">
      <h1 class="display-4">Bienvenue chez RTN</h1>
      <p class="lead">Boostez votre carrière avec nos formations de qualité</p>
      <a href="menu/formations.php" class="btn btn-light btn-lg category-card">Découvrez nos formations</a>
    </div>
  </header>

  <!-- Section d'en-tête -->
  <section class="bg-light text-white text-center py-5 category-card">
    <div class="container">
      <h1 class="display-4 text-primary">Nos expertises</h1>
      <p class="lead text-primary">RTN a su diversifier ses domaines de compétences afin de proposer aux entreprises et administrations des offres de services dans plusieurs secteurs informatiques.</p>
    </div>
  </section>


   <!-- Section À propos -->
  <section id="about" class="py-5 bg-primary">
    <div class="container">
      <div class="row">
        <h2 class="display-5 text-center text-white">Une expertise unique en développement d’application : Web, téléphonie, SVI …</h2>
        <div class="col-lg-6">
          <p class="text-center text-light category-card">Programmation Python ;</p>
          <p class="text-center text-light category-card">Programmation graphique Python ;</p>
          <p class="text-center text-light category-card">Développement des API REST ;</p>
          <p class="text-center text-light category-card">Téléphonie sur IP avec CISCO ;</p>
          <p class="text-center text-light category-card">Intégration Téléphonie sur IP Libre/CISCO ;</p>
          <p class="text-center text-light category-card">Programmation React native ;</p>
          <p class="text-center text-light category-card">React native ;</p>
          <p class="text-center text-light category-card">Intégration de solution de centre d’appel ;</p>
          <p class="text-center text-light category-card">Conception et déploiement de réseau IMS ;</p>
          <p class="text-center text-light category-card">Intégration de système de téléphonie privée dans le réseau d’un opérateur (Réseau IMS) ;</p>
          <p class="text-center text-light category-card">Solution de VPN pour les entreprises ;</p>
         
        </div>
        <div class="col-lg-6">
          <p class="text-center text-light category-card">Base de données niveau 1</p>
          <p class="text-center text-light category-card">Base de données avancée</p>
          <p class="text-center text-light category-card">Administration et sécurité de base de données</p>
          <p class="text-center text-light category-card">Programmation HTML 5 et programmation en CSS</p>
          <p class="text-center text-light category-card">Développement et programmation Web en Java : Spring, Java EE,</p>
          <p class="text-center text-light category-card">Servlets, JSTL, Taglib, JSF, Struts, Wicket, GWT, Tomcat…</p>
          <p class="text-center text-light category-card">Programmation JavaScript</p>
          <p class="text-center text-light category-card">Développement et programmation en PHP</p>
          <p class="text-center text-light category-card">Programmation en XML</p>
          <p class="text-center text-light category-card">Développement Web</p>
        </div>
      </div>
    </div>
  </section>

   <!-- Section À propos -->
  <section id="about" class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <h2 class="text-center mb-2">Une expertise unique en formation et certification</h2>
        <div class="col-lg-6">
           <p class="text-center category-card">Module 1 : Administration système Linux ;</p>
           <p class="text-center category-card">Module 2 : Services réseau de base en environnement Linux ;</p>
           <p class="text-center category-card">Module 3 : Services réseau de base en environnement Windows ;</p>
           <p class="text-center category-card">Module 4 : Administration des réseaux locaux et équipements actifs ;</p>
           <p class="text-center category-card">Module 5 : Protocoles sécurisés ;</p>
           <p class="text-center category-card">Module 6 : Services d’annuaire et d’authentification ;</p>
           <p class="text-center category-card">Module 7 : Applications client/serveur ;</p>
           <p class="text-center category-card">Module 8 : Administration des équipements réseaux ;</p>
           <p class="text-center category-card">Module 9 : Services réseaux avancés ;</p>
           <p class="text-center category-card">Module 10 : Administration de services réseaux Windows ;</p>
           <p class="text-center category-card">Module 11 : Programmation Python ;</p>
           <p class="text-center category-card">Module 12 : Programmation graphique Python ;</p>
           <p class="text-center category-card">Module 13 : Téléphonie sur IP avec CISCO ;</p>
           <p class="text-center category-card">Module 14 : Téléphonie sur IP Asterisk ;</p>
           <p class="text-center category-card">Module 15 : Téléphonie sur IP libre avec CISCO ;</p>
           <p class="text-center category-card">Module 16 : Développement des API REST ;</p>
           <p class="text-center category-card">Module 17 : Système de conteneurisation avec Docker ;</p>
           <p class="text-center category-card">Module 18 : Certification linux (LPI 1 – LPI 2 – LPI 3)</p>
        </div>
        <div class="col-lg-6">
          <img src="../css/img/libres.jpg" alt="expertise" class="img-fluid rounded-circle category-card" style="height: 100%">
        </div>
      </div>
    </div>
  </section>

    <!-- Section À propos -->
  <section id="about" class="py-5 bg-primary">
    <div class="container">
      <div class="row">
        <h2 class="text-center mb-2 text-light">Une expertise en logiciels libres</h2>
        <div class="col-lg-6">
           <h5 class="text-center category-card text-light">Le groupe RTN, 1er expert des logiciels libres et open source au Sénégal, analyse et propose d’innovants projets informatiques Libres (Open Source).</h5>
           <p class="text-center category-card text-light">Architecture système ;</p>
           <p class="text-center category-card text-light">Administration système/Réseau ;</p>
           <p class="text-center category-card text-light">Formation & Certification linux (LPI 1 – LPI 2 – LPI 3) ;</p>
           <p class="text-center category-card text-light">Maintenance des infrastructures.</p>
           <h5 class="text-center category-card text-light">Nous développons une stratégie digitale adaptée aux besoins des entreprises de toute sorte pour un système d’information durable.</h5>
           <p class="text-center category-card text-light">Serveur intranet sous Système GNU/Linux Debian (Service LDAP – Service Samba – Serveurs NAS) ;</p>
           <p class="text-center category-card text-light">Serveur dédiés sous Système GNU/Linux Debian (Service web sous Apache2 – Service SMTP postfix – Messagerie dovecot) ;</p>
           <p class="text-center category-card text-light">Services réseaux : Mutualiser et superviser les accès (Service VPN inter-sites – Outils d’analyse et de reporting – Partage wifi sécurisé).</p>
        </div>
        <div class="col-lg-6">
            <img src="../css/img/logiciel.png" alt="expertise" class="img-fluid category-card" style="height: 100%">
        </div>
      </div>
    </div>
  </section>

     <!-- Section À propos -->
  <section id="about" class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <h2 class="text-center mb-2">Une expertise unique en DevOps</h2>
        <div class="col-lg-6">
           <p class="text-center category-card">Virtualisation & cloud computing</p>
           <p class="text-center category-card">Data Science & intelligence artificielle</p>
        </div>
        <div class="col-lg-6">
            <img src="../css/img/devops.jpg" alt="expertise" class="img-fluid rounded-circle category-card" style="width: 80%;">
        </div>
      </div>
    </div>
  </section> 

   <!-- Section À propos -->
  <section id="about" class="py-5 bg-secondary">
    <div class="container">
      <div class="row">
        <h2 class="text-center mb-2 text-white">Une expertise en ingénierie des réseaux</h2>
        <div class="col-lg-6">
           <p class="text-center category-card text-white">Réseaux : TCP/IP, Sockets, Proxy…;</p>
           <p class="text-center category-card text-white">Annuaires LDAP concepts et déploiement ;</p>
           <p class="text-center category-card text-white">Etude et utilisation des technologies des Peer to Peer (P2P) ;</p>
           <p class="text-center category-card text-white">Le Protocole IRC ;</p>
           <p class="text-center category-card text-white">Le Protocole HTTP ;</p>
           <p class="text-center category-card text-white">Les Protocoles TCP/IP ;</p>
           <p class="text-center category-card text-white">Développement réseau avec les sockets en C ;</p>
           <p class="text-center category-card text-white">Utilisation des APIs réseau de la bibliothèque Java standard ;</p>
           <p class="text-center category-card text-white">Programmation réseau en Java avec les sockets ;</p>
           <p class="text-center category-card text-white">Initiation à la programmation réseau.</p>
        </div>
        <div class="col-lg-6">
            <img src="../css/img/reseau.jpg" alt="expertise" class="img-fluid rounded-circle category-card"><br><br>
            <img src="../css/img/reseaux.jpg" alt="expertise" class="img-fluid rounded-circle category-card">
        </div>
      </div>
    </div>
  </section>

  <!-- Section Entreprises partenaires -->
  <section class="bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-4">Ils nous font confiances</h2>
      <div class="row">
        <div class="col-md-3">
          <div class="card partner-card category-card">
            <img src="../css/img/hayo.jpg" class="card-img-top" alt="Entreprise partenaire 1">
            <div class="card-body">
              <p class="card-text">Description de l'entreprise partenaire 1.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card partner-card category-card">
            <img src="../css/img/imag.jpg" class="card-img-top" alt="Entreprise partenaire 2">
            <div class="card-body">
              <p class="card-text">Description de l'entreprise partenaire 2.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card partner-card category-card">
            <img src="../css/img/image.png" class="card-img-top" alt="Entreprise partenaire 3">
            <div class="card-body">
              <p class="card-text">Description de l'entreprise partenaire 3.</p>
            </div>
          </div>
        </div>
         <div class="col-md-3">
          <div class="card partner-card category-card">
            <img src="../css/img/images.png" class="card-img-top" alt="Entreprise partenaire 3">
            <div class="card-body">
              <p class="card-text">Description de l'entreprise partenaire 3.</p>
            </div>
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
            <iframe src="https://www.youtube.com/embed/video1" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-2">
          <div class="video-container category-card">
            <iframe src="https://www.youtube.com/embed/video2" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-2">
          <div class="video-container category-card">
            <iframe src="https://www.youtube.com/embed/video1" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-2">
          <div class="video-container category-card">
            <iframe src="https://www.youtube.com/embed/video2" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-2">
          <div class="video-container category-card">
            <iframe src="https://www.youtube.com/embed/video1" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-2">
          <div class="video-container category-card">
            <iframe src="https://www.youtube.com/embed/video2" frameborder="0" allowfullscreen></iframe>
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
          <p>&copy; 2023 Réseaux et Techniques Numériques. Tous droits réservés. | Développé par <span id="developer-name">AHAMADI NASRY</span> | COMORIENNE </p>
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