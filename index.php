<?php
/**
 * Created by PhpStorm.
 * User: necro
 * Date: 23/03/17
 * Time: 15:42
 */

include 'conn.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Tuto PHP API</title>
</head>
<body>
<form action="resultat.php" method="get">
    <label for="search">Recherche</label>
    <input type="text" name="produit" />
    <input type="submit" value="Send" />
</form>
</body>

</html>

