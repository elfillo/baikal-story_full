<?php
/*
Template Name: Контакты
*/
?>
<?php get_header()?>
<main>
    <section class="contact-page">
        <div class="container">

            <!-- Begin breadcrumb -->
            <ul class="breadcrumb breadcrumb_mb">
                <li class="breadcrumb__item">
                    <a href="/">
                        <?php pll_e('Главная')?>
                    </a>
                </li>
                <li class="breadcrumb__item">
	                <?php pll_e('Контакты')?>
                </li>
            </ul>
            <!-- End breadcrumb -->

            <div class="row contact-page__row">
                <div class="contact-page__left js-scroll-fade-in">
                    <h1 class="display display_size_big contact-page__title">
	                    <?php pll_e('Контакты')?>
                    </h1>
                    <address class="contact-page__address">
                        <?php the_field('contact_address')?>
                    </address>
                    <div class="contact-page__subtitle">
                        <?php pll_e('Для бронирования проживания звоните по телефону или пишите нам в месенджеры:')?>
                    </div>
                    <a href="tel:<?php the_field('contact_phone_link')?>" class="contact-page__link contact-page__link_mb">
                        <?php the_field('contact_phone')?>
                    </a>

                    <ul class="messanger-list contact-page__messanger-list">
                        <li class="messanger-list__item">
                            <a href="<?php the_field('contact_whatsapp')?>" class="messanger-check">
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
                            <a href="<?php the_field('contact_viber')?>" class="messanger-check">
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
                            <a href="<?php the_field('contact_telegram')?>" class="messanger-check">
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
                            <a href="<?php the_field('contact_wechat')?>" class="messanger-check">
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

                    <div class="contact-page__subtitle">
                        <?php pll_e('Для партнеров и предложений о сотрудничестве:')?>
                    </div>
                    <a href="mailto:<?php the_field('contact_email')?>" class="contact-page__link">
                        <?php the_field('contact_email')?>
                    </a>
                </div>
                <div class="contact-page__right js-scroll-fade-in">
                    <div class="contact-page__map" id="map"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="instagram">
        <h2 class="display display_size_big instagram__title">
            <?php pll_e('Следите за жизнью отеля в')?> <a href="<?php the_field('contact_instagram')?>">Instagram</a>
        </h2>
        <div class="container">
            <ul class="row instagram__row">
		        <?php foreach (get_field('inst_gallery', 69) as $img):?>
			        <?php $imgUrl = wp_get_attachment_image_src($img, 'full')[0];?>
                    <div class="instagram__item js-scroll-fade-in ">
                        <a href="#" class="instagram__link">
                            <img src="<?php echo $imgUrl?>" alt="inst">
                        </a>
                    </div>
		        <?php endforeach; unset($img)?>
            </ul>
        </div>
    </section>

</main>
<?php get_footer()?>