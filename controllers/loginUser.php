<?php
    include_once('C:\wamp64\www\0001_sirven_josiane\utils\myDbConfig.php');
    

    if(!empty($_POST['mail']) && !empty($_POST['mdp']))
    {
        $nom = htmlspecialchars($_POST['nom']);
        $mdp = htmlspecialchars($_POST['mdp']);
        $mail = htmlspecialchars($_POST['mail']);
        $check = $bdd->prepare('SELECT nom, mail, mdp FROM utilisateurs WHERE mail = ?');
        $check->execute(array($mail));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        if($row == 1){
            if(filter_var($mail, FILTER_VALIDATE_EMAIL))
                {
                    //$mdp = password_hash($mdp,  PASSWORD_BCRYPT);
                    if ($data['mdp'] === $mdp) {
                        $_SESSION['user'] = $data['nom'];
                        header('location:/0001_sirven_josiane/views/indexUser.php');
                    }else header('Location:index.php?login_err=password');
                }else header('Location:index.php?login_err=email');
            }else header('location:index.php?login_err=already');
        }else header('location:index.php');
    
?>







