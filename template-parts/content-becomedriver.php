<?php  
$home_page_id = get_homepage_id();
$request_a_quote_title = get_field('request_a_quote_title',$home_page_id);
$request_a_quote_link = get_field('request_a_quote_link',$home_page_id);
$request_a_quote_image = get_field('request_a_quote_image',$home_page_id);

$careers_title = get_field('careers_title',$home_page_id);
$careers_description = get_field('careers_description',$home_page_id);
$careers_button_text = get_field('careers_button_text',$home_page_id);
$careers_button_link = get_field('careers_button_link',$home_page_id);
$careers_image = get_field('careers_image',$home_page_id);
?>
<div class="bottompageinfo clear">
	<div class="row3 clear">
		<div class="top wrap">
			<?php if ($request_a_quote_image) { ?>
				<div class="col imagediv" style="background-image:url('<?php echo $request_a_quote_image['url'] ?>');"></div>
			<?php } ?>
			<?php if ($request_a_quote_title && $request_a_quote_link) { ?>
				<div class="col quotetext">
					<a class="ctabtn" href="<?php echo $request_a_quote_link ?>"><span><?php echo $request_a_quote_title ?></span></a>
				</div>
			<?php } ?>
		</div>
		<div class="bottom wrap">
			<?php if ($careers_image) { ?>
				<div class="col imagediv" style="background-image:url('<?php echo $careers_image['url'] ?>');"></div>
			<?php } ?>
			<?php if ($careers_description || $careers_title) { ?>
				<div class="col descwrap">
					<div class="textwrap clear">
						<?php if ($careers_title) { ?>
							<h2 class="stitle"><?php echo $careers_title ?></h2>
						<?php } ?>
						<?php if ($careers_description) { ?>
							<div class="desc"><?php echo $careers_description ?></div>
						<?php } ?>
						<?php if ($careers_button_text && $careers_button_link) { ?>
							<div class="button"><a href="<?php echo $careers_button_link ?>"><?php echo $careers_button_text ?></a></div>
						<?php } ?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>