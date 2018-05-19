<?php

/*
Plugin Name: Caldera Form Time Picker
Description: A time picker for Caldera Forms
Author: Ionuț Staicu
Version: 1.0.0
Author URI: http://ionutstaicu.com
Slug: caldera_form_time_picker
 */

// uses https://github.com/flatpickr/flatpickr

if (!defined('ABSPATH')) {
	exit;
}

define('NTZ_CALDERA_FORM_TIME_PICKER_VERSION', '1.0.0');

define('NTZ_CALDERA_FORM_TIME_PICKER_URL', plugin_dir_url(__FILE__));
define('NTZ_CALDERA_FORM_TIME_PICKER_PATH', plugin_dir_path(__FILE__));

add_action('caldera_forms_get_field_types', function ($types) {
	$suffix = defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ? '.min' : '';

	$types['date_picker'] = [
		"field" => __('Date/time Picker', 'caldera-forms'),
		"description" => __('Date/time Picker', 'caldera-forms'),
		'icon' => NTZ_CALDERA_FORM_TIME_PICKER_URL . 'assets/img/datepicker.svg',
		"file" => NTZ_CALDERA_FORM_TIME_PICKER_PATH . 'inc/datepicker.php',
		"category" => __('Select', 'caldera-forms'),

		"setup" => [
			"preview" => NTZ_CALDERA_FORM_TIME_PICKER_PATH . 'inc/preview.php',
			"template" => NTZ_CALDERA_FORM_TIME_PICKER_PATH . 'inc/setup.php',
			"default" => [
				'format' => 'F, j Y - H:i',
			],
		],
		"styles" => [
      NTZ_CALDERA_FORM_TIME_PICKER_URL . "assets/flatpickr/flatpickr{$suffix}.css",
			NTZ_CALDERA_FORM_TIME_PICKER_URL . "assets/flatpickr/plugins/confirmDate/confirmDate.css",
		],
		"scripts" => [
			NTZ_CALDERA_FORM_TIME_PICKER_URL . "assets/flatpickr/flatpickr{$suffix}.js",
      NTZ_CALDERA_FORM_TIME_PICKER_URL . "assets/flatpickr/plugins/confirmDate/confirmDate.js",
			NTZ_CALDERA_FORM_TIME_PICKER_URL . "assets/javascript/calendar_init.js",
		],
	];

	return $types;
}, 99);
