<div class="section" data-color="<?php echo $page->color?>">

  <?php if(isset($page->imagestart)){ ?>
    <div class="imagestart small-4" >
      <img src="<?php echo 'content/'.$folder.'/'.$page->imagestart ?>" alt="">
    </div>
  <?php } ?>

  <div class="content">

    <div class="header">
      <div class="titre small-10">
        <h1><?php echo $page->titre;?></h1>
      </div>
      <?php if(isset($page->imagehead)){ ?>
        <div class="imageHead small-6">
          <img src="<?php echo 'content/'.$folder.'/'.$page->imagehead ?>" alt="">
        </div>
      <?php } ?>
    </div>

    <?php foreach($subpage->children as $child) { ?>
      <div class="article row">
        <?php if($child->txtfile == 'article.txt'): ?>
          <div class="txt-col small-5 small-push-1 columns">
            <h2><?php echo $child->titre?></h2>
            <?php echo $Parsedown->text($child->text);?>
          </div>
          <div class="gallerie small-5 columns">
            <ul>
              <?php if(isset($child->images)): ?>
                <?php foreach($child->images as $image){?>
                  <!-- <li class="small-7" > -->
                  <li class="small-10">
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['file'] ?>">
                  </li>
                <?php } ?>
              <?php endif ?>
            </ul>
          </div>
        <?php else: ?>
          <div class="txt-col small-8 small-push-1 columns">
            <h2><?php echo $child->titre?></h2>
            <?php echo $Parsedown->text($child->text);?>
          </div>
        <?php endif ?>
      </div>
    <?php } ?>
  </div>

  <?php if(isset($page->imageend)){ ?>
    <div class="imagestart small-4 small-push-8" >
      <img src="<?php echo 'content/'.$folder.'/'.$page->imageend ?>" alt="">
    </div>
  <?php } ?>


</div>

