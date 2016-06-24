<?php //echo $page->titre;?>
<?php //echo $page->text;?>
  <div class="article" data-color="<?php echo $page->color?>">
    <div class="imagestart" >
      <img src="<?php echo 'content/'.$folder.'/'.$page->imagestart ?>" alt="">
    </div>

    <div class="contenu" >

      <div class="titre">
        <?php echo $Parsedown->text($page->titre);?>
      </div>

      <div class="row">

        <div class="text small-6 columns">
          <?php echo $Parsedown->text($page->text);?>
        </div>
        
        <div class="gallerie small-6 columns">
          <?php foreach($page->images() as $image){
            //echo $image['file']."</br>";
            //echo $image['url']."</br>";?>
            <img src="<?php echo $image['url'] ?>" alt="">
          <?php } ?>
        </div>

      </div>

    </div>


    <div class="imageend">
          <img src="<?php echo 'content/'.$folder.'/'.$page->imageend ?>" alt="">
    </div>




  </div>
