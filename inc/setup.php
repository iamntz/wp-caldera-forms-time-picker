<div class="caldera-config-group">
	<label for="{{_id}}_default">
		<?php esc_html_e('Default', 'caldera-forms'); ?>
	</label>

	<div class="caldera-config-field">
		<input id="{{_id}}_default" type="text" class="block-input field-config is-not-cfdatepicker magic-tag-enabled"
			data-dontprovide="cfdatepicker" id="{{id}}" data-date-format="{{format}}" name="{{_name}}[default]" value="{{default}}" />
	</div>
</div>

<div class="caldera-config-group">
	<label for="{{_id}}_format">
		<?php esc_html_e('Date Format', 'caldera-forms'); ?>
	</label>

	<div class="caldera-config-field">
		<input id="{{_id}}_format" type="text" class="cfdatepicker-set-format block-input field-config"
			id="{{id}}" name="{{_name}}[format]" value="{{format}}">
	</div>

	<style type="text/css" media="screen">
		.caldera-config-group code code {
			padding: 0;
		  background: transparent;
		}
	</style>

	<p class="description" id="{{_id}}_format-description"><?php _e('You can find all available formats <a href="https://flatpickr.js.org/formatting/" target="_blank">here</a>. Need to escape a string? Wrap it like <code>{<code>{this}</code>}</code> and it will be automatically converted to <code>\t\h\i\s</code>.', 'caldera-forms'); ?></p>

</div>

<div class="caldera-config-group">
	<label>
		<?php esc_html_e('Time picker', 'caldera-forms'); ?>
	</label>

	<div class="caldera-config-field">
		<select class="block-input field-config" name="{{_name}}[timepicker]" id="{{_id}}_timepicker"
			data-id="{{_id}}"
			aria-describedby="{{_id}}_timepicker-description">
			<option value="none" {{#is timepicker value="none"}}selected="selected"{{/is}}>
				<?php esc_html_e('Only date picker', 'caldera-forms'); ?>
			</option>
			<option value="time" {{#is timepicker value="time"}}selected="selected"{{/is}}>
				<?php esc_html_e('Only time picker', 'caldera-forms'); ?>
			</option>
			<option value="combined" {{#is timepicker value="combined"}}selected="selected"{{/is}}>
				<?php esc_html_e('Both time and date picker', 'caldera-forms'); ?>
			</option>
		</select>
		<p class="description" id="{{_id}}_timepicker-description"><?php _e("If enabled, the date picker will also have a time picker. Please don't forget to also set the date format to contain a time parameter!", 'caldera-forms'); ?></p>
	</div>
</div>

<div class="caldera-config-group" data-id="{{_id}}" data-hide-when-datepicker-is="none">
	<label>
		<?php esc_html_e('Time Format', 'caldera-forms'); ?>
	</label>

	<div class="caldera-config-field">
		<select class="block-input field-config" name="{{_name}}[timepicker_format]" id="{{_id}}_timepicker_format" aria-describedby="{{_id}}_timepicker_format-description">
			<option value="12h" {{#is timepicker_format value="12h"}}selected="selected"{{/is}}>
				<?php esc_html_e('AM/PM', 'caldera-forms'); ?>
			</option>
			<option value="24h" {{#is timepicker_format value="24h"}}selected="selected"{{/is}}>
				<?php esc_html_e('24h', 'caldera-forms'); ?>
			</option>
		</select>
	</div>
</div>

<div class="caldera-config-group" data-id="{{_id}}" data-hide-when-datepicker-is="time">
	<label for="{{_id}}_startdate">
		<?php esc_html_e('Start Date', 'caldera-forms'); ?>
	</label>

	<div class="caldera-config-field">
		<input id="{{_id}}_startdate" aria-describedby="{{_id}}_startdate-description" type="text" class="cfdatepicker-set-format block-input field-config" name="{{_name}}[start_date]" value="{{start_date}}">
		<p class="description" id="{{_id}}_startdate-description">
			<?php _e('The minimum selectable date, like <code>today</code>, <code>-10</code> or <code>+100</code>. You can also specify an exact date, but please follow the same date format you used above!', 'caldera-forms'); ?>
		</p>
	</div>
</div>

<div class="caldera-config-group" data-id="{{_id}}" data-hide-when-datepicker-is="time">
	<label for="{{_id}}_end-date">
		<?php esc_html_e('End Date', 'caldera-forms'); ?>
	</label>

	<div class="caldera-config-field">
		<input id="{{_id}}_end-date" aria-describedby="{{_id}}_end-date-description" type="text" class="cfdatepicker-set-format block-input field-config" name="{{_name}}[end_date]" value="{{end_date}}">
		<p class="description" id="{{_id}}_end-date-description">
				<?php _e('The maximum selectable date, like <code>today</code>, <code>-10</code> or <code>+100</code>. You can also specify an exact date, but please follow the same date format you used above!', 'caldera-forms'); ?>
		</p>
	</div>
</div>

<div class="caldera-config-group" data-id="{{_id}}" data-hide-when-datepicker-is="time">
	<label>
		<?php esc_html_e('Allow interval selection', 'caldera-forms'); ?>
	</label>

	<div class="caldera-config-field">
		<label id="{{_id}}_interval">
			<input id="{{_id}}_interval" aria-describedby="{{_id}}_interval-description" type="checkbox"
				class="field-config {{_id}}_interval" name="{{_name}}[interval]" value="1" {{#if interval}}checked="checked"{{/if}} />
			<?php esc_html_e('Enable interval selection', 'caldera-forms'); ?>
		</label>

		<p class="description" id="{{_id}}_interval-description">
			<?php esc_html_e("If enabled, the user will be able to select a date interval (start->end)", 'caldera-forms'); ?>
		</p>
	</div>
</div>

<div class="caldera-config-group" data-id="{{_id}}" data-hide-when-datepicker-is="time">
	<label>
		<?php esc_html_e('First day of the week', 'caldera-forms'); ?>
	</label>

	<div class="caldera-config-field">
		<select class="block-input field-config" name="{{_name}}[first_day_of_the_week]" id="{{_id}}_first_day_of_the_week" aria-describedby="{{_id}}_first_day_of_the_week-description">
			<option value="monday" {{#is first_day_of_the_week value="monday"}}selected="selected"{{/is}}>
				<?php esc_html_e('Monday', 'caldera-forms'); ?>
			</option>

			<option value="sunday" {{#is first_day_of_the_week value="sunday"}}selected="selected"{{/is}}>
				<?php esc_html_e('Sunday', 'caldera-forms'); ?>
			</option>
		</select>
	</div>
</div>

<div class="caldera-config-group">
	<label for="{{_id}}style">
		<?php esc_html_e('Style', 'caldera-forms'); ?>
	</label>

	<div class="caldera-config-field">
		<select id="{{_id}}style" aria-describedby="{{_id}}style-description" class="cfdatepicker-set-style block-input field-config" id="{{id}}" name="{{_name}}[style]">
			<option value="">Default</option>
			<?php
				$defautlDatepickerStyles = ['confetti', 'dark', 'light', 'material_blue', 'material_green', 'material_orange', 'material_red'];

				foreach ($defautlDatepickerStyles as $key => $value) {
					$datepickerStyles[ NTZ_CALDERA_FORM_TIME_PICKER_URL . "assets/flatpickr/themes/{$value}.css" ] = $value;
				}

				$datepickerStyles = apply_filters( 'caldera_forms_datepicker_styles', $datepickerStyles );

				foreach ($datepickerStyles as $datepickerStyleValue => $datepickerStyleText) {
					printf( '<option value="%1$s" {{#is style value="%1$s"}}selected="selected"{{/is}}>%2$s</option>',
						$datepickerStyleValue,
						ucwords(preg_replace('/_/', ' ', $datepickerStyleText)));
				}
			?>

		</select>
	</div>

	<p class="description" id="{{_id}}_language-description">
		<?php esc_html_e('This setting will affect ALL date pickers from the current page, even if they are on a separate form!', 'caldera-forms'); ?>
	</p>
</div>

<div class="caldera-config-group">
	<label for="{{_id}}_language">
		<?php esc_html_e('Language', 'caldera-forms'); ?>
	</label>

	<div class="caldera-config-field">
		<select id="{{_id}}_language" aria-describedby="{{_id}}_language-description" class="cfdatepicker-set-language block-input field-config" id="{{id}}" name="{{_name}}[language]">
			<option value="">Default (en-US)</option>
			<?php
				$defaultDatepickerLanguages = [ 'ar', 'at', 'be', 'bg', 'bn', 'cat', 'cs', 'cy', 'da', 'de', 'eo', 'es', 'et', 'fa', 'fi', 'fr', 'gr', 'he', 'hi', 'hr', 'hu', 'id', 'it', 'ja', 'ko', 'kz', 'lt', 'lv', 'mk', 'mn', 'ms', 'my', 'nl', 'no', 'pa', 'pl', 'pt', 'ro', 'ru', 'si', 'sk', 'sl', 'sq', 'sr', 'sv', 'th', 'tr', 'uk', 'vn', 'zh',  ];

				foreach ($defaultDatepickerLanguages as $key => $value) {
					$datepickerLanguages[ NTZ_CALDERA_FORM_TIME_PICKER_URL . "assets/flatpickr/l10n/{$value}.js" ] = $value;
				}

				$datepickerLanguages = apply_filters( 'caldera_forms_datepicker_languages', $datepickerLanguages );

				foreach ($datepickerLanguages as $datepickerLanguageValue => $datepickerLanguageText) {
					printf( '<option value="%1$s" {{#is language value="%1$s"}}selected="selected"{{/is}}>%2$s</option>',
						$datepickerLanguageValue,
						ucwords(preg_replace('/_/', ' ', $datepickerLanguageText)));
				}
				?>
		</select>

		<p class="description" id="{{_id}}_language-description">
			<?php esc_html_e('Language to use. e.g. pt-BR', 'caldera-forms'); ?>
		</p>
	</div>
</div>



{{#script}}
<?php require NTZ_CALDERA_FORM_TIME_PICKER_PATH . '/assets/javascript/calendar_setup.js'; ?>
{{/script}}