<?php

function ctrlForm($request, $response, $container) {

  $response->setTemplate("form.php");

  return $response;
}
