<?php

add_action( 'init', 'register_post_rooms' );
add_action( 'init', 'register_post_review' );
add_action( 'init', 'register_post_bed' );

function register_post_rooms(){
	register_post_type('post_rooms', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Апартаменты', // основное название для типа записи
			'singular_name'      => 'Апартамент', // название для одной записи этого типа
			'add_new'            => 'Добавить апартамент', // для добавления новой записи
			'add_new_item'       => 'Добавление апартамента', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование записи', // для редактирования типа записи
			'new_item'           => 'Свежая запись', // текст новой записи
			'view_item'          => 'Смотреть запись', // для просмотра записи этого типа.
			'search_items'       => 'Искать апартамент', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Апартаменты', // название меню
		),
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-admin-multisite',
		'hierarchical'        => true,
		'supports'            => [ 'title', 'editor', 'excerpt', 'post-formats', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array('post_tag'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}

function register_post_review(){
	register_post_type('post_review', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Отзывы', // основное название для типа записи
			'singular_name'      => 'Отзыв', // название для одной записи этого типа
			'add_new'            => 'Добавить отзыв', // для добавления новой записи
			'add_new_item'       => 'Добавление отзыва', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование записи', // для редактирования типа записи
			'new_item'           => 'Свежая запись', // текст новой записи
			'view_item'          => 'Смотреть запись', // для просмотра записи этого типа.
			'search_items'       => 'Искать отзыв', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Отзывы', // название меню
		),
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-chat',
		'hierarchical'        => true,
		'supports'            => [ 'title', 'editor', 'excerpt', 'post-formats', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array('post_tag'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}

function register_post_bed(){
	register_post_type('post_bed', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Спальные места', // основное название для типа записи
			'singular_name'      => 'Спальное место', // название для одной записи этого типа
			'add_new'            => 'Добавить спальное место', // для добавления новой записи
			'add_new_item'       => 'Добавление спального места', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование записи', // для редактирования типа записи
			'new_item'           => 'Свежая запись', // текст новой записи
			'view_item'          => 'Смотреть запись', // для просмотра записи этого типа.
			'search_items'       => 'Искать спальное место', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Спальные места', // название меню
		),
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-buddicons-groups',
		'hierarchical'        => true,
		'supports'            => [ 'title', 'editor', 'excerpt', 'post-formats', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array('post_tag'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}
?>