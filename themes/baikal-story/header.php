<!DOCTYPE html>
<html lang="ru">
<head>
	<?php wp_head(); ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="description" content="" />
    <title></title>
    <link rel="shortcut icon" type="image/x-icon" sizes="16x16" href="" />

    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/AngleciaPro.woff" as="font" type="font/woff" crossorigin="anonymous" />
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/AngleciaPro.woff2" as="font" type="font/woff2" crossorigin="anonymous" />
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Stolzl-Light.woff" as="font" type="font/woff" crossorigin="anonymous" />
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Stolzl-Light.woff2" as="font" type="font/woff2" crossorigin="anonymous" />
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Stolzl-Regular.woff" as="font" type="font/woff" crossorigin="anonymous" />
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Stolzl-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous" />
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Stolzl-Medium.woff" as="font" type="font/woff" crossorigin="anonymous" />
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Stolzl-Medium.woff2" as="font" type="font/woff2" crossorigin="anonymous" />
</head>
<body class="page">
    <?php
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object($locations['Main']);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
    ?>

    <header class="head-page js-scroll-fade-in">
        <div class="container">
            <div class="row head-page__row">

                <!-- Begin logo-hor -->
                <a href="/" class="logo head-page__logo">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" class="logo__img">
                    <h2 class="logo__text">
                        Baikal<br>Story
                    </h2>
                </a>
                <!-- Begin logo-hor -->

                <!-- Begin nav-menu -->
                <nav class="nav-menu head-page__nav-menu">
                    <ul class="nav-menu__list">
                        <li class="nav-menu__item">
                            <button class="nav-menu__btn js-open-appartaments-modal">
                                <svg class="nav-menu__icon" width="15" height="15" viewBox="0 0 15 15">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-tiles"></use>
                                </svg>
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
                <div class="language head-page__language">
                    <div class="language__head">
                        <div class="language__text">
                            We speak
                        </div>
                        <div class="language__current">
                            <img src="<?php echo get_template_directory_uri() ?>/img/flags/<?php echo pll_current_language()?>.svg" alt="<?php echo pll_current_language()?>">
                            <span>
                                Ru
                            </span>
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

                <a href="tel:<?php the_field('contact_phone_link', get_page_data('contacts')->ID)?>" class="contact-phone contact-phone_size_small head-page__contact-phone">
	                <?php the_field('contact_phone', get_page_data('contacts')->ID)?>
                </a>

                <button class="appartament-menu head-page__appartament-menu">
                    <svg class="appartament-menu__icon" width="33" height="30" viewBox="0 0 33 30">
                        <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-apartament1"></use>
                    </svg>
                </button>

                <!-- Begin burger-menu -->
                <button class="burger-menu head-page__burger-menu">
                    <span class="burger-menu__item"></span>
                </button>
                <!-- End burger-menu -->


            </div>
        </div>
    </header>

    <!-- Begin mobile-menu -->
    <div class="mobile-menu">
        <nav class="mobile-menu__nav">
            <ul class="mobile-menu__list">
                <li class="mobile-menu__item">
                    <button class="mobile-menu__btn">
	                    <?php pll_e('Апартаменты')?>
                    </button>
                </li>
	            <?php foreach ( (array) $menu_items as $key => $menu_item ): ?>
                    <li class="mobile-menu__item">
                        <a href="<?php echo $menu_item->url?>" class="mobile-menu__link">
				            <?php echo $menu_item->title?>
                        </a>
                    </li>
	            <?php endforeach;?>
            </ul>

        </nav>
        <a href="tel:<?php the_field('contact_phone_link', get_page_data('contacts')->ID)?>" class="mobile-menu__contact">
            <span class="mobile-menu__contact-value">
                <?php the_field('contact_phone', get_page_data('contacts')->ID)?>
            </span>
            <span class="mobile-menu__contact-text">
                <?php pll_e('звонок бесплатный')?>
            </span>
        </a>
        <ul class="messanger-list mobile-menu__messanger-list">
            <li class="messanger-list__item">
                <a href="<?php the_field('contact_whatsapp', get_page_data('contacts')->ID)?>" class="messanger-check">
                    <svg class="messanger-check__icon messanger-check__icon_whatsapp" width="29" height="29"
                        viewBox="0 0 29 29">
                        <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-WhatsApp"></use>
                    </svg>
                    <span class="messanger-check__label">
                        Whatsapp
                    </span>
                </a>
            </li>
            <li class="messanger-list__item">
                <a href="<?php the_field('contact_viber', get_page_data('contacts')->ID)?>" class="messanger-check">
                    <svg class="messanger-check__icon messanger-check__icon_viber" width="24" height="24"
                        viewBox="0 0 24 24">
                        <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-viber"></use>
                    </svg>
                    <span class="messanger-check__label">
                        Viber
                    </span>
                </a>
            </li>
            <li class="messanger-list__item">
                <a href="<?php the_field('contact_telegram', get_page_data('contacts')->ID)?>" class="messanger-check">
                    <svg class="messanger-check__icon messanger-check__icon_telegram" width="25" height="21"
                        viewBox="0 0 25 21">
                        <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-telegram"></use>
                    </svg>
                    <span class="messanger-check__label">
                        Telegram
                    </span>
                </a>
            </li>
            <li class="messanger-list__item">
                <a href="<?php the_field('contact_wechat', get_page_data('contacts')->ID)?>" class="messanger-check">
                    <svg class="messanger-check__icon messanger-check__icon_wechat" width="32" height="27"
                        viewBox="0 0 32 27">
                        <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-wechat"></use>
                    </svg>
                    <span class="messanger-check__label">
                        Wechat
                    </span>
                </a>
            </li>
        </ul>
    </div>
<?php require_once ('parts/views/appartaments-popup.php')?>
