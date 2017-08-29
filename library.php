<?php 
     /*
    Template Name: Library
    */
    get_header(); ?>

    <main role="main">
<!-- //library// -->

<article>
    <section class="wrapper margin-bottom">

        <h1>Библиотека</h1>

        <div class="library">


            <?php
            global $post;
            $args = array('posts_per_page' => 100,'post_type' => 'library', 'order' => 'ASC' );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ){ setup_postdata($post);
                ?>
                <div class="library-wrapper">
                    <div class="library_img" >
                        <?php the_post_thumbnail(); ?>
                    </div>

                    <h4><?php echo get_post_meta( $post->ID, 'level', true ); ?></h4>
                    <p class="library_annotation"><?php the_content(); ?></p>
                    <div style="height: 100%"></div>
                    <div>

                        <a class="library_button-download"
                           href="<?php echo get_post_meta( $post->ID, 'link', true ); ?>" target="blank">
                            Скачать
                        </a>
                    </div>
                </div>
                <?php
            }
            wp_reset_postdata();
            ?>


        </div>
    </section>
</article>

    </main>
    <?php get_footer(); ?>
