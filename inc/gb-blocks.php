<?php




add_action( 'acf/init', 'nabeel_acf_block' );

function nabeel_acf_block() {
    
    if( function_exists( 'nabeel_acf_block' ) ) {



        // Hero

        acf_register_block_type(
            array(
                'name'            =>__( 'Hero Section' ),
                'title'           =>  __( 'Hero Section' ),
                'description'     =>  '',
                'render_template' =>  'inc/blocks/hero-section.php',
                'category'        =>  'Nabeel',
                'icon'            =>  'block-default',
                'keywords'        =>  array( 'nabeel', 'hero section' )
            )

        );

        // About Me

        acf_register_block_type(
            array(
                'name'            =>__( 'About Me' ),
                'title'           =>  __( 'About Me' ),
                'description'     =>  '',
                'render_template' =>  'inc/blocks/about-me.php',
                'category'        =>  'Nabeel',
                'icon'            =>  'block-default',
                'keywords'        =>  array( 'nabeel', 'About Me' )
            )

        );

        // My Services

        acf_register_block_type(
            array(
                'name'            =>__( 'Services' ),
                'title'           =>  __( 'Services' ),
                'description'     =>  '',
                'render_template' =>  'inc/blocks/services.php',
                'category'        =>  'Nabeel',
                'icon'            =>  'block-default',
                'keywords'        =>  array( 'nabeel', 'Services' )
            )

        );

        // Experience

        acf_register_block_type(
            array(
                'name'            =>__( 'Experience' ),
                'title'           =>  __( 'Experience' ),
                'description'     =>  '',
                'render_template' =>  'inc/blocks/experience.php',
                'category'        =>  'Nabeel',
                'icon'            =>  'block-default',
                'keywords'        =>  array( 'nabeel', 'Experience' )
            )

        );
        
    }

}




?>