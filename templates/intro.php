<div class="introduction section" data-color="<?php echo $page->color?>">
   
  <div class="row">
    <div class="text break-after small-5 small-push-1 columns">
      <?php echo $Parsedown->text($page->text);?>
    </div>

    <?php if(isset($page->images)){ ?>
      <ul class="gallerie small-6 columns">
        <?php foreach($page->images as $image){?>
          <li><img class="small-10 small-push-1" src="<?php echo $image['url']?>" alt=""></li>
        <?php } ?>
      </ul>
    <?php } ?>

  </div>

  <?php if(isset($page->imageend)){ ?>
    <div class="imagestart small-4 small-push-8 break-after" >
      <img src="<?php echo 'content/'.$folder.'/'.$page->imageend ?>" alt="">
    </div>
  <?php } ?>

</div>

