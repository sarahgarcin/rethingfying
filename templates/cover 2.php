<!-- Champs spécifiques -->
<div class="cover2break-after">

  

    <div class="titre">
      <?php echo $Parsedown->text($page->titre);?>
    </div>


    <div class="sous-titre">
      <?php echo $Parsedown->text($page->subtitle);?>
    </div>
     
    <div class="row">  
      <div class="text small-6 columns">
            <?php echo $Parsedown->text($page->text);?>
      </div>
    </div>

    <div class="image">
      <?php foreach($page->images() as $image){ ?>
        <img src="<?php echo $image['url']?>" alt="$image['file']">
      <?php } ?>
    </div> 
  

</div>