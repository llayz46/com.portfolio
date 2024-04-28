<?php
require_once __DIR__ . '/lib/required_files.php';
require_once __DIR__ . '/lib/project.php';
require_once __DIR__ . '/templates/header.php';

$totalProjects = getTotalProjects($pdo);

$totalPages = ceil($totalProjects / _PROJECTS_LIMIT_PROJECTS_);

if ($totalPages > 1) {
  if (isset($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] <= $totalPages) {
    $page = $_GET['page'];
    $currentPage = $_GET['page'];
  } else if (isset($_GET['page']) && $_GET['page'] > $totalPages) {
    $page = $totalPages;
  } else {
    $page = 1;
  }

  $projects = getProjects($pdo, _PROJECTS_LIMIT_PROJECTS_, $page);
}

$projects = getProjects($pdo, _PROJECTS_LIMIT_PROJECTS_);
?>

<section class="bg-headerBack">
  <div class="flex md:flex-row flex-col-reverse md:gap-20 gap-10 items-center justify-center sm:pt-36 pt-20 md:pb-24 pb-12 mx-auto w-11/12 max-w-5xl 2xl:max-w-7xl">
    <div class="js-scroll-animation flex md:justify-end justify-center flex-col">
      <p class="badgePrimary md:mr-0 ml-auto mr-auto">PROJECTS</p>
      <h2 class="titleLarge pb-4 pt-3 md:text-right text-center">Explore all my projects</h2>
      <p class="textMedium sm:text-balance md:text-right text-center">Each project comes with a detailed description, providing insights into its context, objectives, and the technologies utilized for its realization. Dive in and discover the innovation behind each creation.</p>
    </div>
    <svg class="js-scroll-animation min-w-fit 2xl:pr-36" xmlns="http://www.w3.org/2000/svg" width="161" height="159" viewBox="0 0 161 159" fill="none">
      <path d="M118.353 29.6105C118.299 35.7721 117.849 41.9237 117.005 48.0273C116.975 48.2416 116.943 48.4559 116.914 48.6702L59.347 48.3478C59.178 48.135 59.0116 47.9195 58.8504 47.7015C58.313 46.9801 57.8093 46.2381 57.3469 45.4705C55.1243 41.7727 54.1068 37.4432 55.1264 34.4562L55.1447 34.4098C55.3648 33.7557 55.7116 33.1516 56.1653 32.6322C58.49 30.0091 63.1905 30.4464 67.4561 32.5637C63.6301 28.3658 60.5837 23.0688 60.3522 18.3406C60.1253 13.7287 62.5311 10.4341 65.1405 7.63427C65.2261 7.54172 65.3117 7.45173 65.3973 7.36177C65.4389 7.31548 65.4829 7.27178 65.5244 7.22549C67.5602 5.09183 69.9337 2.98848 73.3692 3.24291C77.1371 3.52246 81.3145 6.68592 84.2435 10.3722C87.1725 14.0559 89.119 18.2406 91.0919 22.3247C93.0673 26.4063 95.2046 30.5921 98.3745 34.0807C94.081 28.6372 90.6193 22.4436 89.3406 16.4199C88.0619 10.3962 89.1872 4.6108 93.0137 1.77385C94.1754 0.939132 95.5197 0.395449 96.934 0.188297C97.0991 0.160797 97.2668 0.138473 97.4371 0.118746C100.979 -0.285247 105.209 0.942773 108.807 3.87815C112.77 7.11021 115.518 11.9016 116.885 16.4501C118.251 20.9986 118.397 25.3774 118.353 29.6105Z" fill="#F2F2F2" />
      <path d="M80.6896 48.4674L79.5888 48.4612C79.2393 48.2422 78.8881 48.0257 78.5353 47.8118C78.3169 47.6736 78.096 47.5406 77.8749 47.4049C74.2236 45.1696 70.5494 43.0255 66.8525 40.9726C63.1589 38.918 59.4467 36.958 55.7159 35.0927C55.617 35.0495 55.5363 34.973 55.4879 34.8764C55.4394 34.7798 55.4263 34.6693 55.4507 34.564C55.4547 34.5502 55.4609 34.5371 55.4691 34.5253C55.5211 34.4274 55.6374 34.3867 55.8071 34.4704C56.2647 34.7004 56.725 34.9304 57.1826 35.1655C60.9235 37.0628 64.6484 39.0547 68.3572 41.1413C72.0635 43.227 75.7486 45.4048 79.4127 47.6746C79.4897 47.7215 79.5669 47.7711 79.6439 47.818C79.9933 48.0345 80.3402 48.2509 80.6896 48.4674Z" fill="white" />
      <path d="M94.8829 48.5469L94.2022 48.5431C94.0487 48.3277 93.8978 48.1123 93.7443 47.897C90.1372 42.8268 86.5309 37.7566 82.9254 32.6865C77.0209 24.3858 71.1181 16.0852 65.2172 7.7846C65.1822 7.73992 65.1562 7.68887 65.1406 7.63427C65.0901 7.45048 65.2248 7.3427 65.3974 7.36176C65.4702 7.37218 65.5399 7.39803 65.602 7.4376C65.664 7.47716 65.7169 7.52953 65.7571 7.5912C69.0675 12.2462 72.377 16.8995 75.6857 21.551C81.5595 29.8101 87.4324 38.0684 93.3045 46.3257C93.678 46.8499 94.0515 47.3766 94.425 47.9008C94.5785 48.1162 94.732 48.3315 94.8829 48.5469Z" fill="white" />
      <path d="M110.047 44.5846C110.013 45.7345 109.937 46.866 109.837 47.9871C109.818 48.2015 109.799 48.4159 109.78 48.6303L109.066 48.6263C109.087 48.4119 109.109 48.1975 109.128 47.9831C109.279 46.3636 109.386 44.7256 109.401 43.0433C109.42 38.3789 108.966 33.7247 108.047 29.1522C107.071 24.2288 105.668 19.4 103.856 14.7205C101.953 9.78512 99.6598 5.01033 96.997 0.441932C96.9469 0.367474 96.9246 0.277653 96.934 0.188308C96.9635 -0.0157053 97.2345 -0.0762081 97.4371 0.118758C97.4771 0.157009 97.5116 0.200697 97.5395 0.248549C97.8689 0.816384 98.1924 1.38591 98.5098 1.95713C101.074 6.55088 103.269 11.3423 105.074 16.2857C106.793 20.9806 108.101 25.8166 108.982 30.7391C109.808 35.3057 110.165 39.9451 110.047 44.5846Z" fill="white" />
      <path d="M158.749 48.192H2.24818C1.65208 48.1925 1.08055 48.4301 0.659049 48.8526C0.237549 49.2752 0.000522933 49.8481 0 50.4456V156.746C0.000522933 157.344 0.237549 157.917 0.659049 158.339C1.08055 158.762 1.65208 158.999 2.24818 159H158.749C159.074 159 159.395 158.929 159.691 158.793C159.986 158.656 160.248 158.457 160.459 158.209C160.477 158.19 160.493 158.169 160.508 158.147C160.642 157.983 160.75 157.799 160.83 157.602C160.943 157.331 161.001 157.04 161 156.746V50.4456C160.999 49.8476 160.762 49.2744 160.34 48.8519C159.918 48.4293 159.346 48.192 158.749 48.192ZM160.358 156.746C160.358 157.061 160.266 157.368 160.092 157.63C159.938 157.861 159.729 158.049 159.484 158.178C159.257 158.296 159.005 158.357 158.749 158.356H2.24818C1.82233 158.356 1.41407 158.186 1.11295 157.884C0.811832 157.582 0.642432 157.173 0.641916 156.746V50.4456C0.642432 50.0187 0.811832 49.6095 1.11295 49.3077C1.41407 49.0058 1.82233 48.836 2.24818 48.8355H158.749C159.175 48.8355 159.584 49.005 159.886 49.3069C160.188 49.6088 160.357 50.0183 160.358 50.4456V156.746Z" fill="#3F3D56" />
      <path d="M160.678 57.2242H0.320312V57.8685H160.678V57.2242Z" fill="#3F3D56" />
      <path d="M5.78361 54.9565C6.8485 54.9565 7.71176 54.0912 7.71176 53.0238C7.71176 51.9564 6.8485 51.0911 5.78361 51.0911C4.71873 51.0911 3.85547 51.9564 3.85547 53.0238C3.85547 54.0912 4.71873 54.9565 5.78361 54.9565Z" fill="#3F3D56" />
      <path d="M11.3268 54.9565C12.3917 54.9565 13.255 54.0912 13.255 53.0238C13.255 51.9564 12.3917 51.0911 11.3268 51.0911C10.2619 51.0911 9.39868 51.9564 9.39868 53.0238C9.39868 54.0912 10.2619 54.9565 11.3268 54.9565Z" fill="#3F3D56" />
      <path d="M16.8703 54.9565C17.9352 54.9565 18.7984 54.0912 18.7984 53.0238C18.7984 51.9564 17.9352 51.0911 16.8703 51.0911C15.8054 51.0911 14.9421 51.9564 14.9421 53.0238C14.9421 54.0912 15.8054 54.9565 16.8703 54.9565Z" fill="#3F3D56" />
      <path d="M120.745 72.1368H40.3034C39.4145 72.1368 38.5619 71.7828 37.9334 71.1528C37.3048 70.5227 36.9517 69.6682 36.9517 68.7771C36.9517 67.8861 37.3048 67.0315 37.9334 66.4015C38.5619 65.7714 39.4145 65.4174 40.3034 65.4174H120.745C121.634 65.4174 122.487 65.7714 123.115 66.4015C123.744 67.0315 124.097 67.8861 124.097 68.7771C124.097 69.6682 123.744 70.5227 123.115 71.1528C122.487 71.7828 121.634 72.1368 120.745 72.1368ZM40.3034 65.9343C39.5512 65.9343 38.8299 66.2338 38.298 66.7669C37.7661 67.3001 37.4673 68.0232 37.4673 68.7771C37.4673 69.5311 37.7661 70.2542 38.298 70.7873C38.8299 71.3204 39.5512 71.6199 40.3034 71.6199H120.745C121.498 71.6199 122.219 71.3204 122.751 70.7873C123.283 70.2542 123.582 69.5311 123.582 68.7771C123.582 68.0232 123.283 67.3001 122.751 66.7669C122.219 66.2338 121.498 65.9343 120.745 65.9343H40.3034Z" fill="#3F3D56" />
      <path d="M46.9822 111.379H16.0434C14.9345 111.378 13.8712 110.936 13.087 110.15C12.3027 109.363 11.8614 108.297 11.8602 107.186V92.7132C11.8614 91.6012 12.3027 90.5353 13.087 89.7492C13.8712 88.963 14.9344 88.5209 16.0433 88.5196H46.9823C48.0912 88.5209 49.1545 88.963 49.9387 89.7492C50.723 90.5353 51.1643 91.6013 51.1655 92.7133V107.185C51.1643 108.297 50.723 109.363 49.9387 110.15C49.1544 110.936 48.0912 111.378 46.9822 111.379Z" stroke="#6919FF" stroke-width="0.4" />
      <path d="M95.9693 111.379H65.0305C63.9216 111.378 62.8583 110.936 62.074 110.15C61.2897 109.363 60.8485 108.297 60.8472 107.186V92.7132C60.8485 91.6012 61.2897 90.5353 62.074 89.7491C62.8583 88.963 63.9215 88.5209 65.0304 88.5196H95.9694C97.0783 88.5209 98.1415 88.963 98.9258 89.7492C99.7101 90.5353 100.151 91.6013 100.153 92.7133V107.185C100.151 108.297 99.7101 109.363 98.9258 110.15C98.1415 110.936 97.0783 111.378 95.9693 111.379Z" stroke="#6919FF" stroke-width="0.4" />
      <path d="M144.957 111.379H114.018C112.909 111.378 111.846 110.936 111.061 110.15C110.277 109.363 109.836 108.297 109.835 107.186V92.7132C109.836 91.6012 110.277 90.5353 111.061 89.7492C111.846 88.963 112.909 88.5209 114.018 88.5196H144.957C146.066 88.5209 147.129 88.963 147.913 89.7492C148.697 90.5353 149.139 91.6013 149.14 92.7133V107.185C149.139 108.297 148.697 109.363 147.913 110.15C147.129 110.936 146.066 111.378 144.957 111.379Z" stroke="#6919FF" stroke-width="0.4" />
      <path d="M46.9822 141.875H16.0434C14.9345 141.874 13.8712 141.431 13.087 140.645C12.3027 139.859 11.8614 138.793 11.8602 137.681V123.209C11.8614 122.097 12.3027 121.031 13.087 120.245C13.8712 119.459 14.9344 119.017 16.0433 119.015H46.9823C48.0912 119.017 49.1545 119.459 49.9387 120.245C50.723 121.031 51.1643 122.097 51.1655 123.209V137.681C51.1643 138.793 50.723 139.859 49.9387 140.645C49.1544 141.431 48.0912 141.874 46.9822 141.875Z" stroke="#6919FF" stroke-width="0.4" />
      <path d="M95.9693 141.875H65.0305C63.9216 141.874 62.8583 141.431 62.074 140.645C61.2897 139.859 60.8485 138.793 60.8472 137.681V123.209C60.8485 122.097 61.2897 121.031 62.074 120.245C62.8583 119.459 63.9215 119.017 65.0304 119.015H95.9694C97.0783 119.017 98.1415 119.459 98.9258 120.245C99.7101 121.031 100.151 122.097 100.153 123.209V137.681C100.151 138.793 99.7101 139.859 98.9258 140.645C98.1415 141.431 97.0783 141.874 95.9693 141.875Z" stroke="#6919FF" stroke-width="0.4" />
      <path d="M144.957 141.875H114.018C112.909 141.874 111.846 141.431 111.061 140.645C110.277 139.859 109.836 138.793 109.835 137.681V123.209C109.836 122.097 110.277 121.031 111.061 120.245C111.846 119.459 112.909 119.017 114.018 119.015H144.957C146.066 119.017 147.129 119.459 147.913 120.245C148.697 121.031 149.139 122.097 149.14 123.209V137.681C149.139 138.793 148.697 139.859 147.913 140.645C147.129 141.431 146.066 141.874 144.957 141.875Z" stroke="#6919FF" stroke-width="0.4" />
    </svg>
  </div>
</section>

<section class="flex gap-20 items-center md:pt-20 pt-10 mx-auto w-11/12 max-w-5xl 2xl:max-w-7xl md:pb-12 pb-6">
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3">
    <?php foreach ($projects as $project) {
      require 'templates/project_part.php';
    } ?>
  </div>
</section>

<?php if ($totalPages > 1) { ?>
  <section class="mx-auto w-11/12 max-w-5xl 2xl:max-w-7xl md:pb-24 pb-12">
    <div class="flex items-center justify-between px-4 py-3 sm:px-6">
      <div class="flex flex-1 justify-between sm:hidden">
        <a href="<?php if (isset($_GET['page'])) { if ($_GET['page'] > 1) { echo '?page='.(int)--$_GET['page']; } }?>" class="<?php if (!isset($_GET['page']) || (int)$page < 2) { echo 'pointer-events-none'; } ?> relative inline-flex items-center rounded-md border border-buttonColor-borderColor-normal px-4 py-2 text-sm font-medium text-textColors-cardPrimary hover:bg-accentColor-100/30">Previous</a>
        <a href="?page=<?= min($page + 1, $totalPages); ?>" class="<?php if ($page >= $totalPages) { echo 'pointer-events-none'; } ?> relative ml-3 inline-flex items-center rounded-md border border-buttonColor-borderColor-normal px-4 py-2 text-sm font-medium text-textColors-cardPrimary hover:bg-accentColor-100/30">Next</a>
      </div>
      <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
        <div>
          <p class="text-sm text-textColors-cardPrimary/[.5]">
            Showing
            <span class="font-medium text-textColors-cardPrimary/[.7]"><?php $start = ($page - 1) * _HOME_LIMIT_PROJECTS_ + 1; echo $start?></span>
            to
            <span class="font-medium text-textColors-cardPrimary/[.7]"><?php $end = min($start + _HOME_LIMIT_PROJECTS_ - 1, $totalProjects); echo $end ?></span>
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

require_once __DIR__ . '/templates/footer.php';
?>