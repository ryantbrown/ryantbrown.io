<?php get_header(); ?>

<header class="header post">
	<div class="container">
		<?php require_once('nav.php'); ?>
	</div>
</header>


<div class="post-content">
	<div class="post-sidebar"><?php get_sidebar(); ?></div>
	<div class="col-left">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" class="post-left">

			<div class="post-top">
				<div class="pull-left author">Written by Ryan Brown</div>
				<div class="pull-right details">
					<div class="views"><i class="glyphicon glyphicon-eye-open"></i><span><?php echo do_shortcode('[post_view]'); ?></span></div>
					<div class="views"><i class="glyphicon glyphicon-time"></i><span><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')).' ago'; ?></span></div>
					<div class="views"><i class="glyphicon glyphicon-comment"></i><span><?php comments_number('0 comments', '1 comment', '% comments'); ?></span></div>

				</div>
			</div>

			<div class="post-body">
				<h1><?php the_title(); ?></h1>
				<img src="<?php echo $img_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'main')[0]; ?>">
			</div>

			<div class="post-footer">

				<div class="pull-left share">
					<a href="https://twitter.com/intent/tweet?text=<?php echo urlencode(the_title().' - '.get_permalink()); ?>" class="symbol twitter" data-toggle="tooltip" data-placement="top" title="Tweet" target="_blank">&#xe286;</a>
					<a href="https://www.facebook.com/sharer/sharer.php?app_id=351533488351274&sdk=joey&u=<?=urlencode(get_permalink())?>&t=<?=the_title('', '', false)?>&display=popup&ref=plugin" class="symbol facebook" data-toggle="tooltip" data-placement="top" title="Share">&#xe227;</a>
					<a href="https://plus.google.com/share?url=<?=urlencode(get_permalink())?>" class="symbol google" data-toggle="tooltip" data-placement="top" title="Share" target="_blank">&#xe239;</a>
					<a href="//pinterest.com/pin/create/button/?url=<?=urlencode(get_permalink())?>&media=<?=$img_url?>&description=<?=urlencode(the_title('', '', false))?>" class="symbol pinterest" data-toggle="tooltip" data-placement="top" title="Pin&nbsp;It" target="_blank">&#xe264;</a>
					</div>

				<div class="pull-right categories">
					<div class="label text">Tags</div>
					<div class="tags">
						<?php foreach(get_the_terms($post->ID, 'post_tag') as $tag): ?>
							<a href="<?php echo get_tag_link($tag->term_id); ?>" class="label <?=strtolower($tag->name)?>" data-toggle="tooltip" data-placement="top" title="<?=ucfirst($tag->name)?>">&nbsp;</a>
						<?php endforeach; ?>
					</div>
				</div>

			</div>

			<div class="post-text"><?php the_content(); ?></div>
			<div class="post-comments"><?php comments_template(); ?></div>


		</div>
	<?php endwhile; else: echo '<h2>Nothing to see here</h2>' ; endif; ?>
</div>




</div>



<?php get_footer(); ?>
