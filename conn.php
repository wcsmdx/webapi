<?php
/**
 * Created by PhpStorm.
 * User: Necro
 * Date: 24/03/2017
 * Time: 04:14
 */

$VALEUR_hote='localhost';
$VALEUR_port='3306';
$VALEUR_nom_bd='webapi';
$VALEUR_user='root';
$VALEUR_mot_de_passe='';
$conn = new PDO('mysql:host='.$VALEUR_hote.';port='.$VALEUR_port.';dbname='.$VALEUR_nom_bd, $VALEUR_user, $VALEUR_mot_de_passe);

var_dump($conn);

$sql =  'SELECT * FROM table1';

foreach  ($conn->query($sql, PDO::FETCH_OBJ) as $row) {
    echo $row['sport'] . "<br />";
}



?>