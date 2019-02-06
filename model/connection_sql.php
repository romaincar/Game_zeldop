<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 05/02/2019
 * Time: 15:12
 */

class connection_sql
{

    public function __construct()
    {
        try {
            $this->bdd = new PDO('mysql:host=localhost;dbname=game_zeldop;charset=utf8', 'root', '');
            echo "Connecté.";
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function inscription($nom, $prenom, $pseudo, $motdepasse, $mail)
    {


        $this->sql = $this->bdd->prepare ("INSERT INTO `inscriptions_login` (nom, prenom, pseudo, `password`, mail, admin) VALUES (?,?,?,?,?,?);");
        $admin = 0;
        $this->sql->bindParam(1, $nom);
        $this->sql->bindParam(2, $prenom);
        $this->sql->bindParam(3, $pseudo);
        $this->sql->bindParam(4, $motdepasse);
        $this->sql->bindParam(5, $mail);
        $this->sql->bindParam(6, $admin);
        $this->sql->execute();
        echo "Création du compte terminée.";
    }

    public function modifier($id, $nom, $prenom, $pseudo, $motdepasse, $mail, $admin)
    {
        $this->sql = "UPDATE `inscription_login` SET nom=?, prenom=?, pseudo=?, motdepasse=?, mail=?, admin=? WHERE id = $id;";
        $this->bdd->prepare($this->sql)->execute([$nom, $prenom, $pseudo, $motdepasse, $mail, $admin]);
    }

    public function supprimer($id)
    {
        $this->id = $id;
        $this->sql = $this->bdd->prepare ("DELETE FROM `user` WHERE id = $this->id;");
        $this->sql->execute();
        echo "Ligne ".$id. " totalement supprimée.";
    }

}