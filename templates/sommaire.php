<div class="sommaire section break-after">
  <?php if(isset($page->text)){ ?>
	  <div class="sommaire-inner small-5 small-push-1">
	    <?php echo $Parsedown->text($page->text);?>
	  </div>
  <?php } ?>
</div>