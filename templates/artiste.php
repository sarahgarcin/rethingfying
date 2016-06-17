<div class="article">
  <div class="titre">
    <?php echo $Parsedown->text($titre);?>
  </div>

  <div class="text">
    <?php echo $Parsedown->text($text);?>
  </div>

  <div class="gallerie row">
  	<?php foreach($imagearray as $image){?>
  			<img src="<?php echo 'content/'.$folder.'/'.$image ?>" alt="">
  		<?php } ?>
  </div>
</div>