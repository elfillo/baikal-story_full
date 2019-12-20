<?php
/*
Template Name: Номер
Template Post Type: post_rooms
*/
?>
<?php get_header()?>
<main>
    <section class="prew-appartaments prew-appartaments_inner-page">

        <div class="fixed-mobile-block">
            <div class="fixed-mobile-block__info">
                <div class="fixed-mobile-block__info-value">
                    <?php the_field('rooms_size', $post->ID)?>
                </div>
                <div class="fixed-mobile-block__info-label">
                    <?php pll_e('вместимость')?>
                </div>
            </div>
            <div class="fixed-mobile-block__info">
                <div class="fixed-mobile-block__info-value">
                    <?php the_field('rooms_price', $post->ID)?>
                </div>
                <div class="fixed-mobile-block__info-label">
                    <?php pll_e('стоимость')?>
                </div>
            </div>
            <button class="btn-fill fixed-mobile-block__btn js-show-order-modal">
                <?php pll_e('Забронировать апартаменты')?>
            </button>
        </div>
        

        <div class="container">
            <!-- Begin breadcrumb -->
            <ul class="breadcrumb breadcrumb_mb">
                <li class="breadcrumb__item">
                    <a href="/">
                        <?php pll_e('Главная')?>
                    </a>
                </li>
                <li class="breadcrumb__item">
                    <?php echo $post->post_title?>
                </li>
            </ul>
            <!-- End breadcrumb -->

            <h1 class="display display_size_big prew-appartaments__title-inner-page">
	            <?php echo $post->post_title?>
            </h1>

            <div class="swiper-container prew-appartaments-slider prew-appartaments-slider_inner-page">
                <div class="swiper-wrapper">
                    <?php

                    ?>
                    <?php foreach (get_field('room_galley', $post->ID) as $img):?>
                    <div class="swiper-slide prew-appartaments-slider__slide"
                        style="background-image: url(<?php echo wp_get_attachment_image_src($img, 'full')[0]?>);"></div>
                    <?php endforeach;?>
                </div>
                <!-- Add Pagination -->
                <div class="prew-appartaments-slider__pagination"></div>
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
        </div>
    </section>

    <section class="body-inner-page">
        <div class="container">
            <div class="row">
                <div class="body-inner-page__left">
                    <?php if(!empty(get_post_meta($post->ID, 'room_description', true))):?>
                    <h2 class="display display_size_small body-inner-page__title">
                        <?php pll_e('Описание')?>
                    </h2>
                    <div class="body-inner-page__text">
                        <p>
                            <?php the_field('room_description', $post->ID)?>
                        </p>
                    </div>
                    <?php endif;?>
                    <div class="body-inner-page__img" style="background-color: #FCF7F1;">
                        <img src="" alt="">
                    </div>


                    <div class="places">
                        <h2 class="display display_size_small body-inner-page__title">
                            <?php pll_e('Спальные места')?>
                        </h2>
                        <div class="row places__row">
                            <?php $bedsIds = get_post_meta($post->ID, 'bed_id', true); ?>
                            <?php foreach ($bedsIds as $id):?>
                            <div class="place">
                                <img
                                        class="place__icon place__icon_apartament1"
                                        src="<?php echo get_the_post_thumbnail_url($id)?>"
                                        alt="<?php echo get_post($id)->post_title?>"
                                        width="33" height="30"
                                />
                                <div class="place__label">
                                    <?php echo get_post($id)->post_title?>
                                </div>
                                <div class="place__desc">
	                                <?php echo get_post($id)->post_content?>
                                </div>
                            </div>
                            <?php endforeach; unset($id);?>
                        </div>
                    </div>

                    <div class="conveniences">
                        <h2 class="display display_size_small body-inner-page__title">
                            <?php pll_e('Удобства')?>
                        </h2>
                        <?php foreach (explode('/', get_post_meta($post->ID, 'rooms_services', true )) as $item):?>
                        <div class="convenienc">
                            <svg class="convenienc__icon" width="20" height="20" viewBox="0 0 20 20">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-check"></use>
                            </svg>
                            <?php echo $item?>
                        </div>
                        <?php endforeach; unset($item)?>
                        <div class="banner">
                            <?php
                                $img_id = get_field('promotional_banner', 69);
                                $imgUrl = wp_get_attachment_image_src($img_id, 'full')[0];
                            ?>
                            <img src="<?php echo $imgUrl?>" alt="при проживании от 7 дней скидка 10%">
                        </div>
                    </div>
                    <?php
                    $reviews = query_posts(array(
	                    'post_type' => 'post_review',
	                    'meta_key'  => 'room_id',
	                    'meta_value'=> $post->ID
                    ));
                    ?>
                    <div class="reviewes-appartament">
                        <h2 class="display display_size_small body-inner-page__title">
                            <?php pll_e('Отзывы наших гостей')?>
                        </h2>
                        <?php foreach ($reviews as $review):?>
                            <div class="review">
                                <div class="review__hero">
                                    <?php $imgUrl = wp_get_attachment_image_url(get_post_thumbnail_id($review), 'full');?>
                                    <img src="<?php echo $imgUrl?>" class="review__avatar" width="60" height="60" alt="<?php echo $review->post_title?>">
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
                        <?php endforeach;?>
                    </div>

                    <div class="location-appartament">
                        <h2 class="display display_size_small body-inner-page__title">
                            <?php pll_e('Удобное расположение')?>
                        </h2>
                        <div class="location-appartament__map" id="map"
                            style="background-color: #FCF7F1;">

                        </div>
                    </div>
                </div>
                <div class="body-inner-page__right">
                    <div class="float-block">
                        <div class="reservation-card">
                            <div class="logo reservation-card__logo">
                                <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" class="logo__img">
                            </div>

                            <h3 class="display display_size_small reservation-card__title">
                                <?php pll_e('Забронировать проживание')?>
                            </h3>
                            <div class="reservation-card__text">
                                <p>
                                    <?php pll_e('Бронируя апартаменты в нашем отеле, вы получаете всё, что нужно для отдыха:')?>
                                    <br><br>
                                    <?php pll_e('необходимое оснащение, комфортную и чистую комнату, а также высококлассное обслуживание.')?>
                                </p>
                            </div>
                            <div class="reservation-card__info-wrapper">
                                <div class="reservation-card__info-tile reservation-card__info-tile_left">
                                    <div class="reservation-card__info-label">
                                        <?php pll_e('вместимость')?>
                                    </div>
                                    <div class="reservation-card__info-value">
	                                    <?php the_field('rooms_size', $post->ID)?>
                                    </div>
                                </div>
                                <div class="reservation-card__info-tile reservation-card__info-tile_right">
                                    <div class="reservation-card__info-label">
	                                    <?php pll_e('стоимость')?>
                                    </div>
                                    <div class="reservation-card__info-value">
	                                    <?php the_field('rooms_price', $post->ID)?>
                                    </div>
                                </div>
                            </div>
                            <button class="btn-fill reservation-card__btn js-show-order-modal">
                                <?php pll_e('Забронировать апартаменты')?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Begin order -->
<div class="order-modal">
    <div class="order-modal__overlay"></div>
    <div class="order-modal__inner">
        <div class="order-modal__left">
            <div class="float-block order-modal__float-block">
                <div class="logo order-modal__logo">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" class="logo__img">
                </div>
                <h2 class="display display_size_small order-modal__title">
	                <?php echo $post->post_title?>
                </h2>
                <div class="order-modal__appartament-info-wrapper">
                    <div class="order-modal__appartament-info">
                        <div class="order-modal__appartament-info-label">
                            <?php pll_e('вместимость')?>
                        </div>
                        <div class="order-modal__appartament-info-value">
	                        <?php the_field('rooms_size', $post->ID)?>
                        </div>
                    </div>
                    <div class="order-modal__appartament-info">
                        <div class="order-modal__appartament-info-label">
	                        <?php pll_e('стоимость')?>
                        </div>
                        <div class="order-modal__appartament-info-value" data-price="3500">
	                        <?php the_field('rooms_price', $post->ID)?>
                        </div>
                    </div>
                    <div class="order-modal__time">
                        <svg class="order-modal__icon-time" width="35" height="35" viewBox="0 0 50 50">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-24-hours"></use>
                        </svg>
                        <span>
                            <?php pll_e('Заселение в любое время')?>
                        </span>
                    </div>
                </div>
                <div class="order-modal__img" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/admin/slide-main.jpg);"></div>
            </div>
        </div>
        <div class="order-modal__right">
            <form action="" method="POST" class="form js-validate-form">
                <div class="order-modal__step order-modal__step_first">
                    <div class="order-modal__step-label">
                        <?php pll_e('Шаг 1 из 2')?>
                    </div>
                    <h3 class="display display_size_small order-modal__step-titel">
                        <?php pll_e('Забронировать проживание')?>
                    </h3>
                    <input type="hidden" name="room_name" value="<?php echo $post->post_title?>">
                    <div class="guests-count">
                        <h3 class="display order-modal__subtitle guests-count__title">
                            <?php pll_e('Колиичество гостей')?>
                        </h3>
                        <div class="order-modal__guests-count-wrapper">
                            <div class="guests-count__rect guests-count__rect_left">
                                <div class="guests-count__label">
                                    <?php pll_e('Взрослые')?>
                                </div>
                                <div class="guests-count__counter js-counter"">
                                        <button class=" guests-count__btn" data-minus>
                                    -
                                    </button>
                                    <div class="guests-count__value" data-value>
                                        0
                                    </div>
                                    <button class="guests-count__btn" data-plus>
                                        +
                                    </button>
                                    <input type="text" name="countGouwup" class="guests-count__input js-count-input">
                                </div>
                            </div>
                            <div class="guests-count__rect guests-count__rect_right">
                                <div class="guests-count__label">
	                                <?php pll_e('Дети')?>
                                </div>
                                <div class="guests-count__counter js-counter">
                                    <button class="guests-count__btn" data-minus>
                                        -
                                    </button>
                                    <div class="guests-count__value" data-value>
                                        0
                                    </div>
                                    <button class="guests-count__btn" data-plus>
                                        +
                                    </button>
                                    <input type="text" name="countChild" class="guests-count__input js-count-input">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-modal__dates-wrapper">
                        <div class="select-date order-modal__select-date js-date-start">
                            <h4 class="display order-modal__subtitle">
                                <?php pll_e('Дата прибытия')?>
                            </h4>
                            <div class="select-date__day" data-day>
                                0
                            </div>
                            <div class="select-date__other" data-other>
	                            <?php pll_e('Месяц')?>, <?php pll_e('Год')?>
                            </div>
                        </div>
                        <div class="select-date order-modal__select-date js-date-end">
                            <h4 class="display order-modal__subtitle">
                                <?php pll_e('Дата отъезда')?>
                            </h4>
                            <div class="select-date__day" data-day>
                                0
                            </div>
                            <div class="select-date__other" data-other>
	                            <?php pll_e('Месяц')?>, <?php pll_e('Год')?>
                            </div>
                        </div>
                    </div>
                    <input type="text" name="userDate" class="order-modal__date" />
                    <div class="datepicker-here order-modal__datepicker-here" data-language='en' data-multiple-dates="2"
                        data-range="true"></div>
                    <div class="order-modal__action">
                        <div class="order-modal__results">
                            <div class="order-modal__result order-modal__result_left">
                                <span data-count-night>0 ночей</span>
                            </div>
                            <div class="order-modal__result order-modal__result_right">
                                <span data-total-price>0 ₽</span>
                            </div>
                        </div>

                        <button class="btn-fill order-modal__btn-next js-next-step">
                            <?php pll_e('Далее')?>
                        </button>
                    </div>
                </div>
                <div class="order-modal__step order-modal__step_second">
                    <div class="order-modal__step-label">
                        <?php pll_e('Шаг 2 из 2')?>
                    </div>
                    <h3 class="display display_size_small order-modal__step-titel">
                        <?php pll_e('Контактные данные')?>
                    </h3>
                    <div class="form__group">
                        <label for="userName" class="form__label">
                            <?php pll_e('Ваше имя и фамилия')?> *
                        </label>
                        <input type="text" name="userName" id="userName" class="form__input" data-required>
                    </div>
                    <div class="form__group">
                        <label for="userEmail" class="form__label">
                            <?php pll_e('Ваш e-mail')?>
                        </label>
                        <input type="text" name="userEmail" id="userEmail" class="form__input">
                    </div>
                    <div class="form__group">
                        <label for="userPhone" class="form__label">
                            <?php pll_e('Ваш телефон')?> *
                        </label>
                        <input type="text" name="userPhone" id="userPhone" class="form__input" data-phone data-required>
                    </div>
                    <div class="form__group">
                        <label for="userMessage" class="form__label">
                            <?php pll_e('Коментарий к бронированию')?>
                        </label>
                        <textarea name="userMessage" id="userMessage" class="form__textarea"></textarea>
                    </div>
                    <div class="form__group">
                        <span class="form__label">
                            <?php pll_e('Мы можем связаться с вами через месенджер')?>
                        </span>
                        <ul class="messanger-list form__messanger-list">
                            <li class="messanger-list__item">
                                <input type="checkbox" class="messanger-check__checkbox" id="whatsapp" name="whatsapp">
                                <label for="whatsapp" class="messanger-check">
                                    <svg class="messanger-check__icon messanger-check__icon_whatsapp" width="29"
                                        height="29" viewBox="0 0 29 29">
                                        <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-WhatsApp"></use>
                                    </svg>
                                    <span class="messanger-check__label">
                                        Whatsapp
                                    </span>
                                </label>
                            </li>
                            <li class="messanger-list__item">
                                <input type="checkbox" class="messanger-check__checkbox" id="viber" name="viber">
                                <label for="viber" class="messanger-check">
                                    <svg class="messanger-check__icon messanger-check__icon_viber" width="24"
                                        height="24" viewBox="0 0 24 24">
                                        <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-viber"></use>
                                    </svg>
                                    <span class="messanger-check__label">
                                        Viber
                                    </span>
                                </label>
                            </li>
                            <li class="messanger-list__item">
                                <input type="checkbox" class="messanger-check__checkbox" id="telegram" name="telegram">
                                <label for="telegram" class="messanger-check">
                                    <svg class="messanger-check__icon messanger-check__icon_telegram" width="25"
                                        height="21" viewBox="0 0 25 21">
                                        <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-telegram"></use>
                                    </svg>
                                    <span class="messanger-check__label">
                                        Telegram
                                    </span>
                                </label>
                            </li>
                            <li class="messanger-list__item">
                                <input type="checkbox" class="messanger-check__checkbox" id="wechat" name="wechat">
                                <label for="wechat" class="messanger-check">
                                    <svg class="messanger-check__icon messanger-check__icon_wechat" width="32"
                                        height="27" viewBox="0 0 32 27">
                                        <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-wechat"></use>
                                    </svg>
                                    <span class="messanger-check__label">
                                        Wechat
                                    </span>
                                </label>
                            </li>
                        </ul>
                        <div class="order-modal__action">
                            <button class="order-modal__btn-back js-prev-step">
                                <svg width="7" height="9" viewBox="0 0 7 9" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5" d="M6.5 0.5L1.5 4.5L6.5 8" stroke="black" />
                                </svg>
                                <?php pll_e('назад')?>
                            </button>

                            <button class="btn-fill order-modal__submit js-submit">
                                <?php pll_e('Забронировать')?>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <button class="order-modal__close js-close-order-modal">
            <svg class="order-modal__icon" width="20" height="20" viewBox="0 0 20 20">
                <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-close-zoom"></use>
            </svg>
        </button>
    </div>
</div>
<!-- End order -->

<?php get_footer()?>