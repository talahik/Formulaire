<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Formulaire</title>
    </head>   
    <body>
         <p> 
            <?php
            echo 'Merci ' . $_POST['first_name'] . ' de nous avoir contacté à propos de ' . $_POST['sujet'] . ' .Un de nos conseillers vous contactera soit à l’adresse e-mail ou
             par téléphone au ' . $_POST['phone-number'] . ' dans les plus brefs délais pour traiter votre demande';
             ?>
         </p>    
    </body>
</html>