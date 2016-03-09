<?php /*Template Name: Newsletter */
get_header(); ?>
<section id="pagetitle" class="sub">
	<div class="wrapper ">
		<div class="row">
			<div class="col-md-6 col-sm-6">
			<h2><? the_title(); ?></h2>
			</div><!--/col-md-6 -->
			<?php if(function_exists('wordpress_breadcrumbs')) wordpress_breadcrumbs(); ?>
			<!--/col-md-6 -->
		</div>
	</div><!-- /wrapper -->
</section>

<section id="main-content">
	<div class="wrapper">
		<?php $arg = array(
			'post_type' => 'post',
			'category_name' => 'newsletters',
			'posts_per_page' => 1
			);
		$newsletters = get_posts($arg);
		foreach($newsletters as $newsletter){ 
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
			?>
			<div class="row">
				<div class="col-md-5">
					<div class="news-left">
						<img src="<?= $image[0]; ?>" alt=""/>
					</div>
				</div>  

				<div class="col-md-7">
					<div class="news-right">
						<h3 class="heading"> <? the_title();?></h3>
						<h2><?= $newsletter->post_title; ?></h2>
						<div class="month-text"><?= get_the_date('F Y',$newsletter->ID) ?></div>
						<p><?= $newsletter->post_content; ?></p>
						<a href="<?= $newsletter->link; ?>" class="read-more">Read More</a>
					</div>
				</div>
			</div>
			<? } ?>
			<!-- <div class="divider"></div> -->
			<hr/ class="divider">

			<div class="row">
				<div class="col-sm-12">
					<h3 class="heading"> Read Previous Newsletters</h3>
				</div>
			</div>

			<div class="row">
				<div class="read-news">  
					<div class="col-md-6 left-data">
						<div class="read-left">
							<ul>
								<?php $arg = array(
									'post_type' => 'post',
									'category_name' => 'newsletters',
									'posts_per_page' => -1
									);
								$newsletters_title = get_posts($arg);
								foreach($newsletters_title as $news_title){     			
									?>
									<li><a href="<?= $news_title->link ?>"><?= $news_title->post_title ?>   <span>Read this news</span></a></li>
									<? } ?>      
								</ul>
							</div> 
						</div>     
					</div>
				</div> 
				<div class="row">
					<div class="col-sm-12">  
						<div class="down-arrow">
							<?php $upload = wp_upload_dir(); ?>
							<a href="#"><img src="<?= $upload['baseurl'] ?>/2016/03/down-arrow.png" alt=""></a>
						</div>
					</div>
				</div>
			</div> <!--/ wrapper -->
		</section>
		<?php
		get_footer();
		?>

		?>