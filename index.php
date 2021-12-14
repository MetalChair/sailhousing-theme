<?php
get_header();
?>
<div class = "body-container poppins">
<div id= "main" class="body">
<?php
if ( have_posts() ) {

// Load posts loop.
while ( have_posts() ) {
the_post();
get_template_part( 'template-parts/content/content' );
}

} else {

// If no content, include the "No posts found" template.
get_template_part( 'template-parts/content/content', 'none' );

}
?>
</div>
</div>
<?php
get_footer();
?>