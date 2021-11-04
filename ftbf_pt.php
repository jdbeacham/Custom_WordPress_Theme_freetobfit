<?php

function ftbf_pt_shortcode() {
    ob_start();
    
    wp_nav_menu(
        array(
            'theme_location' => 'double',
            'menu_id'        => 'double-menu'
        )
    );
    
    ?>

<a id="noDecoration"  href="https://freetobfit.com/2021/07/16/sign-in/ "><div id ="ftbf-pt-button">Connect with us about Personal Training Now</div></a>
<div id="ftbf-pt-container">
<?php
$args = array(
	'orderby'        => 'meta_value_num',
	'meta_key'       => 'ftbf_pt',
	'order'          => 'ASC',
	'post_type'      => 'post',
    'category_name'  => 'pt'

);

$ftbf_pt_posts = new WP_Query( $args );

while ( $ftbf_pt_posts->have_posts() ) :
    $ftbf_pt_posts->the_post();
?>
<div class="ftbf-pt-box">
<div class="ftbf-pt-title">
<?php the_title(); ?>
</div>
<div class="ftbf-pt-img">
<?php the_post_thumbnail(); ?>
</div>
<div class="ftbf-pt-content">
    <?php the_content(); ?>
</div>
</div>
<?php
endwhile;
?>
</div>



    <?php
    $myTryContent = ob_get_contents();
    ob_end_clean();
    return $myTryContent;
}

add_shortcode( 'personal-training', 'ftbf_pt_shortcode' );
?>