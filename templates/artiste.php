<?php $color = a::get($content, 'color', 'undefined'); ?>
<?php $imagestart = a::get($content, 'imagestart', 'undefined'); ?>
<?php $imageend = a::get($content, 'imageend', 'undefined'); ?>


  <div class="article" data-color="<?php echo $color?>">



      <div class="imagestart" >
            <img src="<?php echo 'content/'.$folder.'/'.$imagestart ?>" alt="">
      </div>

 



    <div class="contenu" >

      <div class="titre">
        <?php echo $Parsedown->text($titre);?>
      </div>

      <div class="row">

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


        <div class="imageend">
              <img src="<?php echo 'content/'.$folder.'/'.$imageend ?>" alt="">
        </div>




  </div>
