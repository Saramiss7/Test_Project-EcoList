<?php
function ctrlLlistat($request, $response, $container) {
    //Get llistat
    $prodModel = $container->Producte();
    $productes = $prodModel->getProductes();

    $response->set("productes", $productes);

    $response->setTemplate("llistat.php");

    return $response;
}