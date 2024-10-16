<div class="main">
        <?php foreach($block['heading'] as $main){ ?>
            <div class="wrap">
            <div class="heading">
                <h1><?php echo $main['main_heading']?></h1>
            </div>
                <div class="bent">
            <img src="<?php echo $main['bent_border']['url'];?>">
                </div>
                <div class="sub">
                <p><?php echo $main['sub_heading']?></p>
                </div>
            </div>    
     <?php }?>
</div>