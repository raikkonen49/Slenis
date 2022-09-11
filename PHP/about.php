<?php
/*
Template Name: Apie mus
*/
?>

<?php get_header(); ?>

        <div class="breads-bg hold" style="background:url(<?php the_field('cover_image'); ?>) no-repeat center center">
            <div class="row">
                <div class="small-12 columns text-center page-title">
                    Ape mus
                </div>
                <div class="small-12 columns text-center breads">
                    <ul>
                        <li><a href="<?php echo home_url(); ?>">Pradžia</a></li>
                        <li>Apie mus</li>
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
                                <a class="fancybox" rel="group" href="<?php the_sub_field('first_image'); ?>"><img src="<?php the_sub_field('first_image'); ?>"></a>
                            </div>
                            <div class="small-6 columns nopadright">
                                <a class="fancybox" rel="group" href="<?php the_sub_field('second_image'); ?>"><img src="<?php the_sub_field('second_image'); ?>"></a>
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
        <div class="row row-md">
            <div class="small-12 columns cont-title hold text-center">
                Mūsų stovyklos darbuotojai
            </div>
            <div class="small-12 columns nopad employee-list">
                <ul>
                    <?php if( have_rows('employees_list', 'options') ): ?>
                        <?php while( have_rows('employees_list', 'options') ): the_row(); ?>

                            <li>
                                <div class="small-12 columns text-center employee-img-block">
                                    <div class="employee-img" style="background:url(<?php the_sub_field('image', 'options'); ?>) no-repeat center center"></div>
                                </div>
                                <div class="small-12 columns employee-name">
                                    <?php the_sub_field('name', 'options'); ?>
                                </div>
                                <div class="small-12 columns employee-work">
                                    <?php the_sub_field('position', 'options'); ?>
                                </div>
                                <div class="small-12 columns employee-phone">
                                    <?php the_sub_field('phone', 'options'); ?>
                                </div>
                                <div class="small-12 columns employee-email">
                                    <?php the_sub_field('e-mail', 'options'); ?>
                                </div>
                            </li>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>

<?php get_footer(); ?>
