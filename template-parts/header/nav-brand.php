<div class = "brand-container gothic">
    <?php
            if(has_custom_logo()){
                echo get_custom_logo();
            }else{
                echo get_bloginfo( 'name' );
            }
    ?>
</div>