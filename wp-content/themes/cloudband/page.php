<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?php while(have_posts()) : the_post(); ?>   
<section id="pagetitle" class="sub">
    <div class="wrapper ">
    	<div class="row">
      <div class="col-md-6 col-sm-6">
        <h2><?php the_title(); ?></h2>
      </div><!--/col-md-6 -->
		<?php if(function_exists('wordpress_breadcrumbs')) wordpress_breadcrumbs(); ?>
	 <!--/col-md-6 -->
      </div>
    </div><!-- /wrapper -->
  </section>
    
  <section id="main-content">
    <div class="wrapper">
      <div class="inner-banner">
             <?php $img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <?php if($img) { ?>
	          <img src="<?php echo $img; ?>" alt=" ">
            <?php } ?>
     </div>
      <div class="row subpages">
         <div class="col-md-12 common">
	         <div class="row">
             <?php the_content(); ?>
             <?php 
             	if(have_rows("add_links_to_pdf_files")):
             		while(have_rows("add_links_to_pdf_files")):the_row();
             ?>
             			<p>
	             			<a href="#" class="protected" data-url="<?php the_sub_field('pdf_link'); ?>">
	         					<?php the_sub_field('anchor_text'); ?>
	             			</a>
             			</p>
             <?php 
             		endwhile;
         		endif;
         	 ?>
             <?php if( have_rows('social') ): ?>

	

	<?php while( have_rows('social') ): the_row(); 

		// vars
		$image = get_sub_field('image');
		$content = get_sub_field('social_name');
		$link = get_sub_field('social_link');

		?>


			<div class="col-md-4">

			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

			<br />

		    <h3><?php echo $content; ?></h3>
		    <br />
		    <?php echo $link; ?>
		    </div><!--/col-md-4-->
		    


	<?php endwhile; ?>

<?php endif; ?>
			
	         </div><!-- row-->
         </div><!-- /col-md-12 -->
      </div> <!-- /row -->
    </div> <!--/ wrapper -->
  </section>
<?php endwhile; ?>	
<?php
	get_footer();
?>