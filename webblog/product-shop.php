<?php
// Template Name: Product Shop 

get_header();

$arg  	 = array(
			'post_type' => 'product',
			);

$wpquery = new WP_Query( $arg );

// Debugging
// echo "<pre>";
// print_r($wpquery)
?>


<div class="container ">
	<div class="row">
		<?php 
			if ($wpquery -> have_posts()){
			while ($wpquery -> have_posts()): $wpquery -> the_post(); 
				$default_img = '<img src="' . site_url() . '/wp-content/uploads/2021/05/no-image.png' . '"/>';
				// $default_img = '<img src="' . bloginfo('template_url') . '/image/no-image.png' . '"/>';

				// bloginfo('template_url');
				$img = ( get_the_post_thumbnail() ) ? get_the_post_thumbnail() : $default_img;
		?>
		<div class="col-md-4 ">
			<div ><a href="<?php the_permalink(); ?>"><?php echo $img; ?></a></div>
			<div class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
		</div>
		<?php
		endwhile;
		}
		?>
	</div>
</div>


<?php 
get_footer();
?>