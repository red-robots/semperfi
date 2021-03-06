<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bellaworks
 */

get_header(); ?>
<div id="primary" class="full-content-area clear homecontent">
	<main id="main" class="site-main clear" role="main">
		<?php
		$home_page_id = get_homepage_id();
		$post = get_post($home_page_id);
		if ( $post ) {  setup_postdata($post); ?>
			<div class="row1 clear">
				<div class="wrapper clear">
					<?php
					$title = get_field('title');
					$description = get_field('description'); 
					$services = get_field('services'); 
					$services_map = get_field('services_map'); 
					$map_legend = get_field('map_legend'); 
					?>
					<div class="col left">
						<?php if ($title) { ?>
							<h2 class="stitle"><?php echo $title ?></h2>
						<?php } ?>
						<?php if ($description) { ?>
							<div class="description"><?php echo $description ?></div>
						<?php } ?>
						<?php if ($services) { ?>
							<div class="services-list clear">
								<?php foreach ($services as $s) { 
								$s_icon = $s['services_icon'];
								$s_title = $s['services_title'];
									if($s_title && $s_icon) { ?>
									<div class="svc">
										<img class="s_icon" src="<?php echo $s_icon['url'] ?>" alt="<?php echo $s_icon['title'] ?>" />
										<div class="s_title"><?php echo $s_title ?></div>
									</div>	
									<?php } ?>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
					<div class="col right">
						<?php if ($services_map) { ?>
							<div class="services-map">
								<img src="<?php echo $services_map['url'] ?>" alt="<?php echo $services_map['title'] ?>" />
								<?php if ($map_legend) { ?>
								<div class="legend"><?php echo $map_legend ?></div>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="hline"></div>
			</div>
			
			<?php 
				$why_section_title = get_field('why_section_title');
			?>
			<div class="row2 clear">
				<div class="wrapper">
					<?php if ($why_section_title) { ?>
					<h2 class="stitle text-center"><?php echo $why_section_title ?></h2>
					<?php } ?>
					<div class="statisctics">
						<div class="statflex">
							<?php  
							$max = 3;
							for($i=1; $i<=$max; $i++) {
								$box_title = get_field('box_'.$i.'_title');
								$box_stat = get_field('box_'.$i.'_statistic');
								if($box_title && $box_stat) { ?>
								<div class="stat">
									<div class="inside clear">
										<div class="stat_title"><?php echo $box_title ?></div>
										<div class="stat_percent js-blocks text-center">
											<span><?php echo $box_stat ?></span>
										</div>
									</div>
								</div>
								<?php } ?>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			
			<?php  get_template_part('template-parts/content','becomedriver');  ?>
		<?php } ?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
