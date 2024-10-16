<div class="second">
    <div class="second-container">
        <div class="text-wrap <?php if($block['remove_text_block']){ echo "remove_text_block";} ?>">
            <div class="heading">
             <?php echo $block['heading']?>
            </div>
            <div class="para">
                <p> <?php echo $block['paragraph']?></p>
            </div>
        </div>
        <div class="image-wrap <?php if($block['remove_text_block']){ echo "full-width";} ?>">
            <div class="images">
                <div class="circle">
                    <?php foreach($block['images'] as $image){ ?>
                        <div class="wrap">
                            <div class="circle1">
                                <img src="<?php echo $image['image']['url'];?>">
                            </div>
                            <div class="text">
                                <p><?php echo $image['label']?></p>
                            </div>
                        </div>    
                    <?php }?>
                </div>
            </div>    
        </div>
    </div>
</div>