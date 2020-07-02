<?php


function updateUserSetToken($remember_token, $userId){
    $cnx = getbd();
    $sql = 'UPDATE user SET rememberToken = ? WHERE userId = ?';
    $idRequete = executeRequete($cnx, $sql, array($remember_token, $userId));
}


function getUserByEmail($email){
    $cnx = getbd();
    $sql = 'SELECT * FROM user WHERE userMail = ?';
    $idRequete = executeRequete($cnx, $sql, array($email));
    $user = $idRequete -> Fetch();
    return $user;
}

function getUserById($Id){
    $cnx = getbd();
    $sql = 'SELECT * FROM user WHERE userId = ?';
    $idRequete = executeRequete($cnx, $sql, array($Id));
    return $idRequete;
}

function getRank($id){
    $cnx = getbd();
    $sql = 'SELECT role.roleName FROM user INNER JOIN role WHERE user.roleId = role.roleId AND userId = ?';
    $idRequete = executeRequete($cnx, $sql, array($id));
    $rank = $idRequete -> Fetch();
    return $rank;
}

function putResetToken($resetToken, $id){
    $cnx = getbd();
    $sql = 'UPDATE user set resetToken = ?, resetAt = now() WHERE userId = ?';
    $idRequete = executeRequete($cnx, $sql, array($resetToken, $id));
}

function secureData($id, $resetToken) {
    $cnx = getbd();
    $sql = 'SELECT * FROM user WHERE userId = ? AND resetToken IS NOT NULL AND resetToken = ? AND resetAt > DATE_SUB(NOW(), INTERVAL 30 MINUTE)';
    $idRequete = executeRequete($cnx, $sql, array($id, $resetToken));
    $user = $idRequete ->fetch();
    return $user;
}

function changePasswordUser($password, $userId){
    $cnx = getbd();
    $sql = 'UPDATE user set userPassword = ?, resetAt = now() WHERE userId = ?';
    $idRequete = executeRequete($cnx, $sql, array($password, $userId));
}

function addNewUser($userName, $userMail, $password){
    $cnx = getbd();
    $sql = 'INSERT INTO user ( userName, userMail, userPassword) VALUE (?,?,?)';
    $idRequete = executeRequete($cnx, $sql, array($userName,  $userMail,  $password));
}
