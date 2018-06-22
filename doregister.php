<?php
/**
 * Created by PhpStorm.
 * User: doriantaing
 * Date: 21/06/2018
 * Time: 22:57
 */


session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION['firstname'] = $_POST['firstname'];
$_SESSION['company'] = $_POST['company'];
$_SESSION['password'] = $_POST['password'];

if (!isset($_POST['name']) ||
    !isset($_POST['firstname'])||
    !isset($_POST['company']) ||
    !isset($_POST['email']) ||
    !isset($_POST['password'])) {
    exit;
}
require_once "connect.php";


$requete = "INSERT INTO `space_dust` . `user` 
(`user_id` , `user_name` , `user_firstname` , `company` , `user_mail` , `user_password`) 
VALUES 
(NULL , :name , :firstname , :company , :email , :password)
;";
$stmt = $con->prepare($requete);
$stmt -> bindValue(':name' , $_POST['name']);
$stmt -> bindValue(':firstname' , $_POST['firstname']);
$stmt -> bindValue(':company' , $_POST['company']);
$stmt -> bindValue(':email' , $_POST['email']);
$stmt -> bindValue(':password' , $_POST['password']);
$stmt->execute();

header('Location: admin.php?id='.$con->lastInsertId());
