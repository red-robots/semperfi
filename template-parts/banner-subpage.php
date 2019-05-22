<?php
$banner = get_field('banner_image');
$page_title = get_the_title();
if($banner) { ?>
<div class="hero clear subpage">
	<div class="h-image" style="background-image:url('<?php echo $banner['url'] ?>');">
		<h1 class="ptitle"><?php echo $page_title ?></h1>
	</div>
</div>
<?php } ?>