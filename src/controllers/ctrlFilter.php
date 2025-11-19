<?php
  function ctrlFilter($request, $response, $container) {

  $filteringValue = $request->get(INPUT_POST, "filteringValue");

  $model = $container->Categoria();
  $productes = $model->getFilterCategoria($filteringValue);

  $response->set("productes", $productes);
  $response->set("filteringValue", $filteringValue);

  $response->setTemplate("llistat.php");

  return $response;
}