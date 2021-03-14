<?php

class PdoChoc {

    private static $serveur = 'mysql:host=localhost';
    private static $bdd = 'dbname=chocolatein';
    private static $user = 'userChoc';
    private static $mdp = 'p@ssCh0c';
    private static $monPdo;
    private static $monPdoChoc = null;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct() {
        try {
            PdoChoc::$monPdo = new PDO(
                    PdoChoc::$serveur . ';' . PdoChoc::$bdd,
                    PdoChoc::$user,
                    PdoChoc::$mdp
            );
            PdoChoc::$monPdo->query('SET CHARACTER SET utf8');
        } catch (PDOException $e) {
            echo "Une erreur s'est produite, merci de rééssayer dans quelques instants...";
            throw $e;
        }
    }

    /**
     * Méthode destructeur appelée dès qu'il n'y a plus de référence sur un
     * objet donné, ou dans n'importe quel ordre pendant la séquence d'arrêt.
     */
    public function __destruct() {
        PdoChoc::$monPdo = null;
    }

    /**
     * Fonction statique qui crée l'unique instance de la classe
     * Appel : $instancePdoChoc = PdoChoc::getPdoChoc();
     *
     * @return l'unique objet de la classe PdoChoc
     */
    public static function getPdoChoc() {
        if (PdoChoc::$monPdoChoc == null) {
            PdoChoc::$monPdoChoc = new PdoChoc();
        }
        return PdoChoc::$monPdoChoc;
    }

    /**
     * Retourne tous les id de la table Gamme
     *
     * @return un tableau associatif
     */
    public function getLesIdGamme() {
        $requetePrepare = PdoChoc::$monPdo->prepare(
                'SELECT id FROM gamme ORDER BY id'
        );
        $requetePrepare->execute();
        return $requetePrepare->fetchAll(PDO::FETCH_COLUMN, 0);
    }

    /**
     * Retourne le libelle pour une gamme donnée en argument.
     *
     * @param String $idGamme ID de la gamme
     *
     * @return le libelle pour une gamme donnée en argument.
     */
    public function getLeLibelleGamme($idGamme) {
        $requetePrepare = PdoChoc::$monPdo->prepare(
                'SELECT libelle FROM gamme WHERE id = :unIdGamme '
        );
        $requetePrepare->bindParam(':unIdGamme', $idGamme, PDO::PARAM_STR);
        $requetePrepare->execute();
        $leLibelleGamme = $requetePrepare->fetch();
        return $leLibelleGamme['libelle'];
    }

    /**
     * Retourne sous forme d'un tableau associatif toutes les gammes
     *
     * @return toutes les gammessous la forme d'un tableau 
     * associatif
     */
    public function getLesGammes() {
        $requetePrepare = PdoChoc::$monPdo->prepare(
                'SELECT * FROM gamme '
        );
        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

    /**
     * Retourne sous forme d'un tableau associatif tous les produits
     * pour une gamme donnée en argument.
     *
     * @param String $idGamme ID de la gamme
     *
     * @return tous les produits de la gamme sous la forme d'un tableau 
     * associatif
     */
    public function getLesProduits($idGamme) {
        $requetePrepare = PdoChoc::$monPdo->prepare(
                'SELECT * FROM produit WHERE idgamme = :unIdGamme '
        );
        $requetePrepare->bindParam(':unIdGamme', $idGamme, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

    /**
     * Retourne tous les id de la table produit
     *
     * @return un tableau associatif
     */
    public function getLesIdProduit() {
        $requetePrepare = PdoChoc::$monPdo->prepare(
                'SELECT id FROM produit ORDER BY id'
        );
        $requetePrepare->execute();
        return $requetePrepare->fetchAll(PDO::FETCH_COLUMN, 0);
    }

    /**
     * Retourne sous forme d'un tableau associatif le produit
     * pour un id donné en argument.
     *
     * @param String $idGamme ID de la gamme
     *
     * @return le produit pour un id donné en argument
     */
    public function getLeProduit($id) {
        $requetePrepare = PdoChoc::$monPdo->prepare(
                'SELECT * FROM produit WHERE id = :unId '
        );
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetch();
    }

    /**
     * Retourne tous les détails d'un produit passé en paramètre
     *
     * @return un tableau associatif
     */
    public function getLesDetailsProduit($id) {
        $requetePrepare = PdoChoc::$monPdo->prepare(
                'SELECT details FROM details_produits WHERE idproduit = :unId ORDER BY num'
        );
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetchAll(PDO::FETCH_COLUMN, 0);
    }

    /**
     * Enregistre les informations de contacts dans la base
     *
     * @return void
     */
    public function setLeContact($personne, $statut, $mail, $tel, $ville, $site, $message) {
        $requetePrepare = PdoChoc::$monPdo->prepare(
                'INSERT INTO contact (personne, statut, mail, telephone, ville, site, message) '
                . 'VALUES (:unePersonne, :unStatut, :unMail, :unTel, :uneVille, :unSite, :unMessage)'
        );
        $requetePrepare->bindParam(':unePersonne', $personne, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unStatut', $statut, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unMail', $mail, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unTel', $tel, PDO::PARAM_STR);
        $requetePrepare->bindParam(':uneVille', $ville, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unSite', $site, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unMessage', $message, PDO::PARAM_STR);
        return $requetePrepare->execute();
    }

    /**
     * Enregistre les demandes d'inscriptions à l'infolettre
     *
     * @return void
     */
    public function setInscriptionInfolettre($mail) {
        $requetePrepare = PdoChoc::$monPdo->prepare(
                'INSERT INTO infolettre (email, confirmation, dateconfirmation) VALUES (:unMail, 0, null)'
        );
        $requetePrepare->bindParam(':unMail', $mail, PDO::PARAM_STR);
        return $requetePrepare->execute();
    }

}
