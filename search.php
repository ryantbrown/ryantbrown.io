<?php get_header(); ?>

<?php get_template_part('listhead'); ?>

<div class="post-content">
	<div class="post-sidebar"><?php get_sidebar(); ?></div>
	<div class="col-left list-col">


		<h1 class="listing-title"><?php echo $wp_query->found_posts; ?>
			Article<?php if($wp_query->found_posts != 1) { echo 's'; } ?>
			<?php if(strlen(get_search_query()) > 0) { echo 'for'; } ?>
			<span><?php echo get_search_query(); ?></span></h1>


		<?php get_template_part('loop'); ?>
	</div>
</div>

<?php get_footer(); ?>




