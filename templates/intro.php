
<?php //if(isset($page->imagestart)): ?>
<!--   <div class="imagestart" >
    <img src="<?php echo 'content/'.$folder.'/'.$page->imagestart ?>" alt="">
  </div>  -->
<?php //endif ?>



<div class="introduction">
   
  <div class="row">
    <div class="titre">
      <?php echo $Parsedown->text($page->titre);?>
    </div>

    <div class="text small-6 columns">
      <?php echo $Parsedown->text($page->text);?>
    </div>

    <?php if(isset($page->images)){ ?>
      <div class="gallerie small-6 columns">
        <?php foreach($page->images as $image){?>
            <img src="<?php echo $image['url']?>" alt="">
        <?php } ?>
      </div>
    <?php } ?>

   </div>

</div>


<?php //if(isset($page->imageend)): ?>
 <!--  <div class="imageend" >
        <img src="<?php echo 'content/'.$folder.'/'.$page->imageend ?>" alt="">
  </div> -->
<?php //endif ?>

