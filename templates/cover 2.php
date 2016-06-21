<!-- Champs spécifiques -->
<?php $subtitle = a::get($content, 'subtitle', 'undefined'); ?>

<div class="cover break-after">

  

    <div class="titre">
      <?php echo $Parsedown->text($titre);?>
    </div>


    <div class="sous-titre">
      <?php echo $Parsedown->text($subtitle);?>
    </div>
     
    <div class="row">  
      <div class="text small-6 columns">
            <?php echo $Parsedown->text($text);?>
      </div>
    </div>

    <div class="image">
    	<!--  faire une classe php pour cleaner tout ça - un truc qui retourne $image->url() par ex -->
    	<img src="<?php echo 'content/'.$folder.'/'.$imagearray[0] ?>" alt="">
    </div> 
  

</div>