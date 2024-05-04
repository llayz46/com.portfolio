<?php
require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/session.php';
require_once __DIR__ . '/../lib/pdo.php';
require_once __DIR__ . '/../lib/project.php';
require_once __DIR__ . '/../lib/technologies.php';
require_once __DIR__ . '/../lib/svg.php';

$technologies = getAllTechnologies($pdo);

if (isset($_POST['technologyAdd'])) {
  if (isset($_POST['technology-name']) && isset($_FILES['technology-image'])) {
    $techName = htmlspecialchars(strtolower($_POST['technology-name']));

    $res = addTechnology($pdo, $techName);

    if ($res) {
      $files = $_FILES['technology-image'];
      $_SESSION['success'][] = 'Technology successfully added';

      $file_name = $files['name'];
      $file_tmp = $files['tmp_name'];
      $file_size = $files['size'];
      $file_error = $files['error'];
      $file_type = $files['type'];

      $file_ext = explode('.', $file_name);
      $file_actual_ext = strtolower(end($file_ext));

      customSvgColor($file_tmp, '#6916ff');

      if ($file_actual_ext === 'svg') {
        if ($file_error === 0) {
          if ($file_size < 1000000) {
            $file_name_new = 'badge-' . $techName . '.' . $file_actual_ext;
            $file_destination = __DIR__ . '/../assets/image/' . $file_name_new;

            if (!move_uploaded_file($file_tmp, $file_destination)) {
              $_SESSION['errors'][] = 'An error occurred while adding the technology image';
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

      header('Location: ' . $_SERVER['PHP_SELF']);
      exit();
    } else {
      $_SESSION['errors'][] = 'An error occurred while adding the technology';
    }
  } else {
    $_SESSION['errors'][] = 'Please enter a technology name and upload an image';
  }
}

if (isset($_GET['technology-delete'])) {
  $id = $_GET['technology-delete'];
  $technologyToDelete = getOneTechnologyById($pdo, $id);

  if ($technologyToDelete) {
    if (deleteTechnology($pdo, $id)) {
      $_SESSION['deleteSuccess'][] = 'Technology successfully deleted';
      $file = '../assets/image/badge-' . $technologyToDelete['name'] . '.svg';
      
      if (file_exists($file)) {
        if (!unlink($file)) {
          $_SESSION['deleteErrors'][] = 'An error occurred while deleting the technology image';
        }
      }

      header('Location: technologies.php');
      exit();
    } else {
      $_SESSION['deleteErrors'][] = 'An error occurred while deleting the technology';
    }
  }
}

$actualPage = basename($_SERVER['SCRIPT_FILENAME']);

require_once 'templates/aside_nav.php';
require_once 'templates/header.php';
?>

<section class="px-8 md:px-12 pt-8 h-full">
  <div class="flex justify-between pb-6 border-b border-textColors-navPrimary">
    <div class="flex flex-col gap-2">
      <h1 class="text-2xl text-textColors-primary font-semibold"><?= $adminMenu[$actualPage]['menu_title'] ?></h1>
      <p class="text-base text-textColors-navPrimary font-medium">Manage here all the technologies</p>
    </div>
  </div>
  <div class="pt-8 gap-10 mx-4 grid grid-cols-1 xl:grid-cols-2 md:pb-12 pb-6">
    <div class="p-6 border border-buttonColor-borderColor-normal bg-bodyBack rounded-xl z-20 w-full flex flex-col gap-2 h-fit">
      <h2 class="text-xl text-textColors-primary font-medium">List of all technologies</h2>
      <ul class="mt-4 w-full">
        <?php foreach ($technologies as $key => $technology) { ?>
          <li class="flex justify-between gap-6 items-center py-2 <?php if ($key !== array_key_last($technologies)) {
                                                                    echo 'border-b border-buttonColor-borderColor-normal';
                                                                  } ?>">
            <div class="flex gap-2">
              <div class="badgeSkill">
                <img width="12" height="12" src="../assets/image/badge-<?= $technology['name'] ?>.svg" alt="">
              </div>
              <p class="text-base text-textColors-primary"><?= ucfirst($technology['name']) ?></p>
            </div>
            <a href="?technology-delete=<?= $technology['id'] ?>" onclick="return confirm('Are you sure you want to delete this technology?')" class="text-sm/6 font-medium py-1 px-4 border border-buttonColor-borderColor-normal rounded-md text-textColors-primary md:hover:bg-accentColor-100 md:hover:border-accentColor-100 transition-all duration-200">Delete</a>
          </li>
        <?php } ?>
      </ul>
      <?php if (isset($_SESSION['deleteErrors'])) { ?>
        <div class="flex gap-3 py-3 px-5 bg-red-200 rounded-md items-center w-fit">
          <?php foreach ($_SESSION['deleteErrors'] as $error) { ?>
            <div class="bg-red-600 p-1 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                <path d="M6 0.337402C2.86875 0.337402 0.3375 2.86865 0.3375 5.9999C0.3375 9.13115 2.86875 11.6812 6 11.6812C9.13125 11.6812 11.6813 9.13115 11.6813 5.9999C11.6813 2.86865 9.13125 0.337402 6 0.337402ZM6 10.8374C3.3375 10.8374 1.18125 8.6624 1.18125 5.9999C1.18125 3.3374 3.3375 1.18115 6 1.18115C8.6625 1.18115 10.8375 3.35615 10.8375 6.01865C10.8375 8.6624 8.6625 10.8374 6 10.8374Z" fill="white" />
                <path d="M7.725 4.25596C7.55625 4.08721 7.29375 4.08721 7.125 4.25596L6 5.39971L4.85625 4.25596C4.6875 4.08721 4.425 4.08721 4.25625 4.25596C4.0875 4.42471 4.0875 4.68721 4.25625 4.85596L5.4 5.99971L4.25625 7.14346C4.0875 7.31221 4.0875 7.57471 4.25625 7.74346C4.33125 7.81846 4.44375 7.87471 4.55625 7.87471C4.66875 7.87471 4.78125 7.83721 4.85625 7.74346L6 6.59971L7.14375 7.74346C7.21875 7.81846 7.33125 7.87471 7.44375 7.87471C7.55625 7.87471 7.66875 7.83721 7.74375 7.74346C7.9125 7.57471 7.9125 7.31221 7.74375 7.14346L6.6 5.99971L7.74375 4.85596C7.89375 4.68721 7.89375 4.42471 7.725 4.25596Z" fill="white" />
              </svg>
            </div>
            <p class="text-base font-medium text-red-700"><?= $error ?></p>
          <?php } ?>
        </div>
        <?php unset($_SESSION['deleteErrors']) ?>
      <?php } else if (isset($_SESSION['deleteSuccess'])) { ?>
        <div class="flex gap-3 py-3 px-5 bg-green-200 rounded-md items-center w-fit">
          <?php foreach ($_SESSION['deleteSuccess'] as $message) { ?>
            <div class="bg-green-600 p-1 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                <path d="M6 0.337402C2.86875 0.337402 0.337502 2.86865 0.337502 5.9999C0.337502 9.13115 2.86875 11.6812 6 11.6812C9.13125 11.6812 11.6813 9.13115 11.6813 5.9999C11.6813 2.86865 9.13125 0.337402 6 0.337402ZM6 10.8374C3.3375 10.8374 1.18125 8.6624 1.18125 5.9999C1.18125 3.3374 3.3375 1.18115 6 1.18115C8.6625 1.18115 10.8375 3.35615 10.8375 6.01865C10.8375 8.6624 8.6625 10.8374 6 10.8374Z" fill="white" />
                <path d="M7.6125 4.25626L5.38125 6.43126L4.36875 5.43751C4.2 5.26876 3.9375 5.28751 3.76875 5.43751C3.6 5.60626 3.61875 5.86876 3.76875 6.03751L4.96875 7.20001C5.08125 7.31251 5.23125 7.36876 5.38125 7.36876C5.53125 7.36876 5.68125 7.31251 5.79375 7.20001L8.2125 4.87501C8.38125 4.70626 8.38125 4.44376 8.2125 4.27501C8.04375 4.10626 7.78125 4.10626 7.6125 4.25626Z" fill="white" />
              </svg>
            </div>
            <p class="text-base font-medium text-emerald-900"><?= $message ?></p>
          <?php } ?>
        </div>
        <?php unset($_SESSION['deleteSuccess']) ?>
      <?php } ?>
    </div>
    <div class="p-6 border border-buttonColor-borderColor-normal bg-bodyBack rounded-xl z-20 w-full flex flex-col gap-2 h-fit">
      <h2 class="text-xl text-textColors-primary font-medium">Add a new technology</h2>
      <form method="post" class="flex flex-col gap-5 mt-4" enctype="multipart/form-data">
        <label for="technology-name" class="flex flex-col gap-2 text-base text-textColors-contactPrimary font-medium">
          Technology name
          <input type="text" name="technology-name" placeholder="Laravel" id="technology-name" class="placeholder:text-textColors-contactSecondary py-2 pl-3 rounded-md border font-normal border-buttonColor-borderColor-normal bg-transparent focus-visible:outline outline-1 outline-transparent focus-visible:outline-accentColor-yellow/50 caret-accentColor-yellow transition-all duration-500" required>
        </label>
        <label for="technology-image" class="flex flex-col gap-2 text-base text-textColors-contactPrimary font-medium">
          Technology image
          <input type="file" name="technology-image" id="technology-image" class="file:rounded-md file:bg-transparent file:border file:border-buttonColor-borderColor-normal file:py-2 file:px-3 file:text-textColors-primary file:hover:bg-accentColor-100 file:transition-all file:cursor-pointer cursor-pointer py-2 pl-3 rounded-md border border-buttonColor-borderColor-normal bg-transparent focus-visible:outline outline-1 outline-transparent focus-visible:outline-accentColor-yellow/50 caret-accentColor-yellow transition-all duration-500" accept="image/*" required>
        </label>
        <input class="mt-1 py-2 z-10 text-sm leading-6 font-medium text-textColors-primary bg-accentColor-100/90 rounded-md cursor-pointer md:hover:bg-accentColor-100 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-accentColor-yellow/60 ring-offset-2 ring-offset-headerBack" type="submit" value="Add Technology" name="technologyAdd">
        <?php if (isset($_SESSION['errors'])) { ?>
          <div class="flex gap-3 py-3 px-5 bg-red-200 rounded-md items-center w-fit">
            <?php foreach ($_SESSION['errors'] as $error) { ?>
              <div class="bg-red-600 p-1 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                  <path d="M6 0.337402C2.86875 0.337402 0.3375 2.86865 0.3375 5.9999C0.3375 9.13115 2.86875 11.6812 6 11.6812C9.13125 11.6812 11.6813 9.13115 11.6813 5.9999C11.6813 2.86865 9.13125 0.337402 6 0.337402ZM6 10.8374C3.3375 10.8374 1.18125 8.6624 1.18125 5.9999C1.18125 3.3374 3.3375 1.18115 6 1.18115C8.6625 1.18115 10.8375 3.35615 10.8375 6.01865C10.8375 8.6624 8.6625 10.8374 6 10.8374Z" fill="white" />
                  <path d="M7.725 4.25596C7.55625 4.08721 7.29375 4.08721 7.125 4.25596L6 5.39971L4.85625 4.25596C4.6875 4.08721 4.425 4.08721 4.25625 4.25596C4.0875 4.42471 4.0875 4.68721 4.25625 4.85596L5.4 5.99971L4.25625 7.14346C4.0875 7.31221 4.0875 7.57471 4.25625 7.74346C4.33125 7.81846 4.44375 7.87471 4.55625 7.87471C4.66875 7.87471 4.78125 7.83721 4.85625 7.74346L6 6.59971L7.14375 7.74346C7.21875 7.81846 7.33125 7.87471 7.44375 7.87471C7.55625 7.87471 7.66875 7.83721 7.74375 7.74346C7.9125 7.57471 7.9125 7.31221 7.74375 7.14346L6.6 5.99971L7.74375 4.85596C7.89375 4.68721 7.89375 4.42471 7.725 4.25596Z" fill="white" />
                </svg>
              </div>
              <p class="text-base font-medium text-red-700"><?= $error ?></p>
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
              <p class="text-base font-medium text-emerald-900"><?= $message ?></p>
            <?php } ?>
          </div>
          <?php unset($_SESSION['success']) ?>
        <?php } ?>
      </form>
      <?php 
      $query = $pdo->prepare('SELECT project_id FROM projects_technologies WHERE technologies_id = :id;');
      $query->bindValue(':id', 3, PDO::PARAM_INT);
      $query->execute();
      $projects = $query->fetchAll(PDO::FETCH_ASSOC);
      
      // var_dump($projects);

      foreach ($projects as $project) {
        $query = $pdo->prepare('SELECT project_id, technologies_id FROM projects_technologies WHERE project_id = :id;');
        $query->bindValue(':id', $project['project_id'], PDO::PARAM_INT);
        $query->execute();
        $projectTechnologie = $query->fetchAll(PDO::FETCH_ASSOC);

        if (sizeof($projectTechnologie) < 2) {
          $stmt = $pdo->prepare('SELECT * FROM projects WHERE id = :id');
          $stmt->bindValue(':id', $project['project_id'], PDO::PARAM_INT);
          $stmt->execute();
          $projectData = $stmt->fetch(PDO::FETCH_ASSOC);
          // var_dump($projectData);
        }
      }
      ?>
    </div>
  </div>
</section>

<?php
require_once 'templates/footer.php';
?>