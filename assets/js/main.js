(function($){
    $("#task_priority").bind( 'rated', function(){
        $(this).rateit( 'readonly', true );

        var form        =   {
            action:         'set_task_priority',
            rid:            $(this).data( 'rid' ),
            rating:         $(this).rateit( 'value' )
        };

        $.post( tasks_object.ajax_url, form, function(data){
            
        });
    });
})(jQuery);