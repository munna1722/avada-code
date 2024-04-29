<?php
/**
 * Extra files & functions are hooked here.
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Avada
 * @subpackage Core
 * @since 1.0
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

if ( ! defined( 'AVADA_VERSION' ) ) {
	define( 'AVADA_VERSION', '7.4.1' );
}

if ( ! defined( 'AVADA_MIN_PHP_VER_REQUIRED' ) ) {
	define( 'AVADA_MIN_PHP_VER_REQUIRED', '5.6' );
}

if ( ! defined( 'AVADA_MIN_WP_VER_REQUIRED' ) ) {
	define( 'AVADA_MIN_WP_VER_REQUIRED', '4.9' );
}

// Developer mode.
if ( ! defined( 'AVADA_DEV_MODE' ) ) {
	define( 'AVADA_DEV_MODE', false );
}

/**
 * Compatibility check.
 *
 * Check that the site meets the minimum requirements for the theme before proceeding.
 *
 * @since 6.0
 */
if ( version_compare( $GLOBALS['wp_version'], AVADA_MIN_WP_VER_REQUIRED, '<' ) || version_compare( PHP_VERSION, AVADA_MIN_PHP_VER_REQUIRED, '<' ) ) {
	require_once get_template_directory() . '/includes/bootstrap-compat.php';
	return;
}

/**
 * Bootstrap the theme.
 *
 * @since 6.0
 */
require_once get_template_directory() . '/includes/bootstrap.php';

/* Omit closing PHP tag to avoid "Headers already sent" issues. */



/*hoc-gallery*/
/*function image_hover($atts) {
	ob_start();
	$query =new wp_Query( array(
		'post_type'       => 'image',
		'posts_per_page'  => 3,
		'order'           => 'ASC',
		'orderby'         => 'title',
	));
	if($query -> have_posts()) { ?>
	
	  <section id="image_hover">
		<div class="container">
		  <div class="row">
			 <?php while ( $query-> have_posts ()) : $query->the_post(); ?>
              <div class="col-md-4">
                <div class="hover-image-area">
                   <div class="image-area">
					   <img src="http://hallscottages.local/wp-content/uploads/2020/08/Deluxe-and-Bachelor.jpg">
				   </div>
				   <div class="hover-area">
					   <h2>This is  image<h2>
				   </div>
				</div>
			</div>

			<div class="col-md-4">
                <div class="hover-image-area">
                   <div class="image-area">
					   <img src="http://hallscottages.local/wp-content/uploads/2020/09/fish-04-e1712552870397.jpg">
				   </div>
				   <div class="hover-area">
					   <h2>This is  image<h2>
				   </div>
				</div>
			</div>

			<div class="col-md-4">
                <div class="hover-image-area">
                   <div class="image-area">
					   <img src="http://hallscottages.local/wp-content/uploads/2020/11/Georgian-Bay-Getaway.jpg">
				   </div>
				   <div class="hover-area">
					   <h2>This is  image<h2>
				   </div>
				</div>
			</div>

			<?php endwhile; wp_reset_postdata( );
			   ?>
		  </div>
		</div>
	  </section>
	 
	<?php $myvariable = ob_get_clean();
	  return $myvariable;
  }
}

add_shortcode( 'gallery', 'image_hover');
*/


function foobar_func( $atts ){
	ob_start(); ?>

          <style>
            .hoc-gallery-area{
				position:relative;
				margin-top:30px;
				margin-bottom:30px;
				margin-right: 8px;
                margin-left: 8px;
				cursor:pointer;
			}
			.gallery-image img {
				height: 280px;
				width: 100%;
				z-index: -1;
			}
            .hoc-gallery-section .more-info{
				position: absolute;
				width:100%;
				opacity: 0;
			}
			.hoc-gallery-section .more-info h6 {
				margin: 0;
				background: #7DBA25;
				text-align: center;
				padding:6px;
				font-size: 13px;
				font-weight: 600;		
			}
			.hoc-gallery-section .title-area{
				 background:#3E2C0D;
				 text-align:center;
				 color:#ffffff;
				 margin-left:0px !important;
				 padding: 18px 28px 0px 23px;
				 font-size:15px;
				 margin-left:0px !important;
				 position:absolute;
				 z-index: 1;
				 width:100%;
				 margin-top: 32px;
				 opacity: 0;

			}
			.gallery-image h5 {
				text-align: center;
				font-weight: 700;
				color: #3E2C0D;
				font-size: 18px !important;
				margin: 0;
				padding-bottom: 20px;
				font-family: 'Open Sans';
			}
			.hoc-gallery-area:hover .more-info{
                 opacity: 1;
			}
			.hoc-gallery-section .info-open .more-info{
                 opacity: 1; 
			}
			.hoc-gallery-section .info-open .title-area{
                 opacity: 1; 
			}

		</style>
     
	

	 <div class="hoc-gallery-section">
		<div class="row">
			<div class="col-md-4">
				<div class="hoc-gallery-area info-open">
                  <div class="hoc-gallery">
                        
				    <div class="gallery-image">
					    <h5>AMENITIES</h5>
						<img src="http://hallscottages.local/wp-content/uploads/2019/04/image1-1.png">
					</div>

				     <div class="more-info">
						<h6><i class="fa-solid fa-plus"></i> MORE INFO </h6>
					</div>

				 </div>

					<div class="title-area">
					  <p>Georgian Bay is home to fish such as trout, salmon, pike, bass, andmuch more. it's time to cast your line in these diverse fisging waters.</p>
					</div>
		      </div>
		 </div>

			<div class="col-md-4">
				<div class="hoc-gallery-area">
					<div class="hoc-gallery">
					    
						<div class="gallery-image">
						    <h5>FISHING</h5>
							<img src="http://hallscottages.local/wp-content/uploads/2020/09/fish-04-e1712552870397.jpg">
						</div>

						<div class="more-info">
							<h6><i class="fa-solid fa-plus"></i> MORE INFO </h6>
						</div>

					</div>

					<div class="title-area">
						<p>Georgian Bay is home to fish such as trout, salmon, pike, bass, andmuch more. it's time to cast your line in these diverse fisging waters.</p>
					</div>
		      </div>
			</div>

			<div class="col-md-4">
			<div class="hoc-gallery-area">
                  <div class="hoc-gallery">
				  
				    <div class="gallery-image">
					    <h5>PHOTO GALLERY</h5>
						<img src="http://hallscottages.local/wp-content/uploads/2020/11/Georgian-Bay-Getaway.jpg">
					</div>

				     <div class="more-info">
						<h6><i class="fa-solid fa-plus"></i> MORE INFO </h6>
					</div>

				 </div>

					<div class="title-area">
					  <p>Georgian Bay is home to fish such as trout, salmon, pike, bass, andmuch more. it's time to cast your line in these diverse fisging waters.</p>
					</div>
		      </div>
			</div>

			<div class="col-md-4">
			<div class="hoc-gallery-area">
                  <div class="hoc-gallery">

				    <div class="gallery-image">
					     <h5>PAVILLION</h5>
						<img src="http://hallscottages.local/wp-content/uploads/2018/04/Boat-Rentals.jpg">
					</div>

				     <div class="more-info">
						<h6><i class="fa-solid fa-plus"></i> MORE INFO </h6>
					</div>

				 </div>

					<div class="title-area">
					  <p>Georgian Bay is home to fish such as trout, salmon, pike, bass, andmuch more. it's time to cast your line in these diverse fisging waters.</p>
					</div>
		      </div>
			</div>

			<div class="col-md-4">
			<div class="hoc-gallery-area">
                  <div class="hoc-gallery">

				    <div class="gallery-image">
					    <h5>PICKLEBALL COIRT</h5>
						<img src="http://hallscottages.local/wp-content/uploads/2019/04/image1-1.png">
					</div>

				     <div class="more-info">
						<h6><i class="fa-solid fa-plus"></i> MORE INFO </h6>
					</div>

				 </div>

					<div class="title-area">
					  <p>Georgian Bay is home to fish such as trout, salmon, pike, bass, andmuch more. it's time to cast your line in these diverse fisging waters.</p>
					</div>
		      </div>
			</div>

			<div class="col-md-4">
			<div class="hoc-gallery-area">
                  <div class="hoc-gallery">

				    <div class="gallery-image">
					    <h5>PLAYGROUND</h5>
						<img src="http://hallscottages.local/wp-content/uploads/2024/04/image-3.png">
					</div>

				     <div class="more-info">
						<h6><i class="fa-solid fa-plus"></i> MORE INFO </h6>
					</div>

				 </div>

					<div class="title-area">
					  <p>Georgian Bay is home to fish such as trout, salmon, pike, bass, andmuch more. it's time to cast your line in these diverse fisging waters.</p>
					</div>
		      </div>
			</div>

		</div>
	 </div>


  <?php return ob_get_clean();
  return ;
	}
	
add_shortcode( 'foobar', 'foobar_func' );

