<?php
require_once 'templates/aside_nav.php';
require_once 'templates/header.php';
require_once '../lib/pdo.php';
require_once '../lib/project.php';

$technologies = getAllTechnologies($pdo);

$errors = [];
$success = [];

if (isset($_POST['createProject'])) {
  if (empty($_POST['project-title'])) {
    $errors[] = 'Please enter a project title';
  } else if (empty($_POST['project-content'])) {
    $errors[] = 'Please enter a project description';
  } else if (empty($_FILES['project-image']['name'])) {
    $errors[] = 'Please upload an image for the project';
  } else if (empty($_POST['project-technologies'])) {
    $errors[] = 'Please select at least one technology for the project';
  } else {
    $title = htmlspecialchars($_POST['project-title']);
    $content = htmlspecialchars($_POST['project-content']);
    $res = addProject($pdo, $title, $content, $_POST['project-technologies']);

    if ($res['success']) {
      $projectId = $res['projectId'];
      $success[] = 'Project successfully added';

      $files = $_FILES['project-image'];

      $file_name = $files['name'];
      $file_tmp = $files['tmp_name'];
      $file_size = $files['size'];
      $file_error = $files['error'];
      $file_type = $files['type'];

      $file_ext = explode('.', $file_name);
      $file_actual_ext = strtolower(end($file_ext));

      if (in_array($file_actual_ext, _ALLOWED_IMAGE_TYPES_)) {
        if ($file_error === 0) {
          if ($file_size < 1000000) {
            $file_name_new = 'project-' . $projectId . '.' . $file_actual_ext;
            $file_destination = '..' . _PATH_UPLOADS_PROJECTS_ . $file_name_new;

            if (move_uploaded_file($file_tmp, $file_destination)) {
              $success[] = 'Project image successfully added';
            } else {
              $errors[] = 'An error occurred while adding the project image';
            }
          } else {
            $errors[] = 'The file is too big';
          }
        } else {
          $errors[] = 'An error occurred while uploading the file';
        }
      } else {
        $errors[] = 'You cannot upload files of this type';
      }
    } else {
      $errors[] = 'An error occurred while adding the project';
    }
  }
}
?>

<section class="px-8 md:px-12 pt-8 h-full">
  <div class="flex justify-between pb-6 border-b border-textColors-navPrimary">
    <div class="flex flex-col gap-2">
      <h1 class="text-2xl text-textColors-primary font-semibold"><?= $adminMenu[$currentPage]['menu_title'] ?></h1>
      <p class="text-base text-textColors-navPrimary font-medium">Here, you'll be able to add a new project to the portfolio</p>
    </div>
  </div>
  <div class="pt-8 lg:max-w-screen-md md:pb-8 pb-6">
    <div class="p-6 border border-buttonColor-borderColor-normal bg-bodyBack rounded-xl z-20 w-full">
      <form method="post" enctype="multipart/form-data" class="text-base text-textColors-contactPrimary flex flex-col gap-4">
        <label for="project-title" class="flex flex-col gap-2">
          Name of the project
          <input type="text" name="project-title" id="project-title" placeholder="Enter a project name" class="placeholder:text-textColors-contactSecondary py-2 pl-3 rounded-md border border-buttonColor-borderColor-normal bg-transparent focus-visible:outline outline-1 outline-transparent focus-visible:outline-accentColor-yellow/50 caret-accentColor-yellow transition-all duration-500" required>
        </label>
        <label for="project-content" class="flex flex-col gap-2">
          Description of the project
          <textarea name="project-content" id="project-content" rows="3" placeholder="Enter a description for the project" class="placeholder:text-textColors-contactSecondary py-2 pl-3 rounded-md border resize-none border-buttonColor-borderColor-normal bg-transparent focus-visible:outline outline-1 outline-transparent focus-visible:outline-accentColor-yellow/50 caret-accentColor-yellow transition-all duration-500" required></textarea>
        </label>
        <label for="project-image" class="flex flex-col gap-2">
          Image of the project
          <input type="file" name="project-image" id="project-image" class="file:rounded-md file:bg-transparent file:border file:border-buttonColor-borderColor-normal file:py-2 file:px-3 file:text-textColors-primary file:hover:bg-buttonColor-background-normal file:transition-all cursor-pointer py-2 pl-3 rounded-md border border-buttonColor-borderColor-normal bg-transparent focus-visible:outline outline-1 outline-transparent focus-visible:outline-accentColor-yellow/50 caret-accentColor-yellow transition-all duration-500" accept="image/*" required>
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
        <input class="mt-5 md:mt-4 py-2 z-10 text-sm leading-6 font-medium text-textColors-secondary bg-buttonColor-background-normal rounded-md border border-buttonColor-borderColor-normal cursor-pointer md:hover:bg-buttonColor-background-hover md:hover:border-buttonColor-borderColor-hover transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-accentColor-yellow/60 ring-offset-2 ring-offset-headerBack" type="submit" value="Create project" name="createProject">
        <!-- <div class="flex items-center justify-center py-3 px-8 mt-4 w-2/4 mx-auto font-medium text-red-800 rounded-lg border border-red-800 text-sm leading-6" role="alert">
          <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
          </svg>
          <span class="sr-only">Info</span>
          <div>
            <p>TEST</p>
          </div>
        </div> -->
      </form>
    </div>
  </div>
</section>