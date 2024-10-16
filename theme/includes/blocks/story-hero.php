<div class="story-hero">
    <div class="text-container">
        <div class="heading">
            <?php echo $block['heading']?>
        </div>  
    </div>
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
</div>