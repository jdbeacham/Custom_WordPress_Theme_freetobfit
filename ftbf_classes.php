<?php

function ftbf_vc_shortcode() {
    ob_start();

    wp_nav_menu(
        array(
            'theme_location' => 'double',
            'menu_id'        => 'double-menu'
        )
    );

$vcargs = array(
	'post_type'      => 'post',
    'category_name'  => 'vc'

);

$ftbf_vc_posts = new WP_Query( $vcargs );

while ( $ftbf_vc_posts->have_posts() ) :
    $ftbf_vc_posts->the_post();
?>
<div id="ftbf-vc-box">


<?php

global $wpdb;
$vc_infos = $wpdb->get_results("SELECT * FROM wp_ftbf_classes WHERE ftfb_events = 'class'");
 ?>

<div id="ftbf-vc-button-container">

<?php for ($i = 0; $i < count($vc_infos); $i++) { 

    $converted = date("g:i A", strtotime($vc_infos[$i]->start_time));
?>
<div class="ftbf-vc-button">
<div class="ftbf-vc-button-title"><?php echo $vc_infos[$i]->class_title; ?></div>
<div class="ftbf-vc-button-day"><?php echo $vc_infos[$i]->class_day . ' at'; ?></div>
<div class="ftbf-vc-button-time"><?php echo $converted; ?></div>
<div class="ftbf-vc-click-details">click for description</div>
</div>

<div id="ftbf-vc-explain-container">
<div class="ftbf-vc-explain-box">
<div class="ftbf-vc-explain-inst">Instructor: <?php echo $vc_infos[$i]->class_instructor ?></div>
<div class="ftbf-vc-explain-desc">Description: <?php echo $vc_infos[$i]->class_description ?></div>

</div>
</div>

<?php }

?>
</div>
<div id="ftbf-vc-content">
    <?php the_content(); ?>
</div>
</div>
<?php
endwhile;
?>



    <?php
    $myTryContent = ob_get_contents();
    ob_end_clean();
    return $myTryContent;
}

add_shortcode( 'virtual-classes', 'ftbf_vc_shortcode' );


