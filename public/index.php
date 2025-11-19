<?php
/* 1. Config */
include "../src/config.php";

/* 2. Framework */
include "../src/Emeset/Container.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";

/* 3. Container */
include "../src/container.php";

/* 4. MODELS */
include "../src/Models/Db.php";
include "../src/Models/Producte.php";
include "../src/Models/Categoria.php";

/* 5. Middlewares */
include "../src/middleware/login.php";
include "../src/middleware/is_admin.php";

/* 6. Controllers */
include "../src/controllers/ctrlIndex.php";
include "../src/controllers/ctrlForm.php";
include "../src/controllers/ctrlDoForm.php";
include "../src/controllers/ctrlLlistat.php";
include "../src/controllers/ctrlFilter.php";


 $container = new Container($config);
 $request = $container->request();
 $response = $container->response();

 /* 
  * Aquesta és la part que fa que funcioni el Front Controller.
  * Si no hi ha cap paràmetre, carreguem la pàgina d'inici.
  * Si hi ha paràmetre, carreguem la pàgina que correspongui.
  * Si no existeix la pàgina, carreguem la pàgina d'error.
  */

 $r = '';
 if(isset($_REQUEST["r"])){
    $r = $_REQUEST["r"];
 }
 
 /* Front Controller, aquí es decideix quina acció s'executa */
 if($r == "") {
    $response = ctrlIndex($request, $response, $container);
}elseif($r == "form"){
    $response =  ctrlForm($request, $response, $container);
}elseif($r == "doInsertForm"){
    $response =  ctrlDoForm($request, $response, $container);
}elseif($r == "llistat"){
    $response =  ctrlLlistat($request, $response, $container);
}elseif($r == "filter"){
    $response = ctrlFilter($request, $response, $container);
}else {
    echo "No existeix la ruta";
}
 /* Enviem la resposta al client. */
 $response->execute();