
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="/formulaire.css">
        <title>Formulaire</title>
    </head>   
    <body class="principal">
         <form action="/redirection.php" method="post">
             <fieldset class="content">
                <legende> Nous-contacter</legende>
                 <div class="div-nom"> 
                     <label for="fname-input">Nom :</label>
                     <input type="text" id="fname-input" name="first_name">
                 </div>
                 <div class="div-prenom"> 
                     <label for="lname-input">Prénom :</label>
                     <input type="text" id="lname-input" name="last_name">
                 </div>
                 <div class="div-mail">
                     <label for="mail-input">e-mail :</label>
                     <input type=email id="mail-input" name="user-mail">
                 </div>
                 <div class="div-Téléphone"> 
                     <label for="phone-input">Téléphone :</label>
                     <input type="text" id="phone-input" name="phone-number">
                 </div>
                 <div class="div-sujet">
                     <label for="sujet-input" >Sujet :</label>
                     <select name="sujet" id="sujet-input">
                         <option value="logo">J'ai besoin d'un devis</option>
                         <option value="site_web">J'aimerais contacter un conseiller</option>
                         <option value="nom">Autre demande</option>
                     </select>
                 </div>
                 <div class="div-message">
                     <label for="message-input">Message :</label>
                     <textarea id="message-input" name="user_message"></textarea>
                 </div>
                 <div class="button">
                     <button type="submit">Envoyer le message</button>
                 </div>
             </fieldset>
         </form>
    </body>
</html>     