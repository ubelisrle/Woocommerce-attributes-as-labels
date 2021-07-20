// ATTRIBUTES AS LABELS
add_action( 'woocommerce_before_shop_loop_item', 'attributes_as_labels' );
add_action( 'woocommerce_single_product_summary', 'attributes_as_labels' );

function attributes_as_labels() {

    global $product;

    $terms = get_the_terms( $product->id, 'pa_vrsta-hrane' );
 
    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
    
    echo '<div class="food-ribbons">';
    
    foreach ( $terms as $term ) {
    
    // echo '<li class="food-' . $term->slug . '">' . $term->name . '</li>';
    // echo '<li>' . $term->description . '</li>';
    
    echo '<div class="tt-wrapper">';
    echo '<span class="' . $term->slug . ' ribbon">' . $term->name . '</span>';
    echo '<span class="tooltip-' . $term->slug . '">' . $term->description . '</span>';
    echo '</div>';    
    }
    echo '</div>';
    // echo '</ul>';
    
    }
        
}
