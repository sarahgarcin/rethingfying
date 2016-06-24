
<?php if(isset($page->imagestart)): ?>
  <div class="imagestart" >
    <img src="<?php echo 'content/'.$folder.'/'.$page->imagestart ?>" alt="">
  </div> 
<?php endif ?>



<div class="introduction">

  <div class="titre">
    <?php echo $Parsedown->text($page->titre);?>
  </div>

   <div class="row">

      <div class="text small-7 columns">
        <?php echo $Parsedown->text($page->text);?>
      </div>

   </div>

</div>
<?php if(isset($page->imageend)): ?>
  <div class="imageend" >
        <img src="<?php echo 'content/'.$folder.'/'.$page->imageend ?>" alt="">
  </div>
<?php endif ?>

