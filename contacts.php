<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entreprise de Formation - Contacts</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

    /* Section Contacts */
    section {
      padding-top: 80px;
      padding-bottom: 80px;
    }

    .contact-card {
      transition: transform 0.3s ease-in-out;
    }

    .contact-card:hover {
      transform: scale(1.05);
    }

    /* Pied de page */
    footer {
      background-color: #343a40;
      color: #fff;
    }

    footer p {
      margin: 0;
    }
    
    /* Informations de contact */
    #contact .contact-info li {
      margin-bottom: 10px;
    }

    #contact .contact-info i {
      margin-right: 10px;
      font-size: 20px;
      color: #343a40;
    }

    /* Heures d'ouverture */
    #contact .opening-hours li {
      margin-bottom: 10px;
    }

    #contact .opening-hours i {
      margin-right: 10px;
      font-size: 20px;
      color: #343a40;
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
      <a class="navbar-brand" href="#"><img src="../css/img/images.ico" alt="Logo de l'entreprise" height="40"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">À propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Section Contacts -->
  <section>

    <div class="container">
      <h2 class="text-center mb-4">Contactez-nous</h2>
       <div id="chat-container">
          <form id="chat-form">
            <input type="text" id="user-input" placeholder="Posez une question...">
            <button type="submit" class="btn btn-primary">Envoyer</button>
          </form>
          </div>

          <div id="webchat"></div>
<script src="https://cdn.jsdelivr.net/npm/rasa-webchat@1.0.0/lib/index.min.js"></script>
<script>
  WebChat.default.init({
    selector: "#webchat",
    initPayload: "/get_started",
    customData: {"language": "fr"},
    socketUrl: "http://localhost:5005"
  });
</script>
      <div class="row">
        <div class="col-md-4">
          <div class="card contact-card">
            <img src="contact-person1.jpg" class="card-img-top" alt="Personne de contact 1">
            <div class="card-body">
              <h5 class="card-title">Pr.Samuel Ouya</h5>
              <p class="card-text">Directeur de EC2LT et Formateur</p>
              <ul class="list-unstyled contact-info">
                <li><i class="fas fa-phone"></i> Téléphone : 0123456789</li>
                <li><i class="fas fa-envelope"></i> Email : samuel.ouya@gmail.com</li>
              </ul>
              <a href="mailto:samuel.ouya@gmail.com" class="btn btn-primary">Envoyer un email</a>
              <a href="tel:0123456789" class="btn btn-primary">Appeler</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card contact-card">
            <img src="contact-person2.jpg" class="card-img-top" alt="Personne de contact 2">
            <div class="card-body">
              <h5 class="card-title">Dr.Bessan</h5>
              <p class="card-text">Responsable et Formateur à RTN/EC2LT</p>
              <ul class="list-unstyled contact-info">
                <li><i class="fas fa-phone"></i> Téléphone : 0987654321</li>
                <li><i class="fas fa-envelope"></i> Email : bessan@gmail.com</li>
              </ul>
              <a href="mailto:jane.smith@example.com" class="btn btn-primary">Envoyer un email</a>
              <a href="tel:0987654321" class="btn btn-primary">Appeler</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card contact-card">
            <img src="contact-person3.jpg" class="card-img-top" alt="Personne de contact 3">
            <div class="card-body">
              <h5 class="card-title">Berenger Benam</h5>
              <p class="card-text">Responsable Technique du labo RTN</p>
              <ul class="list-unstyled contact-info">
                <li><i class="fas fa-phone"></i> Téléphone : 0123456789</li>
                <li><i class="fas fa-envelope"></i> Email : berengerbenam@gmail.com</li>
              </ul>
              <a href="mailto:david.johnson@example.com" class="btn btn-primary">Envoyer un email</a>
              <a href="tel:0123456789" class="btn btn-primary">Appeler</a>
            </div>
          </div>
        </div>



























      </div>

      <div class="row mt-5 offset-2">
        <div class="col-md-6">
          <h2 class="mb-4">Informations de contact</h2>
          <ul class="list-unstyled contact-info">
            <li><i class="fas fa-map-marker-alt"></i> EC2LT Annexe Liberté 2</li>
            <li><i class="fas fa-phone"></i> +123 456 789</li>
            <li><i class="fas fa-envelope"></i> info@example.com</li>
          </ul>
        </div>
        <div class="col-md-6">
          <h2 class="mb-4">Heures d'ouverture</h2>
          <ul class="list-unstyled opening-hours">
            <li><i class="far fa-clock"></i> Lundi - Vendredi : 9h00 - 18h00</li>
            <li><i class="far fa-clock"></i> Samedi : 9h00 - 13h00</li>
            <li><i class="far fa-clock"></i> Dimanche : Fermé</li>
          </ul>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-6 offset-1">
          <!-- Insérez ici le code d'intégration de la carte Google Maps -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.0016097213756!2d-17.45907929066675!3d14.712500974270615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec173df5afe4427%3A0x3d09d70cac715d94!2sEC2LT%20Annexe%20Libert%C3%A9%202!5e0!3m2!1sfr!2ssn!4v1686759500638!5m2!1sfr!2ssn" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
