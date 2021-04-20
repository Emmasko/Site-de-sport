<?php 
    
            include('./include/header.php');
    
 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>SITE POUR LE SPORT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="./main.js" defer></script>
   
    <link rel="stylesheet" href="./style.css" />
    
    
    </head>
    <body class="cla">
        <div class="clo">
          <button onclick="rtn()"><h2>page précédente</h2></button>
            <script>
                function rtn() {
                    window.history.back();
                }
            </script>  
        </div>
        <div class="forme">
            
            <h2>Tous nos Contacts</h2><br>

            <h3>Contact Téléphonique: 06 65 02 98 17</h3><br>

            <h3>Adresse: 11 Rue Auguste Compte 63100 Clermont-Ferrand</h3><br>

            <h3>E-MAIL: emmaskonan@yahoo.fr</h3>

        </div>

        <div class="map">
             <iframe src="https://www.google.com/maps/d/embed?mid=1qjQI0ZtCRKwGZ_pXA8QVtPOsikKS6Ycv" width="500vw" height="480vw"></iframe>
        </div>

        


      <section-6>
        <div class="container">
          <form action="action.php "method="post">
            <div class="row">
              <div class="col-25">
                <label for="fname">Prénom</label>
              </div>
              <div class="col-75">
                <input type="text" id="fname" name="firstname" autocomplete="off">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="lname">Nom</label>
              </div>
              <div class="col-75">
                <input type="text" id="lname" name="lastname" autocomplete="off">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="email">e-mail</label>
              </div>
            <div class="col-75">
                <input type="email" id="mail" name="user_email" autocomplete="off">
              </div>
            </div>
            
            <div class="row">
              <div class="col-25">
                <label for="msg">Message:</label>
                <textarea id="msg" name="user_message"></textarea>
            </div>
            <div class="row">
              <button type="submit" name="valider">Envoyer</button>
            </div>
          </form>
        </div>
      </section-6>
    


    
    <footer>
      
    </footer>





       

       

    
     <?php
        $host = 'localhost';
        $dbname = 'site-de-sport';
        $username = 'root';
        $password = '';
        try {$conn = new PDO("mysql:host=$host;
            dbname=$dbname", $username, $password);
            echo "Connecté à $dbname sur $host avec succès.";
        } catch (PDOException $e) {
            die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage());
        }
        var_dump($conn);
        ?>
    </body>
</html>