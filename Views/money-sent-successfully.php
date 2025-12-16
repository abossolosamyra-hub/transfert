<?php
require_once __DIR__ . '/../Controllers/Database/Database.php';
require_once __DIR__ . '/../Controllers/Session/GetSession.php';
require_once __DIR__ . '/../Controllers/Get/Get.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Receipt - PWA HTML Template</title>

  <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
  <link rel="manifest" href="manifest.json" />
  <link
    rel="shortcut icon"
    href="assets/images/favicon.ico"
    type="image/x-icon" />
  <link href="assets/css/index.css" rel="stylesheet">
</head>

<body class="">
  <main class="container dark:bg-n0 text-n900 dark:text-white pt-8 min-h-dvh">
    <div class="px-6 flex justify-between items-center">
      <a
        href="home.php"
        class="flex justify-center items-center bg-g300 w-12 h-12 rounded-full text-2xl !leading-none text-white">
        <i class="ph ph-caret-left"></i>
      </a>
      <p class="text-2xl font-semibold">Recu</p>
      <div class="flex justify-start items-center gap-4">
        <button class="">
          <i class="ph ph-share-network text-2xl"></i>
        </button>
        <button class="">
          <i class="ph ph-download-simple text-2xl"></i>
        </button>
      </div>
    </div>
    <div class="px-6 pt-8">
      <div
        class="p-6 border border-bgColor2 bg-bgColor flex justify-center items-center rounded-xl flex-col">
        <p
          class="border-b pb-4 w-full text-center border-n40 dark:border-darkN40 border-dashed">
          Sent
        </p>
        <p class="text-[52px] font-bold flex justify-start pt-2">
          $<?php echo $amount_sent ?> <span class="text-xl text-g300 pt-2">$</span>
        </p>
      </div>
    </div>
    <div class="pt-8">
      <div
        class="border border-n40 dark:border-darkN40 flex flex-col gap-5 p-4 mx-6 rounded-2xl">
        <div
          class="flex justify-between items-center pb-5 border-b border-dashed border-n40 dark:border-darkN40">
          <p class="text-sm text-n500 dark:text-darkN500">Solde Restant</p>
          <p class="text-sm font-medium text-g300">$<?php echo $userAccount ?></p>
        </div>

        <div
          class="flex justify-between items-center pb-5 border-b border-dashed border-n40 dark:border-darkN40">
          <p class="text-sm text-n500 dark:text-darkN500">Telephone</p>
          <p class="text-sm"><?php echo $telephoneDestinataire  ?></p>
        </div>
        <div
          class="flex justify-between items-center pb-5 border-b border-dashed border-n40 dark:border-darkN40">
          <p class="text-sm text-n500 dark:text-darkN500">Destinaire</p>
          <p class="text-sm"><?php echo $receiver_name ?></p>
        </div>

        <div
          class="flex justify-between items-center pb-5 border-b border-dashed border-n40 dark:border-darkN40">
          <p class="text-sm text-n500 dark:text-darkN500">Date</p>
          <p class="text-sm"><?php echo $date_sent ?></p>
        </div>
        <!-- <div
          class="flex justify-between items-center pb-5 border-b border-dashed border-n40 dark:border-darkN40">
          <p class="text-sm text-n500 dark:text-darkN500">Transaction ID</p>
          <p class="text-sm">241220230940 <i class="ph ph-copy"></i></p>
        </div>
        <div class="flex justify-between items-center">
          <p class="text-sm text-n500 dark:text-darkN500">Reference ID</p>
          <p class="text-sm">H37SK7D9 <i class="ph ph-copy"></i></p>
        </div> -->
      </div>
    </div>
    <!-- <div class="pt-4 px-6">
      <div
        class="bg-bgColor border border-bgColor2 rounded-2xl p-4 dark:bg-darkN20 dark:border-darkN40">
        <p
          class="text-sm font-medium pb-4 border-b border-dashed border-n40 dark:border-darkN40">
          Notes :
        </p>
        <p class="text-n500 dark:text-darkN500 text-sm pt-4">
          Illustration Design Freelance Payments
        </p>
      </div>
    </div> -->
  </main>
  <!-- ======Javascript Dependencies -->
  <script src="assets/js/main.js"></script>
  <script defer src="index.js"></script>
</body>

<!-- Mirrored from softivuspro.com/html/bankux/main-demo/receipt.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Nov 2025 18:43:42 GMT -->

</html>