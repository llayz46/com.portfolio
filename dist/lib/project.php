<?php
function getProjects(PDO $pdo, INT $limit = null, INT $page = null): array {
  $sql = 'SELECT * FROM projects ORDER BY id DESC';

  if ($limit && !$page) {
    $sql .= ' LIMIT :limit';
  }
  if ($page) {
    $sql .= ' LIMIT :limit OFFSET :offset';
  }

  $query = $pdo->prepare($sql);

  if ($limit) {
    $query->bindValue(':limit', $limit, PDO::PARAM_INT);
  }

  if ($page) {
    $offset = $limit * ($page - 1);
    $query->bindValue(':offset', $offset, PDO::PARAM_INT);
  }

  $query->execute();
  $projects = $query->fetchAll(PDO::FETCH_ASSOC);

  return $projects;
}

function getProjectsAndTech(PDO $pdo, INT $limit = null, INT $page = null): array {
  $sql = 'SELECT p.*, t.name skill FROM projects p
          JOIN projects_technologies pt ON p.id = pt.project_id
          JOIN technologies t ON pt.technologies_id = t.id
          WHERE pt.project_id = p.id
          ORDER BY id DESC';

  if ($limit && !$page) {
    $sql .= ' LIMIT :limit';
  }
  if ($page) {
    $sql .= ' LIMIT :limit OFFSET :offset';
  }

  $query = $pdo->prepare($sql);

  if ($limit) {
    $query->bindValue(':limit', $limit, PDO::PARAM_INT);
  }

  if ($page) {
    $offset = $limit * ($page - 1);
    $query->bindValue(':offset', $offset, PDO::PARAM_INT);
  }

  $query->execute();
  $projects = $query->fetchAll(PDO::FETCH_ASSOC);

  return $projects;
}

function getProjectById(PDO $pdo, INT $id): array {
  $sql = 'SELECT p.*, t.name skill FROM projects p
          JOIN projects_technologies pt ON p.id = pt.project_id
          JOIN technologies t ON pt.technologies_id = t.id
          WHERE p.id = :id';
  $query = $pdo->prepare($sql);
  $query->bindValue(':id', $id, PDO::PARAM_INT);
  $query->execute();

  return $query->fetchAll(PDO::FETCH_ASSOC);
}