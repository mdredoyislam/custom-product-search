<?php
add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_66df246b2f21a',
	'title' => 'Car Rent Meta Field',
	'fields' => array(
		array(
			'key' => 'field_66df246bb3aa2',
			'label' => 'Pickup Location ID',
			'name' => 'pickup_location_id',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				1 => '1',
				2 => '2',
				3 => '3',
				4 => '4',
			),
			'default_value' => 'Pick-Up City &amp; Location:',
			'return_format' => 'value',
			'multiple' => 0,
			'allow_null' => 0,
			'allow_in_bindings' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_66df2500b3aa3',
			'label' => 'Return Location ID',
			'name' => 'return_location_id',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				1 => '1',
				2 => '2',
				3 => '3',
				4 => '4',
			),
			'default_value' => 'Return City &amp; Location:',
			'return_format' => 'value',
			'multiple' => 0,
			'allow_null' => 0,
			'allow_in_bindings' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_66df254eb3aa4',
			'label' => 'Class ID',
			'name' => 'class_id',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				1 => '1',
				2 => '2',
				3 => '3',
			),
			'default_value' => 'Class:',
			'return_format' => 'value',
			'multiple' => 0,
			'allow_null' => 0,
			'allow_in_bindings' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_66df2bc8808d2',
			'label' => 'Pickup Date',
			'name' => 'pickup_date',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				1 => '1',
				2 => '2',
				3 => '3',
				4 => '4',
				5 => '5',
				6 => '6',
				7 => '7',
				8 => '8',
				9 => '9',
				10 => '10',
				11 => '11',
				12 => '12',
				13 => '13',
				14 => '14',
				15 => '15',
				16 => '16',
			),
			'default_value' => 'Pickup Date',
			'return_format' => 'value',
			'multiple' => 0,
			'allow_null' => 0,
			'allow_in_bindings' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_66df2581b3aa5',
			'label' => 'Pickup Time',
			'name' => 'pickup_time',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'00:00:00' => '00:00:00',
				'00:30:00' => '00:30:00',
				'01:00:00' => '01:00:00',
				'01:30:00' => '01:30:00',
				'02:00:00' => '02:00:00',
				'02:30:00' => '02:30:00',
				'03:00:00' => '03:00:00',
				'03:30:00' => '03:30:00',
				'04:00:00' => '04:00:00',
				'04:30:00' => '04:30:00',
				'05:00:00' => '05:00:00',
				'05:30:00' => '05:30:00',
				'06:00:00' => '06:00:00',
				'06:30:00' => '06:30:00',
				'07:00:00' => '07:00:00',
				'07:30:00' => '07:30:00',
				'08:00:00' => '08:00:00',
				'08:30:00' => '08:30:00',
				'09:00:00' => '09:00:00',
				'09:30:00' => '09:30:00',
				'10:00:00' => '10:00:00',
				'10:30:00' => '10:30:00',
				'11:00:00' => '11:00:00',
				'11:30:00' => '11:30:00',
				'12:00:00' => '12:00:00',
				'12:30:00' => '12:30:00',
				'13:00:00' => '13:00:00',
				'13:30:00' => '13:30:00',
				'14:00:00' => '14:00:00',
				'14:30:00' => '14:30:00',
				'15:00:00' => '15:00:00',
				'15:30:00' => '15:30:00',
				'16:00:00' => '16:00:00',
				'16:30:00' => '16:30:00',
				'17:00:00' => '17:00:00',
				'17:30:00' => '17:30:00',
				'18:00:00' => '18:00:00',
				'18:30:00' => '18:30:00',
				'19:00:00' => '19:00:00',
				'19:30:00' => '19:30:00',
				'20:00:00' => '20:00:00',
				'20:30:00' => '20:30:00',
				'21:00:00' => '21:00:00',
				'21:30:00' => '21:30:00',
				'22:00:00' => '22:00:00',
				'22:30:00' => '22:30:00',
				'23:00:00' => '23:00:00',
				'23:30:00' => '23:30:00',
			),
			'default_value' => '00:00:00',
			'return_format' => 'value',
			'multiple' => 0,
			'allow_null' => 0,
			'allow_in_bindings' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_66df2631b3aa6',
			'label' => 'Return Date',
			'name' => 'return_date',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				1 => '1',
				2 => '2',
				3 => '3',
				4 => '4',
				5 => '5',
				6 => '6',
				7 => '7',
				8 => '8',
				9 => '9',
				10 => '10',
				11 => '11',
				12 => '12',
				13 => '13',
				14 => '14',
				15 => '15',
				16 => '16',
			),
			'default_value' => 'Pickup Date',
			'return_format' => 'value',
			'multiple' => 0,
			'allow_null' => 0,
			'allow_in_bindings' => 1,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_66df265ab3aa7',
			'label' => 'Return Time',
			'name' => 'return_time',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'00:00:00' => '00:00:00',
				'00:30:00' => '00:30:00',
				'01:00:00' => '01:00:00',
				'01:30:00' => '01:30:00',
				'02:00:00' => '02:00:00',
				'02:30:00' => '02:30:00',
				'03:00:00' => '03:00:00',
				'03:30:00' => '03:30:00',
				'04:00:00' => '04:00:00',
				'04:30:00' => '04:30:00',
				'05:00:00' => '05:00:00',
				'05:30:00' => '05:30:00',
				'06:00:00' => '06:00:00',
				'06:30:00' => '06:30:00',
				'07:00:00' => '07:00:00',
				'07:30:00' => '07:30:00',
				'08:00:00' => '08:00:00',
				'08:30:00' => '08:30:00',
				'09:00:00' => '09:00:00',
				'09:30:00' => '09:30:00',
				'10:00:00' => '10:00:00',
				'10:30:00' => '10:30:00',
				'11:00:00' => '11:00:00',
				'11:30:00' => '11:30:00',
				'12:00:00' => '12:00:00',
				'12:30:00' => '12:30:00',
				'13:00:00' => '13:00:00',
				'13:30:00' => '13:30:00',
				'14:00:00' => '14:00:00',
				'14:30:00' => '14:30:00',
				'15:00:00' => '15:00:00',
				'15:30:00' => '15:30:00',
				'16:00:00' => '16:00:00',
				'16:30:00' => '16:30:00',
				'17:00:00' => '17:00:00',
				'17:30:00' => '17:30:00',
				'18:00:00' => '18:00:00',
				'18:30:00' => '18:30:00',
				'19:00:00' => '19:00:00',
				'19:30:00' => '19:30:00',
				'20:00:00' => '20:00:00',
				'20:30:00' => '20:30:00',
				'21:00:00' => '21:00:00',
				'21:30:00' => '21:30:00',
				'22:00:00' => '22:00:00',
				'22:30:00' => '22:30:00',
				'23:00:00' => '23:00:00',
				'23:30:00' => '23:30:00',
			),
			'default_value' => '00:00:00',
			'return_format' => 'value',
			'multiple' => 0,
			'allow_null' => 0,
			'allow_in_bindings' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'find_car',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );

add_action( 'init', function() {
	register_post_type( 'find_car', array(
	'labels' => array(
		'name' => 'Find Cars',
		'singular_name' => 'Find Car',
		'menu_name' => 'Find Cars',
		'all_items' => 'All Car',
		'edit_item' => 'Edit Car',
		'view_item' => 'View Car',
		'view_items' => 'View Cars',
		'add_new_item' => 'Add New Car',
		'add_new' => 'Add New Car',
		'new_item' => 'New Car',
		'parent_item_colon' => 'Parent Car:',
		'search_items' => 'Search Cars',
		'not_found' => 'No Cars found',
		'not_found_in_trash' => 'No Cars found in Trash',
		'archives' => 'Car Archives',
		'attributes' => 'Car Attributes',
		'featured_image' => 'Car Image',
		'set_featured_image' => 'Set Car Image',
		'remove_featured_image' => 'Remove Car Image',
		'use_featured_image' => 'Use Car Image',
		'insert_into_item' => 'Insert into product',
		'uploaded_to_this_item' => 'Uploaded to this product',
		'filter_items_list' => 'Filter products list',
		'filter_by_date' => 'Filter products by date',
		'items_list_navigation' => 'Products list navigation',
		'items_list' => 'Products list',
		'item_published' => 'Product published.',
		'item_published_privately' => 'Product published privately.',
		'item_reverted_to_draft' => 'Product reverted to draft.',
		'item_scheduled' => 'Product scheduled.',
		'item_updated' => 'Product updated.',
		'item_link' => 'Product Link',
		'item_link_description' => 'A link to a product.',
	),
	'public' => true,
	'hierarchical' => true,
	'exclude_from_search' => true,
	'show_in_rest' => true,
	'menu_position' => 5,
	'menu_icon' => 'dashicons-car',
	'supports' => array(
		0 => 'title',
		1 => 'author',
		2 => 'editor',
		3 => 'thumbnail',
		4 => 'custom-fields',
	),
	'delete_with_user' => false,
) );
} );


add_filter( 'enter_title_here', function( $default, $post ) {
	switch ( $post->post_type ) {
		case 'find_car':
			return 'Car Name';
	}

	return $default;
}, 10, 2 );