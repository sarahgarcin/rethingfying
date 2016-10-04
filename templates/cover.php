<!-- Champs spécifiques -->
<div class="cover break-after">
    <ul class="imagecouv small-12">
    	<?php foreach($page->images() as $image){?>
        <li class="small-2 end columns"><img src="<?php echo $image['url'] ?>" alt="couverture"></li>
      <?php } ?>
    </ul> 

    <div class="titre small-10 small-push-1">
      <?php echo $Parsedown->text($page->titre);?>
    </div>
</div>