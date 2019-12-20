<?php
/*
Template Name: Главная
*/
?>
<?php get_header()?>
<main>
    <section class="promo js-scroll-fade-in ">
        <div class="container">
            <div class="promo__inner">
                <h2 class="display promo__subtitle">
	                <?php pll_e('апарт-отель'); ?>
                </h2>
                <h1 class="display promo__title">
                    Baikal<br>story
                </h1>
                <button class="btn-fill js-open-appartaments-modal">
                    <?php pll_e('Выбрать апартаменты')?>
                </button>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="row about__row">
                <div class="about__left">
                    <h2 class="display display_size_big about__title js-scroll-fade-in ">
	                    <?php pll_e('BaikalStory — это апартаменты с домашним уютом и гостиничным сервисом')?>
                    </h2>
                    <div class="about__bg"></div>
                </div>
                <div class="benefits about__right">
                    <div class="row benefits__row">
                        <div class="benefits__col js-scroll-fade-in ">
                            <svg class="benefits__icon" width="50" height="50" viewBox="0 0 50 50">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-24-hours"></use>
                            </svg>
                            <h3 class="benefits__label">
	                            <?php pll_e('Заселение в любое время')?>
                            </h3>
                            <div class="benefits__text">
                                <p>
	                                <?php pll_e('Круглосуточная стойка ресепшн, охрана, видеонаблюдение')?>
                                </p>
                            </div>
                        </div>
                        <div class="benefits__col js-scroll-fade-in ">
                            <svg class="benefits__icon" width="50" height="50" viewBox="0 0 50 50">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-brush"></use>
                            </svg>
                            <h3 class="benefits__label">
	                            <?php pll_e('Идеальная Чистота')?>
                            </h3>
                            <div class="benefits__text">
                                <p>
	                                <?php pll_e('Убираемся в апартаментах каждый день')?>
                                </p>
                            </div>
                        </div>
                        <div class="benefits__col js-scroll-fade-in ">
                            <svg class="benefits__icon" width="50" height="50" viewBox="0 0 50 50">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-travel"></use>
                            </svg>
                            <h3 class="benefits__label">
	                            <?php pll_e('Трансфер от/до отеля')?>
                            </h3>
                            <div class="benefits__text">
                                <p>
	                                <?php pll_e('Предоставляем услугу трансфера в любую локацию в любое время')?>
                                </p>
                            </div>
                        </div>
                        <div class="benefits__col js-scroll-fade-in ">
                            <svg class="benefits__icon" width="50" height="50" viewBox="0 0 50 50">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-24-hours"></use>
                            </svg>
                            <h3 class="benefits__label">
	                            <?php pll_e('Укомплектованная кухня')?>
                            </h3>
                            <div class="benefits__text">
                                <p>
	                                <?php pll_e('На кухне есть все, то нужно для самостоятельной готовки')?>
                                </p>
                            </div>
                        </div>
                        <div class="benefits__col js-scroll-fade-in ">
                            <svg class="benefits__icon" width="50" height="50" viewBox="0 0 50 50">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-contract"></use>
                            </svg>
                            <h3 class="benefits__label">
	                            <?php pll_e('Отчетные документы')?>
                            </h3>
                            <div class="benefits__text">
                                <p>
	                                <?php pll_e('Предоставляем отчетные документы для организаций')?>
                                </p>
                            </div>
                        </div>
                        <div class="benefits__col js-scroll-fade-in ">
                            <svg class="benefits__icon" width="50" height="50" viewBox="0 0 50 50">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-good-review"></use>
                            </svg>
                            <h3 class="benefits__label">
	                            <?php pll_e('Положительные отзывы')?>
                            </h3>
                            <div class="benefits__text">
                                <p>
	                                <?php pll_e('Средняя оценка от наших гостей на сервисе AirBnb и Booking 4,6 из 5')?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="location">
        <div class="container">
            <div class="row location__row js-scroll-fade-in ">
                <h2 class="display display_size_big location__title">
	                <?php pll_e('Удобное расположение')?>
                </h2>
                <div class="location__desc">
                    <p>
	                    <?php pll_e('Апартаменты с 5 по 13 этаж, и расположен в 10 минутах от аэропорта, ЖД вокзала и центра города.')?>
                    </p>
                </div>
            </div>
            <div class="location__map">
                <img src="<?php echo get_template_directory_uri() ?>/img/static/map.jpg" alt="Карта">
                <a href="#" class="location__zoom-wrapper js-open-zoom-map">
                    <span class="location__zoom">
                        <svg class="location__icon" width="27" height="27" viewBox="0 0 27 27">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-search"></use>
                        </svg>
                    </span>
                </a>
            </div>
            <div class="location__map-popup-wrapper js-zoom-map">
                <div class="location__map-popup">
                    <img src="<?php echo get_template_directory_uri() ?>/img/static/map.jpg" alt="Карта">
                </div>
                <button class="location__close-zoom js-close-zoom-map">
                    <svg width="20" height="20" viewBox="0 0 20 20">
                        <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-close-zoom"></use>
                    </svg>
                </button>
            </div>
        </div>
    </section>
    <?php  $apartments = get_posts(array('post_type' => 'post_rooms'));?>
    <section class="prew-appartaments prew-appartaments_height_full prew-appartaments_mobile_hide">
        <div class="swiper-container prew-appartaments-slider">
            <div class="swiper-wrapper">
	            <?php foreach ($apartments as $apartment):?>
                    <div class="swiper-slide prew-appartaments-slider__slide"
                    style="background-image: url(<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($apartment), 'full')?>);">
                    <div class="container">
                        <div class="row prew-appartaments__row">
                            <h3 class="display prew-appartaments__title">
	                            <?php echo $apartment->post_title?>
                            </h3>
                            <div class="appartament-info prew-appartaments__appartament-info">
                                <div class="appartament-info__label">
                                    <?php pll_e('вместимость')?>
                                </div>
                                <div class="appartament-info__value">
	                                <?php the_field('rooms_size', $apartment->ID)?>
                                </div>
                            </div>
                            <div class="appartament-info prew-appartaments__appartament-info">
                                <div class="appartament-info__label">
                                    <?php pll_e('стоимость')?>
                                </div>
                                <div class="appartament-info__value">
	                                <?php the_field('rooms_price', $apartment->ID)?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div   >
                <?php endforeach;?>
            </div>
            <div class="prew-appartaments__content js-scroll-fade-in">
                <!-- Add Pagination -->
                <div class="prew-appartaments-slider__pagination"></div>
                <div class="appartaments-info-tile prew-appartaments__appartaments-info-tile">
                    <div class="appartaments-info-tile__head">
                        <div class="appartaments-info-tile__value">
                            <?php echo count($apartments)?>
                        </div>
                        <div class="appartaments-info-tile__text">
                            <?php pll_e('апартаментов с домашним уютом')?>
                        </div>
                    </div>
                    <button class="btn-fill appartaments-info-tile__btn js-open-appartaments-modal">
	                    <?php pll_e('Выбрать апартаменты')?>
                    </button>
                </div>
            </div>
            <div class="prew-appartaments-slider__controls">
                <button class="prew-appartaments-slider__control prew-appartaments-slider__control_prev">
                    <svg class="prew-appartaments-slider__icon" width="50" height="50" viewBox="0 0 69 69">
                        <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-arrow-slider-left"></use>
                    </svg>
                </button>
                <button class="prew-appartaments-slider__control prew-appartaments-slider__control_next">
                    <svg class="prew-appartaments-slider__icon" width="50" height="50" viewBox="0 0 69 69">
                        <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-arrow-slider-right"></use>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <section class="prew-appartaments prew-appartaments_desctop_hide">
        <div class="container">
            <div class="appartaments-info-tile prew-appartaments__appartaments-info-tile">
                <div class="appartaments-info-tile__head">
                    <div class="appartaments-info-tile__value">
	                    <?php echo count($apartments)?>
                    </div>
                    <div class="appartaments-info-tile__text">
	                    <?php pll_e('апартаментов с домашним уютом')?>
                    </div>
                </div>
                <button class="btn-fill appartaments-info-tile__btn js-open-appartaments-modal">
	                <?php pll_e('Выбрать апартаменты')?>
                </button>
                <img src="<?php echo get_template_directory_uri() ?>/img/static/divan.png" width="488" height="230" alt="">
            </div>
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <div class="row reviews__row">
                <div class="float-block">
                    <div class="reviews__sidebar js-scroll-fade-in ">
                        <h2 class="display display_size_big reviews__title">
	                        <?php pll_e('Отзывы наших гостей')?>
                        </h2>
                        <div class="reviews__subtext">
                            <p>
	                            <?php pll_e('Cобрали все отзывы наших гостей из всех платформ в одном месте. Мы ценим наших гостей и дорожим своей репутацией.')?>
                            </p>
                        </div>
                        <div class="partner-tile reviews__partner-tile">
                            <div class="partner-tile__left">
                                <img src="<?php echo get_template_directory_uri() ?>/img/airbnb.svg" class="partner-tile__airbnb" width="35" height="40"
                                    alt="airbnb">
                            </div>
                            <div class="partner-tile__right">
                                <div class="partner-tile__value">
                                    4,6 из 5
                                </div>
                                <div class="partner-tile__desc">
                                    <?php pll_e('средняя оценка')?>
                                </div>
                            </div>
                        </div>
                        <div class="partner-tile">
                            <div class="partner-tile__left">
                                <img src="<?php echo get_template_directory_uri() ?>/img/booking.svg" class="partner-tile__booking" width="49" height="40"
                                    alt="booking.com">
                            </div>
                            <div class="partner-tile__right">
                                <div class="partner-tile__value">
                                    8,6 из 10
                                </div>
                                <div class="partner-tile__desc">
	                                <?php pll_e('средняя оценка')?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reviews__content">
                    <div class="reviews-switcher reviews__reviews-switcher">
                        <div class="reviews-switcher__head js-scroll-fade-in ">
                            <div class="reviews-switcher__label">
	                            <?php pll_e('Отзывы:')?>
                            </div>
                            <div class="reviews-switcher__tabs">
                                <button class="reviews-switcher__tab is-active" data-language="ru">
                                    Русские
                                </button>
                                <button class="reviews-switcher__tab" data-language="ch">
                                    Chinese
                                </button>
                                <button class="reviews-switcher__tab" data-language="en">
                                    English
                                </button>
                            </div>
                        </div>
                        <div class="reviews-switcher__body">
                            <div class="reviews-switcher__tab-content ru" data-tab-body>
                                <?php
                                $reviews_ru = query_posts(array(
	                                'post_type' => 'post_review',
                                    'lang' => 'ru',
                                    'post_limits' => 3
                                ));
                                ?>
                                <?php foreach ($reviews_ru as $review):?>
                                    <div class="review js-scroll-fade-in ">
                                    <div class="review__hero">
	                                    <?php $imgUrl = wp_get_attachment_image_url(get_post_thumbnail_id($review), 'full');?>
                                        <img src="<?php echo $imgUrl?>" class="review__avatar" width="60" height="60"
                                            alt="<?php echo $review->post_title?>">
                                        <div class="review__hero-desc">
                                            <div class="review__name">
                                                <?php echo $review->post_title?>
                                            </div>
                                            <div class="review__date">
	                                            <?php echo $review->post_excerpt?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review__body">
	                                    <?php echo apply_filters('the_content', $review->post_content); ?>
                                    </div>
                                </div>
                                <?php endforeach; unset($review)?>
                            </div>
                            <div class="reviews-switcher__tab-content ch" style="display: none;" data-tab-body>
	                            <?php
	                            $reviews_ru = query_posts(array(
		                            'post_type' => 'post_review',
		                            'lang' => 'zh',
		                            'post_limits' => 3
	                            ));
	                            ?>
	                            <?php foreach ($reviews_ru as $review):?>
                                    <div class="review js-scroll-fade-in ">
                                        <div class="review__hero">
				                            <?php $imgUrl = wp_get_attachment_image_url(get_post_thumbnail_id($review), 'full');?>
                                            <img src="<?php echo $imgUrl?>" class="review__avatar" width="60" height="60"
                                                 alt="<?php echo $review->post_title?>">
                                            <div class="review__hero-desc">
                                                <div class="review__name">
						                            <?php echo $review->post_title?>
                                                </div>
                                                <div class="review__date">
						                            <?php echo $review->post_excerpt?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review__body">
				                            <?php echo apply_filters('the_content', $review->post_content); ?>
                                        </div>
                                    </div>
	                            <?php endforeach; unset($review)?>
                            </div>
                            <div class="reviews-switcher__tab-content en" style="display: none;" data-tab-body>
	                            <?php
	                            $reviews_ru = query_posts(array(
		                            'post_type' => 'post_review',
		                            'lang' => 'en',
		                            'post_limits' => 3
	                            ));
	                            ?>
	                            <?php foreach ($reviews_ru as $review):?>
                                    <div class="review js-scroll-fade-in ">
                                        <div class="review__hero">
				                            <?php $imgUrl = wp_get_attachment_image_url(get_post_thumbnail_id($review), 'full');?>
                                            <img src="<?php echo $imgUrl?>" class="review__avatar" width="60" height="60"
                                                 alt="<?php echo $review->post_title?>">
                                            <div class="review__hero-desc">
                                                <div class="review__name">
						                            <?php echo $review->post_title?>
                                                </div>
                                                <div class="review__date">
						                            <?php echo $review->post_excerpt?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review__body">
				                            <?php echo apply_filters('the_content', $review->post_content); ?>
                                        </div>
                                    </div>
	                            <?php endforeach; unset($review)?>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo get_page_data('reviewes')->guid?>" class="reviews__show-more"><?php pll_e('посмотреть все отзывы')?></a>
                </div>
            </div>
        </div>
    </section>

    <section class="instagram">
        <h2 class="display display_size_big instagram__title">
            <?php pll_e('Следите за жизнью отеля в')?>
            <a href="<?php the_field('contact_instagram', get_page_data('contacts')->ID)?>">Instagram</a>
	        <?php the_field('contact_phone')?>
        </h2>
        <div class="container">
            <ul class="row instagram__row">
	            <?php foreach (get_field('inst_gallery', get_page_data('index')->ID) as $img):?>
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

    <section class="excursions">
        <h2 class="excursions__title">
            <?php pll_e('Экскурсии')?>
        </h2>
        <div class="excursions__subtext">
            <p>
                <?php pll_e('Мы создаем доступный и незабываемый отдых для наших клиентов')?>
            </p>
        </div>
        <a href="<?php the_field('contact_excursions', get_page_data('contacts')->ID)?>" class="btn-fill excursions__btn">
            <?php pll_e('Посмотреть экскурсии')?>
        </a>
    </section>

</main>
<?php get_footer()?>


