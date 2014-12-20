<aside class="sidebar">

	<h4>Search</h4>
	<div class="search-wrap">
		<form class="search" method="get" action="<?php echo home_url(); ?>">
			<input class="search-input" type="search" name="s" placeholder="Keywords">
			<button data-toggle="tooltip" data-placement="top" title="Search" class="search-submit" type="submit">
				<i class="glyphicon glyphicon-search"></i>
			</button>
		</form>
	</div>

	<h4>Filter by Tag</h4>
	<div class="side-tags">
		<?php foreach(get_tags() as $tag): ?>
			<div class="stag-wrap">
			<a href="<?php echo get_tag_link($tag->term_id); ?>" class="stag">
				<span class="label <?=strtolower($tag->name)?>">&nbsp;</span>
				<span class="text"><?=ucfirst($tag->name)?></span>
			</a>
			</div>
		<?php endforeach; ?>
	</div>

	<h4>Related Posts</h4>
	<div class="side-posts">
		<?php
			$tag_ids = []; foreach(get_the_terms($post->ID, 'post_tag') as $tag) $tag_ids[] = $tag->term_id;

			$related = new WP_Query([
				'tag__in' => $tag_ids,
				'post__not_in' => [$post->ID],
				'showposts' => 5,
				'caller_get_posts' => 1
			]);

			if($related->have_posts()) { while ($related->have_posts()) : $related->the_post(); ?>
				<div class="side-post">
					<a href="<?php the_permalink() ?>">
						<div class="title"><?php the_title(); ?></div>
						<div class="date">
							<i class="glyphicon glyphicon-time"></i>
							<span><?=human_time_diff(get_the_time('U'), current_time('timestamp')).' ago'; ?></span>
						</div>
					</a>
				</div>
		   <?php endwhile; } wp_reset_query(); ?>

	</div>
</aside>
