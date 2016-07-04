<!-- Champs spécifiques -->
<div class="cover break-after">
<!-- 
    <?php foreach($page->images() as $image){
        //echo $image['file']."</br>";
        echo $image['caption']."</br>";?>
        <img src="<?php echo $image['url'] ?>" alt="">
    <?php } ?>

 -->
    <div class="imagecouv small-6">
    	<?php foreach($page->images() as $image){
            //echo $image['file']."</br>";
            // echo $image['caption']."</br>";?>
            <img src="<?php echo $image['url'] ?>" alt="couverture">
        <?php } ?>
    </div> 

    <div class="titre">
      <?php echo $Parsedown->text($page->titre);?>
    </div>
</div>