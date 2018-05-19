jQuery(document).ready(function($) {
    $('[data-datepicker-config]').each(function(i, datepicker) {
        datepicker = $(datepicker);
        var config = $.extend({
            custom_class: '',
            default: '',
            timepicker: 'none',
            format: 'F, j Y',
            language: '',
            end_date: null,
            start_date: null,
            interval: false
        }, datepicker.data('datepickerConfig'));

        var flatpickrConfig = {
          enableTime: config.timepicker !== 'none',
          dateFormat: config.format,
          mode: config.interval ? 'range' : 'single',
          noCalendar: config.timepicker === 'time',
          maxDate: config.end_date,
          minDate: config.start_date,
          time_24hr: config.format.indexOf('H') !== -1,

          //  TODO: implement events
          /*
          onChange: $.noop,
          onOpen: $.noop,
          onClose: $.noop,
          onMonthChange: $.noop,
          onYearChange: $.noop,
          onReady: $.noop,
          onValueUpdate: $.noop,
          onDayCreate: $.noop,
          */
        }

        if (config.language ) {
          flatpickrConfig.locale = config.language ;
        }

        datepicker.flatpickr(flatpickrConfig);
    })
});