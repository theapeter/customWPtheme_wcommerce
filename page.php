<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AlPacas
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- carousel -->
	<section class="container pb-5 pt-4">
	<div id="carouselExampleIndicators" class="carousel slide overflow-hidden  rounded" data-bs-ride="carousel">
		
			  <div class="carousel-indicators" id="indicators">

					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			
				</div>

				<div class="carousel-inner">

					<div class="carousel-item active"> 
						<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/slider/slide-1.jpg" class="d-block w-100" alt="..." loading="lazy"></a> 
					</div>

					<div class="carousel-item">
						<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/slider/slide-2.jpg" class="d-block w-100" alt="..." loading="lazy"></a>
					</div>

				</div>

				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
  </div>
  </section>




	<section class="container">
			<h1 class="text-center pt-5">Popular Products</h1>
			<p class="text-center">We have 80 alpacas and one llama on our farm! Come say hi.</p>

			<div class="pt-5 pb-5">
				<?php echo do_shortcode( '[products columns=4 limit=4]' ); ?>
			</div>
	</section>

<!-- have bg color -->
<section class="categories pt-5 pb-5">
	<div class="container">
		<h1 class="text-center pt-5">Catgories</h1>
		<p class="text-center">We offer alpacas! </p>
	

		<div class="row pt-5">

			<div class="categories__col col-md-4 col-sm-12 mb-3">
					<a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/toys.jpg" alt="..." loading="lazy">
						<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Toys</h2>
					</a>
				</div>

			<div class="categories__col col-md-4 col-sm-12 mb-3">
					<a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/toys.jpg" alt="..." loading="lazy">
						<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Toys</h2>
					</a>
				</div>

		</div>

	</div>

</section>



	<section class="container pt-4" style>
		
	</section>


</main>




<?php
// get_sidebar();
// get_footer();






//Gutenburg
//<php
		// while ( have_posts() ) :
		// 	the_post();

		// 	get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
// 			if ( comments_open() || get_comments_number() ) :
// 				comments_template();
// 			endif;

// 		endwhile; 
// 
//>
