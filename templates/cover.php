<!-- Champs spécifiques -->
<?php $subtitle = a::get($content, 'subtitle', 'undefined'); ?>

<div class="coverbreak-after" >



    <div class="imagecouv" >
    	<!--  faire une classe php pour cleaner tout ça - un truc qui retourne $image->url() par ex -->
    	<img src="<?php echo 'content/'.$folder.'/'.$imagearray[0] ?>" alt="">
    </div> 

    <div class="titre" >
      <?php echo $Parsedown->text($titre);?>
    </div>


    <div class="sous-titre">
      <?php echo $Parsedown->text($subtitle);?>
    </div>
  

</div>