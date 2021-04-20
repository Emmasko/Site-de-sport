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

    <link rel="stylesheet" type="css/bootstrap.css" href="">
    
    <link rel="stylesheet" href="./style.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    
    </head>
    <body>
    
            <section>
                <section-2 class="textoverpic"><!-- Effet scroll-->
                    <h4>Iamque lituis cladium concrepantibus internarum non celate ut antea turbidum saeviebat ingenium a veri consideratione detortum et nullo inpositorum vel conpositorum fidem sollemniter inquirente nec discernente a societate noxiorum insontes velut exturbatum e iudiciis fas omne discessit, et causarum legitima silente defensione carnifex rapinarum sequester et obductio capitum et bonorum ubique multatio versabatur per orientales provincias, quas recensere puto nunc oportunum absque Mesopotamia digesta, cum bella Parthica dicerentur, et Aegypto, quam necessario aliud reieci ad tempus.</h4>
                </section-2>


                <div class="popo"><!--Texte2 sur image -->
                <h2> Le Football</h2>
                <p><b>Oportunum est, ut arbitror, explanare nunc causam, quae ad exitium praecipitem Aginatium inpulit iam inde a      priscis maioribus nobilem, ut locuta est pertinacior fama. nec enim super hoc ulla documentorum rata est fides.

                Iamque lituis cladium concrepantibus internarum non celate ut antea turbidum saeviebat ingenium a veri consideratione detortum et nullo inpositorum vel conpositorum fidem sollemniter inquirente nec discernente a societate noxiorum insontes velut exturbatum e iudiciis fas omne discessit, et causarum legitima silente defensione carnifex rapinarum sequester et obductio capitum et bonorum ubique multatio versabatur per orientales provincias, quas recensere puto nunc oportunum absque Mesopotamia digesta, cum bella Parthica dicerentur, et Aegypto, quam necessario aliud reieci ad tempus.</b></p>

                <section-3>
                    
                    <div class="sport"><!-- Images centrées -->
                        <u><h1>Quelques Clubs de sport</h1></u>
                        <a href="https://www.asm-omnisports.com/"><img  src="images/asm.jpg"/></a><a href="https://www.clermontfoot.com/"><img  src="images/clerfoot.png"/></a><a href="https://fr.wikipedia.org/wiki/Stade_clermontois"><img  src="images/handball.png"/></a><a href="https://stadeclermontoistt.com/blog/"><img  src="images/tenis.jpg"/></a>
                    </div>
                </section-3>


            
                        <h1 class="ml6"><!-- Texte animé -->
                        <span class="text-wrapper">
                        <span class="letters">Le Sport c'est la vie</span>
                        </span>
                        </h1>

            </section>  
        
        
        <?php
            include('./include/footer.php');
        ?>

        <?php /* Connection à la base de données */
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
