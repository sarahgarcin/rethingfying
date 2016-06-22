<!-- Champs spécifiques -->
<?php $subtitle = a::get($content, 'subtitle', 'undefined'); ?>

<div class="cover break-after" style=" position:relative; " >



    <div class="imagecouv" style="position:absolute; z-index:1;">
    	<!--  faire une classe php pour cleaner tout ça - un truc qui retourne $image->url() par ex -->
    	<img src="<?php echo 'content/'.$folder.'/'.$imagearray[0] ?>" alt="">
    </div> 

    <div class="titre" style=" position: absolute; z-index: 2; top:240px; padding-left:104px; color:#FFFFFF;">
      <?php echo $Parsedown->text($titre);?>
    </div>


    <div class="sous-titre">
      <?php echo $Parsedown->text($subtitle);?>
    </div>
  

</div>