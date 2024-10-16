<div class="gallery">
    <div class="align">
        <?php foreach($block['gallery'] as $photos){ ?>
            <div class="wrap">
                <div class="image">
                <img src="<?php echo $photos['images']['url'];?>">
                </div>
            </div>

        <?php }?>
    </div>    
</div>                