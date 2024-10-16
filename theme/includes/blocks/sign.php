<div class="story" style ="background-image:url(<?php echo $block['background']['url']?>);">
    <div class="text-container">
        <div class="heading">
            <?php echo $block['heading']?>
        </div>  
        <div class="sub-heading">
            <?php echo $block['sub_heading']?>
        </div>
    </div>
</div>
<div class="contact">
    <div class="contact-container">
    <?php echo do_shortcode( '[gravityform id="3" title="false" description="false" ajax="true" tabindex="49" field_values="check=First Choice,Second Choice"]' ); ?>
    </div>
</div>