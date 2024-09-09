<?php
$pickup_location_id = sanitize_text_field($_GET['pickup_location_id']);
$return_location_id = sanitize_text_field($_GET['return_location_id']);
$class_id = sanitize_text_field($_GET['class_id']);
$pickup_date = sanitize_text_field($_GET['pickup_date']);
$pickup_time = sanitize_text_field($_GET['pickup_time']);
$return_date = sanitize_text_field($_GET['return_date']);
$return_time = sanitize_text_field($_GET['return_time']);

// Build the query based on meta fields
$args = array(
    'post_type' => 'find_car',  // Assuming 'product' is the post type
    'meta_query' => array(
        'relation' => 'AND',
        array(
            'key' => 'pickup_location_id',
            'value' => $pickup_location_id,
            'compare' => '='
        ),
        array(
            'key' => 'return_location_id',
            'value' => $return_location_id,
            'compare' => '='
        ),
        array(
            'key' => 'class_id',
            'value' => $class_id,
            'compare' => '='
        ),
    )
);
$query = new WP_Query($args);

if ($query->have_posts()) {
    echo '<ul>';
    while ($query->have_posts()) {
        $query->the_post();
        ?>
            <li class="profuct-items">
                <div class="ptoduct-img">
                    <?php the_post_thumbnail('full', array('class'=>'img-fluid')); ?>
                </div>
                <div class="product-content">
                    <?php the_title('<h3>','</h3>') ?>
                    <a href="tel:+88123456789">Call For Rent</a>
                </div>
            </li>
        <?php
    }
    echo '</ul>';
} else {
    echo 'No products found.';
}
?>
