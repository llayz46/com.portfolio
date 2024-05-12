<?php
require_once __DIR__ . '/lib/required_files.php';
require_once __DIR__ . '/lib/user.php';
require_once __DIR__ . '/lib/session.php';

$errors = [];

if (isset($_SESSION['user'])) {
  header('Location: index.php');
}

if (isset($_POST['loginUser'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $user = verifyUserAndRoleByLoginPassword($pdo, $email, $password);

  if ($user) {
    session_regenerate_id(true);
    $_SESSION['user'] = $user;

    if ($user['role'] === 'admin') {
      header('Location: admin/index.php');
    } else {
      header('Location: index.php');
    }
  } else {
    $errors[] = 'Invalid email or password';
  }
}

require_once __DIR__ . '/templates/header.php';
?>

<div class="flex w-11/12 max-w-5xl 2xl:max-w-7xl mx-auto">
  <section class="min-h-screen w-full md:w-5/6 flex flex-col gap-8 max-md:items-center md:justify-center max-md:pt-32 md:border-r border-buttonColor-borderColor-normal">
    <div class="flex flex-col w-10/12 justify-start gap-2">
      <h2 class="textLarge text-textColors-primary">Sign in</h2>
      <p class="text-base/6 text-textColors-secondary">To access to the admin dashboard</p>
    </div>

    <?php if ($errors) { ?>
      <div class="flex items-center w-fit p-4 text-sm text-red-800 rounded-lg bg-headerBack border border-red-800" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Info</span>
        <div>
          <?php foreach ($errors as $error) { ?>
            <p class="font-medium"><?=$error?></p>
          <?php } ?>
        </div>
      </div>
    <?php } ?>

    <form method="POST" class="flex flex-col max-md:justify-center w-10/12 gap-6 z-10 md:w-6/12">
      <label for="email" class="flex flex-col gap-1.5 text-sm text-textColors-contactPrimary">
        Email
        <input type="email" id="email" name="email" placeholder="example@mail.com" class="placeholder:text-textColors-contactSecondary py-2 pl-3 rounded-md border border-buttonColor-borderColor-normal bg-transparent focus-visible:outline outline-1 outline-transparent focus-visible:outline-accentColor-yellow/50 caret-accentColor-yellow transition-all duration-500" required>
      </label>
      <label for="password" class="flex flex-col gap-1.5 text-sm text-textColors-contactPrimary">
        Password
        <input type="password" id="password" name="password" placeholder="Must have at least 6 characters" class="placeholder:text-textColors-contactSecondary py-2 pl-3 rounded-md border border-buttonColor-borderColor-normal bg-transparent focus-visible:outline outline-1 outline-transparent focus-visible:outline-accentColor-yellow/50 caret-accentColor-yellow transition-all duration-500" required>
      </label>
      <input class="mt-5 md:mt-0 py-2 text-base/6 font-medium text-bodyBack bg-textColors-primary rounded-md cursor-pointer md:hover:bg-textColors-secondary transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-accentColor-yellow/60 ring-offset-2 ring-offset-headerBack" type="submit" value="Sign in" name="loginUser">
    </form>
  </section>

  <section class="hidden min-h-screen w-1/6 md:flex items-center">
    <a href="../index.php" class="flex gap-1 items-center py-6 md:-left-1 relative bg-bodyBack scale-125 md:hover:scale-[1.35] transition-all">
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
  </section>
</div>

<script src="../assets/javascript/nav.js"></script>
<script src="../assets/javascript/scrollAnimation.js"></script>