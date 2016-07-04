  <div class="article" data-color="<?php echo $page->color?>">
    <?php if(isset($page->imagestart)){ ?>
      <div class="imagestart small-4" >
        <img src="<?php echo 'content/'.$folder.'/'.$page->imagestart ?>" alt="">
      </div>
    <?php } ?>

    <div class="contenu" >

      <div class="row">

        <div class="col-gauche small-5 small-push-1 columns">
          
          <div class="titre">
            <?php echo $Parsedown->text($page->titre);?>
          </div>

          <div class="text">
            <?php echo $Parsedown->text($page->text);?>
          </div>
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

    <?php if(isset($page->imageend)){ ?>
      <div class="imageend small-4 small-push-8" >
        <img src="<?php echo 'content/'.$folder.'/'.$page->imageend ?>" alt="">
      </div>
    <?php } ?>