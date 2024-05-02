<?php
require_once __DIR__ . '/lib/required_files.php';
require_once __DIR__ . '/lib/project.php';
require_once __DIR__ . '/lib/menu.php';

$mainMenu['project.php'] = ['head_title' => 'Project not found', 'head_meta' => 'Project not found', 'exclude' => true];

$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';

if (strpos($referer, 'admin/index.php') !== false) {
  $backLink = 'admin/index.php';
} else if (strpos($referer, 'admin/projects.php') !== false) {
  $backLink = 'admin/projects.php';
} else if (strpos($referer, 'projects.php') !== false) {
  $backLink = 'projects.php';
} else if (strpos($referer, 'index.php') !== false) {
  $backLink = 'index.php';
} else {
  $backLink = 'projects.php';
}

$error = false;

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $project = getOneProjectById($pdo, $id);
  $skills = getProjectById($pdo, $project['id']);

  foreach (_ALLOWED_IMAGE_TYPES_ as $ext) {
    $imagePath = 'uploads/projects/project-' . $project['id'] . '.' . $ext;
    if (file_exists($imagePath)) {
      break;
    }
  }

  if ($project) {
    $mainMenu['project.php'] = ['head_title' => htmlentities($project['title']) . ' - Portfolio', 'head_meta' => htmlentities($project['content']), 'exclude' => true];
  } else {
    $error = true;
  }
} else {
  $error = true;
}

if (isset($_GET['project-delete'])) {
  $id = $_GET['project-delete'];
  $projectToDelete = getOneProjectById($pdo, $id);

  if ($projectToDelete) {
    if (deleteProject($pdo, $id)) {
      foreach (_ALLOWED_IMAGE_TYPES_ as $ext) {
        $file = 'uploads/projects/project-' . $id . '.' . $ext;
        if (file_exists($file)) {
          unlink($file);
        }
      }
      header('Location: projects.php');
      exit();
    } else {
      $error = true;
    }
  } else {
    $error = true;
  }
}

require_once __DIR__ . '/templates/header.php';

if (!$error) { ?>
  <section class="flex flex-col gap-4 items-center md:pt-20 pt-10 md:pb-24 pb-12 mx-auto w-11/12 max-w-5xl 2xl:max-w-7xl">
    <a href="<?= $backLink ?>" class="flex gap-1 items-center text-base text-textColors-navPrimary md:hover:gap-2 transition-all duration-300 px-2 py-1 rounded-lg w-fit group mt-8 max-md:mt-16 mr-auto">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="fill-textColors-navPrimary">
        <path d="M14 7.45H3.32502L7.57502 3.125C7.80002 2.9 7.80002 2.55 7.57502 2.325C7.35002 2.1 7.00002 2.1 6.77502 2.325L1.60002 7.575C1.37502 7.8 1.37502 8.15 1.60002 8.375L6.77502 13.625C6.87502 13.725 7.02502 13.8 7.17502 13.8C7.32502 13.8 7.45002 13.75 7.57502 13.65C7.80002 13.425 7.80002 13.075 7.57502 12.85L3.35002 8.575H14C14.3 8.575 14.55 8.325 14.55 8.025C14.55 7.7 14.3 7.45 14 7.45Z" />
      </svg>
      back
    </a>
    <div class="flex gap-4 w-full">
      <div class="w-4/6 flex flex-col gap-4">
        <div class="p-6 border border-buttonColor-borderColor-normal rounded-lg h-fit">
          <img width="918" height="612" src="<?= getProjectImageById($imagePath) ?>" alt="" class="rounded max-w-[375] aspect-[3/2] object-cover object-top">
        </div>
        <div class="flex gap-4">
          <a class="py-4 px-12 bg-accentColor-yellow rounded-lg flex items-center gap-2 text-base font-medium text-headerBack w-fit transition-colors duration-150 md:hover:bg-accentColor-yellow/80" href="">
            Let's view the live demo
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="fill-headerBack rotate-180">
              <path d="M14 7.45H3.32502L7.57502 3.125C7.80002 2.9 7.80002 2.55 7.57502 2.325C7.35002 2.1 7.00002 2.1 6.77502 2.325L1.60002 7.575C1.37502 7.8 1.37502 8.15 1.60002 8.375L6.77502 13.625C6.87502 13.725 7.02502 13.8 7.17502 13.8C7.32502 13.8 7.45002 13.75 7.57502 13.65C7.80002 13.425 7.80002 13.075 7.57502 12.85L3.35002 8.575H14C14.3 8.575 14.55 8.325 14.55 8.025C14.55 7.7 14.3 7.45 14 7.45Z" />
            </svg>
          </a>
          <div class="h-full w-px rounded bg-buttonColor-borderColor-normal"></div>
          <button class="flex items-center py-4 rounded-lg px-8 bg-white/15 text-textColors-primary gap-2 text-base font-medium md:active:bg-white/10 transition-all duration-75 md:hover:bg-white/10" <?php if(!$_SESSION) { echo 'disabled="disabled"'; } ?>>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
              <g clip-path="url(#clip0_376_632)">
                <path d="M9.94863 5.49017L10.0624 5.72872L10.3235 5.76912L14.6785 6.44283L11.5161 9.7018L11.3408 9.88248L11.3816 10.1309L12.1168 14.6138L8.29071 12.5118L8.0507 12.3799L7.81035 12.5112L3.93049 14.6296L4.66837 10.1309L4.70912 9.88248L4.53379 9.7018L1.36888 6.44026L5.67413 5.79447L5.93765 5.75494L6.05178 5.51416L8.00025 1.40334L9.94863 5.49017Z" stroke="rgb(237, 237, 237)" />
              </g>
              <defs>
                <clipPath id="clip0_376_632">
                  <rect width="16" height="16" fill="white" />
                </clipPath>
              </defs>
            </svg>
            Like the project
            <span class="border-l border-white/20 pl-2 h-full font-medium">8</span>
          </button>
        </div>
      </div>
      <div class="flex flex-col gap-4 w-2/6">
        <div class="p-6 bg-headerBack rounded-lg flex flex-col gap-1.5">
          <h2 class="text-xl text-textColors-primary font-semibold"><?= $project['title'] ?></h2>
          <p class="text-base text-[#b8b8b8]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium iure et, harum sit id placeat aliquid tempora reprehenderit mollitia debitis totam at quo fuga repudiandae, saepe eos. Numquam, sequi.</p>
        </div>
        <div class="p-6 bg-headerBack rounded-lg flex flex-col gap-1.5 select-none">
          <p class="bg-white/10 rounded p-1.5 text-sm/none font-medium text-textColors-primary border border-white/15 mr-auto">Project technologies</p>
          <ul class="flex flex-col gap-1.5 pt-2">
            <?php foreach ($skills as $skill) { ?>
              <li class="flex gap-2">
                <img width="26" height="26" src="assets/image/badge-<?= $skill['skill'] ?>.svg" alt="">
                <p class="text-base text-textColors-primary"><?= ucfirst($skill['skill']) ?></p>
              </li>
            <?php } ?>
          </ul>
        </div>
        <?php if(isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') { ?>
          <div class="p-6 bg-headerBack rounded-lg flex flex-col gap-1.5">
            <h3 class="text-xl text-textColors-primary font-semibold">Delete project</h3>
            <p class="text-base text-[#b8b8b8]">Click on this button to delete this project from the portfolio.</p>
            <a href="?project-delete=<?=$project['id']?>" onclick="return confirm('Are you sure you want to delete this project?')" class="buttonPrimary gap-2 px-8 py-2 mt-2 items-center bg-buttonColor-background-normal border border-buttonColor-borderColor-normal rounded-md inline-block whitespace-nowrap w-fit md:hover:bg-buttonColor-background-hover md:hover:border-buttonColor-borderColor-hover transition-colors duration-200">Delete</a>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
<?php require_once __DIR__ . '/templates/footer.php';
} else { ?>
  <section class="flex flex-col gap-14 items-center pt-44 sm:pt-56 md:pb-24 pb-12 h-screen">
    <a href="index.php" class="md:hover:scale-[1.15] transition-all duration-700">
      <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H200V200H0V0ZM126.548 39.0623H105.414C102.982 39.0623 100.733 40.3489 99.5205 42.433L29.6822 162.364H50.864C53.2687 162.364 55.4905 161.098 56.6895 159.034L126.548 39.0623ZM162.043 162.364H94.6231H73.4413L143.28 42.4331C144.492 40.349 146.741 39.0624 149.173 39.0624H170.307L110.454 141.852L162.057 142.234C163.771 142.247 165.159 143.628 165.159 145.33V159.282C165.159 160.984 163.764 162.364 162.043 162.364Z" fill="white" />
      </svg>
    </a>
    <div class="flex flex-col gap-4">
      <h1 class="titleLarge text-center">Oops... Project not found!</h1>
      <p class="textMedium text-center text-balance">The project you are looking for does not exist.</p>
      <a href="<?= $backLink ?>" class="flex gap-1 items-center text-base text-textColors-navPrimary md:hover:gap-2 transition-all duration-300 px-2 py-1 rounded-lg w-fit group">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="fill-textColors-navPrimary">
          <path d="M14 7.45H3.32502L7.57502 3.125C7.80002 2.9 7.80002 2.55 7.57502 2.325C7.35002 2.1 7.00002 2.1 6.77502 2.325L1.60002 7.575C1.37502 7.8 1.37502 8.15 1.60002 8.375L6.77502 13.625C6.87502 13.725 7.02502 13.8 7.17502 13.8C7.32502 13.8 7.45002 13.75 7.57502 13.65C7.80002 13.425 7.80002 13.075 7.57502 12.85L3.35002 8.575H14C14.3 8.575 14.55 8.325 14.55 8.025C14.55 7.7 14.3 7.45 14 7.45Z" />
        </svg>
        back
      </a>
    </div>
  </section>
<?php } ?>