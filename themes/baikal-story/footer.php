<footer class="foot-page">
	<?php
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object($locations['Main']);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
	?>
    <div class="foot-page__top js-scroll-fade-in ">
        <div class="container">
            <div class="row foot-page__row">

                <!-- Begin logo-hor -->
                <a href="index.php" class="logo foot-page__logo">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" class="logo__img">
                    <h2 class="logo__text">
                        Baikal<br>Story
                    </h2>
                </a>
                <!-- Begin logo-hor -->

                <!-- Begin nav-menu -->
                <nav class="nav-menu foot-page__nav-menu">
                    <ul class="nav-menu__list">
                        <li class="nav-menu__item">
                            <button class="nav-menu__btn">
	                            <?php pll_e('Апартаменты')?>
                            </button>
                        </li>
	                    <?php foreach ( (array) $menu_items as $key => $menu_item ): ?>
                            <li class="nav-menu__item">
                                <a href="<?php echo $menu_item->url?>" class="nav-menu__link">
				                    <?php echo $menu_item->title?>
                                </a>
                            </li>
	                    <?php endforeach;?>
                    </ul>
                </nav>
                <!-- End nav-menu -->

                <!-- Begin language -->
                <div class="language foot-page__language">
                    <div class="language__head">
                        <div class="language__text">
                            We speak
                        </div>
                        <div class="language__current">
                            <img src="<?php echo get_template_directory_uri() ?>/img/flags/<?php echo pll_current_language()?>.svg" alt="<?php echo pll_current_language()?>">
                        </div>
                    </div>
                    <ul class="language__list">
	                    <?php $translations = pll_the_languages(array('raw'=>1, 'hide_current' => 1));?>
	                    <?php foreach ($translations as $key => $lang):?>
                            <li>
                                <a href="<?php echo $lang['url']?>">
                                    <img src="<?php echo get_template_directory_uri()?>/img/flags/<?php echo $key?>.svg" alt="China">
                                    <span>
                                        <?php echo $key?>
                                    </span>
                                </a>
                            </li>
	                    <?php endforeach;?>
                    </ul>
                </div>
                <!-- End language -->

                <a href="tel:88005550000" class="contact-phone contact-phone_size_big foot-page__contact-phone">
                    8 800 555 00 00
                </a>

            </div>
        </div>
    </div>
    <div class="foot-page__bottom js-scroll-fade-in ">
        <div class="container">
            <div class="row">
                <div class="copy foot-page__copy">
                    © 2019 «Байкал стори»
                </div>
                <a href="#" class="policy foot-page__policy">
                    Политика конфиденциальности
                </a>
                <a href="#" class="design-dev foot-page__design-dev">
                    <?php pll_e('Дизайн и разработка:')?> kopelev
                </a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>