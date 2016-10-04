<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="Re-Thingifying the smart city workshop">
  <meta name="keywords" content="re-thingifying, smart city, citizen sense">
  <meta name="author" content="Sarah Garcin g-u-i">
  <title>Re-Thingifying the Smart City</title>

  <link rel="stylesheet" type="text/css" href="assets/css/main.css">

</head>
<body>
  <?php
  // PHP Dependences
  //import le toolkit de kirby
  require('toolkit/bootstrap.php');
  include 'libs/Parsedown.php'; 
  $Parsedown = new Parsedown();
  include("page.php");
  include("subpage.php");
  ?>


  <div class="content row">

 <!-- Affichons toutes les erreurs -->
  <?php error_reporting(E_ALL);?>
  
  <!-- utilisation du toolkit de kirby https://getkirby.com/docs/toolkit/api -->
  <?php $files = dir::read("content"); 
    
    // lire tous les dossiers    
    $folders = dir::read("content");
    // loop sur tous les dossiers 
    foreach ($folders as $folder){
      $page = new page($folder);

      if("content/".$folder){
        $subfolders = dir::read("content/".$folder);
        // print_r($subfolders);
        foreach ($subfolders as $subfolder){
          $subpage = new subpage($folder.'/'.$subfolder);
          // print_r($subpage);
          // $template = $subpage->template();
        }
      }
     
      $template = $page->template();
      $templatePath = 'templates/'.$template.'.php';
      // Choisi le bon template suivant le nom du fichier
      switch ($template) {
        case $template:
          if(file_exists($templatePath)){
            include $templatePath;
          }
          else{
            include 'templates/default.php';
          }
          break;
        default: 
          include 'templates/default.php';
          break; 
      }
    }
    
  ?>
    
  </div>

<!-- S C R I P T -->
<script src="bower_components/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="bower_components/foundation/js/foundation.js" type="text/javascript"></script>
<script src="assets/js/main.js" type="text/javascript"></script>

</body>
</html>


