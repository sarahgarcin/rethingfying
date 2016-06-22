<?php $imagestart = a::get($content, 'imagestart', 'undefined'); ?>
<?php $imageend = a::get($content, 'imageend', 'undefined'); ?>



<?php if($imagestart != 'undefined'): ?>
  <div class="imagestart" >
    <img src="<?php echo 'content/'.$folder.'/'.$imagestart ?>" alt="">
  </div> 
<?php endif ?>



<div class="introduction">

  <div class="titre">
    <?php echo $Parsedown->text($titre);?>
  </div>

   <div class="row">

    

      <div class="text small-7 columns">
        <?php echo $Parsedown->text($text);?>
      </div>

   </div>

</div>
<?php if($imageend != 'undefined'): ?>
  <div class="imageend" >
        <img src="<?php echo 'content/'.$folder.'/'.$imageend ?>" alt="">
  </div>
<?php endif ?>

