<?php
/**
 * The Template for displaying all single posts
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
      <div class="row subpages">
         <div class="col-md-12 common">
             <?php the_content(); ?>
         </div><!-- /col-md-12 -->
      </div> <!-- /row -->
    </div> <!--/ wrapper -->
  </section>
<?php endwhile; ?>	
<?php
	get_footer();
?>