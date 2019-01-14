jQuery(document).ready( function(){
    jQuery('#verbose').click(function(){
        console.log('Thor');
        jQuery.ajax({
            url: my_ajax_url,
            method: 'POST',
            data: {
                my_name: 'Mils',
                my_verbose: my_verbose,
                action: 'show_me_who_verbose'
            },
        }).done(function(data){
            console.log(data);
        })
    })

})
