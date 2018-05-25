jQuery(document).ready(function($) {

    function initDatepicker(datepicker) {
        var config = $.extend({
            custom_class: '',
            default: '',
            autoclose: false,
            timepicker: 'none',
            format: 'F, j Y',
            language: '',
            end_date: null,
            start_date: null,
            interval: false,
            timepicker_format: '12'
        }, datepicker.data('datepickerConfig'));

        var flatpickrConfig = {
            enableTime: config.timepicker !== 'none',
            dateFormat: config.format,
            mode: config.interval ? 'range' : 'single',
            noCalendar: config.timepicker === 'time',
            maxDate: config.end_date,
            minDate: config.start_date,
            time_24hr: config.format.indexOf('H') !== -1 && config.timepicker_format != '12',
            locale: {
                firstDayOfWeek: config.first_day_of_the_week === 'monday' ? 1 : 7,
            },
            plugins: []

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

        flatpickrConfig.plugins.push(new confirmDatePlugin({}));

        if (config.language) {
            flatpickrConfig.locale = config.language.split('/').slice(-1)[0].split('.')[0];
        }

        flatpickrConfig = $.extend({}, flatpickrConfig);
        datepicker.addClass('datepicker-init');

        return datepicker.flatpickr(flatpickrConfig)
    }

    $(document).on('focus', '[data-datepicker-config]:not(.datepicker-init)', function(e){
        initDatepicker($(e.currentTarget))
    });
});