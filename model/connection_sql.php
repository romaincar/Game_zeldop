<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 05/02/2019
 * Time: 15:12
 */

class connection_sql
{

    private $nom;
    private $prenom;
    private $pseudo;
    private $motdepasse;
    private $mail;
    private $pass;
    private $login;
    private $req;
    private $con;
    private $sql;
    private $row;

    public function __construct()
    {
        try {
            $this->bdd = new PDO('mysql:host=localhost;dbname=game_zeldop;charset=utf8', 'root', '');
            echo "Connecté.";
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $this->pass = (isset($_POST['logMdp'])? $_POST['logMdp']: NULL);
        $this->login = (isset($_POST['logPseudo'])? $_POST['logPseudo']: NULL);

    }

    public function inscription($nom, $prenom, $pseudo, $motdepasse, $mail)
    {


        $this->sql = $this->bdd->prepare ("INSERT INTO `inscriptions_login` (nom, prenom, pseudo, `password`, mail, admin) VALUES (?,?,?,?,?,?);");
        $this->nom = (isset($_POST['nom']) ? $_POST['nom'] : null);
        filter_var($this->nom, FILTER_SANITIZE_STRING);

        $this->prenom = (isset($_POST['prenom']) ? $_POST['prenom'] : null);
        filter_var($this->prenom, FILTER_SANITIZE_STRING);

        $this->pseudo = (isset($_POST['pseudo']) ? $_POST['pseudo'] : null);
        filter_var($this->pseudo, FILTER_SANITIZE_STRING);

        $this->mail = (isset($_POST['mail']) ? $_POST['mail'] : null);
        filter_var($this->mail, FILTER_SANITIZE_STRING);

        $this->motdepasse = (isset($_POST['mdp']) ? $_POST['mdp'] : null);
        filter_var($this->motdepasse, FILTER_SANITIZE_STRING);


        $this->sql = $this->bdd->prepare("INSERT INTO `inscription_login` (nom, prenom, pseudo, motdepasse, mail, admin) VALUES (?,?,?,?,?);");
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
        $this->sql = $this->bdd->prepare("DELETE FROM `user` WHERE id = $this->id;");
        $this->sql->execute();
        echo "Ligne " . $id . " totalement supprimée.";
    }

    public function log()
    {
        global $con;

        $req = "SELECT * FROM `inscriptions_login` WHERE pseudo = '$this->login'  and  password = '$this->pass'";

        $result = $con->query($req);

        $this->row = $result->fetch_assoc();

        if (isset($this->row['id'])) {
            if ($this->row['admin'] == 0) {

                session_start();

                $_SESSION['username'] = $this->row['pseudo'];


                header("Location:test.php");

            }

            if ($this->row['admin'] == 1) {

                session_start();

                $_SESSION['username'] = $this->row['pseudo'];


                header("Location:test.php");


            }
        } else {

            echo "Pas capable d'ecrire son login !";
           // header("Location:login.php");

        }


    }
}