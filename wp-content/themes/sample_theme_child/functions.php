
<?php

// Function to load CSS from parent theme
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

function enqueue_parent_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
}

// Disable the WordPress search feature
function disable_search( $query, $error = true ) {
    if ( is_search() ) {
        $query->is_search = false;
        $query->query_vars[s] = false;
        $query->query[s] = false;
        // to error
        if ( $error == true )
        $query->is_404 = true;
    }
}
  
add_action( 'parse_query', 'disable_search' );
add_filter( 'get_search_form', create_function( '$a', "return null;" ) );

?>