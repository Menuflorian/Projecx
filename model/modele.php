<?php
/**
 * Methode (fonction) pour executer une requete
 * simple en l'absence de parametre ou une reqete
 * préfixé dans le cas contraire.
 * @param objet $cnx identifiant connexion PDO
 * @param string $sql La requete SQL
 * @param tableau $parametre Les parametres
 * pour une requete preparer
 * @return objet $resultat identifiant la requete
 */

function executeRequete($cnx, $sql, $parametre = null){
    if ($parametre == null) {
        $resultat = $cnx -> query($sql);
    }else {
        $resultat = $cnx -> prepare($sql);
        $resultat -> execute($parametre);
    }
    return $resultat ;
}

/**
 * connection a la db
 *
 */
function getBd(){
    $cnx = connexion();
    return $cnx;
}

/**
 * Fonction de connxion à l'API: PDO
 * Utilisation des commandes definie dans
 * le script infoConnexion.php.
 * constante: visibilité grobal
 * @param aucun
 * @return $cnx objet PDO
 */

function connexion() {
    try{
        $cnx = new PDO('mysql:host='.SRV.';dbname='.DB, USER, PW, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $cnx;
    }catch(PDOEXCEPTION $a) {
        echo 'Erreur de connexion' . $a-> getmessage();
    }
}


function getClientListByName($name){
        $name = $name . '%' ;
        $cnx = getbd();
        $sql = 'SELECT clientId, clientName, clientFirstname FROM client WHERE isDeleted = 0 AND clientName LIKE ? ORDER BY clientName';
        $idRequete = executeRequete($cnx, $sql, array($name));
        $liste = $idRequete->fetchall();
        return $liste;
}
