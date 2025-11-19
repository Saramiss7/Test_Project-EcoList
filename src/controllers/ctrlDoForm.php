<?php
function ctrlDoForm($request, $response, $container){
    //Form Data
    $nom_producte = $request->get(INPUT_POST, "nom_producte");
    $descripcio_curta = $request->get(INPUT_POST, "descripcio_curta");
    $productor = $request->get(INPUT_POST, "productor");
    $email_contacte = $request-> get(INPUT_POST,"email_contacte");
    $preu = $request->get(INPUT_POST, "preu");
    $id_categoria = $request->get(INPUT_POST, "categoria");
    $now = date('Y-m-d\TH:i');

    // Create product
    $prodModel = $container->Producte();
    $producteInsert = $prodModel->createProducte($nom_producte,$descripcio_curta,$productor, $email_contacte, $preu, $id_categoria,$now);

    /*Prove that the insert was good*/
    if ($producteInsert) {
        header("Location: index.php?&success=1");
        exit;
    } else {
        header("Location: index.php?&error=1");
        exit;
    }
    return $response;
}