<div class="introduction">
   
  <div class="row">
<!--     <div class="titre small-5 small-push-1">
      <h2><?php echo $page->titre;?></h2>
    </div> -->

    <div class="text small-5 small-push-1 columns">
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

</div>

