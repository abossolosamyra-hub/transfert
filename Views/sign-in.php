<?php
require_once '../Controllers/Database/Database.php';
require_once '../Controllers/Post/Post.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign In - PWA HTML Template</title>
  <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
  <link rel="manifest" href="./manifest.json" />
  <link
    rel="shortcut icon"
    href="./assets/images/favicon.ico"
    type="image/x-icon" />
  <link rel="stylesheet" href="./assets/css/swiper.min.css" />
  <link href="assets/css/index.css" rel="stylesheet">
</head>

<body class="">
  <div class="container px-6 pb-8 pt-12 h-dvh text-n900 dark:bg-n0">
    <div class="flex justify-center items-center text-center flex-col">
      <h1 class="text-2xl font-medium dark:text-white">Sign In</h1>
      <p class="tet-sm text-n500 dark:text-darkN500 pt-3 px-4">
        Stay connected, follow teams, and never miss thrilling Stay connected
      </p>
    </div>

    <form class="flex flex-col gap-4 pt-8" method="post">
      <div class="flex flex-col justify-start">
        <p class="text-sm font-semibold pb-2 dark:text-white">Phone</p>
        <div
          class="p-4 bg-n20 border border-n40 dark:bg-darkN20 dark:border-darkN40 rounded-xl">
          <input
            type="tel"
            placeholder="Enter phone"
            name="phone"
            required
            class="w-full bg-transparent outline-none placeholder:text-n90 text-sm dark:text-white" />
        </div>
      </div>
      <div class="flex flex-col justify-start">
        <p class="text-sm font-semibold pb-2 dark:text-white">Password</p>
        <div
          class="p-4 bg-n20 border border-n40 dark:bg-darkN20 dark:border-darkN40 rounded-xl flex justify-between items-center">
          <input
            type="password"
            placeholder="password"
            name="password"
            required
            class="flex-1 bg-transparent outline-none placeholder:text-n90 text-sm passwordField dark:text-white" />
          <i
            class="ph ph-eye-slash passowordShow cursor-pointer text-n90 text-lg !leading-none"></i>
        </div>
        <span style="color: red;"><?php echo $error ?></span>
        <!-- <div class="flex justify-end pt-2">
            <a
              href="./forgot-password.html"
              class="text-sm font-medium text-g300"
              >Forgot password?</a
            >
          </div> -->
      </div>
      <div class="my-3 flex">
          <button type="submit" name="signin" class="flex-1 py-3 bg-g300 text-white text-center rounded-xl">Sign in</button>
        </div>
    </form>

    <div class="pt-4 text-center text-sm text-n500 dark:text-darkN500">
      Don’t have an account?
      <a href="./sign-up.php" class="text-g300 font-medium">Sign Up</a> here
    </div>
  </div>

  <!-- ======Javascript Dependencies -->
  <script src="./assets/js/main.js"></script>
  <script defer src="index.js"></script>
</body>

</html>