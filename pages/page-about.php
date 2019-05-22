<?php
/**
 * Template Name: About Us
 *
 */

get_header(); 
$banner = get_field('banner_image');
$content_class = ($banner) ? 'has-banner':'default-temp';

$home_page_id = get_homepage_id();
$services_map = get_field('services_map',$home_page_id); 
$map_legend = get_field('map_legend',$home_page_id); 

?>

	<div id="primary" class="full-content-area <?php echo $content_class?>">
		<main id="main" class="site-main wrapper clear" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if (!$banner) { ?>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header>
					<?php } ?>

					<div class="entry-content <?php echo ( $services_map ) ? 'has-feat-image':'no-feat-image';?>">
						<?php if ( get_the_content() ) { ?>
							<div class="col-left"><?php the_content(); ?></div>
						<?php } ?>

						<?php if ($services_map) { ?>
						<div class="col-right">
							<div class="services-map">
								<img src="<?php echo $services_map['url'] ?>" alt="<?php echo $services_map['title'] ?>" />
								<?php if ($map_legend) { ?>
								<div class="legend"><?php echo $map_legend ?></div>
								<?php } ?>
							</div>
						</div>
						<?php } ?>
					</div>
				</article>
			<?php endwhile; ?>
		</main><!-- #main -->
		<?php  get_template_part('template-parts/content','becomedriver');  ?>
	</div><!-- #primary -->

<?php
get_footer();
