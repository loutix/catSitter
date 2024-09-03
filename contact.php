<?php session_start();?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-5">
        <h2>Contactez-moi</h2>
        <form action="sendmail.php" method="post">
            <!--  Prénom -->
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="first_name" required>
            </div>
            
            <!-- Champ Nom -->
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="last_name" required>
            </div>


            <!-- phone  -->
            <div class="form-group">
                <label for="phone">Téléphone</label>
                <input type="tel" class="form-control" id="phone" name="phone" 
                pattern="^0[1-9]\d{8}$" placeholder="Format : 0123456789"
                required>
            </div>

            <!--  Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <!--animal -->
            <div class="form-group">
                <label for="animal">Animal</label>
                <select class="form-control" id="animal" name="animal" required>
                    <option value="">Sélectionnez un animal</option>
                    <option value="chien">Chien</option>
                    <option value="chat">Chat</option>
                    <option value="lapin">Lapin</option>
                    <option value="autres">Autres</option>
                </select>
            </div>

            <!-- Champ Message -->
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control"  id="message" name="message" rows="5"   placeholder="Describe yourself here..." required></textarea>
            </div>

            <!-- Bouton Envoyer -->
            <button type="submit" name="submitContact" class="btn btn-primary text-center">Envoyer message</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
    <script>
        var messageText = "<?= $_SESSION['status'] ?? ''; ?>";

        if(messageText != '') {
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