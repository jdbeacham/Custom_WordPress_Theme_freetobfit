<?php

function ftbf_patreon_shortcode() {
    ob_start();
    ?>


    <div class = "indi-widget-container">
<a href="https://www.patreon.com/FreetoBFit"><div class = "indi-title">Become a Patron Now!</div></a>
    <iframe title="vimeo-player" src="https://player.vimeo.com/video/413368066" frameborder="0" allowfullscreen></iframe>


    </div>


    <?php
    $patreonContent = ob_get_contents();
    ob_end_clean();
    return $patreonContent;
}

add_shortcode( 'patreon', 'ftbf_patreon_shortcode' );