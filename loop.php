<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" class="post-left listing" data-url="<?php the_permalink(); ?>">

        <div class="post-body listing">

            <div class="item-image">
                <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'main')[0]; ?>">
            </div>
            <div class="item-info">
            <h1><?php the_title(); ?></h1>
            <div class="post-top">

                <div class="details">

                    <div class="views"><i class="glyphicon glyphicon-eye-open"></i><span><?php echo do_shortcode('[post_view]'); ?></span></div>
                    <div class="views"><i class="glyphicon glyphicon-time"></i><span><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')).' ago'; ?></span></div>
                    <div class="views"><i class="glyphicon glyphicon-comment"></i><span><?php comments_number('0 comments', '1 comment', '% comments'); ?></span></div>
                </div>
            </div>
            </div>

        </div>

    </div>
<?php endwhile;  endif; ?>