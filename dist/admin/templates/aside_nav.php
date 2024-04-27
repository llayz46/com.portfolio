<?php
require_once __DIR__ . '/../../lib/config.php';
require_once __DIR__ . '/../../lib/session.php';
require_once __DIR__ . '/../../lib/menu.php';

$currentPage = basename($_SERVER['SCRIPT_FILENAME']);

adminOnly();
?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$adminMenu[$currentPage]['head_title']?></title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-bodyBack w-screen flex">
  <aside class="w-2/12 bg-headerBack h-screen flex flex-col justify-between">
    <div class="flex flex-col">
      <a href="../index.php" class="flex gap-3 items-center p-8">
        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_212_394)">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H26V26H0V0ZM16.4513 5.07811H13.7038C13.3877 5.07811 13.0953 5.24537 12.9377 5.5163L3.85868 21.1074H6.61232C6.92493 21.1074 7.21377 20.9427 7.36963 20.6744L16.4513 5.07811ZM21.0656 21.1074H12.301H9.54736L18.6263 5.51631C18.784 5.24538 19.0763 5.07812 19.3925 5.07812H22.1399L14.359 18.4408L21.0674 18.4904C21.2902 18.4922 21.4707 18.6716 21.4707 18.8929V20.7066C21.4707 20.9279 21.2893 21.1074 21.0656 21.1074Z" fill="white" />
          </g>
          <defs>
            <clipPath id="clip0_212_394">
              <rect width="26" height="26" fill="white" />
            </clipPath>
          </defs>
        </svg>
        <p class="textLarge text-white">llayz</p>
      </a>

      <nav>
        <ul class="flex flex-col gap-1 pt-4">
          <?php
          foreach ($adminMenu as $url => $item) { ?>
            <li class="<?php if($currentPage === $url) { echo 'bg-accentColor-10 border-r-4 border-accentColor-100'; } else { echo 'md:hover:bg-accentColor-10'; } ?>">
              <a href="<?=$url?>" class="py-2 pl-8 flex items-center gap-[10px]">
                <?php if($currentPage === $url) {
                  echo str_replace('color', '#EDEDED', $item['icon']);
                } else {
                  echo str_replace('color', '#7D7D7D', $item['icon']);
                } ?>
                <p class="text-base <?php if($currentPage === $url) { echo 'text-textColors-primary'; } else { echo 'text-textColors-navPrimary'; } ?> font-medium"><?=$item['menu_title']?></p>
              </a>
            </li>
            <?php if ($item === array_values($adminMenu)[1]) { ?>
              <div class="mx-8 h-px bg-textColors-navPrimary my-6"></div>
            <?php } ?>
          <?php } ?>
        </ul>
      </nav>
    </div>
    <div class="flex gap-3 items-center p-8">
      <img width="40" height="40" src="../assets/image/avatar-default.png" alt="" class="rounded-full">
      <div class="">
        <p class="text-base/5 text-textColors-primary font-medium">Hello <?=ucfirst($_SESSION['user']['name'])?>!</p>
        <p class="text-sm/tight text-textColors-navPrimary">user@mail.com</p>
      </div>
    </div>
  </aside>