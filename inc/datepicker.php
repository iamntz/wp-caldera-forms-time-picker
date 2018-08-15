<?php
$has_lang = '';

$attrs = [
	'type' => 'datetime-local',
	'name' => $field_name,
	'value' => $field_value,
	'id' => Caldera_Forms_Field_Util::get_base_id($field),
	'data-field' => $field_base_id,
	'class' => $field_class,
];

$required = '';
if ($field_structure['field_required']) {
	$attrs['required'] = true;
	$required = 'required';
}

if (!empty($field['config']['language'])) {
	wp_enqueue_script('cf-frontend-date-picker-lang',
		$field['config']['language'],
		[Caldera_Forms_Render_Assets::field_script_to_localize_slug()], null, true);
}

if (!empty($field['config']['style'])) {
	wp_enqueue_style('cf-frontend-date-picker-lang', $field['config']['style']);
}

if (!empty($field['hide_label'])) {
	if (!empty($field['config']['placeholder'])) {
		$place_holder = $field['config']['placeholder'];
	} else {
		$place_holder = $field['label'];
	}

	$attrs['placeholder'] = Caldera_Forms::do_magic_tags($place_holder);
}

$attr_string = caldera_forms_field_attributes($attrs, $field, $form);
$attr_string .= sprintf(" data-datepicker-config='%s'", json_encode($field['config']));
?>

<?php echo $wrapper_before; ?>
  <?php echo $field_label; ?>
  <?php echo $field_before; ?>
    <input <?php echo $attr_string . ' ' . $field_structure['aria'] . ' ' . $required; ?>  />
    <?php echo $field_caption; ?>
  <?php echo $field_after; ?>
<?php echo $wrapper_after; ?>
