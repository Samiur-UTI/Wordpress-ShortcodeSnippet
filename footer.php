<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<?php if ( !function_exists('dynamic_sidebar')      || !dynamic_sidebar(1) ) : ?>     <?php endif; ?>

<div class="types-cards-TextR">
<table style="width:100%">
  <tr>
    <td style="width:60%; padding:35px; font-family:arial; vertical-align:middle;">
	<h3 style="margin-top:0px">Introducing the Thinkflash App for Android!</h3>
	<p>Now your access to information is quicker than ever with the new <b>Thinkflash App</b>. Containing all the short case cards found in the <b>Thinkflash Card</b> pack this <b>App</b> also allows you to search by keyword.</p>
	<p>If a picture is worth a thousand words, what is a video worth? - Links to video material and teaching websites provide an immersive learning experience like no other!</p>
	</td>
    
    <td style="width:40%"><img src="https://thinkflash.com.au/mobile-app/image.png" style="display:block; margin:20px auto; vertical-align:middle;">
	</td>

  </tr>
</table>
</div>

<div style="margin-top:50px; margin-bottom:50px">

<embed style="display: block; margin: auto;" src="https://www.youtube.com/embed/C12ktrXFPsY" width="680" height="390" allowfullscreen="false" title="Adobe Flash Player">

</div>


<div style="height: auto; padding: 60px 0; background-color: #8ABA56; margin-top:130px; margin-bottom:50px">
      <div class="container">
        <div class="row">
          <div class="wow slideInLeft col-md-12 col-sm-12">
		<h2 style="text-align: center;"><a style="color: #FFFF00; font-weight: 700;" href="/thinkflash.com.au/the-thinkflash-short-case-storehouse/" target="_blank">The Short Case Storehouse (New!)</a></h2>
          </div>
        </div>
      </div>
</div>
      

<div class="BlogDiv2">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <div class="wow slideInLeft BoxContant">
              <h2>Updates</h2>
              <div class="blog-img"><a href="<?php echo get_permalink( 284 ); ?>"><?php echo get_the_post_thumbnail(196, 'full'); ?></a></div>
		<ul class="updatelist">
		    <?php query_posts( 'cat=27' ); 
			while ( have_posts() ) : the_post();
			?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile;
			wp_reset_query();
		    ?>
		</ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="wow fadeInDown BoxContant Order-mid">
		  <?php $product = get_post(56); ?>
              <h2>Thinkflash Palm Cards</h2>
              <div class="blog-img"><a href="http://thinkflash.com.au/shop/"><?php echo get_the_post_thumbnail(56, 'full'); ?></a></div>
              <div class="OrdernowBtn"> <a href="http://thinkflash.com.au/shop/">Order now!</a> </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="wow slideInRight BoxContant NeedHelp">
              <h2>Need Help?</h2>
<ul id="menu-main-menu-1" class="menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-188"><a href="http://thinkflash.com.au/contact-us/">Contact Us</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-189"><a href="http://thinkflash.com.au/cards/">List of Cards</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-190"><a href="http://thinkflash.com.au/acronyms/">List of acronyms</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-191"><a href="http://thinkflash.com.au/disclaimer-copyright/">Disclaimer &#038; Copyright</a></li>
</ul>
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Footer Section -->
  
  <footer class="footer clearfix">
    <div class="wow fadeInDown container">
      <div class="row">
        <div class="footer-icon">
          <ul>
<li style="position: relative; top: 15px;">

<img src="http://thinkflash.com.au/wp-content/uploads/2017/07/worldvision1.png" >

</li>

	     <?php  $facebook = get_post_custom_values( 'facebook', 10 ); ?>
	     <?php  $googleplus = get_post_custom_values( 'googleplus', 10 ); ?>
	     <?php  $twitter = get_post_custom_values( 'twitter', 10 ); ?>
	     <?php  $linkdin = get_post_custom_values( 'linkdin', 10 ); ?>
            <li class="footer-fb-icon"><a href="<?php echo $facebook[0]; ?>"><i class="fa fa-facebook"></i></a> </li>
            <!--li><a href="<?php echo $googleplus[0]; ?>"><i class="fa fa-google-plus"></i></a> </li-->
            <li class="footer-tw-icon"><a href="<?php echo $twitter[0]; ?>"><i class="fa fa-twitter"></i></a> </li>
            <!--li class="footer-in-icon"><a href="<?php echo $linkdin[0]; ?>"><i class="fa fa-linkedin"></i></a> </li-->
          </ul>
        </div>
	 <?php  $copyright = get_post_custom_values( 'copyright', 10 ); ?>
        <div class="Copyrights">© <?php echo $copyright[0]; ?></div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>

<!-- jQuery -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.0.min.js"></script>
<!-- select JavaScript -->

<!-- End select JavaScript -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<!-- Scrolling Nav JavaScript -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scrolling-nav.js"></script>

<!-- wow JavaScript -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<script type="text/javascript">
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();


  </script>
<!-- End WOW JavaScript -->

<!--slide toggle-->
<script type="text/javascript"> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow"); 
	
  });
});
</script>
<!-- testimonial feed --->
<script type="text/javascript"> 
      $(document).ready(function showElement(){
          $('#test').html('Here is the testimonial!')
      })
  
</script>

<!--bxslider-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
<script type="text/javascript"> 

 $('.bxslider').bxSlider({
    auto: true,
    mode: 'fade'
  });
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68220790-1', 'auto');
  ga('send', 'pageview');

</script>

</html>