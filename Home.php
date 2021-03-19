<?php
/*
Template Name: Home page
*/
get_header();
?>
  <!-- Intro Section -->
  <section id="intro" class="home_parallax intro-section">
    <div id="logo-t-m" class="wow fadeInDown"><a href="javascript:void(0);"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/logo.png"> </a></div>
    <header id="header">
			
<!--	Home page slider images and contents	-->
			
      <ul class="bxslider">
			<?php query_posts( 'cat=16' ); 
			while ( have_posts() ) : the_post();
			?>
			<li><?php the_post_thumbnail('full'); ?></li>
			<?php endwhile;
			wp_reset_query();
			?>
      </ul>
      <div class="slider-contant">
        <div class="container">
          <div class="row">
            <div class="col-lg-12"> 
              <?php $slider_contents = get_post(118); echo $slider_contents->post_content; ?> 
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="page-scroll-main"> <a class="btn btn-default page-scroll" href="#about"><i class="fa fa-chevron-down"></i></a> </div>
  </section>
  
  <!-- About Section -->
  <section id="about" class="about-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="title wow fadeInDown" data-wow-delay="0.5s">
            <h2>Accelerate your Learning </h2>
            <div class="head-line"></div>
          </div>
          <div class="new-way-img">
		  	<div class="kdsx">
			<!--h3>Testimonials</h3-->
	        <div class="col-md-4 gdf"><?php echo do_shortcode('[show_testimonials]'); ?></div>
	        </div>
          	<div class="card-main">
			<ul class="bxslider">
			<?php query_posts( 'cat=17' ); 
			while ( have_posts() ) : the_post();
			?>
			<li><?php the_post_thumbnail('full'); ?></li>
			<?php endwhile;
			wp_reset_query();
			?>
			</ul>
      		</div>
            <div class="clear"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="halfway">
            <?php $learning_contents = get_post(124); echo $learning_contents->post_content; ?> 
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Services Section -->
  <div id="services" class="services-section">
    <div class="Cards-below Cards_below_parallax">
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-sm-3">
            <div class="wow slideInLeft CardsbelowL">
		<a class="page-scroll" href="#Cardsbelow"> <?php  $Beat_colour = get_post_custom_values( 'Beat_colour', 10 ); echo $Beat_colour[0]; ?> </a>
	     </div>
          </div>
          <div class="col-md-8 col-sm-6">
            <div class="wow fadeInDown card-mid"><?php echo get_the_post_thumbnail( 142, 'full' ); ?></div>
          </div>
          <div class="col-md-2 col-sm-3">
            <div class="NextPage wow slideInRight">
		<a class="page-scroll" href="#contact"><?php  $unique = get_post_custom_values( 'unique', 10 ); echo $unique[0]; ?></a>
	     </div>
          </div>
          <div class="clear"></div>
          <div id="Cardsbelow" class="BoxMain">
            <ul>
			
			<?php query_posts( 'cat=18&posts_per_page=7' );
			$i=1;
			while ( have_posts() ) : the_post();
			switch ($i) {
			case 1:
			$liclass = "wow slideInLeft";
			$divclass = "BoxDiv";
			break;
			case 2:
			$liclass = "";
			$divclass = "BoxDiv bg2";
			break;
			case 3:
			$liclass = "wow slideInRight";
			$divclass = "BoxDiv bg3";
			break;
			case 4:
			$liclass = "";
			$divclass = "BoxDiv bg4";
			break;
			case 5:
			$liclass = "wow slideInLeft";
			$divclass = "BoxDiv bg5";
			break;
			case 6:
			$liclass = "";
			$divclass = "BoxDiv bg6";
			break;
			case 7:
			$liclass = "wow fadeInDown";
			$divclass = "BoxDiv bg7";
			break;
			} 
			?>	
		<li class="<?php echo $liclass; ?>">
                <div class="<?php echo $divclass; ?>"> <a href="javascript:void(0)"><?php the_post_thumbnail('full'); ?></a> </div>
              </li>	
			<?php $i++; endwhile;
			wp_reset_query();
			?>	
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Contact Section -->
  <section id="contact" class="Types-of-Cards contact-section">
    <div class="container">
      <div class="row">
        <div class="title wow fadeInDown" data-wow-delay="0.5s">
          <h2>Types of Cards</h2>
          <div class="head-line"></div>
        </div>
        <div class="TypesCardsText">
		
			<?php query_posts( 'cat=19' ); 
			while ( have_posts() ) : the_post();
			?>	
			<div class="TypesCardsTextRow clearfix">
			  <div class="wow slideInLeft col-md-6 col-sm-6">
			    <div class="types-cards-img"><?php the_post_thumbnail('full'); ?></div>
			  </div>
			  <div class="wow slideInRight col-md-6 col-sm-6">
			    <div class="types-cards-TextR">
			      <h3><?php the_title(); ?></h3>
			      <p><?php the_content(); ?></p>
			    </div>
			  </div>
			</div>
			<?php endwhile;
			wp_reset_query();
			?>
	   
        </div>
      </div>
    </div>
    <div class="Communication Communication_parallax">
      <div class="container">
        <div class="row">
          <div class="wow slideInLeft col-md-6 col-sm-6">
			 <?php  $book_link = get_post_custom_values( 'book_link', 10 ); ?>
            <div class="Communication-img"><a href="<?php echo $book_link[0]; ?>" target="new"><?php echo get_the_post_thumbnail( 185, 'full' ); ?></a></div>
          </div>
          <div class="wow slideInRight col-md-6 col-sm-6">
            <div class="CommunicationR">
              <h3><?php $title = get_post(185); echo $title->post_title; ?> </h3>
             <p> <?php echo $title->post_content; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>

  
    <!---div class="Subscrib Subscribe_parallax">
      <div class="container">
        <div class="row">
			<!--?php dynamic_sidebar( 'Widget Area' ); ?> 
        </div>
      </div>
    </div--->
	
	<div class="opash">
	<div class="container">
        <div class="row">
	<h4></h4>

	<!--form>
    <input class="oli" type="text" name="email" placeholder="Enter your Email">
    <input class="ouyr" type="submit">
    </form--->
	</div>
	</div>
	</div>
	
    
   <div class="GetTouch">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="panel">
              <div class="title">
                <h2>Get in Touch</h2>
                <div class="head-line"></div>
              </div>
              <p class="col-md-6 col-md-offset-3">Have feedback, suggestion, or any thought about our app? Feel free to contact us anytime, we will get back to you in 24 hours. </p>
              <div class="contact-bubble-bg col-md-6 col-md-offset-3">
                <div class="contact-text">
                  <div class="form-group">
                    <input class="form-control" type="text" value="Your Name" name="Email" id="Em3ail"
 onblur="if (this.value == '') {this.value = 'Your Name';}"
 onfocus="if (this.value == 'Your Name') {this.value = '';}" />
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" value="Your Email Address" name="Email" id="Em2ail"
 onblur="if (this.value == '') {this.value = 'Your Email Address';}"
 onfocus="if (this.value == 'Your Email Address') {this.value = '';}" />
                  </div>
                  <div class="Comments form-group">
                    <textarea class="form-control" name="inputname" onfocus="if(this.value == 'Subject') { this.value = ''; }" onblur="if (this.value == '') { this.value='Subject'; }">Subject</textarea>
                  </div>
                  <div class="SubmitBtn form-group">
                    <button class="form-control btn-primary">Send Messag</button>
                  </div>
                </div>
              </div>
            </div>
            <!--<div id="flip" class="GetTouchBg"> <a href="javascript:void(0)"><i class="fa fa-envelope-o"></i></a> </div>-->
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>