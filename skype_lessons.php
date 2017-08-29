<?php 
     /*
    Template Name: Skype lessons
    */
    get_header(); ?>

    <main role="main">

<section class="skype-lessons margin-bottom">
    <div class="wrapper">
        <h1 class="skype-lessons_title">Итальянский online</h1>
        <div class="skype-lessons_description-container">
            <div class="skype-lessons_description">
                <h4>Дистанционное обучение</h4>
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <div class="skype-lessons_main-info">
                    <div class="skype-lessons_main-info_single">
                        <p class="skype-lessons_main-info-duration"><?php echo get_post_meta( $post->ID, 'lesson_duration-1', true ); ?></p>
                        <p class="skype-lessons_main-info-price"><?php echo get_post_meta( $post->ID, 'price1', true ); ?></p>
                    </div>
                    <div class="skype-lessons_main-info_single">
                        <p class="skype-lessons_main-info-duration"><?php echo get_post_meta( $post->ID, 'lesson_duration-2', true ); ?></p>
                        <p class="skype-lessons_main-info-price"><?php echo get_post_meta( $post->ID, 'price2', true ); ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>

                
            </div>
            <div class="skype-lessons_form-container">
                <div role="form" class="wpcf7" id="wpcf7-f239-o1" dir="ltr" lang="en-US">
                <!-- <div class="screen-reader-response"></div> -->
                <form action="/front-page/skype_lessons/#wpcf7-f239-o1" method="post" 
                class="wpcf7-form skype-lessons_form" novalidate="novalidate">
                    <div style="display: none;">
                        <input name="_wpcf7" value="239" type="hidden">
                        <input name="_wpcf7_version" value="4.8.1" type="hidden">
                        <input name="_wpcf7_locale" value="en_US" type="hidden">
                        <input name="_wpcf7_unit_tag" value="wpcf7-f239-o1" type="hidden">
                        <input name="_wpcf7_container_post" value="0" type="hidden">
                        <input name="_wpcf7_nonce" value="4f1add3592" type="hidden">
                    </div>
                    <legend class="skype-lessons_form-title">Запишитесь на пробное занятие</legend>
                    
                        <input name="your-name" value="" size="40" 
                            class="wpcf7-form-control wpcf7-text skype-lessons_form-name" 
                            aria-required="true" aria-invalid="false" type="text" placeholder="Ваше имя">
                    <span class="wpcf7-form-control-wrap your-name"></span>
                    
                        <input name="tel-851" value="" size="40" 
                            class="skype-lessons_form-tel wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" 
                            aria-required="true" aria-invalid="false" type="tel" placeholder="Телефон">
                    <span class="wpcf7-form-control-wrap tel-851"></span>
                        
                        <input name="your-email" value="" size="40" class="skype-lessons_form-email wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" 
                            aria-required="true" aria-invalid="false" type="email" placeholder="E-mail">
                    <span class="wpcf7-form-control-wrap your-email"></span>    
                    
                        <input name="skype" value="" size="40" class="wpcf7-form-control wpcf7-text skype-lessons_form-skype" 
                            aria-invalid="false" type="text" placeholder="Skype">
                    <span class="wpcf7-form-control-wrap skype"></span>    
                        <input value="Записаться" class="wpcf7-form-control wpcf7-submit" type="submit">

                    <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
                </div>
            </div>
    </div>
</section>

<!-- //end of skype lessons// -->
	</main>

    <?php get_footer(); ?>

