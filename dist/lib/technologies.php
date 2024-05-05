<?php

function addTechnology(PDO $pdo, STRING $name): bool {
  $stmt = $pdo->prepare('INSERT INTO technologies (name) VALUES (:name)');
  $stmt->bindValue(':name', $name, PDO::PARAM_STR);
  return $stmt->execute();
}

function getOneTechnologyById(PDO $pdo, INT $id): array {
  $stmt = $pdo->prepare('SELECT * FROM technologies WHERE id = :id');
  $stmt->bindValue(':id', $id, PDO::PARAM_INT);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

function deleteTechnology(PDO $pdo, int $id): bool {
  try {
    $pdo->beginTransaction();

    // Récupérer les projets liés à la technologie
    $query = $pdo->prepare('SELECT project_id FROM projects_technologies WHERE technologies_id = :id;');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $projects = $query->fetchAll(PDO::FETCH_ASSOC);

    // Supprimer les liens entre les projets et la technologie
    $stmt = $pdo->prepare('DELETE FROM projects_technologies WHERE technologies_id = :id');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    // Pour chaque projet, vérifier s'il est lié à d'autres technologies
    // Si non, le supprimer
    foreach ($projects as $project) {
      $query = $pdo->prepare('SELECT COUNT(*) as count FROM projects_technologies WHERE project_id = :id;');
      $query->bindValue(':id', $project['project_id'], PDO::PARAM_INT);
      $query->execute();
      $projectTechnologyCount = $query->fetch(PDO::FETCH_ASSOC);

      if ($projectTechnologyCount['count'] < 1) {
        $stmt = $pdo->prepare('DELETE FROM projects WHERE id = :id');
        $stmt->bindValue(':id', $project['project_id'], PDO::PARAM_INT);
        $stmt->execute();
      }
    }

    // Supprimer la technologie si aucun projet n'y est associé
    $query = $pdo->prepare('SELECT COUNT(*) as count FROM projects_technologies WHERE technologies_id = :id;');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $technologyProjectCount = $query->fetch(PDO::FETCH_ASSOC);

    if ($technologyProjectCount['count'] < 1) {
      $stmt = $pdo->prepare('DELETE FROM technologies WHERE id = :id');
      $stmt->bindValue(':id', $id, PDO::PARAM_INT);
      $stmt->execute();
    }

    $pdo->commit();

    return true;
  } catch (PDOException $e) {
    $pdo->rollBack();
    return false;
  }
}

function getAllSkills(PDO $pdo): array {
  $stmt = $pdo->query('SELECT * FROM skills');
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function addNewSkill(PDO $pdo, STRING $name, STRING $svg): bool {
  $stmt = $pdo->prepare('INSERT INTO skills (name, svg) VALUES (:name, :svg)');
  $stmt->bindValue(':name', $name, PDO::PARAM_STR);
  $stmt->bindValue(':svg', $svg, PDO::PARAM_STR);
  return $stmt->execute();
}

function getTechnologyOfOneProjectById(PDO $pdo, INT $id): array {
  $stmt = $pdo->prepare('SELECT technologies_id FROM projects_technologies WHERE project_id = :id');
  $stmt->bindValue(':id', $id, PDO::PARAM_INT);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}