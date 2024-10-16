<div class="steps">
    <?php foreach($block['steps'] as $step){ ?>
        <div class="wrap <?php if($step['reverse_direction']){echo "reverse";}?>">
            <div class="image">
             <img src="<?php echo $step['image']['url'];?>">
            </div>
            <div class="text-container">
                <div class="heading">
                <h1><?php echo $step['heading']?></h1>
                </div>
                <div class="bent">
                <img src="<?php echo $step['bent_border']['url'];?>">  
                </div>
                <div class="text">
                <p><?php echo $step['text']?></p>
                </div>
            </div>
        </div>

    <?php }?>    
</div>                