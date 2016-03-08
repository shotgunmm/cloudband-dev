<?php
/**
 * Template Name: Board Members Directory Page Template
*/

get_header(); ?>
<?php while(have_posts()) : the_post(); ?>   
    
  <section id="pagetitle" class="member">
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
      <div class="row">
         <div class="col-md-12 tabs-content">
           <!-- Nav tabs -->
              <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active"><a href="#service" aria-controls="service" role="tab" data-toggle="tab"><?php $term = get_term(6, add_type); echo $term->name; ?></a></li>
                <li role="presentation"><a href="#vendors" aria-controls="vendors" role="tab" data-toggle="tab"><?php $term = get_term(7, add_type); echo $term->name; ?></a></li>
                <li role="presentation"><a href="#members" aria-controls="members" role="tab" data-toggle="tab"><?php $term = get_term(8, add_type); echo $term->name; ?></a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="service">
					<?php 
						query_posts(array('post_type'=>'board_members','add_type'=>'service-providers','posts_per_page'=>'-1','order'=>'ASC'));
						while(have_posts()) : the_post();
					?>
                   <div class="row">
                     <div class="col-xs-3">
					<?php $img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					<?php if($img) { ?>
						<a href="<?php the_permalink(); ?>"><img src="<?php echo $img; ?>" class="img-responsive" ></a>
					<?php } ?>
                     </div><!--/col-xs-3 -->
                     <div class="col-xs-9">
                         <h2 class="subtitle"><span><?php the_title(); ?></span></h2>
                         <p>
							<?php 
								  $content = get_the_content(); 
								  echo substr(strip_tags($content), 0, 480); 
							?>
						 </p>
                         <a href="http://<?php the_field('add_web_url', $post_id, true); ?>" target="_blank" class="sharelink"><i class="fa fa-share-square-o circle-icon"></i><?php the_field('add_web_url', $post_id, true); ?></a>
                     </div><!--/col-xs-9 -->
                   </div><!-- /row -->
                  <hr class="divider">
                   <?php 
						endwhile;
						wp_reset_query();
				   ?>
                </div><!-- /service tab -->
                <div role="tabpanel" class="tab-pane" id="vendors">
                  <?php 
						query_posts(array('post_type'=>'board_members','add_type'=>'virtual-network-function-vendors','posts_per_page'=>'-1','order'=>'ASC'));
						while(have_posts()) : the_post();
					?>
                   <div class="row">
                     <div class="col-xs-3">
					<?php $img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					<?php if($img) { ?>
						<a href="<?php the_permalink(); ?>"><img src="<?php echo $img; ?>" class="img-responsive" ></a>
					<?php } ?>
                     </div><!--/col-xs-3 -->
                     <div class="col-xs-9">
                         <h2 class="subtitle"><span><?php the_title(); ?></span></h2>
                         <p>
							<?php 
								  $content = get_the_content(); 
								  echo substr(strip_tags($content), 0, 480); 
							?>
						 </p>
                         <a href="http://<?php the_field('add_web_url', $post_id, true); ?>" target="_blank" class="sharelink"><i class="fa fa-share-square-o circle-icon"></i><?php the_field('add_web_url', $post_id, true); ?></a>
                     </div><!--/col-xs-9 -->
                   </div><!-- /row -->
                  <hr class="divider">
                   <?php 
						endwhile;
						wp_reset_query();
				   ?>
                </div><!-- /vendors tab -->
                <div role="tabpanel" class="tab-pane" id="members">
					<?php 
						query_posts(array('post_type'=>'board_members','add_type'=>'nfv-solution-members','posts_per_page'=>'-1','order'=>'ASC'));
						while(have_posts()) : the_post();
					?>
                   <div class="row">
                     <div class="col-xs-3">
					<?php $img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					<?php if($img) { ?>
						<a href="<?php the_permalink(); ?>"><img src="<?php echo $img; ?>" class="img-responsive" ></a>
					<?php } ?>
                     </div><!--/col-xs-3 -->
                     <div class="col-xs-9">
                         <h2 class="subtitle"><span><?php the_title(); ?></span></h2>
                         <p>
							<?php 
								  $content = get_the_content(); 
								  echo substr(strip_tags($content), 0, 480); 
							?>
						 </p>
                         <a href="http://<?php the_field('add_web_url', $post_id, true); ?>" target="_blank" class="sharelink"><i class="fa fa-share-square-o circle-icon"></i><?php the_field('add_web_url', $post_id, true); ?></a>
                     </div><!--/col-xs-9 -->
                   </div><!-- /row -->
                  <hr class="divider">
                   <?php 
						endwhile;
						wp_reset_query();
				   ?>
                </div><!-- /members tab -->
              </div>
         </div>      
      </div> <!-- /row -->
    </div> <!--/ wrapper -->
  </section>
<?php endwhile; ?>	
<?php
	get_footer();
?>