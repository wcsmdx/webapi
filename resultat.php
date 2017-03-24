<?php
/**
 * Created by PhpStorm.
 * User: necro
 * Date: 23/03/17
 * Time: 15:52
 */



if(isset($_GET['produit'])) {

    $url = 'https://world.openfoodfacts.org/cgi/search.pl?search_terms=' . $_GET["produit"] . '&search_simple=1action=process&json=1';

    $result = file_get_contents($url);

    $json = json_decode($result, true);
    //var_dump($json);   //uncom for check all product category
    foreach ($json['products'] as $row) {
        // var_dump($row['']); //
        $productName = $row['product_name'];
        $brand = $row['brands'];

        if (isset($row['nutrition_grades']))
        {
            $nut = $row['nutrition_grades'];
        }
        else if(isset($row['nutrition_grade_fr']))

        {
            $nut = $row['nutrition_grade_fr'];
        }


        $energy = $row ['nutriments']['energy']*0.239006;
        $image = $row['image_small_url'];
        $viewData = file_get_contents('reponse.html');

            $nut=strtoupper($nut);

        echo str_replace(
            ['{productName}', '{brand}', '{image}', '{nut}'],
            [$productName, $brand, $image, $nut, $energy],
            $viewData);
    }
}

?>
