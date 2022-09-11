
<?php get_header(); ?>

        <div class="breads-bg" style="background:url(<?php the_field('cover_image', 'options'); ?>) no-repeat center center">
            <div class="row">
                <div class="small-12 columns text-center page-title">
                    Galerija
                </div>
                <div class="small-12 columns text-center breads">
                    <ul>
                        <li><a href="<?php echo home_url(); ?>">Pradžia</a></li>
                        <li>Galerija</li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="row row-sm hold">
                <div class="small-12 columns nopad albums-block">
                    <?php
                    $arg_cat = array(
                        'orderby'      => 'name',
                        'order'        => 'ASC',
                        'taxonomy'     => 'metai',
                    );
                    $categories = get_categories( $arg_cat );
                         foreach( $categories as $cat ){
                             $arg_posts =  array(

                             );
                             ?>
                    <div class="small-12 columns nopad cont-title text-center">
                        <?php echo $cat->name; ?>
                    </div>
                    <div class="small-12 columns nopad albums-list">
                        <ul>
                            <?php $loop = new WP_Query ( array(
                                'post_type' => 'gallery',
                                'posts_per_page' => 99,
                                'order' => 'DESC',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'metai',
                                        'terms'    => $cat->cat_ID,
                                    ),
                                ),
                            )); ?>
                            <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink() ?>" style="background:url(<?php the_post_thumbnail_url('full'); ?>) no-repeat center center">
                                    <div class="small-12 columns text-center nopad album-title">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="small-12 columns nopad text-center">
                                        <span class="btn yellow">Žiūrėti nuotraukas</span>
                                    </div>
                                </a>
                            </li>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                <?php
                }

                ?>
            </div>
        </div>





<?php get_footer(); ?>
