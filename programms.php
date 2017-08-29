<?php 
     /*
    Template Name: Programms
    */
    get_header(); ?>

    <main role="main">

<!-- //programs and shedule// -->

<section class="programs_page wrapper margin-bottom">
    <h1>Программы и расписания</h1>
            <?php
            global $post;
            $args = array('posts_per_page' => 10,'post_type' => 'html5-levels', 'order' => 'ASC' );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ){ setup_postdata($post);
                ?>
                	<?php 
                	echo '<div class="programs programs_a1" id="programs_'.get_the_title().'">';
                	?>
	                <?php if( $post->ID == 153) {
	                    echo '<div class="programs_circle_small">';}
	                    else {echo '<div class="programs_circle">';}
	                ?>
					<?php the_title(); ?></div>
					<p class="program_single_length"><?php echo get_post_meta( $post->ID, 'program_time', true ); ?></p>
					<p class="programs-single_price"><?php echo get_post_meta( $post->ID, 'program_cost', true ); ?></p>
					<p class="programs_description"><?php echo get_post_meta( $post->ID, 'description', true ); ?></p>
					<?php 
			            $table = get_field( 'schedule' );
						if ( $table ) {
				            foreach ( $table['body'] as $tr ) {
				                echo '<div class="programs_timetable">';
				                    foreach ( $tr as $td ) {
				                        echo '<div class="programs_timetable_item">';
				                            echo $td['c'];
				                        echo '</div>';
				                    }
				                echo '</div>';
				            }
						}
			        ?>
					<p class="programs_comment"><?php echo get_post_meta( $post->ID, 'comment', true ); ?></p>
				</div>
                <?php
            }
            wp_reset_postdata();
            ?>
</section>
<!-- //end of programs and schedule// -->
    </main>

    <?php get_footer(); ?>
