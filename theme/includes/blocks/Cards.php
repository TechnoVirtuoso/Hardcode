<div class="steps-cards">
    <?php foreach($block['steps'] as $card){ ?>
        <div class="wrap-cards">
            <div class="text-container-cards">
                <div class="heading-cards">
                <h1><?php echo $card['heading']?></h1>
                </div>
                <div class="bent-cards">
                <img src="<?php echo $card['bent_border']['url'];?>">  
                </div>
            </div>
            <div class="image-cards">
             <img src="<?php echo $card['image']['url'];?>">
            </div>
        </div>

    <?php }?>    
</div>                