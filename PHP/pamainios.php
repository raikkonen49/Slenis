<?php
/*
Template Name: Pamainos
*/
?>

<?php get_header(); ?>

        <div class="breads-bg" style="background:url(<?php the_field('cover_image'); ?>) no-repeat center center">
            <div class="row">
                <div class="small-12 columns text-center page-title">
                    Pamainos
                </div>
                <div class="small-12 columns text-center breads">
                    <ul>
                        <li><a href="<?php echo home_url(); ?>">Pradžia</a></li>
                        <li>Pamainos</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="small-12 columns cont-title text-center">
                Laukžemės slėnio stovyklos 2017 metų pamainos
            </div>
            <div class="small-12 columns nopad shifts-list">
                <ul>
                    <?php if( have_rows('shift', 'options') ): ?>
                        <?php while( have_rows('shift', 'options') ): the_row(); ?>

                            <li>
                                <div class="small-12 columns shift-title">
                                    <?php the_sub_field('shift_title', 'options'); ?>
                                </div>
                                <div class="small-12 columns shift-text">
                                    <ul>
                                        <?php if( have_rows('shift_text', 'options') ): ?>
                                            <?php while( have_rows('shift_text', 'options') ): the_row(); ?>

                                                <li><?php the_sub_field('text', 'options'); ?></li>

                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <div class="small-12 columns shift-price">
                                    <?php the_sub_field('shift_price', 'options'); ?>
                                </div>
                            </li>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="small-12 columns nopad important-info">
                <span>* Norime pranešti, jog stovyklautojai nėra apdrausti stovyklos metu. Tai paliekame Tėvelių nuožiūrai.</span>
                Vietą rezervuosime kai pervesite 50 eurų avansą
            </div>
        </div>

<?php get_footer(); ?>
