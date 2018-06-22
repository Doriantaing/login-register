<?php
/**
 * Created by PhpStorm.
 * User: doriantaing
 * Date: 22/06/2018
 * Time: 15:01
 */


if (!isset($_POST['login']) || !isset($_POST['mdp'])) {
    exit;
}

require_once 'connect.php';

$check = "SELECT 
     `user_id`,
     `user_name`,
     `user_password`
     
     FROM
     `user`
     ;";
