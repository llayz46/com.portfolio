<?php
require_once '../lib/config.php';
require_once '../lib/session.php';
require_once '../lib/pdo.php';
require_once '../lib/project.php';
require_once '../lib/technologies.php';

$projectId = (int)$_GET['project'];
$project = getOneProjectById($pdo, $projectId);
$projectTechnologies = getTechnologyOfOneProjectById($pdo, $projectId);

$technologies = getAllTechnologies($pdo);

if (isset($_POST['modifyProject'])) {
  if (empty($_POST['project-title'])) {
    $_SESSION['errors'][] = 'Please enter a project title';
  } else if (empty($_POST['project-content'])) {
    $_SESSION['errors'][] = 'Please enter a project description';
  } else {
    $title = htmlspecialchars($_POST['project-title']);
    $content = htmlspecialchars($_POST['project-content']);

    if ($title === $project['title'] && $content === $project['content'] && empty($_FILES['project-image']['name']) && empty($_POST['project-technologies'])) {
      $_SESSION['errors'][] = 'You have not made any changes on the project name and content';
      header('Location: modify_project.php?project=' . $projectId);
      exit();
    } else {
      if ($project['title'] !== $title && $project['content'] !== $content && empty($_FILES['project-image']['name'])) {
        $res = modifyProject($pdo, $projectId, $title, $content);
        if ($res['success']) {
          $_SESSION['success'][] = 'Project successfully modified';
        } else {
          $_SESSION['errors'][] = 'An error occurred while modifying the project';
        }
      } else if ($title !== $project['title'] && empty($_FILES['project-image']['name'])) {
        $res = modifyProject($pdo, $projectId, $title, $project['content']);
        if ($res['success']) {
          $_SESSION['success'][] = 'Project successfully modified';
        } else {
          $_SESSION['errors'][] = 'An error occurred while modifying the project';
        }
      } else if ($project['content'] !== $content && empty($_FILES['project-image']['name'])) {
        $res = modifyProject($pdo, $projectId, $project['title'], $content);
        if ($res['success']) {
          $_SESSION['success'][] = 'Project successfully modified';
        } else {
          $_SESSION['errors'][] = 'An error occurred while modifying the project';
        }
      } else if (!empty($_FILES['project-image']['name']) && ($project['title'] === $title && $project['content'] === $content)) {
        $image = $_FILES['project-image'];
        $imagePath = '..' . _PATH_UPLOADS_PROJECTS_ . 'project-';

        foreach (_ALLOWED_IMAGE_TYPES_ as $type) {
          if (file_exists($imagePath . $projectId . '.' . $type)) {
            unlink($imagePath . $projectId . '.' . $type);
          }
        }

        $file_name = $image['name'];
        $file_tmp = $image['tmp_name'];
        $file_size = $image['size'];
        $file_error = $image['error'];
        $file_type = $image['type'];
  
        $file_ext = explode('.', $file_name);
        $file_actual_ext = strtolower(end($file_ext));

        if (in_array($file_actual_ext, _ALLOWED_IMAGE_TYPES_)) {
          if ($file_error === 0) {
            if ($file_size < 1000000) {
              $file_name_new = 'project-' . $projectId . '.' . $file_actual_ext;
              $file_destination = '..' . _PATH_UPLOADS_PROJECTS_ . $file_name_new;
    
              if (!move_uploaded_file($file_tmp, $file_destination)) {
                $_SESSION['errors'][] = 'An error occurred while adding the project image';
              } else {
                $_SESSION['success'][] = 'Project image successfully modified';
                header('Location: modify_project.php?project=' . $projectId);
                exit();
              }
            } else {
              $_SESSION['errors'][] = 'The file is too big';
            }
          } else {
            $_SESSION['errors'][] = 'An error occurred while uploading the file';
          }
        } else {
          $_SESSION['errors'][] = 'You cannot upload files of this type';
        }
      } else if (!empty($_FILES['project-image']['name']) && ($project['title'] !== $title && $project['content'] !== $content) || ($project['title'] !== $title || $project['content'] !== $content)) {
        $image = $_FILES['project-image'];
        $imagePath = '..' . _PATH_UPLOADS_PROJECTS_ . 'project-';

        foreach (_ALLOWED_IMAGE_TYPES_ as $type) {
          if (file_exists($imagePath . $projectId . '.' . $type)) {
            unlink($imagePath . $projectId . '.' . $type);
          }
        }

        $file_name = $image['name'];
        $file_tmp = $image['tmp_name'];
        $file_size = $image['size'];
        $file_error = $image['error'];
        $file_type = $image['type'];
  
        $file_ext = explode('.', $file_name);
        $file_actual_ext = strtolower(end($file_ext));

        if (in_array($file_actual_ext, _ALLOWED_IMAGE_TYPES_)) {
          if ($file_error === 0) {
            if ($file_size < 1000000) {
              $file_name_new = 'project-' . $projectId . '.' . $file_actual_ext;
              $file_destination = '..' . _PATH_UPLOADS_PROJECTS_ . $file_name_new;
    
              move_uploaded_file($file_tmp, $file_destination);
            } else {
              $_SESSION['errors'][] = 'The file is too big';
            }
          } else {
            $_SESSION['errors'][] = 'An error occurred while uploading the file';
          }
        } else {
          $_SESSION['errors'][] = 'You cannot upload files of this type';
        }

        $res = modifyProject($pdo, $projectId, $title, $content);
        if ($res['success']) {
          $_SESSION['success'][] = 'Project successfully modified';
        } else {
          $_SESSION['errors'][] = 'An error occurred while modifying the project';
        }
      }

      header('Location: modify_project.php?project=' . $projectId);
      exit();
    }
  }
}

require_once 'templates/aside_nav.php';
require_once 'templates/header.php';
?>

<section class="px-8 md:px-12 pt-8 h-full">
  <div class="flex justify-between pb-6 border-b border-textColors-navPrimary">
    <div class="flex flex-col gap-2">
      <h1 class="text-2xl text-textColors-primary font-semibold"><?= $adminMenu[$currentPage]['menu_title'] ?></h1>
      <p class="text-base text-textColors-navPrimary font-medium">Here, you'll be able to modify a project on your portfolio</p>
    </div>
  </div>
  <div class="pt-8 lg:max-w-screen-md md:pb-8 pb-6">
    <div class="p-6 border border-buttonColor-borderColor-normal bg-bodyBack rounded-xl z-20 w-full">
      <form method="post" enctype="multipart/form-data" class="text-base text-textColors-contactPrimary flex flex-col gap-4">
        <label for="project-title" class="flex flex-col gap-2">
          Name of the project
          <input type="text" name="project-title" id="project-title" value="<?=htmlentities($project['title'])?>" class="placeholder:text-textColors-contactSecondary py-2 pl-3 rounded-md border border-buttonColor-borderColor-normal bg-transparent focus-visible:outline outline-1 outline-transparent focus-visible:outline-accentColor-yellow/50 caret-accentColor-yellow transition-all duration-500" required>
        </label>
        <label for="project-content" class="flex flex-col gap-2">
          Description of the project
          <textarea name="project-content" id="project-content" rows="3" class="placeholder:text-textColors-contactSecondary py-2 pl-3 rounded-md border resize-none border-buttonColor-borderColor-normal bg-transparent focus-visible:outline outline-1 outline-transparent focus-visible:outline-accentColor-yellow/50 caret-accentColor-yellow transition-all duration-500" required><?=htmlentities($project['content'])?></textarea>
        </label>
        <label for="project-image" class="flex flex-col gap-2">
          Image of the project
          <input type="file" name="project-image" id="project-image" class="file:rounded-md file:bg-transparent file:border file:border-buttonColor-borderColor-normal file:py-2 file:px-3 file:text-textColors-primary file:hover:bg-accentColor-100 file:transition-all file:cursor-pointer cursor-pointer py-2 pl-3 rounded-md border border-buttonColor-borderColor-normal bg-transparent focus-visible:outline outline-1 outline-transparent focus-visible:outline-accentColor-yellow/50 caret-accentColor-yellow transition-all duration-500" accept="image/*">
        </label>
        <label for="project-title" class="flex flex-col gap-2">
          Technologies used for the project
          <div class="flex flex-wrap gap-6">
            <?php foreach ($technologies as $technologie) { ?>
              <div class="flex items-center gap-2">
                <input type="checkbox" name="project-technologies[]" id="project-technologies-<?= $technologie['name'] ?>" value="<?= $technologie['name'] ?>" class="h-4 w-4 rounded border border-buttonColor-borderColor-normal appearance-none cursor-pointer checked:bg-accentColor-50 peer forced-colors:appearance-none">
                <p><?= ucfirst($technologie['name']) ?></p>
              </div>
            <?php } ?>
          </div>
        </label>
        <input class="mt-5 md:mt-4 py-2 z-10 text-sm leading-6 font-medium text-textColors-secondary bg-buttonColor-background-normal rounded-md border border-buttonColor-borderColor-normal cursor-pointer md:hover:bg-buttonColor-background-hover md:hover:border-buttonColor-borderColor-hover transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-accentColor-yellow/60 ring-offset-2 ring-offset-headerBack" type="submit" value="Modify project" name="modifyProject">
        <?php if (isset($_SESSION['errors'])) { ?>
          <div class="flex gap-3 py-3 px-5 bg-red-200 rounded-md items-center w-fit">
            <?php foreach ($_SESSION['errors'] as $error) { ?>
              <div class="bg-red-600 p-1 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                  <path d="M6 0.337402C2.86875 0.337402 0.3375 2.86865 0.3375 5.9999C0.3375 9.13115 2.86875 11.6812 6 11.6812C9.13125 11.6812 11.6813 9.13115 11.6813 5.9999C11.6813 2.86865 9.13125 0.337402 6 0.337402ZM6 10.8374C3.3375 10.8374 1.18125 8.6624 1.18125 5.9999C1.18125 3.3374 3.3375 1.18115 6 1.18115C8.6625 1.18115 10.8375 3.35615 10.8375 6.01865C10.8375 8.6624 8.6625 10.8374 6 10.8374Z" fill="white" />
                  <path d="M7.725 4.25596C7.55625 4.08721 7.29375 4.08721 7.125 4.25596L6 5.39971L4.85625 4.25596C4.6875 4.08721 4.425 4.08721 4.25625 4.25596C4.0875 4.42471 4.0875 4.68721 4.25625 4.85596L5.4 5.99971L4.25625 7.14346C4.0875 7.31221 4.0875 7.57471 4.25625 7.74346C4.33125 7.81846 4.44375 7.87471 4.55625 7.87471C4.66875 7.87471 4.78125 7.83721 4.85625 7.74346L6 6.59971L7.14375 7.74346C7.21875 7.81846 7.33125 7.87471 7.44375 7.87471C7.55625 7.87471 7.66875 7.83721 7.74375 7.74346C7.9125 7.57471 7.9125 7.31221 7.74375 7.14346L6.6 5.99971L7.74375 4.85596C7.89375 4.68721 7.89375 4.42471 7.725 4.25596Z" fill="white" />
                </svg>
              </div>
              <p class="text-base font-medium text-red-700"><?=$error?></p>
            <?php } ?>
          </div>
          <?php unset($_SESSION['errors']) ?>
        <?php } else if (isset($_SESSION['success'])) { ?>
          <div class="flex gap-3 py-3 px-5 bg-green-200 rounded-md items-center w-fit">
            <?php foreach ($_SESSION['success'] as $message) { ?>
              <div class="bg-green-600 p-1 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                  <path d="M6 0.337402C2.86875 0.337402 0.337502 2.86865 0.337502 5.9999C0.337502 9.13115 2.86875 11.6812 6 11.6812C9.13125 11.6812 11.6813 9.13115 11.6813 5.9999C11.6813 2.86865 9.13125 0.337402 6 0.337402ZM6 10.8374C3.3375 10.8374 1.18125 8.6624 1.18125 5.9999C1.18125 3.3374 3.3375 1.18115 6 1.18115C8.6625 1.18115 10.8375 3.35615 10.8375 6.01865C10.8375 8.6624 8.6625 10.8374 6 10.8374Z" fill="white" />
                  <path d="M7.6125 4.25626L5.38125 6.43126L4.36875 5.43751C4.2 5.26876 3.9375 5.28751 3.76875 5.43751C3.6 5.60626 3.61875 5.86876 3.76875 6.03751L4.96875 7.20001C5.08125 7.31251 5.23125 7.36876 5.38125 7.36876C5.53125 7.36876 5.68125 7.31251 5.79375 7.20001L8.2125 4.87501C8.38125 4.70626 8.38125 4.44376 8.2125 4.27501C8.04375 4.10626 7.78125 4.10626 7.6125 4.25626Z" fill="white" />
                </svg>
              </div>
              <p class="text-base font-medium text-emerald-900"><?=$message?></p>
            <?php } ?>
          </div>
          <?php unset($_SESSION['success']) ?>
        <?php } ?>
      </form>
    </div>
  </div>
</section>