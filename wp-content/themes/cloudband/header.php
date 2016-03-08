<?php
/*
 * The Header for our theme
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<!-- Bootstrap Core CSS -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.css" rel="stylesheet">
<!-- Custom CSS -->
<?php wp_head(); ?>
<!-- Custom Fonts -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
	jQuery( document ).ready(function() {
		  jQuery(".nav li.dropdown > a").attr("data-toggle", "dropdown");
		  jQuery(".nav li.dropdown > a").attr("role", "button");
		  jQuery(".nav li.dropdown > a").attr("aria-haspopup", "true");
		  jQuery(".nav li.dropdown > a").attr("aria-expanded", "false");
		   jQuery(".nav li.dropdown > a").addClass('dropdown-toggle');

               jQuery('.nav li.dropdown a').click(function() {
			jQuery(this).parent('li').find('ul.sub-menu').slideToggle();
		   });
	});

</script>
<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<script type="text/javascript">
    window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":"http://ecosystem.cloud-band.com/contact","theme":"light-top"};
</script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
<!-- End Cookie Consent plugin -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67164205-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body <?php if(!is_front_page()) {?>class="inner_page"<?php } ?>>
  <header>
   <div class="utilities">
    <div class="wrapper ">
    	<div class="row">
          <div class="col-md-12">
				<?php $constant_text = ot_get_option('header_social_links'); echo $constant_text; ?>
          </div><!--/ col-md-12-->
        </div>
       </div><!--/ wrapper-->
    </div><!--/ utilities -->
      
    <div id="main-header">
      <div class="wrapper ">
          <div class="row">
          <div class="col-md-12">
          <!-- Navigation -->
          <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<?php $logo_image = ot_get_option('web_logo');?>
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo $logo_image;?>" alt="<?php echo bloginfo( 'name' );?>">
				</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   <?php wp_nav_menu(array('sort_column'=>'menu_order','menu'=>'Main Menu','container'=>false,'items_wrap'=>'%3$s')); ?> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
         </nav>
         </div>
         </div>
      </div><!--/ wrapper -->
    </div><!--/ main-header -->
  </header>