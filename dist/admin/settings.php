<?php
require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/session.php';
require_once __DIR__ . '/../lib/pdo.php';
require_once __DIR__ . '/../lib/user.php';
require_once __DIR__ . '/../lib/menu.php';

$actualPage = basename($_SERVER['SCRIPT_FILENAME']);

// Mise à jour profile
if (isset($_POST['profileUpdate'])) {
  $userId = $_SESSION['user']['id'];

  if (isset($_POST['profile-name']) && isset($_POST['profile-email'])) {
    $name = htmlspecialchars(ucwords(strtolower(trim($_POST['profile-name']))));
    $email = htmlspecialchars(strtolower(trim($_POST['profile-email'])));

    if ($name === $_SESSION['user']['name'] && $email === $_SESSION['user']['email']) {
      $_SESSION['updateErrors'][] = 'You have not made any changes on the profile name and email address';
    } else {
      if ($_SESSION['user']['name'] !== $name && $_SESSION['user']['email'] !== $email) {
        $res = updateUserProfile($pdo, $userId, $name, $email);
        if ($res) {
          $_SESSION['user']['name'] = $name;
          $_SESSION['user']['email'] = $email;
          $_SESSION['updateSuccess'][] = 'Profile successfully updated';
        } else {
          $_SESSION['updateErrors'][] = 'An error occurred while updating the profile';
        }
      } else if ($_SESSION['user']['name'] !== $name) {
        $res = updateUserProfile($pdo, $userId, $name);
        if ($res) {
          $_SESSION['user']['name'] = $name;
          $_SESSION['updateSuccess'][] = 'Profile name successfully updated';
        } else {
          $_SESSION['updateErrors'][] = 'An error occurred while updating the profile name';
        }
      } else if ($_SESSION['user']['email'] !== $email) {
        $res = updateUserProfile($pdo, $userId, null, $email);
        if ($res) {
          $_SESSION['user']['email'] = $email;
          $_SESSION['updateSuccess'][] = 'Profile email successfully updated';
        } else {
          $_SESSION['updateErrors'][] = 'An error occurred while updating the profile email';
        }
      }
    }
  } else {
    $_SESSION['updateErrors'][] = 'Please fill in all the fields';
  }

  header('Location: ' . $_SERVER['PHP_SELF']);
  exit();
}

// Mise à jour du mot de passe
if (isset($_POST['passwordUpdate'])) {
  $userId = $_SESSION['user']['id'];

  if (isset($_POST['current-password']) && isset($_POST['new-password']) && isset($_POST['confirm-new-password'])) {
    $currentPassword = htmlspecialchars(trim($_POST['current-password']));
    $newPassword = htmlspecialchars(trim($_POST['new-password']));
    $confirmNewPassword = htmlspecialchars(trim($_POST['confirm-new-password']));

    if (password_verify($currentPassword, $_SESSION['user']['password'])) {
      if ($newPassword === $confirmNewPassword) {
        $res = updatePassword($pdo, $userId, $newPassword);
        if ($res) {
          $_SESSION['passwordSuccess'][] = 'Password successfully updated';
        } else {
          $_SESSION['passwordErrors'][] = 'An error occurred while updating the password';
        }
      } else {
        $_SESSION['passwordErrors'][] = 'The new password and the confirmation do not match';
      }
    } else {
      $_SESSION['passwordErrors'][] = 'The current password is incorrect';
    }
  }

  header('Location: ' . $_SERVER['PHP_SELF']);
  exit();
}

require_once 'templates/aside_nav.php';
require_once 'templates/header.php';
?>

<section class="px-8 md:px-12 pt-8 h-full">
  <div class="flex justify-between pb-6 border-b border-textColors-navPrimary">
    <div class="flex flex-col gap-2">
      <h1 class="text-2xl text-textColors-primary font-semibold"><?= $adminMenu[$actualPage]['menu_title'] ?></h1>
      <p class="text-base text-textColors-navPrimary font-medium">Customize your profile settings here, just for fun!</p>
    </div>
  </div>
  <div class="pt-8 gap-10 mx-4 grid grid-cols-1 xl:grid-cols-2 md:pb-12 pb-6">
    <div class="p-6 border border-buttonColor-borderColor-normal bg-bodyBack rounded-xl z-20 w-full flex flex-col gap-2 h-fit">
      <h2 class="text-xl text-textColors-primary font-medium">Account Information</h2>
      <p class="text-base text-textColors-navPrimary font-medium">Edit your profile quickly</p>
      <div class="my-5 relative w-fit cursor-pointer">
        <img width="90" height="90" src="../assets/image/avatar-default.png" alt="" class="rounded-full">
        <div class="bg-textColors-primary p-1 rounded-full w-6 h-6 flex items-center justify-center absolute -bottom-3 left-2/4 -translate-x-2/4">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="11" viewBox="0 0 14 11" fill="none" class="fill-bodyBack">
            <path d="M13.5814 2.198C13.3037 1.92036 12.9335 1.7584 12.5402 1.7584H10.8512V0.856065C10.8512 0.601559 10.7587 0 9.87945 0H4.09523C3.2623 0 3.16975 0.601559 3.16975 0.856065V1.7584H1.48076C0.67097 1.7584 0 2.42937 0 3.23916V8.60692C0 9.41671 0.67097 10.0877 1.48076 10.0877H12.5171C13.3268 10.0877 13.9978 9.41671 13.9978 8.60692V3.23916C14.021 2.84584 13.859 2.47565 13.5814 2.198ZM12.9567 8.60692C12.9567 8.83829 12.7716 9.04652 12.5171 9.04652H1.48076C1.24939 9.04652 1.04116 8.86143 1.04116 8.60692V3.23916C1.04116 3.00779 1.22625 2.79956 1.48076 2.79956H3.4474C3.86386 2.79956 4.21091 2.45251 4.21091 2.03605V1.04116H9.7869V2.03605C9.7869 2.45251 10.134 2.79956 10.5504 2.79956H12.5402C12.6559 2.79956 12.7716 2.84584 12.841 2.93838C12.9335 3.03093 12.9567 3.12348 12.9567 3.23916V8.60692Z" />
            <path d="M6.91803 3.07727C5.71491 3.07727 4.74316 4.04902 4.74316 5.27527C4.74316 6.47839 5.69178 7.427 6.91803 7.427C8.12115 7.427 9.0929 6.45526 9.0929 5.27527C9.0929 4.09529 8.09801 3.07727 6.91803 3.07727ZM6.91803 6.38584C6.2702 6.38584 5.78432 5.89997 5.78432 5.27527C5.78432 4.65058 6.29334 4.11843 6.91803 4.11843C7.54273 4.11843 8.05174 4.65058 8.05174 5.27527C8.05174 5.89997 7.54273 6.38584 6.91803 6.38584Z" />
            <path d="M2.79965 3.49365H2.2675C1.98986 3.49365 1.73535 3.72502 1.73535 4.0258C1.73535 4.32658 1.96672 4.55795 2.2675 4.55795H2.79965C3.07729 4.55795 3.3318 4.32658 3.3318 4.0258C3.3318 3.72502 3.10043 3.49365 2.79965 3.49365Z" />
          </svg>
        </div>
      </div>
      <form method="post" class="flex flex-col gap-5">
        <label for="profile-name" class="flex flex-col gap-2 text-base text-textColors-contactPrimary font-medium">
          Profile Name
          <input type="text" name="profile-name" id="profile-name" value="<?= ucfirst($_SESSION['user']['name']) ?>" class="placeholder:text-textColors-contactSecondary py-2 pl-3 rounded-md border font-normal border-buttonColor-borderColor-normal bg-transparent focus-visible:outline outline-1 outline-transparent focus-visible:outline-accentColor-yellow/50 caret-accentColor-yellow transition-all duration-500" required>
        </label>
        <label for="profile-email" class="flex flex-col gap-2 text-base text-textColors-contactPrimary font-medium">
          Email Address
          <input type="text" name="profile-email" id="profile-email" value="<?= $_SESSION['user']['email'] ?>" class="placeholder:text-textColors-contactSecondary py-2 pl-3 rounded-md border font-normal border-buttonColor-borderColor-normal bg-transparent focus-visible:outline outline-1 outline-transparent focus-visible:outline-accentColor-yellow/50 caret-accentColor-yellow transition-all duration-500" required>
        </label>
        <input class="mt-1 py-2 z-10 text-sm leading-6 font-medium text-textColors-primary bg-accentColor-100/90 rounded-md cursor-pointer md:hover:bg-accentColor-100 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-accentColor-yellow/60 ring-offset-2 ring-offset-headerBack" type="submit" value="Update Now" name="profileUpdate">
      </form>
      <?php if (isset($_SESSION['updateErrors'])) { ?>
        <div class="flex gap-3 py-3 px-5 bg-red-200 rounded-md items-center w-fit mt-4">
          <?php foreach ($_SESSION['updateErrors'] as $error) { ?>
            <div class="bg-red-600 p-1 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                <path d="M6 0.337402C2.86875 0.337402 0.3375 2.86865 0.3375 5.9999C0.3375 9.13115 2.86875 11.6812 6 11.6812C9.13125 11.6812 11.6813 9.13115 11.6813 5.9999C11.6813 2.86865 9.13125 0.337402 6 0.337402ZM6 10.8374C3.3375 10.8374 1.18125 8.6624 1.18125 5.9999C1.18125 3.3374 3.3375 1.18115 6 1.18115C8.6625 1.18115 10.8375 3.35615 10.8375 6.01865C10.8375 8.6624 8.6625 10.8374 6 10.8374Z" fill="white" />
                <path d="M7.725 4.25596C7.55625 4.08721 7.29375 4.08721 7.125 4.25596L6 5.39971L4.85625 4.25596C4.6875 4.08721 4.425 4.08721 4.25625 4.25596C4.0875 4.42471 4.0875 4.68721 4.25625 4.85596L5.4 5.99971L4.25625 7.14346C4.0875 7.31221 4.0875 7.57471 4.25625 7.74346C4.33125 7.81846 4.44375 7.87471 4.55625 7.87471C4.66875 7.87471 4.78125 7.83721 4.85625 7.74346L6 6.59971L7.14375 7.74346C7.21875 7.81846 7.33125 7.87471 7.44375 7.87471C7.55625 7.87471 7.66875 7.83721 7.74375 7.74346C7.9125 7.57471 7.9125 7.31221 7.74375 7.14346L6.6 5.99971L7.74375 4.85596C7.89375 4.68721 7.89375 4.42471 7.725 4.25596Z" fill="white" />
              </svg>
            </div>
            <p class="text-base font-medium text-red-700"><?= $error ?></p>
          <?php } ?>
        </div>
        <?php unset($_SESSION['updateErrors']) ?>
      <?php } else if (isset($_SESSION['updateSuccess'])) { ?>
        <div class="flex gap-3 py-3 px-5 bg-green-200 rounded-md items-center w-fit mt-4">
          <?php foreach ($_SESSION['updateSuccess'] as $message) { ?>
            <div class="bg-green-600 p-1 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                <path d="M6 0.337402C2.86875 0.337402 0.337502 2.86865 0.337502 5.9999C0.337502 9.13115 2.86875 11.6812 6 11.6812C9.13125 11.6812 11.6813 9.13115 11.6813 5.9999C11.6813 2.86865 9.13125 0.337402 6 0.337402ZM6 10.8374C3.3375 10.8374 1.18125 8.6624 1.18125 5.9999C1.18125 3.3374 3.3375 1.18115 6 1.18115C8.6625 1.18115 10.8375 3.35615 10.8375 6.01865C10.8375 8.6624 8.6625 10.8374 6 10.8374Z" fill="white" />
                <path d="M7.6125 4.25626L5.38125 6.43126L4.36875 5.43751C4.2 5.26876 3.9375 5.28751 3.76875 5.43751C3.6 5.60626 3.61875 5.86876 3.76875 6.03751L4.96875 7.20001C5.08125 7.31251 5.23125 7.36876 5.38125 7.36876C5.53125 7.36876 5.68125 7.31251 5.79375 7.20001L8.2125 4.87501C8.38125 4.70626 8.38125 4.44376 8.2125 4.27501C8.04375 4.10626 7.78125 4.10626 7.6125 4.25626Z" fill="white" />
              </svg>
            </div>
            <p class="text-base font-medium text-emerald-900"><?= $message ?></p>
          <?php } ?>
        </div>
        <?php unset($_SESSION['updateSuccess']) ?>
      <?php } ?>
    </div>

    <div class="p-6 border border-buttonColor-borderColor-normal bg-bodyBack rounded-xl z-20 w-full flex flex-col gap-2 h-fit">
      <h2 class="text-xl text-textColors-primary font-medium pb-6">Password</h2>
      <form method="post" class="flex flex-col gap-5">
        <label for="current-password" class="flex flex-col gap-2 text-base text-textColors-contactPrimary font-medium">
          Current Password
          <input type="text" name="current-password" id="current-password" value="" class="placeholder:text-textColors-contactSecondary py-2 pl-3 rounded-md border font-normal border-buttonColor-borderColor-normal bg-transparent focus-visible:outline outline-1 outline-transparent focus-visible:outline-accentColor-yellow/50 caret-accentColor-yellow transition-all duration-500" required>
        </label>
        <label for="new-password" class="flex flex-col gap-2 text-base text-textColors-contactPrimary font-medium">
          New Password
          <input type="text" name="new-password" id="new-password" value="" class="placeholder:text-textColors-contactSecondary py-2 pl-3 rounded-md border font-normal border-buttonColor-borderColor-normal bg-transparent focus-visible:outline outline-1 outline-transparent focus-visible:outline-accentColor-yellow/50 caret-accentColor-yellow transition-all duration-500" required>
        </label>
        <label for="confirm-new-password" class="flex flex-col gap-2 text-base text-textColors-contactPrimary font-medium">
          Confirm New Password
          <input type="text" name="confirm-new-password" id="confirm-new-password" value="" class="placeholder:text-textColors-contactSecondary py-2 pl-3 rounded-md border font-normal border-buttonColor-borderColor-normal bg-transparent focus-visible:outline outline-1 outline-transparent focus-visible:outline-accentColor-yellow/50 caret-accentColor-yellow transition-all duration-500" required>
        </label>
        <input class="mt-1 py-2 z-10 text-sm leading-6 font-medium text-textColors-primary bg-accentColor-100/90 rounded-md cursor-pointer md:hover:bg-accentColor-100 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-accentColor-yellow/60 ring-offset-2 ring-offset-headerBack" type="submit" value="Update Password" name="passwordUpdate">
      </form>
      <?php if (isset($_SESSION['passwordErrors'])) { ?>
        <div class="flex gap-3 py-3 px-5 bg-red-200 rounded-md items-center w-fit mt-4">
          <?php foreach ($_SESSION['passwordErrors'] as $error) { ?>
            <div class="bg-red-600 p-1 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                <path d="M6 0.337402C2.86875 0.337402 0.3375 2.86865 0.3375 5.9999C0.3375 9.13115 2.86875 11.6812 6 11.6812C9.13125 11.6812 11.6813 9.13115 11.6813 5.9999C11.6813 2.86865 9.13125 0.337402 6 0.337402ZM6 10.8374C3.3375 10.8374 1.18125 8.6624 1.18125 5.9999C1.18125 3.3374 3.3375 1.18115 6 1.18115C8.6625 1.18115 10.8375 3.35615 10.8375 6.01865C10.8375 8.6624 8.6625 10.8374 6 10.8374Z" fill="white" />
                <path d="M7.725 4.25596C7.55625 4.08721 7.29375 4.08721 7.125 4.25596L6 5.39971L4.85625 4.25596C4.6875 4.08721 4.425 4.08721 4.25625 4.25596C4.0875 4.42471 4.0875 4.68721 4.25625 4.85596L5.4 5.99971L4.25625 7.14346C4.0875 7.31221 4.0875 7.57471 4.25625 7.74346C4.33125 7.81846 4.44375 7.87471 4.55625 7.87471C4.66875 7.87471 4.78125 7.83721 4.85625 7.74346L6 6.59971L7.14375 7.74346C7.21875 7.81846 7.33125 7.87471 7.44375 7.87471C7.55625 7.87471 7.66875 7.83721 7.74375 7.74346C7.9125 7.57471 7.9125 7.31221 7.74375 7.14346L6.6 5.99971L7.74375 4.85596C7.89375 4.68721 7.89375 4.42471 7.725 4.25596Z" fill="white" />
              </svg>
            </div>
            <p class="text-base font-medium text-red-700"><?= $error ?></p>
          <?php } ?>
        </div>
        <?php unset($_SESSION['passwordErrors']) ?>
      <?php } else if (isset($_SESSION['passwordSuccess'])) { ?>
        <div class="flex gap-3 py-3 px-5 bg-green-200 rounded-md items-center w-fit mt-4">
          <?php foreach ($_SESSION['passwordSuccess'] as $message) { ?>
            <div class="bg-green-600 p-1 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                <path d="M6 0.337402C2.86875 0.337402 0.337502 2.86865 0.337502 5.9999C0.337502 9.13115 2.86875 11.6812 6 11.6812C9.13125 11.6812 11.6813 9.13115 11.6813 5.9999C11.6813 2.86865 9.13125 0.337402 6 0.337402ZM6 10.8374C3.3375 10.8374 1.18125 8.6624 1.18125 5.9999C1.18125 3.3374 3.3375 1.18115 6 1.18115C8.6625 1.18115 10.8375 3.35615 10.8375 6.01865C10.8375 8.6624 8.6625 10.8374 6 10.8374Z" fill="white" />
                <path d="M7.6125 4.25626L5.38125 6.43126L4.36875 5.43751C4.2 5.26876 3.9375 5.28751 3.76875 5.43751C3.6 5.60626 3.61875 5.86876 3.76875 6.03751L4.96875 7.20001C5.08125 7.31251 5.23125 7.36876 5.38125 7.36876C5.53125 7.36876 5.68125 7.31251 5.79375 7.20001L8.2125 4.87501C8.38125 4.70626 8.38125 4.44376 8.2125 4.27501C8.04375 4.10626 7.78125 4.10626 7.6125 4.25626Z" fill="white" />
              </svg>
            </div>
            <p class="text-base font-medium text-emerald-900"><?= $message ?></p>
          <?php } ?>
        </div>
        <?php unset($_SESSION['passwordSuccess']) ?>
      <?php } ?>
    </div>
  </div>
</section>

<?php
require_once 'templates/footer.php';
?>