<?php get_header(); ?>

        <div class="intro-block" style="background:url(<?php the_field('image'); ?>) no-repeat center center">
            <div class="small-12 columns intro">
                <div class="small-12 columns nopad text-center intro-title">
                    <span>Laukžemės slėnis</span>
                    Vaikų vasaros stovykla
                </div>
                <div class="small-12 columns nopad text-center">
                    <a class="btn md blue" data-open="exampleModal1" href="#">Registuotis</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="small-12 columns text-center section-title">
                Stovyklos pamainos
            </div>
            <div class="small-12 columns text-center slogan">
                Laukžemės slėnio stovyklos 2017 metų pamainos
            </div>
        </div>
        <div class="row row-sm">
            <div class="small-12 columns shifts-slider-block nopad">
                <div class="shifts-slider-next slider-arrow"></div>
                <div class="shifts-slider-prev slider-arrow"></div>
                <div class="owl-carousel owl-theme" id="shifts-slider">

                    <?php if( have_rows('shift', 'options') ): ?>
                        <?php while( have_rows('shift', 'options') ): the_row(); ?>

                            <div class="shift-item text-center">
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
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
            <div class="small-12 columns text-center nopad slider-btn">
                <a class="btn lg white" href="<?php echo get_page_link(15); ?>">Žiūrėti visas pamainas</a>
            </div>
        </div>
        <div class="blue-bg">
            <div class="row">
                <div class="small-12 columns orber-block nopad">
                    <div class="small-12 medium-12 large-6 columns nopad order">
                        <span>Norite sužinoti stovyklos naujienas?</span>
                        Užsisakykite naujienlaiškį!
                    </div>
                    <div class="small-12 medium-12 large-6 columns nopad order-area">
                        <input type="text" placeholder="Jūsų El.paštas">
                        <button class="order-btn" type="button">Užsakyti</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="small-12 columns text-center section-title">
                Stovyklos komanda
            </div>
            <div class="small-12 columns text-center slogan">
                Laukžemės slėnio stovyklos darbuotojai
            </div>
        </div>
        <div class="row row-sm">
            <div class="small-12 columns employee-slider-block nopad">
                <div class="employee-slider-next slider-arrow"></div>
                <div class="employee-slider-prev slider-arrow"></div>
                <div class="owl-carousel owl-theme" id="employee-slider">
                    <?php if( have_rows('employees_list') ): ?>
                        <?php while( have_rows('employees_list') ): the_row(); ?>

                            <div class="employee-item text-center">
                                <div class="small-12 columns text-center employee-img-block">
                                    <div class="employee-img" style="background:url(<?php the_sub_field('image'); ?>) no-repeat center center"></div>
                                </div>
                                <div class="small-12 columns employee-name">
                                    <?php the_sub_field('name'); ?>
                                </div>
                                <div class="small-12 columns employee-work">
                                    <?php the_sub_field('position'); ?>
                                </div>
                                <div class="small-12 columns employee-phone">
                                    <?php the_sub_field('phone'); ?>
                                </div>
                                <div class="small-12 columns employee-email">
                                    <?php the_sub_field('e-mail'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="small-12 columns text-center slider-btn">
                <a class="btn lg white" href="<?php echo get_page_link(70); ?>">Žiūrėti visą komandą</a>
            </div>
        </div>

<?php get_footer(); ?>
