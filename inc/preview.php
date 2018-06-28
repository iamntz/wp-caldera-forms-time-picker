<div class="preview-caldera-config-group">
  {{#unless hide_label}}
    <label class="control-label">{{label}}{{#if required}} <span style="color:#ff0000;">*</span>{{/if}}</label>
  {{/unless}}

  <div class="preview-caldera-config-field">
    <input {{#if hide_label}}placeholder="{{label}}"{{/if}} type="text" class="preview-field-config" value="{{config/default}}">
    <span class="help-block">{{caption}}</span>
  </div>
</div>