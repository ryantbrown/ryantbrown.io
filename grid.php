<?php $counter = 1; if (have_posts()): while (have_posts()) : the_post(); ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
        <?php $pos_class = ($counter % 3 == 0) ? ' last' : ''; ?>
        <?php if (in_array($counter, [2, 5, 9])) { ?>
           class="col-md-4 article nobg post-<?php the_ID(); ?><?php echo $pos_class; ?>">
        <?php } else { ?>
            <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
            class="col-md-4 article post-<?php the_ID() ?><?php echo $pos_class; ?>"
            style="background-image: url(<?php echo $thumb[0]; ?>)">
        <?php } ?>
        <div class="overlay">
            <div class="comments">
                <i class="glyphicon glyphicon-comment"></i>
                <?php comments_number('0 comments', '1 comment', '% comments'); ?>
            </div>
            <h2><?php the_title(); ?></h2>
            <span class="date">
                <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
            </span>
        </div>
    </a>
    <?php $counter++; endwhile;
else: ?>
	<h2>Nothing to see here</h2>
<?php endif; ?>