
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

    <form id="formLogin" class="displayAll" action="./controllers/loginUser.php" method="post">
        <h2>Formulaire de connexion</h2><br/>
        <div id="separator">

        </div><br/>
        <label for="nom">Entrez votre Pseudo:</label><br/>
        <input type="text" name="nom" maxlength="20" required><br/>
        <label for="mail">E-mail:</label><br/>
        <input type="mail" name="mail" maxlength="25" required><br/>
        <label for="mdp">Mot de passe:</label><br/>
        <input type="password" name="mdp" maxlength="150" required><br/>
        <input type="submit" name="connexion" id="connexion" value="Se connecter">
    </form>
 
    </body>
  
