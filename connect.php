<?php
/**
 * Created by PhpStorm.
 * User: doriantaing
 * Date: 21/06/2018
 * Time: 14:35
 */
try {
    $con = new PDO('mysql:host=127.0.0.1;dbname = space_dust', 'root', 'hetic');
} catch(PDOException $exception) {
    die("Arrrrrghhhh X_x");
}
