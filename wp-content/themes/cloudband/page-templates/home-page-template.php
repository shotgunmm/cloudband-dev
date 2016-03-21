<?php
/**
 * Template Name: Home Page Template
*/

get_header(); ?>
<?php while(have_posts()) : the_post(); ?>   
  <section id="main-content">
    <div class="wrapper">
   <?php if(get_field('banner_section')): while(the_repeater_field('banner_section')): ?>
      <div class="row groupbg">
        <div class="col-md-5 intro">
            <h1><?php the_sub_field('add_banner_heading', $post_id, true); ?><br class="clearfix"></h1>
            <?php the_sub_field('add_banner_description', $post_id, true); ?>
            <a href="<?php the_sub_field('add_learn_more_link', $post_id, true); ?>" class="btn btn-default btn-lg btn-stretch">Learn More</a>
        </div><!-- /col-md-4 -->


     <!--    <div class="col-md-4 col-md-offset-3">
            <ul class="sublinks text-right">
          <?php $posts = get_sub_field('select_banner_right_side_links'); if( $posts ): foreach( $posts as $post): setup_postdata($post); ?>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php endforeach; wp_reset_postdata();  endif; ?>
            </ul>
        </div> -->

         <div class="col-md-4 col-md-offset-3">
            <ul class="sublinks text-right">
              <?php 
                if(get_field('right_side_menu')): while(the_repeater_field('right_side_menu')): ?>
                    <li><a href="<?php the_sub_field('add_menu_link', $post_id, true); ?>"><?php the_sub_field('add_menu_link_text', $post_id, true); ?></a></li>

                <?php endwhile; endif; ?>
            
            </ul>
        </div> 

















        <!-- /col-md-4 -->


















      </div> <!-- /row -->
    <?php endwhile; endif; ?>


        <!--updated section-->
        <!--featured use case section-->
        <div class="row border-top">
        <div class="col-lg-4 text-center">
	        <?php if(get_field('featured_use_case')): while(the_repeater_field('featured_use_case')): ?>
           <h3><span><?php the_sub_field('add_heading', $post_id, true); ?></span></h3>
          <img src="<?php the_sub_field('add_image', $post_id, true); ?>" class="img-responsive img-center" alt="Featured Use Case">
             <br>
           <div class="col-lg-8 col-lg-offset-2 text-center">
              <?php the_sub_field('add_description', $post_id, true); ?>
              <ul class="list-inline blockspace">
                <li><a href="<?php the_sub_field('add_read_more_link', $post_id, true); ?>" class="btn btn-default btn-lg">Read More</a></li>
                <li><a href="<?php the_sub_field('add_view_all_link', $post_id, true); ?>" class="btn btn-default btn-lg">View All</a></li>
              </ul>
             </div>
             <?php endwhile; endif; ?>
        </div><!-- /col-lg-4--><!--/featured use case-->
        <!--featured user-->
        <div class="col-lg-4 text-center">
	        <?php if(get_field('featured_user')): while(the_repeater_field('featured_user')): ?>
           <h3><span><?php the_sub_field('add_heading', $post_id, true); ?></span></h3>
          <img src="<?php the_sub_field('add_image', $post_id, true); ?>" class="img-responsive img-center" alt="Featured User">
             <br>
           <div class="col-lg-8 col-lg-offset-2 text-center">
              <?php the_sub_field('add_description', $post_id, true); ?>
              <ul class="list-inline blockspace">
                <li><a href="#" data-url="<?php the_sub_field('add_read_more_link', $post_id, true); ?>" class="protected btn btn-default btn-lg" target="_blank">Read More</a></li>
                <!--li><a href="<?php the_sub_field('add_view_all_link', $post_id, true); ?>" class="btn btn-default btn-lg">View All</a></li-->
              </ul>
             </div>
             <?php endwhile; endif; ?>
        </div><!-- /col-lg-4--><!--end Featured user-->
        <!--Cloudband mini-series-->
        <div class="col-lg-4 text-center">
	        <?php if(get_field('cloudband_mini_series')): while(the_repeater_field('cloudband_mini_series')): ?>
           <h3><span><?php the_sub_field('add_heading', $post_id, true); ?></span></h3>
          <img src="<?php the_sub_field('add_image', $post_id, true); ?>" class="img-responsive img-center" alt="Featured Use Case">
             <br>
           <div class="col-lg-8 col-lg-offset-2 text-center">
              <?php the_sub_field('add_description', $post_id, true); ?>
              <ul class="list-inline blockspace">
                <li><a href="<?php the_sub_field('add_read_more_link', $post_id, true); ?>" class="btn btn-default btn-lg" target="_blank">Read More</a></li>
                <!--li><a href="<?php the_sub_field('add_view_all_link', $post_id, true); ?>" class="btn btn-default btn-lg">View All</a></li-->
              </ul>
             </div>
             <?php endwhile; endif; ?>
        </div><!-- /col-lg-4--><!--Cloudband mini series-->
      </div><!-- /row -->
    
    </div> <!--/ wrapper -->
  </section>
    
  <section id="sub-content">
     <div class="wrapper">
         <div class="row row-eq-height">
     <?php if(get_field('first_block')): while(the_repeater_field('first_block')): ?>
        <div class="col-md-4">
          <div class="indent">
          <h2><?php the_sub_field('add_heading', $post_id, true); ?></h2>
         <?php the_sub_field('add_video_code', $post_id, true); ?>
          <?php the_sub_field('add_description', $post_id, true); ?>
          <p class="text-center"><a href="<?php the_sub_field('add_link', $post_id, true); ?>" target="_blank" class="btn btn-default btn-lg"><?php the_sub_field('add_link_text', $post_id, true); ?></a></p>
          </div><!--/ indent -->
        </div><!--/ col-md-4 -->
    <?php endwhile; endif; ?>
    <?php if(get_field('second_block')): while(the_repeater_field('second_block')): ?>
        <div class="col-md-4 col-colored">
          <div class="indent">
           <h2><?php the_sub_field('add_heading', $post_id, true); ?></h2>     
           <img src="<?php the_sub_field('add_image', $post_id, true); ?>" alt="Cloudband by Alcatel-Lucent" class="img-responsive"> 
           <?php the_sub_field('add_description', $post_id, true); ?>
             <p class="text-center"><a href="<?php the_sub_field('add_link', $post_id, true); ?>"  target="_blank" class="btn btn-default btn-lg"><?php the_sub_field('add_link_text', $post_id, true); ?></a></p>
             <p class="text-center"><a href="<?php the_sub_field('add_bottom_link', $post_id, true); ?>"><strong><?php the_sub_field('add_bottom_link_text', $post_id, true); ?></strong></a></p>
            </div><!--/ indent -->
        </div><!--/ col-colored -->
    <?php endwhile; endif; ?>
    <?php if(get_field('third_block')): while(the_repeater_field('third_block')): ?>
        <div class="col-md-4">
          <div class="indent">
        <h2><?php the_sub_field('add_heading', $post_id, true); ?></h2>
        <img src="<?php the_sub_field('add_image', $post_id, true); ?>" alt="Cloudband by Alcatel-Lucent" class="img-responsive">
        <?php the_sub_field('add_description', $post_id, true); ?>
             <p class="text-center"><a href="<?php the_sub_field('add_link', $post_id, true); ?>" target="_blank" class="btn btn-default btn-lg"><?php the_sub_field('add_link_text', $post_id, true); ?></a></p>
            </div><!--/indent -->
        </div><!-- /col-md-4 -->
    <?php endwhile; endif; ?>
      </div><!-- /row-eq-height -->
     </div><!-- /wrapper -->
  </section>
  <?php if(get_field('our_member_section')):while(the_repeater_field('our_member_section')): ?>
  <section id="members-content">
      <div class="wrapper">
        <h3><span><?php the_sub_field('add_heading', $post_id, true); ?></span></h3>
        <!-- <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <img src="<?php the_sub_field('members_lists', $post_id, true); ?>" alt="" class="img-responsive">
          </div>
        </div> --><!--/row -->
 
 

      
      
   
      <?php  

      $args_service_provider = array(
      'posts_per_page'   => '40',
      'offset'           => 0,
      'category'         => '22',
      'category_name'    => '',
      'orderby'          => 'date',
      'order'            => 'ASC',
      'include'          => '',
      'exclude'          => '',
      'meta_key'         => '',
      'meta_value'       => '',
      'post_type'        => 'post',
      'post_mime_type'   => '',
      'post_parent'      => '',
      'author'     => '',
      'post_status'      => 'publish',
      'suppress_filters' => true
    );
    $service_provider_logo= get_posts( $args_service_provider );

      $args_virtual_network = array(
      'posts_per_page'   => '40',
      'offset'           => 0,
      'category'         => '23',
      'category_name'    => '',
      'orderby'          => 'date',
      'order'            => 'ASC',
      'include'          => '',
      'exclude'          => '',
      'meta_key'         => '',
      'meta_value'       => '',
      'post_type'        => 'post',
      'post_mime_type'   => '',
      'post_parent'      => '',
      'author'     => '',
      'post_status'      => 'publish',
      'suppress_filters' => true
    );
    $virtual_network = get_posts( $args_virtual_network );
    $args_nfv_members = array(
      'posts_per_page'   => '40',
      'offset'           => 0,
      'category'         => '24',
      'category_name'    => '',
      'orderby'          => 'date',
      'order'            => 'ASC',
      'include'          => '',
      'exclude'          => '',
      'meta_key'         => '',
      'meta_value'       => '',
      'post_type'        => 'post',
      'post_mime_type'   => '',
      'post_parent'      => '',
      'author'     => '',
      'post_status'      => 'publish',
      'suppress_filters' => true
    );
    $nfv_members = get_posts( $args_nfv_members );
    //echo wp_get_attachment_url(get_post_thumbnail_id('552'));
    //echo "<pre>";print_r($posts_array);echo "</pre>"; ?>
  
  <p></p>
<h3 class="member-logo-heading">Service Providers</h3>
  <p></p>
           <div class="wrapper-with-margin"> 
                <div id="owl-demo" class="owl-carousel owl-theme"><?php 
                   foreach ($service_provider_logo as $key => $value) {?>
                    <?php $item = wp_get_attachment_url(get_post_thumbnail_id($value->ID)); ?>
                    
                     <div class="item"><img src="<?php echo $item;?>" alt="Owl Image"></div> 
                    
                   <?php 
                    //wp_get_attachment_url(get_post_thumbnail_id($value->ID));
                   }

                  ?>
                </div>  
          </div>
<p></p>
  <h3 class="member-logo-heading">Virtual Network Function Members</h3>
  <p></p>
            <div class="wrapper-with-margin"> 
                <div id="owl-demo1" class="owl-carousel owl-theme"><?php 
                     foreach ($virtual_network as $key => $value) {?>
                      <?php $item = wp_get_attachment_url(get_post_thumbnail_id($value->ID)); ?>
                      
                       <div class="item vertically-aligned"><img src="<?php echo $item;?>" alt="Owl Image"></div> 
                      
                     <?php 
                      //wp_get_attachment_url(get_post_thumbnail_id($value->ID));
                     }

               ?>
                </div>  
            </div>  
<p></p>
  <h3 class="member-logo-heading">NFV Solution Members</h3>
  <p></p>
          <div class="wrapper-with-margin"> 
                <div id="owl-demo2" class="owl-carousel owl-theme"><?php 
                     foreach ($nfv_members as $key => $value) {?>
                      <?php $item = wp_get_attachment_url(get_post_thumbnail_id($value->ID)); ?>
                      
                       <div class="item"><img src="<?php echo $item;?>" alt="Owl Image"></div> 
                      
                     <?php 
                      //wp_get_attachment_url(get_post_thumbnail_id($value->ID));
                     }

               ?>
                </div>  
          </div> 


</div><!-- / wrapper -->
</section>
  <?php endwhile; endif; ?>
  <footer>
    <!--section class="footer_contact">
      <div class="wrapper">
          <div class="row">
          <div class="col-md-12">
              <?php the_field('contact_section_details', $post_id, true); ?>
        <?php echo do_shortcode('[contact-form-7 id="62" title="Home Contact Form"]'); ?>
            </div>
            </div>
        </div>
    </section-->
<?php endwhile; ?>  
<?php
  get_footer();
?>