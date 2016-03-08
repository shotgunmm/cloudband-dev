<?php
/*
 * The template for displaying the footer
*/
?>
<footer>
<section id="sub-footer">
	<div class="wrapper">
		<div class="row">
			<div class="col-md-12">
				<ul class="list-inline">
					<?php wp_nav_menu(array('sort_column'=>'menu_order','menu'=>'Footer Menu','container'=>false,'items_wrap'=>'%3$s')); ?> 
				</ul>
			</div>
		</div>
	</div><!--/ wrapper -->
 </section>
     <section id="copyright">
        <div class="wrapper ">
        	<div class="row">
          <div class="col-md-7">
             <?php $constant_text = ot_get_option('copyright_text'); echo $constant_text; ?>
          </div><!--/ col-md-6 -->
          <div class="col-md-3 col-md-offset-2">
            <ul class="list-inline social">
              <?php $constant_text = ot_get_option('footer_social_links'); echo $constant_text; ?>
            </ul>
          </div><!--/ col-md-3 -->
          </div>
        </div><!-- /wrapper -->
     </section>
  </footer>
 <!-- jQuery --> 
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {  

    $(".post-content.white-papers a").on('click',function(){
     // alert($(this).attr('href'));
     //$(this).addClass("nowd");
      var link = $(this).attr('data-url');
      localStorage.setItem('dnlink',link);
      window.location = "http://ecosystem.cloud-band.com/download-white-paper/";
      return false;

    }); 
    $(".protected").on('click',function(){
     // alert($(this).attr('href'));
     //$(this).addClass("nowd");
      var link = $(this).attr('data-url');
      localStorage.setItem('dnlink',link);
      window.location = "http://ecosystem.cloud-band.com/please-fill-this-form-to-download-your-use-case-paper/";
      return false;

    });  
    $("#pdf-id").val(localStorage.getItem('dnlink'));
     // console.log('1111');
     // $("#owl-demo").owlCarousel();    
      var carousel = $("#owl-demo");
    carousel.owlCarousel({
      autoPlay:2000,
    pagination:false,
    items:5
  });
     var carousel1 = $("#owl-demo1");
    carousel1.owlCarousel({
      autoPlay:2000,
    pagination:false,
    items:5
  });
    var carousel2 = $("#owl-demo2");
    carousel2.owlCarousel({
      autoPlay:2000,
    pagination:false,
    items:5
  });
 
  });
    
</script>
<style>

  .owl-theme .owl-controls{
  margin-top: 10px;
  text-align: center;
}

/* Styling Next and Prev buttons */

.owl-theme .owl-controls .owl-buttons div{
  color: #FFF;
  display: inline-block;
  zoom: 1;
  *display: inline;/*IE7 life-saver */
  margin: 5px;
  padding: 3px 10px;
  font-size: 12px;
  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  border-radius: 30px;
  background: #869791;
  filter: Alpha(Opacity=50);/*IE7 fix*/
  opacity: 0.5;
}
/* Clickable class fix problem with hover on touch devices */
/* Use it for non-touch hover action */
.owl-theme .owl-controls.clickable .owl-buttons div:hover{
  filter: Alpha(Opacity=100);/*IE7 fix*/
  opacity: 1;
  text-decoration: none;
}

/* Styling Pagination*/

.owl-theme .owl-controls .owl-page{
  display: inline-block;
  zoom: 1;
  *display: inline;/*IE7 life-saver */
}
.owl-theme .owl-controls .owl-page span{
  display: block;
  width: 12px;
  height: 12px;
  margin: 5px 7px;
  filter: Alpha(Opacity=50);/*IE7 fix*/
  opacity: 0.5;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
  background: #869791;
}

.owl-theme .owl-controls .owl-page.active span,
.owl-theme .owl-controls.clickable .owl-page:hover span{
  filter: Alpha(Opacity=100);/*IE7 fix*/
  opacity: 1;
}

/* If PaginationNumbers is true */

.owl-theme .owl-controls .owl-page span.owl-numbers{
  height: auto;
  width: auto;
  color: #FFF;
  padding: 2px 10px;
  font-size: 12px;
  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  border-radius: 30px;
}

/* preloading images */
.owl-item.loading{
  min-height: 150px;
  background: url(AjaxLoader.gif) no-repeat center center
}

#owl-demo .owl-item > div img {
    display: block;
    width: 100%;
    height: auto;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    margin-bottom:4px;
}
#owl-demo1 .owl-item > div img {
    display: block;
    width: 100%;
    height: auto;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    margin-bottom:4px;
}
#owl-demo2 .owl-item > div img {
    display: block;
    width: 100%;
    height: auto;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    margin-bottom:4px;
}


#owl-demo .owl-item > div{
/*  background : #42bdc2;*/
  text-align: center;
  /*padding:50px 0px;*/
  margin:10px;
  color: white;
  /*font-size:32px;*/
  border:1px white;
}
#owl-demo1 .owl-item > div{
/*  background : #42bdc2;*/
  text-align: center;
  /*padding:50px 0px;*/
  margin:10px;
  color: white;
  /*font-size:32px;*/
  border:1px white;
}
#owl-demo2 .owl-item > div{
/*  background : #42bdc2;*/
  text-align: center;
  /*padding:50px 0px;*/
  margin:10px;
  color: white;
  /*font-size:32px;*/
  border:1px white;
}

.wrapper-with-margin{
  margin:0px 50px;
}

 
.owl-theme .owl-controls .owl-buttons div {
  position: absolute;
}
 
.owl-theme .owl-controls .owl-buttons .owl-prev{
  left: -45px;
  top: 175px; 
}
.owl-prev, .owl-next{
  border-radius: 50% !important;
  padding: 6px 12px !important;
  }

 
.owl-theme .owl-controls .owl-buttons .owl-next{
  right: -45px;
  top: 175px;
}

</style>
<?php wp_footer(); ?>
</body>
</html>

