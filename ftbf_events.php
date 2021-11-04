<?php

function ftbf_events_shortcode() {
    ob_start();
    
    wp_nav_menu(
        array(
            'theme_location' => 'double',
            'menu_id'        => 'double-menu'
        )
    );
    
    ?>

<p style="margin: 50px; font-size: 1.5em; margin-bottom: 350px;font-family: 'Mukta Vaani', sans-serif;">To find out about future live events, <a href="https://freetobfit.com/2021/07/16/sign-in/">sign-up with FreetoBFit now!</a><p>

    <?php
    $myTryContent = ob_get_contents();
    ob_end_clean();
    return $myTryContent;
}

add_shortcode( 'events', 'ftbf_events_shortcode' );
?>