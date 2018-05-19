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
		<?php esc_html_e('Format', 'caldera-forms'); ?>
	</label>

	<div class="caldera-config-field">
		<input id="{{_id}}_format" type="text" class="cfdatepicker-set-format block-input field-config"
			id="{{id}}" name="{{_name}}[format]" value="{{format}}">
	</div>

	<p class="description" id="{{_id}}_format-description"><?php _e('You can find available formats <a href="https://flatpickr.js.org/formatting/">here</a>: ', 'caldera-forms'); ?></p>

</div>

<div class="caldera-config-group">
	<label>
		<?php esc_html_e('Time picker', 'caldera-forms'); ?>
	</label>

	<div class="caldera-config-field">
		<select class="block-input field-config" name="{{_name}}[timepicker]" id="{{_id}}_timepicker" aria-describedby="{{_id}}_timepicker-description">
			<option value="none" {{#is timepicker value="none"}}selected="selected"{{/is}}>
				<?php esc_html_e('No Time Picker', 'caldera-forms'); ?>
			</option>
			<option value="time" {{#is timepicker value="time"}}selected="selected"{{/is}}>
				<?php esc_html_e('Only time picker', 'caldera-forms'); ?>
			</option>
			<option value="combined" {{#is timepicker value="combined"}}selected="selected"{{/is}}>
				<?php esc_html_e('Both time and date picker', 'caldera-forms'); ?>
			</option>
		</select>
		<p class="description" id="{{_id}}_timepicker-description"><?php _e('If enabled, the date picker will also have a time picker', 'caldera-forms'); ?></p>
	</div>
</div>

<div class="caldera-config-group">
	<label>
		<?php esc_html_e('Autoclose', 'caldera-forms'); ?>
	</label>

	<div class="caldera-config-field">
		<label id="{{_id}}_autoclosed">
			<input id="{{_id}}_autoclosed" aria-describedby="{{_id}}_autoclosed-description" type="checkbox"
				class="field-config {{_id}}_autoclosed" name="{{_name}}[autoclose]" value="1" {{#if autoclose}}checked="checked"{{/if}} />
			<?php esc_html_e('Enable autoclose', 'caldera-forms'); ?>
		</label>

		<p class="description" id="{{_id}}_autoclosed-description">
			<?php esc_html_e('If enabled, the date picker will automatically close after selecting the final input', 'caldera-forms'); ?>
		</p>
	</div>
</div>

<div class="caldera-config-group">
	<label for="{{_id}}_startview">
		<?php esc_html_e('Start View', 'caldera-forms'); ?>
	</label>

	<div class="caldera-config-field">
		<select class="block-input field-config" name="{{_name}}[start_view]" id="{{_id}}_startview" aria-describedby="{{_id}}_startview-description">
			<option value="month" {{#is start_view value="month"}}selected="selected"{{/is}}>
				<?php esc_html_e('Month (Default)', 'caldera-forms'); ?>
			</option>
			<option value="year" {{#is start_view value="year"}}selected="selected"{{/is}}>
				<?php esc_html_e('Year', 'caldera-forms'); ?>
			</option>
			<option value="decade" {{#is start_view value="decade"}}selected="selected"{{/is}}>
				<?php esc_html_e('Decade', 'caldera-forms'); ?>
			</option>
		</select>
		<p class="description" id="{{_id}}_startview-description"><?php _e('The starting view of the date picker (month, year, decade)', 'caldera-forms'); ?></p>
	</div>
</div>

<div class="caldera-config-group">
	<label for="{{_id}}_startdate">
		<?php esc_html_e('Start Date', 'caldera-forms'); ?>
	</label>

	<div class="caldera-config-field">
		<input id="{{_id}}_startdate" aria-describedby="{{_id}}_startdate-description" type="text" class="cfdatepicker-set-format block-input field-config" name="{{_name}}[start_date]" value="{{start_date}}">
		<p class="description" id="{{_id}}_startdate-description">
			<?php esc_html_e('The starting date of the date picker like <code>today</code>. Please follow the same date format you used above!', 'caldera-forms'); ?>
		</p>
	</div>
</div>

<div class="caldera-config-group">
	<label for="{{_id}}_end-date">
		<?php esc_html_e('End Date', 'caldera-forms'); ?>
	</label>

	<div class="caldera-config-field">
		<input id="{{_id}}_end-date" aria-describedby="{{_id}}_end-date-description" type="text" class="cfdatepicker-set-format block-input field-config" name="{{_name}}[end_date]" value="{{end_date}}">
		<p class="description" id="{{_id}}_end-date-description">
				<?php esc_html_e('The starting date of the date picker like <code>today</code>. Please follow the same date format you used above!', 'caldera-forms'); ?>
		</p>
	</div>
</div>

<div class="caldera-config-group">
	<label>
		<?php esc_html_e('Allow interval selection', 'caldera-forms'); ?>
	</label>

	<div class="caldera-config-field">
		<label id="{{_id}}_interval">
			<input id="{{_id}}_interval" aria-describedby="{{_id}}_interval-description" type="checkbox"
				class="field-config {{_id}}_interval" name="{{_name}}[interval]" value="1" {{#if autoclose}}checked="checked"{{/if}} />
			<?php esc_html_e('Enable interval selection', 'caldera-forms'); ?>
		</label>

		<p class="description" id="{{_id}}_interval-description">
			<?php esc_html_e("If enabled, the user will be able to select a date interval (start->end)", 'caldera-forms'); ?>
		</p>
	</div>
</div>

<!--  TODO: add localization  -->
<div class="caldera-config-group">
	<label for="{{_id}}_language">
		<?php esc_html_e('language', 'caldera-forms'); ?>
	</label>

	<div class="caldera-config-field">
		<select id="{{_id}}_language" aria-describedby="{{_id}}_language-description" class="cfdatepicker-set-language block-input field-config" id="{{id}}" name="{{_name}}[language]" style="width: 90px;">
			<option value="">en-US</option>
			<option value="ar" {{#is language value="ar"}}selected="selected"{{/is}}>ar</option>
			<option value="at" {{#is language value="at"}}selected="selected"{{/is}}>at</option>
			<option value="be" {{#is language value="be"}}selected="selected"{{/is}}>be</option>
			<option value="bg" {{#is language value="bg"}}selected="selected"{{/is}}>bg</option>
			<option value="bn" {{#is language value="bn"}}selected="selected"{{/is}}>bn</option>
			<option value="cat" {{#is language value="cat"}}selected="selected"{{/is}}>cat</option>
			<option value="cs" {{#is language value="cs"}}selected="selected"{{/is}}>cs</option>
			<option value="cy" {{#is language value="cy"}}selected="selected"{{/is}}>cy</option>
			<option value="da" {{#is language value="da"}}selected="selected"{{/is}}>da</option>
			<option value="de" {{#is language value="de"}}selected="selected"{{/is}}>de</option>
			<option value="eo" {{#is language value="eo"}}selected="selected"{{/is}}>eo</option>
			<option value="es" {{#is language value="es"}}selected="selected"{{/is}}>es</option>
			<option value="et" {{#is language value="et"}}selected="selected"{{/is}}>et</option>
			<option value="fa" {{#is language value="fa"}}selected="selected"{{/is}}>fa</option>
			<option value="fi" {{#is language value="fi"}}selected="selected"{{/is}}>fi</option>
			<option value="fr" {{#is language value="fr"}}selected="selected"{{/is}}>fr</option>
			<option value="gr" {{#is language value="gr"}}selected="selected"{{/is}}>gr</option>
			<option value="he" {{#is language value="he"}}selected="selected"{{/is}}>he</option>
			<option value="hi" {{#is language value="hi"}}selected="selected"{{/is}}>hi</option>
			<option value="hr" {{#is language value="hr"}}selected="selected"{{/is}}>hr</option>
			<option value="hu" {{#is language value="hu"}}selected="selected"{{/is}}>hu</option>
			<option value="id" {{#is language value="id"}}selected="selected"{{/is}}>id</option>
			<option value="it" {{#is language value="it"}}selected="selected"{{/is}}>it</option>
			<option value="ja" {{#is language value="ja"}}selected="selected"{{/is}}>ja</option>
			<option value="ko" {{#is language value="ko"}}selected="selected"{{/is}}>ko</option>
			<option value="kz" {{#is language value="kz"}}selected="selected"{{/is}}>kz</option>
			<option value="lt" {{#is language value="lt"}}selected="selected"{{/is}}>lt</option>
			<option value="lv" {{#is language value="lv"}}selected="selected"{{/is}}>lv</option>
			<option value="mk" {{#is language value="mk"}}selected="selected"{{/is}}>mk</option>
			<option value="mn" {{#is language value="mn"}}selected="selected"{{/is}}>mn</option>
			<option value="ms" {{#is language value="ms"}}selected="selected"{{/is}}>ms</option>
			<option value="my" {{#is language value="my"}}selected="selected"{{/is}}>my</option>
			<option value="nl" {{#is language value="nl"}}selected="selected"{{/is}}>nl</option>
			<option value="no" {{#is language value="no"}}selected="selected"{{/is}}>no</option>
			<option value="pa" {{#is language value="pa"}}selected="selected"{{/is}}>pa</option>
			<option value="pl" {{#is language value="pl"}}selected="selected"{{/is}}>pl</option>
			<option value="pt" {{#is language value="pt"}}selected="selected"{{/is}}>pt</option>
			<option value="ro" {{#is language value="ro"}}selected="selected"{{/is}}>ro</option>
			<option value="ru" {{#is language value="ru"}}selected="selected"{{/is}}>ru</option>
			<option value="si" {{#is language value="si"}}selected="selected"{{/is}}>si</option>
			<option value="sk" {{#is language value="sk"}}selected="selected"{{/is}}>sk</option>
			<option value="sl" {{#is language value="sl"}}selected="selected"{{/is}}>sl</option>
			<option value="sq" {{#is language value="sq"}}selected="selected"{{/is}}>sq</option>
			<option value="sr" {{#is language value="sr"}}selected="selected"{{/is}}>sr</option>
			<option value="sv" {{#is language value="sv"}}selected="selected"{{/is}}>sv</option>
			<option value="th" {{#is language value="th"}}selected="selected"{{/is}}>th</option>
			<option value="tr" {{#is language value="tr"}}selected="selected"{{/is}}>tr</option>
			<option value="uk" {{#is language value="uk"}}selected="selected"{{/is}}>uk</option>
			<option value="vn" {{#is language value="vn"}}selected="selected"{{/is}}>vn</option>
			<option value="zh" {{#is language value="zh"}}selected="selected"{{/is}}>zh</option>
		</select>

		<p class="description" id="{{_id}}_language-description">
			<?php esc_html_e('Language to use. e.g. pt-BR', 'caldera-forms'); ?>
		</p>
	</div>
</div>
