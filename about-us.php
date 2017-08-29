<?php 
     /*
    Template Name: About us page
    */
    get_header(); ?>

    <main role="main">

    <!-- //about us section//
    //why us// -->
<div class="about-us-bg">
    <h1>О нас</h1>
    <section class="why-us">
        <h2 class="why-us_title">Почему мы?</h2>
        <div class="benefits-container">
            <div class="benefits-methods">
                <h3 class="benefits_title">Эффективная методика обучения</h3>
                <p class="benefits_about">
                    <?php echo get_post_meta( $post->ID, 'methods', true ); ?>
                </p>
            </div>
            <div class="benefits-internship">
                <h3 class="benefits_title">Стажировка для лучших студентов</h3>
                <p class="benefits_about">
                    <?php echo get_post_meta( $post->ID, 'internship', true ); ?>
                </p>
            </div>
            <div class="benefits-best-trainers">
                <h3 class="benefits_title">Преподаватели высшего уровня</h3>
                <p class="benefits_about">
                    <?php echo get_post_meta( $post->ID, 'trainers', true ); ?>
                </p>
            </div>
        </div>
    </section>
</div>

<!-- //end of why us// -->

<!-- //our teachers// -->
<article>
    <section class="our-teachers">
        <h2 class="our-teachers_title">Наши учителя</h2>
        <div class="our-teachers-container">
              <?php
                    global $post;
                    $args = array('posts_per_page' => 10,'post_type' => 'html5-teachers', 'order' => 'ASC' );
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ){ setup_postdata($post);
                ?>  
            <div class="our-teachers_teacher">
                     
                <div class="teacher_photo">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="teacher_about">
                    <h3 class="teacher_about-name"><?php the_title(); ?></h3>
                    <h4 class="teacher_about-position"><?php echo get_post_meta( $post->ID, 'position', true ); ?></h4>
                    <div class="teacher_about-education"><?php the_content(); ?></div>
                    <div class="teacher_about-additional"><?php echo get_post_meta( $post->ID, 'additional', true ); ?></div>
                </div>

            
            </div>
           <?php
            }
            wp_reset_postdata();
            ?>

        </div>
    </section>
</article>

<!-- //end of our teachers// -->
</main>
<?php get_footer(); ?>
