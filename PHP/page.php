
<?php get_header(); ?>

        <div class="breads-bg hold" style="background:url(<?php the_field('cover_image'); ?>) no-repeat center center">
            <div class="row">
                <div class="small-12 columns text-center page-title">
                    <?php the_title(); ?>
                </div>
                <div class="small-12 columns text-center breads">
                    <ul>
                        <li><a href="<?php echo home_url(); ?>">Pradžia</a></li>
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row row-sm hold">
            <div class="small-12 columns nopad entry">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php the_content(); ?>

                <?php wp_reset_query();?>
                <?php endwhile; else : ?>
                <?php endif; ?>

                <div class="small-12 columns gallery nopad">
                    <?php if( have_rows('large_image_list') ): ?>
                        <?php while( have_rows('large_image_list') ): the_row(); ?>

                            <a class="fancybox" rel="group" href="<?php the_sub_field('large_image'); ?>"><img src="<?php the_sub_field('large_image'); ?>"></a>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="small-12 columns gallery nopad">
                    <?php if( have_rows('two_medium_images_list') ): ?>
                        <?php while( have_rows('two_medium_images_list') ): the_row(); ?>

                            <div class="small-6 columns nopadleft">
                                <img src="<?php the_sub_field('first_image'); ?>">
                            </div>
                            <div class="small-6 columns nopadright">
                                <img src="<?php the_sub_field('second_image'); ?>">
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="small-12 columns gallery nopad">
                    <ul>
                        <?php if( have_rows('small_images_list') ): ?>
                            <?php while( have_rows('small_images_list') ): the_row(); ?>

                                <li><a class="fancybox" rel="group" href="<?php the_sub_field('image'); ?>"><img src="<?php the_sub_field('image'); ?>"></a></li>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>

<?php get_footer(); ?>
