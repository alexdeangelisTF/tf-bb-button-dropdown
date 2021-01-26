<?php

class TFButtonDropdown extends FLBuilderModule {
	public function __construct() {
		parent::__construct(array(
			'name'            => __( 'Button Dropdown', 'tf-bb-button-dropdown' ),
			'description'     => __( 'A totally awesome module from Thinking Fox!', 'tf-bb-button-dropdown' ),
			'group'           => __( 'Thinking Fox Modules', 'tf-bb-button-dropdown' ),
			'category'        => __( 'Thinking Fox', 'tf-bb-button-dropdown' ),
			'dir'             => TF_BB_CLICKABLE_DROPDOWN_DIR . 'tf-button-dropdown/',
			'url'             => TF_BB_CLICKABLE_DROPDOWN_URL . 'tf-button-dropdown/',
			'icon'            => 'button.svg',
			'editor_export'   => true, // Defaults to true and can be omitted.
			'enabled'         => true, // Defaults to true and can be omitted.
			'partial_refresh' => false, // Defaults to false and can be omitted.
		));
	}
}


FLBuilder::register_module( 'TFButtonDropdown', array(
	'tf_button_dropdown_button_1_tab'      => array(
		'title'         => __( 'Button 1', 'tf-bb-button-dropdown' ),
		'sections'      => array(
      'tf-button-dropdown-button-1'  => array(
        'title'            => __( 'Button 1 Settings', 'tf-bb-button-dropdown' ),
				'fields'        => array(
					'tf_button_dropdown_button_1_text'     => array(
            'type'          => 'text',
            'label'         => __( 'Button 1 Text', 'fl-builder' ),
          ),
          'tf_button_dropdown_button_1_repeater_field'     => array(
            'type'          => 'text',
            'label'         => __( 'Repeater field', 'fl-builder' ),
          ),
					'tf_button_dropdown_button_1_label_field'     => array(
            'type'          => 'text',
            'label'         => __( 'Label field', 'fl-builder' ),
          ),
					'tf_button_dropdown_button_1_link_type' => array(
						'type'          => 'select',
						'label'         => __( 'Button 1 Link Type', 'fl-builder' ),
						'default'       => 'link_type_url_field',
						'options'       => array(
							'link_type_url_field'      => __( 'URL Field', 'fl-builder' ),
							'link_type_repeater_field'      => __( 'Repeater Field', 'fl-builder' )
						),
						'toggle'        => array(
							'link_type_url_field'      => array(
								'fields'        => array( 'tf_button_dropdown_button_1_link_field' ),
							),
							'link_type_repeater_field'      => array(
								'tabs'          => array( 'tf_button_dropdown_button_2_tab' )
							)
						)
					),
					'tf_button_dropdown_button_1_link_field'     => array(
            'type'          => 'text',
            'label'         => __( 'URL field', 'fl-builder' ),
          )
        )
      )
    )
	),
	'tf_button_dropdown_button_2_tab'      => array(
		'title'         => __( 'Button 2', 'tf-bb-button-dropdown' ),
		'sections'      => array(
      'tf-button-dropdown-button-2'  => array(
        'title'            => __( 'Button 2 Settings', 'tf-bb-button-dropdown' ),
				'fields'        => array(
					'tf_button_dropdown_button_2_text'     => array(
            'type'          => 'text',
            'label'         => __( 'Button 2 Text', 'fl-builder' ),
          ),
          'tf_button_dropdown_button_2_repeater_field'     => array(
            'type'          => 'text',
            'label'         => __( 'Button 2 Repeater field', 'fl-builder' ),
          ),
					'tf_button_dropdown_button_2_label_field'     => array(
            'type'          => 'text',
            'label'         => __( 'Button 2 Label field', 'fl-builder' ),
          ),
					'tf_button_dropdown_button_2_link_field'     => array(
            'type'          => 'text',
            'label'         => __( 'Button 2 URL field', 'fl-builder' ),
          )
        )
      )
    )
	)
) );