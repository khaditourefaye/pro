<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entreprise de Formation</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"-->
  <link rel="stylesheet" type="text/css" href="css/webfonts/all.css">
  <link rel="stylesheet" href="./styles/app.css">
  <title>My Website</title>
  <style>
    body{
      background-color:   orange;
    }
    .navbar-nav {
      margin-left: auto;
      margin-right: auto;

    }

     .category-card {
      transition: transform 0.3s ease-in-out;
    }

    .category-card:hover {
      transform: scale(1.1);
    }

    /* Section Formations */
    section:nth-child(3) {
      padding-top: 80px;
      padding-bottom: 80px;
    }

    .course-card {
      transition: transform 0.3s ease-in-out;
    }

    .course-card:hover {
      transform: scale(1.05);
    }

    .lead{
       font-weight: #999999!important;
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
      color: #f8f9fa;
      text-align: center;
      line-height: 100px;
      cursor: pointer;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s, visibility 0.3s;
    }

    #scrollToTop.show {
      opacity: 1;
      visibility: visible;
    }

       .navbar {
      background-color: #;
    }

    .navbar-brand {
      display: flex;
      align-items: center;
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }

    .navbar-brand img {
      margin-right: 50px;
    }

    .navbar-nav .nav-item .nav-link {
      color: #fff;
    }

    .navbar-nav .nav-item .nav-link:hover {
      color: #f8f9fa;
    }

    .navbar-toggler {
      border: none;
    }

    .search-form {
      display: flex;
      align-items: center;
      margin-left: auto;
    }

    .search-form input[type="search"] {
      border-radius: 20px;
      border: none;
      padding: 6px 12px;
    }
    .colored-column10 {
            background-color: #1b019b; /* Couleur jaune de Bootstrap */
            padding: 150px;
            border-radius: 20px;
    }
    .colored-column1 {
            background-color: #ff0000; /* Couleur jaune de Bootstrap */
            padding: 20px;
            border-radius: 5px;
    }

    .search-form button {
      border-radius: 20px;
      border: none;
      padding: 6px 12px;
      margin-left: 6px;
    }
    .colored-column1 {
            background-color: #ff0000; /* Couleur jaune de Bootstrap */
            padding: 20px;
            border-radius: 5px;
    }
    .colored-column4 {
            color: #ffffff; /* Bleu clair */
      }      
     .colored-column2 {
            background-color: #1b019b; /* Couleur jaune de Bootstrap */
            padding: 20px;
            border-radius: 5px;
    }
     .colored-column5 {
            color: #ffffff; /* Bleu clair */
      }
        .colored-column3 {
            background-color: #000080; /* Couleur jaune de Bootstrap */
            padding: 20px;
            border-radius: 5px;
     
    }
    .colored-column6 {
            background-color: #ff6600; /* Couleur jaune de Bootstrap */
            padding: 20px;
            border-radius: 5px;
     
    }
    .colored-column6 {
            color: #ffffff; /* Bleu clair */
      }
      .colored-column {
            background-color: #ffc107; /* Couleur jaune de Bootstrap */
            padding: 20px;
            border-radius: 5px;
            text-align: center; /* Centrer le contenu */
        }

        /* Personnalisation du bouton "En savoir plus" */
        .btn-en-savoir-plus {
            background-color: #ffffff; /* Bleu foncé */
            color: #1b019b; /* Texte blanc */
            border-color: #1b019b; /* Bordure bleue foncée */
        }
        .colored-title {
            color: #1b019b; /* Couleur de titre personnalisée */
        }
        .section-coloree {
            background-color: #77b5fe; /* Couleur de fond personnalisée */
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
        .section-page {
            background-color: #000000; /* Couleur de fond personnalisée */
            padding: 20px; /* Espacement intérieur du conteneur */
        }
        .khol1 {
            color: #ffffff; /* Couleur de fond personnalisée */
            padding: 20px; /* Espacement intérieur du conteneur */
        }
        .khol2 {
            color: #000000; /* Couleur de fond personnalisée */
            padding: 20px; /* Espacement intérieur du conteneur */
        }
       





  </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="img/logo-rtn.jpg" alt="Logo de l'entreprise" height="40">RTN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item category-card">
          <a class="nav-link" href="#">Accueil</a>
        </li>
         <li class="nav-item category-card">
          <a class="nav-link" href="menu/apropos.php">À propos</a>
        </li>
        <li class="nav-item category-card">
          <a class="nav-link" href="menu/expertise.php">Expertise</a>
        </li> 
        <li class="nav-item category-card">
          <a class="nav-link" href="menu/domaines.php">Domaines d'intervention</a>
        </li>
        <li class="nav-item category-card">
          <a class="nav-link" href="menu/contacts.php">Contact</a>
        </li>
        <li class="nav-item category-card">
          <a class="nav-link" href="https://www.facebook.com/">Facebook</a>
        </li>
         <li class="nav-item category-card">
          <!--a class="nav-link" href="https://www.whatsapp.com/">Whatsapp</a!-->
           <script defer src="https://widget.tochat.be/bundle.js?key=1bfd5a49-b33c-4f72-8eab-e32ed8454fc3"></script>

            
      </ul>
    </div>
  </div>
</nav>



  <!-- Section Slider -->
<section class="py-5">
  
  <div class="container">
      <div class="carousel-inner">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/9.jpg" class="d-block w-100" alt="Photo 1" style="width: 1000px; height: 300px;">
              </div>
              <div class="carousel-item">
                <img src="img/2.jpg" class="d-block w-100" alt="photo 2" style="width: 1000px; height: 300px;">
                </div>
                <div class="carousel-item">
                  <img src="img/4.jpg" class="d-block w-100" alt="photo 3" style="width: 1000px; height: 300px;">
                  </div>
                </div>
              </div>
            </div>
</section>

  <!-- Section d'en-tête -->
  <header class="text-white text-center py-5">
    <div class="container colored-column10">
      <h1 class="display-4">Bienvenue chez RTN</h1>

      <p class="lead">Développez vos compétences avec nos formations de qualité.</p>
      <a href="menu/formations.php" class="btn btn-light btn-lg">Découvrez nos formations</a>







                    <!--script defer src="https://widget.tochat.be/bundle.js?key=1bfd5a49-b33c-4f72-8eab-e32ed8454fc3"></script!-->


    </div>
  </header> 
<div class="container">
    <div class="row">
        <div class="col-md-4 colored-column1 colored-column4">
            <h2>Services d’experts</h2>
            <p>
              <ul>
                    <li>Une expertise unique en développement d’application : Web, téléphonie, SVI …</li>
                    <li>Une expertise unique en formation et certification</li>
                    <li>Une expertise en  logiciels libres</li>
                    <li>Une expertise en ingénierie des réseaux</li>
              </ul>
            </p>
            <div class="d-flex justify-content-center">
            <a href="menu/expertise.php" class="btn btn-en-savoir-plus">En savoir plus</a>
            </div>
        </div>
        <div class="col-md-4 colored-column2 colored-column5">
            <h3>Domaines d'intervention</h3>
            <p>
              <ul>

                  <li>Conception et mise en œuvre des Réseaux Informatiques</li>
                  <li>Administration système & Réseaux</li>
                  <li>Administration des Serveurs et Sécurité</li>
                  <li>Installation et Administration de serveurs Web</li>
                  <li>etc.
              </ul>
           </p>
           <div class="d-flex justify-content-center">
            <a href="menu/domaines.php" class="btn btn-en-savoir-plus">En savoir plus</a>
            </div>
        </div>
        <div class="col-md-4 colered-column3 colored-column6">
            <h2>Modules de formation</h2>
              <p>
                <ul>
                  <li> Administration Système & Réseaux</li>
                  <li>Services réseau de base</li>
                  <li>Protocoles sécurisés</li>
                  <li> Services d’annuaire et d’authentification</li>
                  <li> Téléphonie sur IP</li>
                  <li>etc</li>
                </ul>
             </p>
             <div class="d-flex justify-content-center">
            <a href="menu/expertise.php/formation-et-certification" class="btn btn-en-savoir-plus">En savoir plus</a>
            </div>
        </div>

        <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
               
                        <button id="openChat" class="btn btn-primary mb-3">Ouvrir le Chatbot</button>
                        <div id="chatbox" style="display: none;">
                        <div class="card">
                    <div class="card-header">
                        votre titre 
                        <button id="closeChat" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="card-body">
                            <div id="chat-messages" class="mb-3"></div>
                            <div class="input-group">
                                <input type="text" id="user-input" class="form-control" placeholder="Tapez votre message ici...">
                                <div class="input-group-append">
                                    <button id="send-button" class="btn btn-primary">Envoyer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
// code javascript
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const chatbox = document.getElementById("chatbox");
            const openChatButton = document.getElementById("openChat");
            const closeChatButton = document.getElementById("closeChat");
            const chatMessages = document.getElementById("chat-messages");
            const userInput = document.getElementById("user-input");
            const sendButton = document.getElementById("send-button");

            openChatButton.addEventListener("click", function () {
                chatbox.style.display = "block";
            });

            closeChatButton.addEventListener("click", function () {
                chatbox.style.display = "none";
                chatMessages.innerHTML = ""; // Efface la discussion
            });

            sendButton.addEventListener("click", function () {
                const userMessage = userInput.value;
                sendMessage(userMessage, "user");
                userInput.value = ""; // Efface le contenu de la zone de texte

                // Envoyez la question à votre API de chatbot et affichez la réponse.
                // Remplacez cette partie par un appel à votre propre API de chatbot.
                // Ici, nous simulons une réponse du chatbot.
                simulateChatbotResponse(userMessage);
            });

            // Fonction pour envoyer un message et l'afficher dans la fenêtre de chat.
            function sendMessage(message, sender) {
                const messageDiv = document.createElement("div");
                messageDiv.className = sender === "user" ? "user-message" : "bot-message";
                messageDiv.textContent = message;
                chatMessages.appendChild(messageDiv);
            }

            // Fonction de simulation de la réponse du chatbot (remplacez cette partie par un appel à votre propre API de chatbot).
            function simulateChatbotResponse(userMessage) {
                // Simuler une réponse en fonction de la question.
                let botResponse = "Je suis un chatbot factice.";
                if (userMessage.toLowerCase().includes("horaires,")
                  || userMessage.toLowerCase().includes("heure")) {
                    botResponse = "Les horaires sont de 8h à 17h du lundi au vendredi.";
                } else if (userMessage.toLowerCase().includes("cours")) {
                    botResponse = "Nous proposons une variété de cours en informatique, y compris la programmation, la conception web, et plus encore.";
                } else if (userMessage.toLowerCase().includes("contact")) {
                    botResponse = "Vous pouvez nous contacter à contact@ecoleinformatique.com.";
                }

                sendMessage(botResponse, "bot");
            }
        });
    </script>
    </div>
    <p>Qui sommes-nous?</p>

    <div class="container">
    <div class="row">
      
        <div class="col-md-6">

            <!-- Colonne de texte -->
            <h3 class="colored-title">Réseaux et Techniques Numériques (RTN)</h3>
            <p>R.T.N est une société (SARL) dirigée par une équipe de professionnels qualifiés, d’ingénieurs, de diplômés de troisième cycle en réseau et de certifiés en administration réseaux et Linux.</p>

            <p>RTN est une société spécialisée en Logiciels Libres et centrée sur les services informatiques, techniques numériques et télécommunications.</p>

            <p>Elle dispense des formations rigoureuses basées sur des supports de cours, fruits de recherches approfondies. Ces supports testés et avérés permettent aux apprenants d’être aussitôt opérationnels..</p>
            <div class="d-flex justify-content-center">
            <a href="menu/apropos.php/formation-et-certification" class="btn btn-en-savoir-plus">En savoir plus</a>

            </div>
        </div>
        <div class="col-md-6">
            <!-- Colonne d'image -->
            <img src="img/12.jpg" alt="Image" class="img-fluid" style="max-width: 80%;">
        </div>
       </div>
</div>


<div class="container text-center section-coloree">
    <div class="text-center mb-4">
        <h3>Le groupe RTN/EC2LT est formé de deux labels :</h3>
    </div>
    
    <p class="section-coloree1">
       Réseaux et Techniques Numériques et L’Ecole Centrale des Logiciels Libres et de Télécommunications.
    </p>
    
    <!-- Ligne horizontale -->
     <hr class="ligne-horizontale">
     
    <div>
    <p class="section-coloree2">
        RTN intervient dans la mise en oeuvre des solutions d'entreprise et surtout dans la formation des ressources humaines et technologies de l'information et de la communication
    </p>
    </div>
    <div>
      <p class="section-coloree3">
      RTN a su diversifier ses domaines de compétences afin de proposer aux entreprises et administrations des offres de servives dans plusieurs secteurs informatiques.
    </p>
  </div>
</div>



<div class="container section-page">
    <div class="row">
        <div class="col-md-6">
            <img src="img/6.jpg" alt="Image" class="img-fluid" style="max-width: 100%;">
        </div>
        <div class="col-md-6 khol1">
          <h2>Notre principal objectif</h2>
            <p >
              Conseiller et former le personnel des entreprises qui veulent disposer des logiciels libres et adaptés à leurs besoins minimisant ainsi les coûts d’investissements en réseaux informatiques tout en leur apportant une sécurité avancée.
            </p>
        </div>
        <div class="col-md-6 khol2">
          <h2 style="color: #ffffff">Notre mission</h2>
            <p style="color: #ffffff">
                Notre mission vise à accroître la compétitivité de nos clients par la valorisation des composantes informatiques, logicielles et réseaux constituants leur système d’information. Il s’agit de générer des gains importants de productivité via la valorisation des outils logiciels métiers préexistants et ceci, sans rupture des cycles d’exploitation de service de l’entreprise et sans remise en cause organisationnelle.
            </p>
        </div>
        <div class="col-md-6">
            <img src="img/6.jpg" alt="Image" class="img-fluid" style="max-width: 100%;">
        </div>
    </div>
</div>
   <!-- Section Entreprises partenaires -->
  <section class="bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-4">Ils nous font confiances</h2>
      <div class="row">
        <div class="col-md-3">
          <div class="card partner-card">
            <img src="img/LPI.jpg" alt="Image" class="img-fluid" style="max-width: 100%;">
          </div>
        </div>
        <div class="col-md-3">
          <div class="card partner-card">
            <img src="img/people-input.jpg" alt="Image" class="img-fluid" style="max-width: 100%;">
          </div>
        </div>
        <div class="col-md-3">
          <div class="card partner-card">
           <img src="img/HAYO.jpg" alt="Image" class="img-fluid" style="max-width: 100%;">
          </div>
        </div>
         <div class="col-md-3">
          <div class="card partner-card">
            <img src="img/CCNA.jpg" alt="Image" class="img-fluid" style="max-width: 100%;">
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
        <div id="chat-container">
          <form id="chat-form">
            <input type="text" id="user-input" placeholder="Posez une question...">
            <button type="submit">Envoyer</button>
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
          <p>&copy; 2023 Réseaux et Techniques Numériques. Tous droits réservés.</p>
        </div>
      </div>
      <!--a href="https://chatwith.io/s/5f33ce0c4aede" style="display: table; font-family: sans-serif; text-decoration: none; margin: 1em auto; color: #fff; font-size: 0.9em; padding: 1em 2em 1em 3.5em; border-radius: 2em; font-weight: bold; background: #25d366 url('https://tochat.be/click-to-chat-directory/css/whatsapp.svg') no-repeat 1.5em center; background-size: 1.6em;">Contacto con WhatsApp</a!-->
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 </body>
</html>