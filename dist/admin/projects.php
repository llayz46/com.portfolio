<?php
require_once __DIR__ . '/../lib/required_files.php';
require_once __DIR__ . '/../lib/project.php';
require_once 'templates/aside_nav.php';
require_once 'templates/header.php';
require_once __DIR__ . '/../lib/menu.php';

$actualPage = basename($_SERVER['SCRIPT_FILENAME']);

$totalProjects = getTotalProjects($pdo);

$totalPages = ceil($totalProjects / _ADMIN_PROJECTS_LIMIT_PROJECTS_);

if ($totalPages > 1) {
  if (isset($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] <= $totalPages) {
    $page = $_GET['page'];
    $currentPage = $_GET['page'];
  } else if (isset($_GET['page']) && $_GET['page'] > $totalPages) {
    $page = $totalPages;
  } else {
    $page = 1;
  }

  $projects = getProjects($pdo, _ADMIN_PROJECTS_LIMIT_PROJECTS_, $page);
} else { 
  $projects = getProjects($pdo, _ADMIN_PROJECTS_LIMIT_PROJECTS_);
}

?>

<section class="px-8 md:px-12 pt-8 h-full">
  <div class="flex justify-between pb-6 border-b border-textColors-navPrimary">
    <div class="flex flex-col gap-2">
      <h1 class="text-2xl text-textColors-primary font-semibold"><?=$adminMenu[$actualPage]['menu_title']?></h1>
      <p class="text-base text-textColors-navPrimary font-medium">Find here all of the projects</p>
    </div>
    <a href="new_project.php" class="buttonPrimary mt-auto px-4 py-2 max-sm:mt-4 max-sm:mr-auto bg-buttonColor-background-normal border border-buttonColor-borderColor-normal rounded-md flex items-center md:hover:bg-buttonColor-background-hover md:hover:border-buttonColor-borderColor-hover transition-colors duration-200">Add new project</a>
  </div>
  <div class="pt-8 gap-4 mx-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 md:pb-12 pb-6">
    <?php foreach ($projects as $project) {
      require __DIR__ . '../../templates/project_part.php';
    } ?>
  </div>
</section>

<?php if ($totalPages > 1) { ?>
  <section class="px-12 pt-8 h-full lg:pb-24 md:pb-8 sm:pb-3">
    <div class="flex items-center justify-between px-4 py-3 sm:px-6">
      <div class="flex flex-1 justify-between sm:hidden">
        <a href="<?php if (isset($_GET['page'])) { if ($_GET['page'] > 1) { echo '?page='.(int)--$_GET['page']; } }?>" class="<?php if (!isset($_GET['page']) || (int)$page < 2) { echo 'pointer-events-none'; } ?> relative inline-flex items-center rounded-md border border-buttonColor-borderColor-normal px-4 py-2 text-sm font-medium text-textColors-cardPrimary hover:bg-accentColor-100/30">Previous</a>
        <a href="?page=<?= min($page + 1, $totalPages); ?>" class="<?php if ($page >= $totalPages) { echo 'pointer-events-none'; } ?> relative ml-3 inline-flex items-center rounded-md border border-buttonColor-borderColor-normal px-4 py-2 text-sm font-medium text-textColors-cardPrimary hover:bg-accentColor-100/30">Next</a>
      </div>
      <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
        <div>
          <p class="text-sm text-textColors-cardPrimary/[.5]">
            Showing
            <span class="font-medium text-textColors-cardPrimary/[.7]"><?php $start = ($page - 1) * _ADMIN_PROJECTS_LIMIT_PROJECTS_ + 1; echo $start?></span>
            to
            <span class="font-medium text-textColors-cardPrimary/[.7]"><?php $end = min($start + _ADMIN_PROJECTS_LIMIT_PROJECTS_ - 1, $totalProjects); echo $end ?></span>
            of
            <span class="font-medium text-textColors-cardPrimary/[.7]"><?= $totalProjects ?></span>
            results
          </p>
        </div>
        <div>
          <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
            <a href="<?php if (isset($_GET['page']) && $_GET['page'] > 1) { echo '?page=' . ((int)$_GET['page']); } else { echo '?page=1'; } ?>" class="<?php if (!isset($_GET['page']) || (int)$page < 2) { echo 'pointer-events-none'; } ?> relative inline-flex items-center rounded-l-md px-2 py-2 text-textColors-cardPrimary ring-1 ring-inset ring-buttonColor-borderColor-normal hover:bg-accentColor-100/30 focus:z-20 focus:outline-offset-0">
              <span class="sr-only">Previous</span>
              <svg class="h-5 w-5" viewBox="0 0 20 20" fill="#EBEBEB" aria-hidden="true">
                <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
              </svg>
            </a>
            <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
              <a href="?page=<?=$i?>" class="<?php if (isset($_GET['page'])) { if ($i === (int)$page) { echo 'bg-accentColor-100'; } } else { if($i === 1) { echo 'bg-accentColor-100'; } } ?> relative inline-flex items-center px-4 py-2 text-sm font-semibold text-textColors-cardPrimary ring-1 ring-inset ring-buttonColor-borderColor-normal hover:bg-accentColor-100/30 focus:z-20 focus:outline-offset-0 md:inline-flex"><?=$i?></a>
            <?php } ?>
            <a href="?page=<?php if (isset($_GET['page'])) { if ($_GET['page'] < (int)$totalPages) { echo ++$page; } } else if ((int)$page < (int)$totalPages) { echo $page + 1; } ?>" class="<?php if ((int)$currentPage >= (int)$totalPages) { echo 'pointer-events-none'; } ?> relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-buttonColor-borderColor-normal hover:bg-accentColor-100/30 focus:z-20 focus:outline-offset-0">
              <span class="sr-only">Next</span>
              <svg class="h-5 w-5" viewBox="0 0 20 20" fill="#EBEBEB" aria-hidden="true">
                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
              </svg>
            </a>
          </nav>
        </div>
      </div>
    </div>
  </section>
<?php }

require_once 'templates/footer.php';
?>