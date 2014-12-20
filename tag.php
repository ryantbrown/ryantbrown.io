<?php get_header(); ?>

<?php get_template_part('listhead'); ?>

<div class="post-content">
	<div class="post-sidebar"><?php get_sidebar(); ?></div>
	<div class="col-left">
		<h1 class="listing-title <?php echo strtolower(single_tag_title('', false)); ?>"><?php echo $wp_query->found_posts . ' <span>' . single_tag_title('', false) . '</span>'; ?>
			Article<?php if($wp_query->found_posts != 1) { echo 's'; } ?> </h1>
		<?php get_template_part('loop'); ?>
	</div>
</div>

<?php get_footer(); ?>
