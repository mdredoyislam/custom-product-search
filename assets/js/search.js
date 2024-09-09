jQuery(document).ready(function($) {
    jQuery('#product-search-form').on('submit', function(e) {
        e.preventDefault();
        
        var form_data = jQuery(this).serialize();
        
        jQuery.ajax({
            url: ajax_object.ajax_url,
            type: 'GET',
            data: form_data + '&action=cps_search_products',
            success: function(response) {
                $('#search-results').html(response);
            }
        });
    });
    
    // Handle popup details
    jQuery(document).on('click', '.show-details', function(e) {
        e.preventDefault();
        var find_car_id = jQuery(this).data('id');
        
        jQuery.ajax({
            url: ajax_object.ajax_url,
            type: 'GET',
            data: {
                action: 'cps_get_product_details',
                find_car_id: find_car_id
            },
            success: function(response) {
                // Show popup with product details (you can use a modal here)
                alert(response); // Customize with your own modal
            }
        });
    });
});
