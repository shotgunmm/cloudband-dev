<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				endwhile;
				// Previous/next post navigation.
				twentyfourteen_paging_nav();

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();











get_header(); ?>
  <!-- Maincontent -->
    <div class="maincontent"> 
      <!-- Banner -->
      <div id="banner"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blog_banner.jpg" alt="banner" width="1920" height="169">
        <div class="banner_wrapper blog_banner">
          <div class="content">
            <div class="banner_content">
              <h2>Blog</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- Blog -->
      <div id="blog">
       <div class="content">
          <div class="blog_left">
		<?php 
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			query_posts("posts_per_page=3&order=ASC&paged=".$paged);
			if (have_posts()) : while (have_posts()) : the_post(); 
		?>
            <div class="article">
              <h2><?php the_title(); ?></h2>
              <div class="article_info">
                <ul>
                  <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blog_icon1.png" alt=""><?php the_author_posts_link(); ?></li>
                  <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blog_icon2.png" alt=""><?php echo get_the_time('d.m.Y', $single_post->ID); ?></li>
                  <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blog_icon3.png" alt=""><?php echo $post->comment_count; ?><?php echo ($post->comment_count==1?' Comments':' Comments');?></li>
                </ul>
                <div class="clear"></div>
              </div>
              <div class="blog_desc">
                <span>
					<?php $img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					<?php if($img) { ?>
						<img src="<?php echo $img; ?>" alt="">
					<?php } ?>
				</span>
                <div class="blog_details">
                  <p>
						<?php 
							  $content = get_the_content(); 
							  echo substr(strip_tags($content), 0, 220); 
						?>					
				  </p>
                   <div>
                    <ul>
                      <li class="blog_facebook"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>"></a></li>
                      <li class="blog_twitter"><a href="http://twitter.com/home?status=Reading:<?php the_permalink(); ?>"></a></li>
                      <li class="blod_linkedin"><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title=<?php the_title(); ?>&summary=&source=<?php bloginfo('name'); ?>"></a></li>
                    </ul>
                    <a href="<?php the_permalink(); ?>" class="read_more">Read More </a>
                    <div class="clear"></div>
                   </div> 
                </div>
                <div class="clear"></div>
              </div>
            </div>
			<?php 
				endwhile; 
				endif;  
			?>
			<?php 
				if(function_exists('wp_paginate')) 
				{
					wp_paginate();
				}
			?>
          </div>
          <div class="blog_right">
				<?php get_sidebar(); ?>
          </div>
          <div class="clear"></div>
       </div>
       <div id="blog_subscribe">
         <div class="content">
           <h4>Subscribe to our email newsletter to receive our news and updates!</h4>
			<?php eemail_show(); ?>
         </div>
       </div> 
      </div>
      
    </div>
    </div>
    <!-- Footer -->
<?php
	get_footer();
?>
