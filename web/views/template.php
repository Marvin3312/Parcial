<?php
require_once(__DIR__ . '/../controllers/controller.template.php');

$path = TemplateController::path(); // Obtiene la ruta base
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Estructura correcta de un proyecto web" />
    <meta name="author" content=""/>
    <title>Freelance - Start Bootstrap Theme</title>
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?php echo $path; ?>/estrcutura_correcta/web/views/assets/favicon.png" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="icon" type="image/png" href="<?php echo $path; ?>/estrcutura_correcta/web/views/assets/img/favicon.png" />
    <link rel="stylesheet" href="<?php echo $path; ?>/estrcutura_correcta/web/views/assets/css/styles.css">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    </head>
  <body id="page-top">


    <div class="wrapper">
      <?php
      include 'modules/nav.php';


    
      include "modules/header.php";

      
      include 'pages/login/login.php';
      include 'pages/portfolio/portfolio.php';
      
      include 'pages/contact/contact.php';
      include 'modules/footer.php';
      include 'modules/copyright.php';
      ?>
    </div>
    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS -->
    
    <script src="<?php echo $path; ?>estrcutura_correcta/web/views/assets/js/scripts.js"></script>
    <script src="<?php echo $path; ?>estrcutura_correcta/web/views/assets/js/login.js"></script>
    <!-- SB Forms JS -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>