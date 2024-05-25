<?php
  require('_inc/functions.php');
?>
<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Gym Healthy Lifestyle FitLife">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Ikonka na addressbari-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <!-- FontAwesome Ikonky-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>FitLife</title>
</head>
<body>
    <!-- Navbar-->
    <header>
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark navbar-fixed-top">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" alt="" width="50" height="50" class="img-responsive">
            </a>
            <div class="justify-content-center">
              <ul class="navbar-nav">
              <?php
              $pages = array('DOMOV'=>'index.php',
                'O NAS'=>'services.php',
                'SLUZBY'=>'aboutus.php',
                'GALERIA'=>'gallery.php',
                'KONTAKTUJ NAS' => 'contactus.php' 
           );
           if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
             $pages['ODHLASIT SA'] = 'logout.php';
             $pages['ADMIN'] = 'admin.php';
           } else {
            $pages ['REGISTER'] = 'register.php';
           }
           echo(generate_menu($pages));
        ?>
                  
              </ul>
            </div>
          </div>
        </nav>
      </header>