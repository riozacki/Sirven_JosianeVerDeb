
<?php
    include_once"./controllers/registerUser.php";
    include_once"./models/class/users.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    
</head>
<body>
<form id="form_first" class="displayAll" method="POST" action="#" enctype="multipart/form-data">
        <h2>Formulaire d'inscription</h2><br/>
        <div id="separator">
            
        </div><br/>
        <label for="nom">Nom:</label><br/>
        <input type="text" name="nom" maxlength="20" required><br/>
        <label for="prenom">Prènom:</label><br/>
        <input type="text" name="prenom" maxlength="20" required><br/>
        <label for="mail">E-mail:</label><br/>
        <input type="mail" name="mail" maxlength="25" required><br/>
        <!--<label for="mailc">Confirmez votre E-mail:</label><br/>
        <input type="mail" name="mailc" maxlength="25" required><br/>-->
        <label for="tel">Téléphone mobile:</label><br/>
        <input type="tel" name="tel" maxlength="14" required><br/>
        <label for="adresse">Adresse:</label><br/>
        <input type="text" name="adresse" maxlength="50" required><br/>
        <label for="cp">Code postal:</label><br/>
        <input type="text" name="cp" maxlength="5" required><br/>
        <label for="ville">Ville:</label><br/>
        <input type="text" name="ville" maxlength="20" required><br/>
        <label for="mdp">Mot de passe:</label><br/>
        <input type="password" name="mdp" maxlength="150" required><br/>
        <!--<label for="mdpConfirm">Confirmer mot de passe:</label><br/>
        <input type="password" name="mdpc" maxlength="150" required><br/>-->
        <input type="submit" name="submit" id="inscription" value="S'inscrire"><br/>
    </form>
</body>
