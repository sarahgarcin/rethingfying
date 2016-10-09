<!-- Champs spécifiques -->
<div class="back break-after">

    <div class="image small-8 small-push-2">
      <?php foreach($page->images() as $image){ ?>
        <img src="<?php echo $image['url']?>" alt="$image['file']">
      <?php } ?>
    </div> 
  
</div>