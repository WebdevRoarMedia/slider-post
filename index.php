<?php

function showCityGrid($atts) {
	
	$atts = shortcode_atts( array(
		'display' => 'gridstyle',
    ), $atts, 'city_grid' );
	
    $args = array( 
        'post_type' => '[CPT-HERE]', 
        'posts_per_page' => -1, 
        'orderby' => 'date',
        'order' => 'ASC',
    );
    
    $the_query = new WP_Query( $args );

    $output = '<div class="cities '.$atts['display'].'">';

    if ( $the_query->have_posts() ) {
    	while ( $the_query->have_posts() ) {
            $the_query->the_post();

            $id = get_the_ID();
            $title = get_the_title($id);
            $link = get_permalink($id);
            $featured_img_url = get_the_post_thumbnail_url($id,'full'); 
           
                $output .= '<div class="card" style="background: url('.$featured_img_url.') center center no-repeat;">';
				$output .= '<a href="'.$link.'">';
					$output .= '<div class="overlay"></div>';
                        $output .= '<div class="card-info">';
                            $output .= '<h2>'.$title.'</h2>';
					$output .= '</a>';
                        $output .= '</div>';
                $output .= '</div>'; // End card
    	}
    }
    
    $output .= '</div>'; // End of cities grid

    return $output;
}

add_shortcode('city_grid', 'showCityGrid');