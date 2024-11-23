//console.log('hi from script');

jQuery(document).ready(function($) {

    $('.like').on('click', function(e){

        e.preventDefault();
        console.log('clicked');

        let portfolio_id = jQuery(this).attr('id'); // we'll need this later

        console.log( portfolio_id );

        jQuery.ajax({
            type: 'post',
            dataType: 'json',
            url: my_ajax_object.ajax_url,
            data: {
                action:'softuni_portfolio_upvote', // PHP function
                porftolio_id: porftolio_id,
            },
            success: function(msg){
                console.log(msg);
            }
        });
    });
});