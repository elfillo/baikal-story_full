<?php
$apartments = get_posts(array('post_type' => 'post_rooms'));
?>
<div class="appartament-popup" style="display: none;">
    <div class="appartament-popup__header">
        <div class="container">
            <div class="row appartament-popup__row_align_center">
                <!-- Begin logo-hor -->
                <a href="/" class="logo appartament-popup__logo">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" class="logo__img">
                </a>
                <!-- Begin logo-hor -->

                <div class="appartament-popup__sublabel">
                    <div class="appartament-popup__value">
                        <?php echo count($apartments)?>
                    </div>
                    <div class="appartament-popup__desc">
                        <?php pll_e('апартаментов с домашним уютом')?>
                    </div>
                </div>
                <button class="appartament-popup__close js-appartament-popup-close">
                    <svg class="appartament-popup__icon" width="20" height="20" viewBox="0 0 20 20">
                        <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-close-zoom"></use>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="appartament-popup__body">
        <div class="container">
            <div class="row appartament-popup__content_around">
                <?php foreach ($apartments as $apartment):?>
                    <?php
                        $link = get_post_permalink($apartment->ID);
                        $imgUrl = wp_get_attachment_image_url(get_post_thumbnail_id($apartment), 'full');
                    ?>
                    <div class="appartament-tile js-scroll-fade-in">
                    <a href="<?php echo $link?>" class="appartament-tile__thumb"
                        style="background-image: url(<?php echo $imgUrl?>);"></a>
                    <h3 class="appartament-tile__title">
                        <a href="<?php echo $link?>">
                            <?php echo $apartment->post_title?>
                        </a>
                    </h3>
                    <ul class="appartament-tile__tags">
                        <li class="appartament-tile__tag">
                            <a href="<?php echo $link?>">
	                            <?php the_field('rooms_size', $apartment->ID)?>
                            </a>
                        </li>
	                    <?php foreach (explode('/', get_post_meta($apartment->ID, 'room_short_description', true )) as $item):?>
                        <li class="appartament-tile__tag">
                            <a href="#">
                                <?php echo $item?>
                            </a>
                        </li>
                        <?php endforeach; unset($item)?>
                    </ul>
                    <span class="appartament-tile__price">
                        <?php the_field('rooms_price', $apartment->ID)?> <?php pll_e('за ночь')?>
                    </span>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>