<?php
function getTechnologiesById(PDO $pdo, INT $id): array {
  $sql = 'SELECT t.name FROM technologies t
          JOIN projects_technologies pt ON t.id = pt.technologies_id
          WHERE pt.project_id = :id';
  $query = $pdo->prepare($sql);
  $query->bindValue(':id', $id, PDO::PARAM_INT);
  $query->execute();

  return $query->fetchAll(PDO::FETCH_ASSOC);
}
