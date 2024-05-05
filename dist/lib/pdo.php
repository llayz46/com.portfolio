<?php

try {
  $pdo = new PDO('mysql:host='._DB_HOST_.';port='._DB_PORT_.';dbname='._DB_NAME_.';charset=utf8mb4', _DB_USER_, _DB_PASS_);
} catch (PDOException $e) {
  die('Une erreur est survenue lors de la connexion à la base de données.');
}