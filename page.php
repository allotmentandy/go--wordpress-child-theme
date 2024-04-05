<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Go
 */



get_header();

?>
<div class="container">
	<div class="sidebar">
<?php
$page_slug = 'sidebar';
$page = get_page_by_path($page_slug);

if ($page) {
    echo $page->post_content;
} else {
    echo "No sidebar";
}
?>

	</div>

	<div class="main">
<?php

// Start the Loop.
while ( have_posts() ) :
	the_post();
	get_template_part( 'partials/content', 'page' );

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

endwhile;

?>
</div>
</div>
<?php

get_footer();
