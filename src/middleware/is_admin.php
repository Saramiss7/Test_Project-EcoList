<?php
function is_admin($request, $response, $container, $next) {

  if (!isset($_SESSION['user'])) {

    header("Location: /login.php");
    exit();
  }

  if ($_SESSION['user']['rol_usuari'] !== 'admin') {
    header("Location: index.php");
    exit();
  }
  return $next($request, $response, $container);
}