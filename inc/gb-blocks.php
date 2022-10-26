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

        // Skills
        
    }

}




?>