<!-- Champs spécifiques -->
<div class="cover break-after">
  <?php if(isset($page->imagehead)){ ?>
    <div class="imageHead small-8 small-push-3">
      <img src="<?php echo 'content/'.$folder.'/'.$page->imagehead ?>" alt="">
    </div>
  <?php } ?>

  <div class="titre small-10 small-push-1">
    <h1><?php echo $page->titre;?></h1>
  </div>
</div>