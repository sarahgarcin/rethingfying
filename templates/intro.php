<?php $imagestart = a::get($content, 'imagestart', 'undefined'); ?>
<?php $imageend = a::get($content, 'imageend', 'undefined'); ?>



      <div class="imagestart" >
          <img src="<?php echo 'content/'.$folder.'/'.$imagestart ?>" alt="">
      </div> 



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

    <div class="imageend" >
          <img src="<?php echo 'content/'.$folder.'/'.$imageend ?>" alt="">
    </div>

