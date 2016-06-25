<div class="article">
	<?php if(isset($page->titre)){ ?>
	  <div class="titre">
	    <?php echo $Parsedown->text($page->titre);?>
	  </div>
  <?php } ?>

  <?php if(isset($page->text)){ ?>
	  <div class="text">
	    <?php echo $Parsedown->text($page->text);?>
	  </div>
  <?php } ?>
</div>