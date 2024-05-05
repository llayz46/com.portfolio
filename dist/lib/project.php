<?php
function getProjects(PDO $pdo, INT $limit = null, INT $page = null): array
{
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

function getTotalProjects(PDO $pdo): INT
{
  $sql = 'SELECT COUNT(*) AS total FROM projects';
  $query = $pdo->prepare($sql);
  $query->execute();

  $result = $query->fetch(PDO::FETCH_ASSOC);

  return $result['total'];
}

function getProjectById(PDO $pdo, INT $id): array
{
  $sql = 'SELECT p.*, t.name skill FROM projects p
          JOIN projects_technologies pt ON p.id = pt.project_id
          JOIN technologies t ON pt.technologies_id = t.id
          WHERE p.id = :id';
  $query = $pdo->prepare($sql);
  $query->bindValue(':id', $id, PDO::PARAM_INT);
  $query->execute();

  return $query->fetchAll(PDO::FETCH_ASSOC);
}

function getOneProjectById(PDO $pdo, INT $id): array
{
  $sql = 'SELECT * FROM projects WHERE id = :id';
  $query = $pdo->prepare($sql);
  $query->bindValue(':id', $id, PDO::PARAM_INT);
  $query->execute();

  return $query->fetch(PDO::FETCH_ASSOC);
}

function getProjectImageById(string $image): string
{
  if (file_exists($image)) {
    return $image;
  } else {
    return _PATH_UPLOADS_PROJECTS_ . 'project-default.png';
  }
}

function addProject(PDO $pdo, $title, $content, $technologies)
{
  try {
    $pdo->beginTransaction();

    $stmt = $pdo->prepare('INSERT INTO projects (title, content) VALUES (:title, :content)');
    $stmt->execute(['title' => $title, 'content' => $content]);
    $projectId = $pdo->lastInsertId();

    $placeholders = rtrim(str_repeat('?,', count($technologies)), ',');
    $stmt = $pdo->prepare("INSERT INTO projects_technologies (project_id, technologies_id) SELECT ?, id FROM technologies WHERE name IN ($placeholders)");
    $stmt->execute(array_merge([$projectId], $technologies));

    $pdo->commit();

    return ['success' => true, 'projectId' => $projectId];
  } catch (PDOException $e) {
    $pdo->rollBack();
    return false;
  }
}

function getAllTechnologies(PDO $pdo): array {
  $query = $pdo->query('SELECT * FROM technologies');
  return $query->fetchAll(PDO::FETCH_ASSOC);
}

function deleteProject(PDO $pdo, INT $id): bool {
  try {
    $pdo->beginTransaction();

    $stmt = $pdo->prepare('DELETE FROM projects_technologies WHERE project_id = :id');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $stmt = $pdo->prepare('DELETE FROM projects WHERE id = :id');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $pdo->commit();

    return true;
  } catch (PDOException $e) {
    $pdo->rollBack();
    return false;
  }
}

function modifyProject(PDO $pdo, INT $id, STRING $title, STRING $content)
{
  try {
    $pdo->beginTransaction();

    $stmt = $pdo->prepare('UPDATE projects SET title = :title, content = :content WHERE id = :id');
    $stmt->bindValue(':title', $title, PDO::PARAM_STR);
    $stmt->bindValue(':content', $content, PDO::PARAM_STR);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $pdo->commit();

    return ['success' => true, 'projectId' => $id];
  } catch (PDOException $e) {
    $pdo->rollBack();
    return ['success' => false, 'error' => $e->getMessage()];
  }
}