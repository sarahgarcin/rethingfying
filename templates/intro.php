<div class="introduction">
  <div class="titre">
    <?php echo $Parsedown->text($titre);?>
  </div>

<div class="row">

  <div class="images">
  	<?php foreach($imagearray as $image){?>
  		<img class="small-6" src="<?php echo 'content/'.$folder.'/'.$image ?>" alt="">
  	<?php } ?>
    <?php echo $Parsedown->text($caption);?>
  </div>
  <div class="text small-7 columns">
    <?php echo $Parsedown->text($text);?>
  </div>

</div>

</div>