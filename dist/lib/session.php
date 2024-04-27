<?php

session_set_cookie_params([
  'lifetime' => 3600,
  'path' => '/',
  'domain' => _DOMAIN_,
  'httponly' => true,
]);

session_start();

function adminOnly() {
  if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
  } else if ($_SESSION['user']['role'] !== 'admin') {
    header('Location: ../index.php');
  }
}