<?php 
require_once '../Controllers/Database/Database.php';
require_once '../Controllers/Post/Post.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up - PWA HTML Template</title>
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
    <link rel="manifest" href="./manifest.json" />
    <link
      rel="shortcut icon"
      href="./assets/images/favicon.ico"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="./assets/css/swiper.min.css" />
  <link href="assets/css/index.css" rel="stylesheet"></head>
  <body class="">
    <div class="container px-6 pb-8 pt-12 h-dvh text-n900 dark:bg-n0">
      <div class="flex justify-center items-center text-center flex-col">
        <h1 class="text-2xl font-medium dark:text-white">Create an Account</h1>
        <p class="tet-sm text-n500 dark:text-darkN500 pt-3 px-4">
          Stay connected, follow teams, and never miss thrilling Stay connected
        </p>
      </div>

      <form class="flex flex-col gap-4 pt-8" method="post">
        <div class="flex flex-col justify-start">
          <p class="text-sm font-semibold pb-2 dark:text-white">Name</p>
          <div
            class="p-4 bg-n20 border border-n40 dark:bg-darkN20 dark:border-darkN40 rounded-xl"
          >
            <input
              type="text"
              placeholder="Enter your name"
              name="name"
              required
              class="w-full bg-transparent outline-none placeholder:text-n90 text-sm dark:text-white"
            />
          </div>
        </div>
        <div class="flex flex-col justify-start">
          <p class="text-sm font-semibold pb-2 dark:text-white">Phone</p>
          <div
            class="p-4 bg-n20 border border-n40 dark:bg-darkN20 dark:border-darkN40 rounded-xl flex justify-between items-center"
          >
            <input
              type="tel"
              min="9"
              name="phone"
              required
              placeholder="Telephone"
              class="flex-1 bg-transparent outline-none placeholder:text-n90 text-sm passwordField dark:text-white"
            />
            <i
              class="ph ph-eye-slash passowordShow cursor-pointer text-n90 text-lg !leading-none"
            ></i>
          </div>
        </div>
        <div class="flex flex-col justify-start">
          <p class="text-sm font-semibold pb-2 dark:text-white">
            Password
          </p>
          <div
            class="p-4 bg-n20 border border-n40 dark:bg-darkN20 dark:border-darkN40 rounded-xl flex justify-between items-center"
          >
            <input
              type="password"
              placeholder="Password"
              name="password"
              min="4"
              required
              class="flex-1 bg-transparent outline-none placeholder:text-n90 text-sm confirmPasswordField dark:text-white"
            />
            <i
              class="ph ph-eye-slash confirmPasswordShow cursor-pointer text-n90 text-lg !leading-none"
            ></i>
          </div>
        </div>
        <div class="w-full">
          <label
            for="remember"
            class="cursor-pointer font-semibold flex gap-3 dark:text-white"
          >
            <input id="remember" checked class="hidden peer" type="checkbox" />
            <span
              class="border border-n40 dark:border-darkN40 size-6 rounded-md flex justify-center items-center text-transparent peer-checked:text-white peer-checked:bg-g300"
            >
              <i class="ph ph-check"></i>
            </span>
            Remember Password
          </label>
          <span style="color: red;"><?php echo $error ?></span>
        </div>
        <div class="my-3 flex">
          <button type="submit" name="signup" class="flex-1 py-3 bg-g300 text-white text-center rounded-xl">Sign up</button>
        </div>
      </form>      
      <div class="pt-4 text-center text-sm text-n500 dark:text-darkN500">
        Already have an account?
        <a href="./sign-in.php" class="text-g300 font-medium">Sign In</a> here
      </div>
    </div>

    <!-- ======Javascript Dependencies -->
    <script src="./assets/js/main.js"></script>
  <script defer src="index.js"></script></body>
</html>
