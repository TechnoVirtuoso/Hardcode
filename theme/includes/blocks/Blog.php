<div class="blog">
    <div class="align">
        <?php foreach($block['blog'] as $blogs){ ?>
            <div class="card"style ="background-image:url(<?php echo $blogs['bottom_image']['url']?>);">
                <div class="image">
                <img src="<?php echo $blogs['image'];?>">
                </div>
                <div class="text-container">
                    <div class="heading">
                    <h1><?php echo $blogs['heading']?></h1>
                    </div>
                    <div class="bent">
                    <img src="<?php echo $blogs['bent_border']['url'];?>">  
                    </div>
                    <div class="text">
                    <p><?php echo $blogs['text']?></p>
                    </div>
                    <div class="button">
                    <a href="<?php echo $blogs['button']['url']?>"><?php echo $blogs['button']['title']?></a>
                    </div>
                    
                </div>
            </div>
            

        <?php }?>
    </div>
</div>        


<script>


$('.blog .align').slick({
    dots: false,
    slidesToShow: 3,
    infinite: true,
    variableWidth: false,
    speed: 500,
    arrows: true,
    responsive: [
        {
        breakpoint: 1510,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                centerMode: false,
                autoWidth: false,
                variableWidth: false
            }
        },
        {
        breakpoint: 850,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                centerMode: false,
                autoWidth: false,
                variableWidth: false
            }
        },
        {
        breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                arrows:false,
                dots: false,
                centerMode: false,
                autoWidth: false,
                variableWidth: false
            }
        }
    ]
});


</script>