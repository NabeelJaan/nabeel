

 


<section class="hero-sec py-36 relative bg-gradient-to-r from-[#33191C] via-[#493D12] to-[#203E46] z-0 -mt-88 overflow-hidden">
    <div class="max-w-1170 mx-auto">
        <div class="inner-wrapper md:flex justify-between items-center">
            <div class="content-wrapper w-3/5 relative z-10">
                <p class="text-6xl font-bold text-Yellow font-inter md:text-center"><?php the_field( 'hero_sub_heading' ); ?></p>
                <h1 class="text-white text-90 font-bold font-inter md:text-center"><?php the_field( 'hero_heading' ); ?></h1>
                <h3 class="text-32 font-inter text-green font-semibold md:text-center"><?php the_field( 'hero_title' ); ?></h3>
                <p class="text-xl font-medium font-inter text-white my-8 capitalize"><?php the_field( 'hero_description' ); ?></p>

                <?php $hire_me_button = get_field('hire_me_button'); ?>

                <?php if( $hire_me_button ) : ?>

                    <div class="hero-btn">
                        <a href="<?php echo esc_url( $hire_me_button['url'] ); ?>" target="<?php echo esc_attr( $hire_me_button[target] ); ?>" class="text-white font-inter text-base font-semibold leading-6 tracking-wide capitalize bg-green h-14 w-40 rounded-full inline-flex items-center justify-center hover:bg-white hover:text-green">
                            <?php echo esc_html( $hire_me_button['title'] ); ?>
                        </a>
                    </div>

                <?php endif; ?>

            </div>

            <div class="hero-img relative bg-Blue rounded-full w-500 h-500 mx-auto z-10">

                <?php $hero_image = get_field( 'hero_image' ); ?>

                <?php if( $hero_image ) : ?>
                    
                    <img class="absolute bottom-0" src="<?php echo esc_url( $hero_image['url'] ); ?>" alt="<?php echo esc_attr( $hero_image['alt'] ) ?>">
                
                <?php endif; ?>

                <div class="icon1 bg-white w-110 h-110 rounded-3xl p-5 absolute top-28 -left-[34px]">
                    <img src="wp-content/uploads/2022/10/svgexport-1.svg" alt="photoshop">
                </div>
                <div class="icon2 bg-white w-110 h-110 rounded-3xl p-5 absolute top-28 -right-8">
                    <img src="wp-content/uploads/2022/10/svgexport-2.svg" alt="">
                </div>
                <div class="icon3 bg-white w-110 h-110 rounded-3xl p-5 absolute bottom-[4px] right-[24px]">
                    <img src="wp-content/uploads/2022/10/svgexport-3.svg" alt="">
                </div>
                <div class="bg-white rounded-full px-5 py-[10px] inline-flex items-center absolute bottom-[24px]">
                    <div class="icon">
                        <img class="w-50 h-auto" src="wp-content/uploads/2022/10/verified.png" alt="Verified icon">
                    </div>
                    <div class="ml-[10px]">
                        <span class="text-[25px] font-inter font-medium text-[#202020] leading-[10px]">300+</span>
                        <p class="text-[15px] font-inter font-normal text-[#585858] capitalize">complete projects</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape1 top-0 left-0 absolute z-0"><img src="wp-content/uploads/2022/10/svgexport-4.svg" alt=""></div>
        <div class="shape2 absolute z-0 -top-[121px]"><img src="wp-content/uploads/2022/10/svgexport-5.svg" alt=""></div>
        <div class="shape3 absolute z-0 right-0 top-0"><img src="wp-content/uploads/2022/10/svgexport-6.svg" alt=""></div>
        <div class="line z-0 absolute bottom-0 left-0"><img src="wp-content/uploads/2022/10/lineshap.png" alt=""></div>
        <div class="line2s z-0 absolute top-0 -right-[140px]"><img src="wp-content/uploads/2022/10/lineshape1.png" alt=""></div>
    </div>
</section>