<div class="article small-8 small-push-1">
  <?php if(isset($page->text)){ ?>
	  <div class="text gros-text">
	    <?php echo $Parsedown->text($page->text);?>
	  </div>
  <?php } ?>
</div>