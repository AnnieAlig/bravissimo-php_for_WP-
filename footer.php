			<!-- footer -->

            <footer class="wraper footer">
    <div class="footer_content wrapper">
            <div class="footer_icons-wraper">
                <a href="https://www.facebook.com/studiobravissimo/" target="blank" class="footer_facebook-icons"></a>
                <a href="https://www.instagram.com/studiobravissimo/" target="_blank" class="footer_instagram-icons"></a>
            </div>
            <div class="footer_contacts">
                <div class="footer_wraper-contacts">
                        

                        <p><a href="tel:'<?php echo get_post_meta( 69, 'tel1', true ); ?>'" class="footer_phone-number"><?php echo get_post_meta( 69, 'tel1', true ); ?></a></p>
                        <p><a href="tel:'<?php echo get_post_meta( 69, 'tel2', true ); ?>'" class="footer_phone-number"><?php echo get_post_meta( 69, 'tel2', true ); ?></a></p>
                        <p><a href="mailto:'<?php echo get_post_meta( 69, 'e-mail', true ); ?>'" class="footer_email"><?php echo get_post_meta( 69, 'e-mail', true ); ?></a></p>
                        <p><a href="/contacts" class="footer_addres"><?php echo get_post_meta( 69, 'adress-2', true ); ?></a></p>
                    </div>
                </div>
                <div class="footer_logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-1.png" alt="Bravissimo Studio" class="footer_links-logo"></a>
                </div>
            </div>
            <p class="footer_copywrite">© <?php echo get_post_meta( 69, 'copyright', true ); ?> Studio Bravissimo. Курсы итальянского языка в Киеве.</p>
</footer>

</div>
			<!-- /footer -->


		<?php wp_footer(); ?>
        
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
        
	</body>
</html>
