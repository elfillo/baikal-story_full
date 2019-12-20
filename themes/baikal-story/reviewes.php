<?php
/*
Template Name: Отзывы
*/
?>
<?php get_header()?>
<section class="reviews reviews_page">
    <div class="container">
        <!-- Begin breadcrumb -->
        <ul class="breadcrumb breadcrumb_mb">
            <li class="breadcrumb__item">
                <a href="/">
                    <?php pll_e('Главная')?>
                </a>
            </li>
            <li class="breadcrumb__item">
                <?php pll_e('Отзывы')?>
            </li>
        </ul>
        <!-- End breadcrumb -->

        <div class="row reviews__row">
            <div class="float-block">
                <div class="reviews__sidebar js-scroll-fade-in">
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
                            <img src="<?php echo get_template_directory_uri() ?>/img/airbnb.svg" class="partner-tile__airbnb" width="35" height="40" alt="airbnb">
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
                    <div class="reviews-switcher__head js-scroll-fade-in">
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
            </div>
        </div>
    </div>
</section>
<?php get_footer()?>