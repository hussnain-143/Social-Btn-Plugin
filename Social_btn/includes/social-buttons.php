<?php
function sb_activate($content) {
    $facebook_url = esc_url(get_option('sb_facebook_url'));
    if (empty($facebook_url)) {
        $facebook_url = 'https://facebook.com';
    }

    $whatsapp_url = esc_url(get_option('sb_whatsapp_url'));
    if (empty($whatsapp_url)) {
        $whatsapp_url = 'https://wa.me';
    }

    $linkedin_url = esc_url(get_option('sb_linkedin_url'));
    if (empty($linkedin_url)) {
        $linkedin_url = 'https://linkedin.com';
    }

    $twitter_url = esc_url(get_option('sb_twitter_url'));
    if (empty($twitter_url)) {
        $twitter_url = 'https://twitter.com';
    }

    $social_buttons = '
    <div class="social-buttons d-flex col-6 justify-content-between" style="margin-top: 20px;">
        <a href="' . $facebook_url . '" target="_blank" style="margin-right: 10px;">
            <i class="fab fa-facebook text-primary icon" style="font-size: 2rem;"></i>
        </a>
        <a href="' . $whatsapp_url . '" target="_blank" style="margin-right: 10px;">
            <i class="fab fa-whatsapp text-success icon" style="font-size: 2rem;"></i>
        </a>
        <a href="' . $linkedin_url . '" target="_blank" style="margin-right: 10px;">
            <i class="fab fa-linkedin text-info icon" style="font-size: 2rem;"></i>
        </a>
        <a href="' . $twitter_url . '" target="_blank">
            <i class="fab fa-twitter text-primary icon" style="font-size: 2rem;"></i>
        </a>
    </div>';

    return $content . $social_buttons;
}
add_filter('the_content', 'sb_activate');
?>