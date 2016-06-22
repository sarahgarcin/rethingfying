


<div class="introduction">
   
  <div class="row">

        <div class="titre">
          <?php echo $Parsedown->text($titre);?>
        </div>



        <div class="text small-6 columns">
          <?php echo $Parsedown->text($text);?>
        </div>

        <div class="gallerie small-6 columns">
            <?php foreach($imagearray as $image){?>
                <img src="<?php echo 'content/'.$folder.'/'.$image ?>" alt="">
            <?php } ?>
          </div>

   </div>

</div>



