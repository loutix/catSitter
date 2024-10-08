<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description"
    content="Jeune retraitée à Castres, je propose des services de garde pour vos chats et chiens : visites à domicile, promenades, et envoi de nouvelles régulières pour votre tranquillité d'esprit.">
  <meta name="author" content="" />
  <title>Service de garde pour chats et chiens à Castres - Visites à domicile et promenades</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="menu">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="#menu">
        <i class="fa-solid fa-paw fa-2x"></i>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ms-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Album</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Masthead-->
  <header class="masthead">
    <div class="container">
      <div class="masthead-subheading">
        Votre tranquillité d'esprit, leur bonheur assuré !
      </div>
      <div class="masthead-heading text-uppercase">
        Service de garde pour chats et chiens à Castres
      </div>
      <a class="btn btn-primary btn-xl text-uppercase" href="#contact">Prendre contact</a>
    </div>
  </header>
  <!-- Services-->
  <section class="page-section" id="services">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Services</h2>
        <h3 class="section-subheading text-muted">
          Je suis une jeune retraitée résidant à Castres, qui propose de
          prendre soins de vos animaux en votre absence.
        </h3>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-paw fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="my-3">Visites à domicile</h4>
          <p class="text-muted">
            Je prends soin de vos chats et chiens chez vous, nourriture,
            câlins et jeux pendant votre absence.
          </p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-dog fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="my-3">Promenades</h4>
          <p class="text-muted">
            Des balades régulières pour vos chiens afin de les garder actifs,
            heureux et en bonne santé.
          </p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-camera fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="my-3">Photos et nouvelles</h4>
          <p class="text-muted">
            Je vous envoie des photos et des nouvelles de vos animaux après
            chaque visite, pour vous rassurer et partager leur quotidien.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid-->
  <section class="page-section bg-light" id="portfolio">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Album photos</h2>
        <h3 class="section-subheading text-muted">
          Compagnons dont j'ai eu le plaisir de prendre soin.
        </h3>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
          <!-- Portfolio item 1-->
          <div class="portfolio-item">
            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="assets/img/portfolio/chat3.jpg" alt="Ziggy, chat tigré gardé à Castres" />
            </a>
            <div class="portfolio-caption">
              <div class="portfolio-caption-heading">Ziggy</div>
              <div class="portfolio-caption-subheading text-muted">
                Chat Tigré
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <!-- Portfolio item 2-->
          <div class="portfolio-item">
            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="assets/img/portfolio/chien2.jpg" alt="Naya, Teckel gardé à Castres" />
            </a>
            <div class="portfolio-caption">
              <div class="portfolio-caption-heading">Naya</div>
              <div class="portfolio-caption-subheading text-muted">
                Teckel
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <!-- Portfolio item 3-->
          <div class="portfolio-item">
            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="assets/img/portfolio/chat1.jpg" alt="Zoé, Chat de Birmanie gardé à Castres" />
            </a>
            <div class="portfolio-caption">
              <div class="portfolio-caption-heading">Zoé</div>
              <div class="portfolio-caption-subheading text-muted">
                Chat de Birmanie
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <!-- Portfolio item 4-->
          <div class="portfolio-item">
            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="assets/img/portfolio/chien1.jpg"
                alt="Sam, chien Border Collie gardé à Castres" />
            </a>
            <div class="portfolio-caption">
              <div class="portfolio-caption-heading">Sam</div>
              <div class="portfolio-caption-subheading text-muted">
                Border Collie
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
          <!-- Portfolio item 5-->
          <div class="portfolio-item">
            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="assets/img/portfolio/chien3.jpg" alt="Igor, chien Drathaar gardé à Castres" />
            </a>
            <div class="portfolio-caption">
              <div class="portfolio-caption-heading">Igor</div>
              <div class="portfolio-caption-subheading text-muted">
                Drathaar
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <!-- Portfolio item 6-->
          <div class="portfolio-item">
            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="assets/img/portfolio/chat2.jpg" alt="Caramel, chat Siamois gardé à Castres" />
            </a>
            <div class="portfolio-caption">
              <div class="portfolio-caption-heading">Caramel</div>
              <div class="portfolio-caption-subheading text-muted">
                Siamois
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- form -->
  <div class="container mt-5" id="contact">
    <h2 class="text-center">Contactez-moi</h2>
    <form action="sendmail.php" method="post">
      <!--animal -->
      <div class="form-group my-2">
        <label for="animal">Votre Animal</label>
        <select class="form-control" id="animal" name="animal" required>
          <option value="">Sélectionner</option>
          <option value="chien">Chien</option>
          <option value="chat">Chat</option>
          <option value="lapin">Rongeur</option>
          <option value="autres">Autres</option>
        </select>
      </div>

      <!--  Prénom -->
      <div class="form-group my-2">
        <label for="prenom">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="first_name" required />
      </div>

      <!-- Champ Nom -->
      <div class="form-group my-2">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" name="last_name" required />
      </div>

      <!-- phone  -->
      <div class="form-group my-2">
        <label for="phone">Téléphone</label>
        <input type="tel" class="form-control" id="phone" name="phone" pattern="^0[1-9](\d{2}|\s\d{2}){4}$"
          placeholder="06 00 00 00 00" required />
      </div>

      <!--  Email -->
      <div class="form-group my-2">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required />
      </div>

      <!-- Champ Message -->
      <div class="form-group my-2">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" rows="5"
          placeholder="Pour ce 1er contact merci de préciser les dates souhaitées et le type de besoin pour votre animal..."
          required></textarea>
      </div>

      <!-- Bouton Envoyer -->
      <div class="text-center">
        <button type="submit" name="submitContact" class="btn btn-primary my-2">
          Envoyer message
        </button>
      </div>
    </form>
  </div>

  <!-- Footer-->
  <footer class="footer py-4">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 text-lg-start">
          Copyright &copy; Loutix WebMAster
        </div>
      </div>
    </div>
  </footer>
  <!-- Portfolio Modals-->
  <!-- Portfolio item 1 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal">
          <img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Ziggy</h2>
                <p class="item-intro text-muted">2022</p>
                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/chat3.jpg" alt="..." />
                <p>Chat tigré très affectueux et gourmand.</p>
                <ul class="list-inline">
                  <li>
                    <strong>Propriétaire:</strong>
                    Chloé
                  </li>
                  <li>
                    <strong>Lieu:</strong>
                    Castres
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Fermer
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 2 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal">
          <img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Naya</h2>
                <p class="item-intro text-muted">2024</p>
                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/chien2.jpg" alt="..." />
                <p>Petite chienne, très joueuse et caline.</p>
                <ul class="list-inline">
                  <li>
                    <strong>Propriétaire:</strong>
                    Chantale
                  </li>
                  <li>
                    <strong>Lieu:</strong>
                    Castres
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Fermer
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 3 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal">
          <img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Zoé</h2>
                <p class="item-intro text-muted">2023</p>
                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/chat1.jpg" alt="..." />
                <p>Petite chatte très joueuse et gourmande.</p>
                <ul class="list-inline">
                  <li>
                    <strong>Propriétaire:</strong>
                    Mélanie
                  </li>
                  <li>
                    <strong>Lieu:</strong>
                    Soaul
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Fermer
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 4 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal">
          <img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Sam</h2>
                <p class="item-intro text-muted">2024</p>
                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/chien1.jpg" alt="..." />
                <p>Adore se balader dans les parcs. Très joueur.</p>
                <ul class="list-inline">
                  <li>
                    <strong>Propriétaire:</strong>
                    Patrick
                  </li>
                  <li>
                    <strong>Lieu:</strong>
                    Labruguiere
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Fermer
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 5 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal">
          <img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Igor</h2>
                <p class="item-intro text-muted">2024</p>
                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/chien3.jpg" alt="..." />
                <p>
                  Chien imposant mais d'une très grande douceur. Joueur et
                  adore les balades en forêts.
                </p>
                <ul class="list-inline">
                  <li>
                    <strong>Propriétaire:</strong>
                    Gaëtane
                  </li>
                  <li>
                    <strong>Lieu:</strong>
                    Castres
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  fermer
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 6 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal">
          <img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Caramel</h2>
                <p class="item-intro text-muted">2023</p>
                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/chat2.jpg" alt="..." />
                <p>Chat style Siamois. Un peu sauvage et craintif.</p>
                <ul class="list-inline">
                  <li>
                    <strong>Propriétaire:</strong>
                    Alain
                  </li>
                  <li>
                    <strong>Lieu:</strong>
                    Saix
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Fermer
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    var messageText = "<?= $_SESSION['status'] ?? ''; ?>";

    if (messageText != '') {
      Swal.fire({
        title: "Merci",
        text: messageText,
        icon: "success"
      });
      <?php unset($_SESSION['status']); ?>
    }
  </script>
</body>

</html>