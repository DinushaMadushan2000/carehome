<?php
include_once './inc/sys.php';
include_once './inc/functions.php';
include_once './controllers/index.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $setting->getSettings('f1')?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="assets/animate/animate.min.css" rel="stylesheet">
  <!-- bootstrap icons library -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet" crossorigin="anonymous" />
  <!-- slider css -->
  <link rel="stylesheet" type="text/css" href="assets/css/settings.css" media="screen" />
  <style>
    .loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 1);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 10000; /* High z-index to ensure it appears above other elements */
      transition: opacity 0.1s ease-out;
    }
    .loader.hidden {
      opacity: 0;
      pointer-events: none; /* Prevents interaction when hidden */
    }
    .spinner-border {
      width: 4rem;
      height: 4rem;
      border-width: 0.4em; /* Thicker spinner for visibility */
    }
  </style>
</head>

<body>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const loader = document.querySelector('.loader');
      // Ensure loader is visible for at least 2 seconds
      setTimeout(function() {
        loader.classList.add('hidden');
        // Remove loader from DOM after transition to prevent overlap
        setTimeout(function() {
          loader.style.display = 'none';
        }, 500); // Matches transition duration
      }, 2000); // Minimum loader display time
    });
  </script>
</body>
</html>