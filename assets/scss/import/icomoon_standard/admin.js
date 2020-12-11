(function($){
  function formatSelected (state) {
        if (state.id != '') {
            return '<span class="' + state.element.value + '"></span> ' + state.text
        }
        var state = $(
            '<span class="'+ state.element.value +'" style="margin-right: 6px;"></span><span class="text">' + state.text + '</span>'
        )
        return state
    }
    function formatList (state) {
        if (!state.id) {
           return state.text
        }
        var $state = $(
            '<span class="'+ state.element.value +'" style="margin-right: 6px;"></span><span class="text">' + state.text + '</span>'
        )
        return $state

    }

    acf.add_filter('select2_args', function( args, $select, settings, $field ){
        if($field.hasClass('icomoon-select-element')){
            args['width'] = '200px'
            args['templateSelection'] = formatSelected
            args['templateResult'] = formatList

        }
        // return
        return args
    })


})(jQuery)
