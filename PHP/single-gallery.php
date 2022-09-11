

<?php get_header(); ?>

        <div class="breads-bg hold" style="background:url(<?php echo bloginfo('template_directory'); ?>/img/breads-1.png) no-repeat center center">
            <div class="row">
                <div class="small-12 columns text-center page-title">
                    Ape mus
                </div>
                <div class="small-12 columns text-center breads">
                    <ul>
                        <li><a href="<?php echo home_url(); ?>">Pradžia</a></li>
                        <li><a href="<?php echo get_post_type_archive_link( 'gallery' ); ?>">Galerija</a></li>
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row row-sm hold">
            <div class="small-12 columns nopad entry <?php if (is_single()) { ?>hold<?php } else { ?><?php } ?>">
                <div class="small-12 columns gallery-thumbs nopad">
                    <ul>
                        <?php if( have_rows('image_list') ): ?>
                            <?php while( have_rows('image_list') ): the_row(); ?>

                                    <li><a class="fancybox" rel="group" href="<?php the_sub_field('image'); ?>" style="background:url(<?php the_sub_field('image'); ?>) no-repeat center center;"></a></li>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>

<?php get_footer(); ?>
