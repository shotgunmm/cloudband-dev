<?php
/**
 * Template Name: Use Case Page Template
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
	   <?php if(get_field('first_block_section')):while(the_repeater_field('first_block_section')): ?>
         <div class="col-md-12">
           <h2 class="subtitle"><span><?php the_sub_field('add_heading', $post_id, true); ?></span></h2>
          </div><!-- /col-md-12 -->
         <div class="col-md-3">
            <img src="<?php the_sub_field('add_image', $post_id, true); ?>" alt="" class="img-responsive">
         </div><!-- /col-md-3 -->
         <div class="col-md-9">
          <div class="dlbox">
             <h3>Downloads</h3>
              <p>
				<?php while(the_repeater_field('download_section')): ?>
				<a href="<?php the_sub_field('add_download_file_path', $post_id, true); ?>"><?php the_sub_field('add_title', $post_id, true); ?></a> <br>
				<?php endwhile; ?>
			  </p>
          </div><!-- /dlbox -->
          <?php the_sub_field('add_content', $post_id, true); ?>
         </div><!-- /col-md-9 -->
         <div class="col-md-12">
             <?php the_sub_field('add_bottom_content', $post_id, true); ?>
         </div><!-- /col-md-12 -->
		 <?php endwhile; endif; ?>
		
         <div class="col-md-12">
			 <?php if(get_field('second_block_section')):while(the_repeater_field('second_block_section')): ?>
				<h2 class="subtitle"><span><?php the_sub_field('add_heading', $post_id, true); ?></span></h2> 
				 <ul class="list-check">
					<?php while(the_repeater_field('benefits_lists')): ?>
						<li><?php the_sub_field('add_list', $post_id, true); ?></li>
					 <?php endwhile; ?>
				 </ul>
			<?php endwhile; endif; ?>
           <br><br>
			 <?php if(get_field('third_block_section')):while(the_repeater_field('third_block_section')): ?>
				 <h2 class="subtitle"><span><?php the_sub_field('add_heading', $post_id, true); ?></span></h2>
				 <?php the_sub_field('add_content', $post_id, true); ?>
				 <br><br>
				 <img src="<?php the_sub_field('add_image', $post_id, true); ?>" alt="" class="img-responsive">
			 <?php endwhile; endif; ?>
               <br><br>
			 <?php if(get_field('fourth_block_section')):while(the_repeater_field('fourth_block_section')): ?>
				<h2 class="subtitle"><span><?php the_sub_field('add_heading', $post_id, true); ?></span></h2>
				<?php the_sub_field('add_content', $post_id, true); ?>
			 <?php endwhile; endif; ?>
         </div><!-- /col-md-12 -->        
      </div> <!-- /row -->
    </div> <!--/ wrapper -->
  </section>
<?php endwhile; ?>	
<?php
	get_footer();
?>