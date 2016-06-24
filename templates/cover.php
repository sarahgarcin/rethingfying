<!-- Champs spécifiques -->
<div class="cover break-after" style=" position:relative; " >
<!-- 
    <?php foreach($page->images() as $image){
        //echo $image['file']."</br>";
        echo $image['caption']."</br>";?>
        <img src="<?php echo $image['url'] ?>" alt="">
    <?php } ?>

 -->
    <div class="imagecouv" style="position:absolute; z-index:1;">
    	<?php foreach($page->images() as $image){
            //echo $image['file']."</br>";
            // echo $image['caption']."</br>";?>
            <img src="<?php echo $image['url'] ?>" alt="">
        <?php } ?>
    </div> 

    <div class="titre" style=" position: absolute; z-index: 2; top:240px; padding-left:104px; color:#FFFFFF;">
      <?php echo $Parsedown->text($page->titre);?>
    </div>


<!--     <div class="sous-titre">
      <?php echo $Parsedown->text($subtitle);?>
    </div> -->
  

</div>