


<?php

if(isset($_POST['valider'])) 

{
    if(isset($_POST['firstname']) AND isset($_POST['lastname']) AND isset($_POST['user_email']) AND isset($_POST[ 'user_message']))
    {
        if(!empty($_POST['firstname'])  AND !empty($_POST['lastname']) AND !empty($_POST['user_email']) AND !empty($_POST['user_message']))
        {
         $name=htmlspecialchars($_POST['firstname']);
         $name=htmlspecialchars($_POST['lastname']);
         $email=htmlspecialchars($_POST['user_email']);
         $message=htmlspecialchars($_POST['user_message']);


           echo "<h2> Bonjour <b> $name </b> merci pour votre email:<b> $email </b>, nous avons lu votre message: </br></br> $message </h2>";
        }
    }
}

?>