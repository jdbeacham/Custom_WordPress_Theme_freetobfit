<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package freetoBfit
 */

get_header();

session_start();

if (isset($_GET['joined'])) {
	$joined = $_GET['joined'];
	if ($joined == "yes") {
		require_once 'joined_popup.php';
	}
}

if (!isset($_SESSION["popped"])) {
	require_once 'ftbf_popup.php';
	$_SESSION["popped"] = "yes";
}
vat

?>


	<main id="primary" class="site-main">

		<?php

$args = array(
	'orderby'        => 'meta_value_num',
	'meta_key'       => 'ftbf_post_order',
	'order'          => 'ASC',
	'post_type'      => 'post'

);
$ftbf_order_posts = new WP_Query( $args );
		if ( $ftbf_order_posts->have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
			?>
			
			<div id="ftbf-posts-container">
			
			<?php
			/* Start the Loop */
			while ( $ftbf_order_posts->have_posts() ) :
				$ftbf_order_posts->the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</div>
	<a name="payments"></a>
	<div id="ftbf-widget-container">
	<?php echo do_shortcode( '[patreon]' ); ?>
	<?php echo do_shortcode( '[payments]' ); ?>
	</div>

	<?php
$aboutargs = array(
	'post_type'      => 'post',
    'category_name'  => 'philosophy'
);

$ftbf_about_posts = new WP_Query( $aboutargs );

while ( $ftbf_about_posts->have_posts() ) :
	$ftbf_about_posts->the_post();

?>
<a id="philosophy"></a>
<div id = "ftbf-about-container">
<div id= "ftbf-about-title">
	<?php the_title(); ?>
</div>
<div id ="ftbf-about-content">
	<?php the_content(); ?>
</div>
</div>
<?php
endwhile;

?>
	
	</main><!-- #main -->

<?php

get_footer();
