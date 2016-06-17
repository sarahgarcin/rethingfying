<div class="introduction">
  <div class="titre">
    <?php echo $Parsedown->text($titre);?>
  </div>
  <div class="images row">
  	<?php foreach($imagearray as $image){?>
  		<img class="small-6" src="<?php echo 'content/'.$folder.'/'.$image ?>" alt="">
  	<?php } ?>
  </div>
  <div class="text">
    <?php echo $Parsedown->text($text);?>
  </div>
</div>