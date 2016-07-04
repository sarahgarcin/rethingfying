<div class="article row">
	<?php if(isset($page->titre)){ ?>
	  <div class="titre small-4 small-push-1">
	    <?php echo $Parsedown->text($page->titre);?>
	  </div>
  <?php } ?>

  <?php if(isset($page->text)){ ?>
	  <div class="text">
	    <?php echo $Parsedown->text($page->text);?>
	  </div>
  <?php } ?>
</div>