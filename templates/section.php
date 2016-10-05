<div class="section" data-color="<?php echo $page->color?>">

  <?php if(isset($page->imagestart)){ ?>
    <div class="imagestart small-4" >
      <img src="<?php echo 'content/'.$folder.'/'.$page->imagestart ?>" alt="">
    </div>
  <?php } ?>

  <div class="content">

    <div class="header">
      <div class="titre">
        <?php echo $Parsedown->text($page->titre);?>
      </div>
      <?php if(isset($page->imagehead)){ ?>
        <div class="imageHead">
          <img src="<?php echo 'content/'.$folder.'/'.$page->imagehead ?>" alt="">
        </div>
      <?php } ?>
    </div>

    <?php //print_r($subpage->title) ?>
    <?php foreach($subpage as $child) { ?>
      <div class="article">
        <div class="col small-5 small-push-1 columns">
          <?php //print_r($child)?>
        </div>
      </div>
    <?php } ?>

<!--     <div class="contenu" >

          <div class="col-gauche small-5 small-push-1 columns">
          </div>

          <div class="gallerie small-5 columns">
            <ul>
            <?php foreach($page->images() as $image){?>
              <li class="small-7" >
                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['file'] ?>">
              </li>
            <?php } ?>
            </ul>
          </div>
        </div>
      </div>
  </div> -->

  <?php //print_r($subpage) ?>
  <?php //foreach($subpage as $child) { ?>
    <?php //print($child) ?>
  <?php //} ?>
<!--   <div class="row">

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

   </div> -->

</div>

