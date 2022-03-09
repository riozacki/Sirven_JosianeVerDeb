<?php
//     include_once 'C:\wamp64\www\0001_sirven_josiane\models\class\users.php';
//     include_once 'C:\wamp64\www\0001_sirven_josiane\utils\myDbConfig.php';

//     class UserManager {

   
//     public function createUser (Users $users){
// /*
//         $query =
//             'INSERT INTO utilisateurs (id_utilisateurs, nom, prenom, mail, tel, adresse, cp, ville, mdp, mdpc)
//             VALUES (?,?,?,?,?,?,?,?,?,?);';
//                 $result = MyDbConfig->getConnection()->prepare($query);
//                 $idUtilisateurs = $users->getIdUtilisateurs();
//                 $nom = $users->getNom();
//                 $prenom = $users->getPrenom();
//                 $mail = $users->getMail();
//                 $tel = $users->getTel();
//                 $adresse = $users->getAdresse();
//                 $cp = $users->getCp();
//                 $ville = $users->getVille();
//                 $mdp = $users->getMdp();
//                 $mdpc = $users->getMdpc();

//                 $result->execute([
//                     $idUtilisateurs, $nom,$prenom,$mail,$tel,$adresse,$cp,$ville,$mdp,$mdpc
//                 ]);
//                 $nombre=$result->rowCount();
//                 return $nombre;
// */  
            
//         $query = "INSERT INTO '.this->tableUser.'
//         SET id_utilisateurs = :id_utilisateurs,
//             nom = :nom,
//             prenom = :prenom,
//             mail = :mail,
//             tel = :tel,
//             adresse = :adresse,
//             cp = :cp,
//             ville = :ville,
//             mdp = :mdp,
//             mdpc = :mdpc";

//         $stmt = $this->connect->prepare($query);
//         $stmt->bindParam(':idUtilsateurs', $this->idUtilisateurs);
//         $stmt->bindParam(':nom', $this->nom);
//         $stmt->bindParam(':prenom', $this->prenom);
//         $stmt->bindParam(':tel', $this->tel);
//         $stmt->bindParam(':adresse', $this->adresse);
//         $stmt->bindParam(':cp', $this->cp);
//         $stmt->bindParam(':ville', $this->ville);
//         $stmt->bindParam(':mdp', $this->mdp);
//         $stmt->bindParam(':cp', $this->mdpc);
//         var_dump($stmt);
//         return $stmt->execute();
//     }


?>

