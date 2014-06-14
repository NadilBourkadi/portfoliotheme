<?php

// Register style sheet.



function register_dils_portfolio_styles() {
    wp_register_style( 'dils-portfolio-main-styles', get_template_directory_uri() . '/css/main-styles.css'  );
    wp_register_style( 'dils-portfolio-bootstrap', get_template_directory_uri() . '/css/bootstrap.css'  );
    wp_register_style( 'dils-portfolio-bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.css'  );
    wp_register_style( 'dils-portfolio-footer', get_template_directory_uri() . '/css/footer.css'  );
    wp_register_style( 'dils-portfolio-mixins', get_template_directory_uri() . '/css/mixins.css'  );
    wp_register_style( 'dils-portfolio-portfolio-entry', get_template_directory_uri() . '/css/portfolio-entry.css'  );
}
add_action( 'wp_enqueue_scripts', 'register_dils_portfolio_styles' );


function enqueue_dils_portfolio_styles(){

    wp_enqueue_style( 'dils-portfolio-main-styles' );
    wp_enqueue_style( 'dils-portfolio-bootstrap');
    wp_enqueue_style( 'dils-portfolio-bootstrap-theme'  );
    wp_enqueue_style( 'dils-portfolio-footer');
    wp_enqueue_style( 'dils-portfolio-mixins');
    wp_enqueue_style( 'dils-portfolio-portfolio-entry'  );
}
add_action( 'wp_enqueue_scripts', 'enqueue_dils_portfolio_styles' );

?>