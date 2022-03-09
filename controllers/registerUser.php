<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

include_once('./utils/myDbConfig.php');
include_once('./models/class/users.php');


$success = 0;
$msg = "Une erreur est survenue dans le php";
$data = [];

if (
        !empty($_POST['nom'])
        && !empty($_POST['prenom'])
        && !empty($_POST['mail'])
        && !empty($_POST['tel'])
        && !empty($_POST['adresse'])
        && !empty($_POST['cp'])
        && !empty($_POST['ville'])
        && !empty($_POST['mdp'])) {

        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);
        $mail = trim($_POST['mail']);
        $tel = trim($_POST['tel']);
        $adresse = trim($_POST['adresse']);
        $cp = trim($_POST['cp']);
        $ville = trim($_POST['ville']);
        $mdp = trim($_POST['mdp']);

/*
        // ensuite je vérifie que password et confPassword sont identiques
        if ($mdp !== $mdpc) {
                // je passe une valeur à la variable $msg pour traiter cette erreur
                $msg = 'Vos mots de passe ne sont pas identiques!!!';
        } else {
                // je vérifie si la valeur de $mail est bien un mail grâce à la fonction filter_var
                // qui prend la donnée en paramètre ainsi que FILTER_VALIDATE_EMAIL pour demander la vérification
                if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                        // je passe une valeur à la variable $msg pour traiter cette erreur
                        $msg = "Cette adresse e-mail n'est pas valide!!!";
                }
                // et je renouvelle cette opération pour la valeur de la variable $confMail
                else if (!filter_var($mailc, FILTER_VALIDATE_EMAIL)) {
                        // je passe une valeur à la variable $msg pour traiter cette erreur
                        $msg = "Cette confirmation d'adresse e-mail n'est pas valide!!!";
                }
                // je vérifie maintenant que les mails sont  identiques
                else if ($mail !== $mailc) {
                        // je passe une valeur à la variable $msg pour traiter cette erreur
                        $msg = "Vos emails ne sont pas identiques!!!";
                } else {
                        // Pour la suite je n'aurais besoin que de 3 des 5 variables : $pseudo, $password et $mail.
                        // Mais afin de sécuriser nos données nous allons effectuer des traitements à nos variables
                        // en utilisant des fonctions PHP.
                        // En effet nous allons vouloir nous protéger de toute injection de code HTML et/ou Javascript
                        // par l'intermédiaire des variables qui contiennent les données envoyées par l'utilisateur.
                        // Ces possibles failles sont appelées des failles XSS (Cross-Site Scripting).
                        // Nous allons utiliser la fonction strip_tags qui permet de supprimer les balises HTML,
                        // et la fonction htmlspecialchars qui permet de neutraliser les caractères &, ", ', <, >,
                        // en les remplaçant par leurs codes &amp;, &quot;, &#039;, &lt; &gt;
                        // ->  nb: il existe aussi la fonction htmlentities dont le rôle est de modifier toutes les balises HTML

                        // je vais donc utiliser les 2 fonctions citées ci-dessus en les combinant
                        // afin des traiter mes 3 variables $pseudo, $password et $mail.
*/
                        $verifMdp = htmlspecialchars(strip_tags($mdp));
                        $verifNom = htmlspecialchars(strip_tags($nom));
                        $verifMail = htmlspecialchars(strip_tags($mail));
                        $verifAdresse = htmlspecialchars(strip_tags($adresse));
                        $verifVille = htmlspecialchars(strip_tags($ville));
                        $verifCp = htmlspecialchars(strip_tags($cp));
                        $verifPrenom = htmlspecialchars(strip_tags($prenom));
                        $verifTel = htmlspecialchars(strip_tags($tel));
                        // je crée maintenant une nouvelle instance d'utilisateur
                        $newUser = new Users();
                  

                        // et j'utilise les setters de la classe User pour affecter les valeurs des variables aux attributs de la classe
                        //$newUser->setNom($verifNom);

                        // pour l'affectation du mot de passe je vais également utiliser la fonction de hash de BCRIPT
                        // pour crypter le mot de passe.
                        $newUser->setMdp(password_hash($verifMdp, PASSWORD_BCRYPT));
                        $newUser->setMail($verifMail);
                        $newUser->setNom($verifNom);
                        $newUser->setPrenom($verifPrenom);
                        $newUser->setTel($verifTel);
                        $newUser->setAdresse($verifAdresse);
                        $newUser->setCp($verifCp);
                        $newUser->setVille($verifVille);

                       
                        //var_dump($newUser);
                        $newUser->createUser();

/*                      
                        $retourDelaclasse = $newUser->verifyPseudoAndMail();
                        $nbrLignes = $retourDelaclasse->rowCount();
                        var_dump($nbrLignes);

                        if ($nbrLignes > 0) {
                                $msg = "Pseudo ou Mail déjà utlisé, veuillez renouveler votre demande avec d'autres informations";
                        } else {
                                // une fois toutes les étapes précédentes réalisées, il ne me reste plus qu'à appeler la fonction
                                // createUser incluse dans la classe User.
                                // avec l'ajout de la classe ErrorMessage je vais également retourner une information
                                // pour confirmer la création ou non de l'utilisateur
                                if ($newUser->createUser()) {
                                        $myReturn = $newUser->getSingleUser();
                                        $nbrUsers = $myReturn->rowCount();
                                        // si aucune ligne
                                       
                                        if ($nbrUsers == 0) {
                                                $msg = "Pas d'utilisateur ayant ce pseudo trouvé, vérifiez votre saisie!!!";
                                                // si plus de 1 ligne
                                        } else if ($nbrUsers > 1) {
                                                $msg = "Il semblerait qu'il y ait une erreur, veuillez contacter un administrateur";
                                                // si seulement qu'une ligne
                                        } else if ($nbrUsers == 1) {
                                                $success = 1;
                                                $msg = "Utilisateur créé avec succès";
                                                $data['nom'] = $rowUser['nom'];
                                        }
                                } else {
                                        // je passe une valeur à la variable $msg pour traiter cette erreur
                                        $msg = "Erreur lors de l'enregistrement, veuillez renouveler votre demande!!!";
                                        var_dump($data);
                                }
                        }
                }
        }
} else {
        // je passe une valeur à la variable $msg pour traiter cette erreur
        $msg = "Veuillez remplir tous les champs!!!";
}

// si ma variable $success est égal à 1
if ($success == 1) {
        // je crée un tableau qui contiendra le success, un msg et de la data
        $res = ["success" => $success, "msg" => $msg, "data" => $data];
        // puis j'encode le tout en json pour le retourner
        echo json_encode($res);
} else {
        // sinon je retourne seulement un tableau contenant success et msg
        $res = ["success" => $success, "msg" => $msg];
    echo json_encode($res);
    */
}
?>