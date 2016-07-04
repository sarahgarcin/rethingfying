<div class="introduction">
   
  <div class="row">
    <div class="titre small-5 small-push-1">
      <h2><?php echo $page->titre;?></h2>
    </div>

    <div class="text small-5 small-push-1 columns">
      <?php echo $Parsedown->text($page->text);?>
    </div>

    <?php if(isset($page->images)){ ?>
      <div class="gallerie small-6 columns">
        <?php foreach($page->images as $image){?>
          <img class="small-10 small-push-1 <?php echo $image['captions']['border'] ?>" src="<?php echo $image['url']?>" alt="">
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

