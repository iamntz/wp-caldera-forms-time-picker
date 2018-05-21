jQuery(function($) {
    $('#{{_id}}_timepicker').on('change faux-change', function(e) {
        var elID = $(e.currentTarget).attr('data-id');
        var val = e.currentTarget.value;

        var elements = $('[data-hide-when-datepicker-is]').filter(function(i, el) {
            return $(el).attr('data-id') == elID;
        });

        elements.each(function(i, el){
          $(el).toggleClass('hidden', $(el).attr('data-hide-when-datepicker-is').split(',').indexOf(val) !== -1 );
        });

    }).trigger('faux-change');
});