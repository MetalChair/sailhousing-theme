<?php
?>
<footer>
    <div class="footer-content">
        <div class="col">
            <a href="mailto:info@sailhousingsolutions.org">info@sailhousingsolutions.org</a>
            <?php
            dynamic_sidebar("footer-bar");
            ?>
        </div>
        <div class="col">
            <div>c/o SAIL</div>
            <div>1669 W Maple Road</div>
            <div>Birmingham, MI 48009</div>
        </div>
        <div class="col">
            <?php
            get_template_part("template-parts/footer/footer", "menu");
            ?>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>