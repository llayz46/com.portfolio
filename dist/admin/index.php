<?php 
  require_once 'templates/aside_nav.php';
  require_once 'templates/header.php';
  require_once '../lib/pdo.php';
  require_once '../lib/project.php';

  $projects = getProjects($pdo, _HOME_LIMIT_PROJECTS_);
?>

    <section class="px-12 pt-8 h-full">
      <div class="flex justify-between pb-6 border-b border-textColors-navPrimary">
        <div class="flex flex-col gap-2">
          <h1 class="text-2xl text-textColors-primary font-semibold">Home</h1>
          <p class="text-base text-textColors-navPrimary font-medium">Find here the 3 lasts projects</p>
        </div>
        <a href="" class="buttonPrimary mt-auto px-4 py-2 bg-buttonColor-background-normal border border-buttonColor-borderColor-normal rounded-md flex items-center md:hover:bg-buttonColor-background-hover md:hover:border-buttonColor-borderColor-hover transition-colors duration-200">Explore all</a>
      </div>
      <div class="pt-8 flex gap-4 mx-4">
        <?php foreach($projects as $project) {
          require __DIR__ . '../../templates/project_part.php';
        } ?>
      </div>
    </section>

<?php 
require_once 'templates/footer.php';
?>