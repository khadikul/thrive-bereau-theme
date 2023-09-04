<?php
/**
 * Rainbow main class here
 *
 * @package thrive-bureau
 */

namespace THRIVE_BUREAU\Inc;

use THRIVE_BUREAU\Inc\Traits\Singleton;

class THRIVE_BUREAU {
	use Singleton;

    protected function __construct()
    {
        //load theme class

        $this->setup_hooks();
    }

    protected function setup_hooks(){
        /**
         * 
         * All Action Hooks Here
         * 
         */
        add_action('after_setup_theme', [$this, 'setup_thrive_bureau']);
        add_action('wp_enqueue_scripts', [$this, 'thrive_bureaue_scripts']);
    }

    public function setup_thrive_bureau(){
        add_theme_support('title-tag');
    }

    public function thrive_bureaue_scripts() {
        //google fonts
        wp_enqueue_style('thrivebureau-fonts', 'https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap', false);

        //css register
        wp_register_style( 'thrivebureau-custom', THRIVE_BUREAU_DIR_URI . '/Assets/css/main.css', array(), d_version, 'all' );
        wp_register_style('thrivebureau-responsive', THRIVE_BUREAU_DIR_URI . '/Assets/css/responsive.css', array(), d_version, 'all');
    
        //css enqueue
        wp_enqueue_style('thrivebureau-custom' );
        wp_enqueue_style('thrivebureau-responsive' );
    
        //js register
        wp_register_script('thirvebureau-jquery', 'https://code.jquery.com/jquery-3.7.0.min.js', array(), '3.7.0', true);
        wp_register_script( 'thrivebureau-script', THRIVE_BUREAU_DIR_URI . '/Assets/js/main.js', array(), d_version, true );

        wp_enqueue_script('thirvebureau-jquery');
        wp_enqueue_script('thrivebureau-script');
        
    }

}