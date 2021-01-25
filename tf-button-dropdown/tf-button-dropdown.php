<?php

class TFButtonDropdown extends FLBuilderModule {
	public function __construct() {
		parent::__construct(array(
			'name'            => __( 'Button Dropdown', 'tf-bb-button-dropdown' ),
			'description'     => __( 'A totally awesome module from Thinking Fox!', 'tf-bb-button-dropdown' ),
			'group'           => __( 'Thinking Fox', 'tf-bb-button-dropdown' ),
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
	'tf-button-dropdown-tab'      => array(
		'title'         => __( 'Tab', 'tf-bb-button-dropdown' ),
		'sections'      => array(
      'tf-button-dropdown-section'  => array(
        'title'            => __( 'Section', 'tf-bb-button-dropdown' ),
				'tf-button-dropdown-field-1'     => array(
            'type'          => 'text',
            'label'         => __( 'Text Field', 'tf-bb-button-dropdown' ),
          ),
      )
    )
	)
) );