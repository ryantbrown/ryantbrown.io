<?php get_header(); ?>

    <header class="header">
        <div class="container">
            <?php require_once('nav.php'); ?>
            <div class="title" data-translate-in>
                <h2>My name is <span>Ryan</span> and I'm a <span class="typed"></span> developer</h2>
                <p>I suffer from imposter syndrome. I also dabble in UI design.</p>
            </div>
        </div>
    </header>

    <div class="title bar">
        <div class="container">
            <h1 class="pull-left">Recent Posts</h1>
            <div class="pull-right categories">
                <div class="label text">Browse Tags</div>
                <div class="tags">
                    <?php $tag_limit = 6; foreach (get_tags() as $tag): if($tag_limit > 0): ?>
                        <a data-toggle="tooltip" data-placement="top" title="<?=ucfirst($tag->name) ?>"
                           href="<?php echo get_tag_link($tag->term_id); ?>"
                           class="label <?=strtolower($tag->name) ?>">&nbsp;</a>
                    <?php endif; $tag_limit--; endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="content-bg">
        <div class="container content">
            <div class="posts">
                <?php get_template_part('grid'); /* ?>
                <div class="pagination">
                    <?php get_template_part('pagination'); ?>
                </div> */ ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>