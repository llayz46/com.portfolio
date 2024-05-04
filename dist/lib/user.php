<?php

function verifyUserAndRoleByLoginPassword(PDO $pdo, string $email, string $password): array|bool {
  $sql = 'SELECT * FROM users 
          JOIN roles ON roles.id = users.role_id
          WHERE email = :email';

  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':email', $email, PDO::PARAM_STR);
  $stmt->execute();

  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($user && password_verify($password, $user['password'])) {
    return $user;
  } else {
    return false;
  }
}

function updateUserProfile(PDO $pdo, int $id, string $name = null, string $email = null): bool {
  $sql = 'UPDATE users SET ';

  if(!$name && !$email) {
    return false;
  }

  if($name && $email) {
    $sql .= 'name = :name, email = :email WHERE id = :id';
  }

  if($name) {
    $sql .= 'name = :name WHERE id = :id';
  }

  if($email) {
    $sql .= 'email = :email WHERE id = :id';
  }

  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':id', $id, PDO::PARAM_INT);

  if($name) {
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
  }

  if($email) {
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
  }

  return $stmt->execute();
}

function updatePassword(PDO $pdo, int $id, string $password): bool {
  $sql = 'UPDATE users SET password = :password WHERE id = :id';

  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':id', $id, PDO::PARAM_INT);
  $stmt->bindValue(':password', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);

  return $stmt->execute();
}