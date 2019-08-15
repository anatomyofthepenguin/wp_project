<?php get_header() ?>
    <!-- header_end-->
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">
                <h1 class="title-page">Последние новости и акции из мира туризма</h1>
                <?php if (have_posts()) :?>
                <div class="posts-list">
                    <?php while (have_posts()) : the_post() ?>
                    <div class="post-wrap">
                        <div class="post-thumbnail"><img src="<?=get_stylesheet_directory_uri()?>/img/post_thumb/thumb_1.jpg" alt="Image поста" class="post-thumbnail__image"></div>
                        <div class="post-content">
                            <div class="post-content__post-info">
                                <div class="post-date"><?=the_time('d.m.Y')?></div>
                            </div>
                            <div class="post-content__post-text">
                                <div class="post-title">
                                    <? the_title() ?>
                                </div>
                                <p>
                                    <?php if ($descr = get_post_custom()["descr"][0]) : ?>
                                        <?= $descr ?>
                                    <?php else : ?>
                                        <?= the_excerpt() ?>
                                    <? endif ;?>
                                </p>
                            </div>
                            <div class="post-content__post-control"><a href="<?= get_permalink() ?>" class="btn-read-post">Читать далее >></a></div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
                <div class="pagenavi-post-wrap"><?= paginate_links() ?></div>
            </div>
            <!-- sidebar-->
            <?php get_sidebar() ?>
        </div>
    </div>
<?php get_footer() ?>
