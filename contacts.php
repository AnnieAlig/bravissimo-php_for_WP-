<?php ?>

<?php
/*
Template Name: Contacts page 2
*/
get_header(); ?>
<main role="main">

    <article>

        <div class="contact_wraper_bg">
            <div class="content_wrapper">

                <h1 class="contact_p">Контaкты</h1>

                <div class="contact_content">

                    <div class="contact_address">
                        <img class="contact_logo" src="<?php echo get_template_directory_uri(); ?>/img/placeholder.svg">
                        <p class="contact_address-text"><?php echo get_post_meta(69, 'adress', true); ?></p>
                        <p><?php echo get_post_meta(69, 'adress-2', true); ?></p>
                    </div>

                    <div class="contact_tell">
                        <img class="contact_logo" src="<?php echo get_template_directory_uri(); ?>/img/smartphone.svg">
                        <p class="contact_tell-text-1"><a
                                    href="tel:'<?php echo get_post_meta(69, 'tel1', true); ?>'"><?php echo get_post_meta(69, 'tel1', true); ?></a>
                        </p>
                        <p class="contact_tell-text-2"><a
                                    href="tel:'<?php echo get_post_meta(69, 'tel2', true); ?>'"><?php echo get_post_meta(69, 'tel2', true); ?></a>
                        </p>
                    </div>

                    <div class="contact_email">
                        <img class="contact_logo" src="<?php echo get_template_directory_uri(); ?>/img/envelope.svg">
                        <p class="contact_email-text"><a
                                    href="mailto:'<?php echo get_post_meta( 69, 'e-mail', true ); ?>'"><?php echo get_post_meta(69, 'e-mail', true); ?></a>
                        </p>
                    </div>
                </div>

                <div class="contact_wraper-map">
                    <div class="contact_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.7430684764204!2d30.510270316018072!3d50.46450897947728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce6a5abca17d%3A0xe1ab8a4f48d3f50c!2z0LLRg9C70LjRhtGPINCl0L7RgNC40LLQsCwgMdCQLCDQmtC40ZfQsg!5e0!3m2!1suk!2sua!4v1501419946028"
                                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                </div>
                <h2 class="contact-info_p">Свяжитесь с нами</h2>
                <div role="form" class="wpcf7" id="wpcf7-f200-o1" dir="ltr" style="" lang="en-US">
                    <form action="/contacts/#wpcf7-f200-o1" method="post"
                          class="wpcf7-form sent contacts_form contact-container"
                          novalidate="novalidate">
                        <div style="display: none;">
                            <input name="_wpcf7" value="200" type="hidden">
                            <input name="_wpcf7_version" value="4.8.1" type="hidden">
                            <input name="_wpcf7_locale" value="en_US" type="hidden">
                            <input name="_wpcf7_unit_tag" value="wpcf7-f200-o1" type="hidden">
                            <input name="_wpcf7_container_post" value="0" type="hidden">
                            <input name="_wpcf7_nonce" value="1fb3cda898" type="hidden">
                        </div>
                        <div class="contact-form-container">

                        <div class="contact_wpraper-form">

                            <div class="contact_form-wrap">

                                <div class="contact-left">

                                    <input name="your-name" value="" size="40"
                                           class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required contact_form "
                                           aria-required="true" aria-invalid="false" type="text" placeholder="Ваше имя">
                                    <span class="wpcf7-form-control-wrap your-name"></span>
                                    <input name="tel-362" value="" size="40"
                                           class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel contact_form"
                                           aria-required="true" aria-invalid="false" type="tel" placeholder="Телефон">
                                    <span class="wpcf7-form-control-wrap tel-362"></span>
                                    <input name="your-email" value="" size="40"
                                           class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email contact_form"
                                           aria-required="true" aria-invalid="false" type="email" placeholder="E-mail">
                                    <span class="wpcf7-form-control-wrap your-email"></span>
                                </div>
                                <div class="contact-right">

                    <textarea name="your-message" cols="40" rows="10"
                              class="wpcf7-form-control wpcf7-textarea contacts_form-ques"
                              aria-invalid="false" placeholder="Введите сообщение"></textarea>

                                </div>

                            </div>
                            <div class="contact_wpraper-form" style="justify-content: center">

                            <input value="Отправить" class="wpcf7-form-control wpcf7-submit contact_submit"
                                   type="submit">

                            <div class="wpcf7-response-output wpcf7-display-none wpcf7-mail-sent-ok"
                                style="display: none;" role="alert">
                            </div>
                            </div>
                        </div>
                        </div>
                    
                    </form>
                </div>
            </div>
    </article>

</main>

<?php get_footer(); ?>
