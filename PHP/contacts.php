<?php
/*
Template Name: Kontaktai
*/
?>

<?php get_header(); ?>

        <div class="breads-bg cont" style="background:url(<?php the_field('cover_image'); ?>) no-repeat center center">
            <div class="row">
                <div class="small-12 columns text-center page-title">
                    Kontaktai
                </div>
                <div class="small-12 columns text-center breads">
                    <ul>
                        <li><a href="<?php echo home_url(); ?>">Pradžia</a></li>
                        <li>Kontaktai</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row row-sm hold">
            <div class="small-12 columns nopad contacts-items">
                <ul data-equalizer>
                    <li data-equalizer-watch>
                        <div class="small-12 columns nopad text-center contacts-item-title">
                            Telefonas
                        </div>
                        <div class="small-12 columns nopad text-center contacts-item-text">
                            <?php the_field('phone'); ?>
                        </div>
                    </li>
                    <li data-equalizer-watch>
                        <div class="small-12 columns nopad text-center contacts-item-title">
                            El. paštas
                        </div>
                        <div class="small-12 columns nopad text-center contacts-item-text">
                            <?php the_field('e-mail'); ?>
                        </div>
                    </li>
                    <li data-equalizer-watch>
                        <div class="small-12 columns nopad text-center contacts-item-title">
                            Adresas
                        </div>
                        <div class="small-12 columns nopad text-center contacts-item-text">
                            <?php the_field('address'); ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row row-lt">
            <div class="small-12 columns nopad text-center requisites">
                <div class="small-12 columns nopad requisites-bg">
                    <div class="small-12 columns nopad requisites-title">
                        Rekvizitai
                    </div>
                    <div class="small-12 columns nopad requisites-text">
                        <?php the_field('requisites'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-sm hold">
            <div class="small-12 columns nopad text-center cont-text">
                <?php the_field('text'); ?>
            </div>
        </div>
        <div class="map">
            <img src="img/map.png">
        </div>

<?php get_footer(); ?>
