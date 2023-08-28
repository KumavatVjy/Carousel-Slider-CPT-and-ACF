<?php
/**
*  @package Definedge User Stories
*/ 
/*
Plugin Name: Definedge User Stories
Plugin URI: https://definedge.com/
Description: Carousel Slider of Definedge User Stories
Version: 1.0.0
Author: Vijay Kumavat
Author URI: https://definedge.com/
License: GPLv2 or later
Text Domain: akismet

*/
defined ('ABSPATH') or die(":)");



if ( is_front_page() ) :


	// Enqueue scripts and styles
	function user_story_carousel_enqueue_scripts() {
	    // Enqueue your carousel library's JavaScript
	    //wp_enqueue_script('custom-carousel-js', plugins_url('assests/js/owl.carousel.min.js', __FILE__), array('jquery'), '1.0', true);
	    wp_enqueue_script('user_story-carousel-script-js', plugins_url('assests/js/myscripts.js', __FILE__), array('jquery'), '1.0', true);

	    // Enqueue your carousel library's CSS
	    //wp_enqueue_style('custom-carousel-css', plugins_url('assests/css/owl.carousel.min.css', __FILE__), array(), '1.0');
	    wp_enqueue_style('user_story-carousel-style-css', plugins_url('assests/css/mystyles.css', __FILE__), array(), '1.0');
	    
	}
	add_action('wp_enqueue_scripts', 'user_story_carousel_enqueue_scripts');

else :

	// Enqueue scripts and styles
	function user_story_carousel_enqueue_scripts() {
	    // Enqueue your carousel library's JavaScript
	    //wp_enqueue_script('custom-carousel-js', plugins_url('assests/js/owl.carousel.min.js', __FILE__), array('jquery'), '1.0', true);
	    wp_enqueue_script('user-story-carousel-script-js', plugins_url('assests/js/myscripts.js', __FILE__), array('jquery'), '1.0', true);

	    // Enqueue your carousel library's CSS
	    //wp_enqueue_style('custom-carousel-css', plugins_url('assests/css/owl.carousel.min.css', __FILE__), array(), '1.0');
	    wp_enqueue_style('user-story-carousel-style-css', plugins_url('assests/css/mystyles.css', __FILE__), array(), '1.0');
	    
	}
	add_action('wp_enqueue_scripts', 'user_story_carousel_enqueue_scripts');


endif;



/*

function custom_carousel_user_stories_shortcode($atts) {
    // Shortcode attributes can be passed in the $atts array
    
    // Generate and return the HTML structure for the carousel

$return ='
    <div class="carousel-container">
	  	<div id="owl-demo2" class="owl-carousel owl-theme">


		    <div class="custom-item">
			    <div class="custom-img-box video-box">

			    	<div class="custom-story-sec">
				      	<div class="body-story-part-sec" style="">
				      		<img src="'.home_url().'/wp-content/uploads/2023/08/story-1.jpg"/>
				      		<p class="top-story-title-sec"><span>Zone Web</span>  <span>consectetur adipiscing elit</span><p>
				        	<p class="bop-story-para-sec"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</span> sed do eiusmod tempor incididunt ut labore. sed do eiusmod tempor incididunt sed do eiusmod tempor incididunt.</p>
				        </div>
				    </div>

			    </div>
		    </div>


		    <div class="custom-item">
		      	<div class="custom-img-box">

			        <div class="custom-story-sec">
				      	<div class="body-story-part-sec">
				      		<p class="top-story-title-sec"><img src="'.home_url().'/wp-content/uploads/2023/04/zone-web-icon.svg"/><span>Zone Web</span><p>
				        	<p class="bop-story-para-sec"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</span> sed do eiusmod tempor incididunt ut labore. sed do eiusmod tempor incididunt sed do eiusmod tempor incididunt.</p>
				        </div>
				    </div>

		      	</div>
		    </div>


		    <div class="custom-item">
		      	<div class="custom-img-box video-box">

			        <div class="custom-story-sec">
				      	<div class="body-story-part-sec" style="">
				      		<img src="'.home_url().'/wp-content/uploads/2023/08/story-1.jpg"/>
				      		<p class="top-story-title-sec"><span>Zone Web</span><p>
				        	<p class="bop-story-para-sec"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</span> sed do eiusmod tempor incididunt ut labore. sed do eiusmod tempor incididunt sed do eiusmod tempor incididunt.</p>
				        </div>
				    </div>

		      	</div>
		    </div>


		    <div class="custom-item">
		      	<div class="custom-img-box">

			      	<div class="custom-story-sec">
				      	<div class="body-story-part-sec">
				      		<p class="top-story-title-sec"><img src="'.home_url().'/wp-content/uploads/2023/04/zone-web-icon.svg"/><span>Zone Web</span><p>
				        	<p class="bop-story-para-sec"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</span> sed do eiusmod tempor incididunt ut labore. sed do eiusmod tempor incididunt sed do eiusmod tempor incididunt.</p>
				        </div>
				    </div>

		      	</div>
		    </div>



		</div>






	  	<div class="customNavigation prev_next">
		    <a class="custom-prev">
		      	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
		        	<polyline points="15 18 9 12 15 6"></polyline>
		      	</svg>
		    </a>
		    <a class="custom-next">
		      	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
		        	<polyline points="9 18 15 12 9 6"></polyline>
		      	</svg>
		    </a>
	  	</div>


	</div>';

	return $return; 
}
add_shortcode('custom_carousel_stories', 'custom_carousel_user_stories_shortcode');

*/

function custom_post_type_users_stories() {
    $labels = array(
        'name' => 'Users Stories',
        'singular_name' => 'Users Stories',
        'menu_name' => 'Users Stories',
        'add_new_item' => 'Add New User Story',
        // Add other labels as needed
    );

    $args = array(
        'public' => true,
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail'),
        'publicly_queryable'  => false,
        // Add other arguments as needed
    );

    register_post_type('users_stories', $args);
}
add_action('init', 'custom_post_type_users_stories');




function disable_single_pages_for_custom_post_type($post_link, $post) {
    if ('users_stories' === $post->post_type) {
        return home_url('/'); // Redirect to homepage or any other page
    }
    return $post_link;
}
add_filter('post_type_link', 'disable_single_pages_for_custom_post_type', 10, 2);

function disable_single_redirect_for_custom_post_type() {
    global $wp_query;
    if (isset($wp_query->query['users_stories'])) {
        wp_redirect(home_url('/'), 301);
        exit();
    }
}
add_action('template_redirect', 'disable_single_redirect_for_custom_post_type');





// Custom shortcode to display custom post type entries with custom fields
function custom_post_type_loop_shortcode($atts) {
    ob_start();

    // Shortcode attributes
    $attributes = shortcode_atts(array(
        'post_type' => 'users_stories',
    ), $atts);

    $query_args = array(
        'post_type' => $attributes['post_type'],
        'posts_per_page' => -1, // Display all posts
    );

    $loop = new WP_Query($query_args);

    if ($loop->have_posts()) {

    	?>
    	<div class="carousel-container">
	  		<div id="owl-demo2" class="owl-carousel owl-theme">
    	<?php

    	$popnum = 1;

        while ($loop->have_posts()) {
            $loop->the_post();

            // Output custom field details here

            $image_id = get_post_meta(get_the_ID(), 'user-story-image', true);

            $image_data = wp_get_attachment_image_src($image_id, 'full');

            if ($image_data) {
    			$user_story_image = $image_data[0]; // URL of the image
    		}else{
    			$user_story_image = home_url().'/wp-content/uploads/2023/08/avatar-1.jpg';   // default image url
    		}
             


            $user_story_video_url = get_post_meta(get_the_ID(), 'user_story_video_url', true);
            $user_story_name = get_post_meta(get_the_ID(), 'user_story_name', true);
            $user_story_designation = get_post_meta(get_the_ID(), 'user_story_designation', true);
            $user_story_title = get_post_meta(get_the_ID(), 'user_story_title', true);
            $user_story_content = get_post_meta(get_the_ID(), 'user_story_content', true);
            $user_stories_page_link = get_post_meta(get_the_ID(), 'user_stories_page_link', true);
            $user_story_highlighted_text = get_post_meta(get_the_ID(), 'user_story_highlighted_text', true);


            //$custom_field_value = get_post_meta(get_the_ID(), 'user_story_content', true);
            //$video_url = get_post_meta(get_the_ID(), 'user_story_video_url', true);
            




            ?>
            <!-- <div class="custom-post-entry">
                <h2><?php //the_title(); ?></h2>
                <p><?php //echo $custom_field_value; ?></p>
            </div> -->

<?php 
	if($user_story_video_url != 'https://www.defindegesecurities.com/'){
?>
            <div class="custom-item">
			    <div class="custom-img-box video-box">

			    	<div class="custom-story-sec">
				      	<div class="body-story-part-sec" style="">
				      		<img src="<?php echo $user_story_image ?>"/>
				      		
				      			<table>
					      			<tr>
										<td rowspan="2">
											<a class="buttonPop" href="#popup<?php echo $popnum ?>">

											<p class="top-story-title-sec"><img id="viewpop" data-animation="scaleUp" src="<?php echo home_url() ?>/wp-content/uploads/2023/08/Play-Icon-06.svg"/></p>
											</a>
										</td>
										<td><p class="story-name" ><?php echo $user_story_name; ?></p></td>
									</tr>
									<tr>
										<td><p class="story-designation"><?php echo $user_story_designation; ?></p></td>
									</tr>
					      		</table>

				      		
				        	<p class="bop-story-para-sec"><?php echo $user_story_content ?></p>
				        </div>
				    </div>

			    </div>
		    </div>


		    
<?php 
	}else{
?>

		    <div class="custom-item">
		      	<div class="custom-img-box">

			        <div class="custom-story-sec">
				      	<div class="body-story-part-sec">

				      		<table>
				      			<tr>
									<td rowspan="2"><p class="top-story-title-sec"><img src="<?php echo $user_story_image ?>"/></p></td>
									<td><p class="story-name" ><?php echo $user_story_name; ?></p></td>
								</tr>
								<tr>
									<td><p class="story-designation"><?php echo $user_story_designation; ?></p></td>
								</tr>
				      		</table>
				        	<p class="bop-story-para-sec"><span><?php echo $user_story_highlighted_text ?></span>&nbsp;<?php echo $user_story_content; ?></p>
				        </div>
				    </div>

		      	</div>
		    </div>

<?php 

	}

	$popnum++;
?>



            <?php
        }

        ?>
	        </div>

		  	<div class="customNavigation prev_next">
			    <a class="custom-prev">
			      	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
			        	<polyline points="15 18 9 12 15 6"></polyline>
			      	</svg>
			    </a>
			    <a class="custom-next">
			      	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
			        	<polyline points="9 18 15 12 9 6"></polyline>
			      	</svg>
			    </a>
		  	</div>


		</div>

        <?php
    }

    wp_reset_postdata();

    return ob_get_clean();
}
add_shortcode('custom_post_loop', 'custom_post_type_loop_shortcode');










// Custom shortcode to display custom post type entries with custom fields
function pop_post_type_loop_shortcode($atts) {
    ob_start();

    // Shortcode attributes
    $attributespop = shortcode_atts(array(
        'post_type' => 'users_stories',
    ), $atts);

    $query_argspop = array(
        'post_type' => $attributespop['post_type'],
        'posts_per_page' => -1, // Display all posts
    );

    $looppop = new WP_Query($query_argspop);

    if ($looppop->have_posts()) {

    	?>
    	
    	<?php

    	$popupnum = 1;

        while ($looppop->have_posts()) {
            $looppop->the_post();

            // Output custom field details here

            $image_id_pop = get_post_meta(get_the_ID(), 'user-story-image', true);

            $image_data_pop = wp_get_attachment_image_src($image_id_pop, 'full');

            if ($image_data_pop) {
    			$user_story_image_pop = $image_data_pop[0]; // URL of the image
    		}else{
    			$user_story_image_pop = home_url().'/wp-content/uploads/2023/08/avatar-1.jpg';   // default image url
    		}
             


            $pop_story_video_url_pop = get_post_meta(get_the_ID(), 'user_story_video_url', true);
            $pop_story_name_pop = get_post_meta(get_the_ID(), 'user_story_name', true);
            $pop_story_designation_pop = get_post_meta(get_the_ID(), 'user_story_designation', true);
            $pop_story_title_pop = get_post_meta(get_the_ID(), 'user_story_title', true);
            $pop_story_content_pop = get_post_meta(get_the_ID(), 'user_story_content', true);
            $pop_stories_page_link_pop = get_post_meta(get_the_ID(), 'user_stories_page_link', true);
            $pop_story_highlighted_text_pop = get_post_meta(get_the_ID(), 'user_story_highlighted_text', true);


            //$custom_field_value = get_post_meta(get_the_ID(), 'user_story_content', true);
            //$video_url = get_post_meta(get_the_ID(), 'user_story_video_url', true);
            

            ?>
            

			<?php 
				if($pop_story_video_url_pop != 'https://www.defindegesecurities.com/'){
			?>
		            <div class="custom-pop">
					    <div class="custom-img-pop">

						    <div id="popup<?php echo $popupnum ?>" class="overlay popPop">
								<div class="popupPop">
									<h2><?php echo $pop_story_name_pop; ?></h2>
									<a class="close" href="#">&times;</a>
									<div class="content">
										<iframe width="560" height="315" src="<?php echo $pop_story_video_url_pop; ?>" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
							</div>

					    </div>
				    </div>
					    
			<?php 
				}else{

				}

			$popupnum++;

        }

        
    }

    wp_reset_postdata();

    return ob_get_clean();
}
add_shortcode('pop_post_loop', 'pop_post_type_loop_shortcode');







