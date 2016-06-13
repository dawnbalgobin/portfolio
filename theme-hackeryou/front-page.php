<?php get_header();  ?>
  <div class='hero'>
     <div class="container">
        <nav>
          <img src="<?php bloginfo('template_url')?>/images/logo.png" alt="logo">
          
          <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'primary'
          )); ?>

          <h1> <?php bloginfo( 'name', 'display' ); ?>  </h1>
          <h2> <?php bloginfo( 'description' ); ?></h2>
        </nav>
     <!--  -->

    </div> <!--/container-->
  </div> <!-- hero -->

  <!-- ABOUT SECTION -->
<div id='sectionone'></div>
  <div class="about">
    <div class='wrapper'>
        <div class='about-title'> 
          <h3>About</h3>
          <h4>Who am I? What do I do?</h4>
          <div class='line'></div>
        </div>
        <section class="left-content">
          <figure class='me'><img src="<?php bloginfo('template_url')?>/images/me.jpg" alt="photo of me"></figure>
        </section>  
        <section class='right-content'>
          <p>Hi! I'm Dawn, front-end web developer based in Toronto and a soon to be graduate of the Immersive Front-End Web Development program at HackerYou. I'm all about creating beautiful and unique web experiences while writing clean code.</p>
          <p>When I'm not coding, I'm probably snapping photos or travelling all over the world, climbing mountains or running.</p>
          <p>Look some more text I haven't written yet!</p>
        </section>      
    </div> <!-- wrapper -->
  </div> <!-- /about -->
 <!-- sectionone -->

  <!-- SKILLS -->
 <div id="sectiontwo"></div> 
  <div class='skills'>
    <div class='wrapper'>
      <section class='skills-left'>
        <div class='skills-title'>
          <h3>Skills</h3>
          <div class='line'></div>
         </div> 
      </section>
      <section class='skills-right clearfix'>
          <div class='circle'><span class="devicons devicons-html5"></span></div>
          <div class='circle'><span class="devicons devicons-css3"></span></div>
          <div class='circle'><span class="devicons devicons-responsive"></span></div>
          <div class='circle'><span class="devicons devicons-sass"></span></div>
          <div class='circle'><span class="devicons devicons-sublime"></span></div>
          <div class='circle'><span class="devicons devicons-javascript"></span></div>
          <div class='circle'><span class="devicons devicons-jquery"></span></div>
          <div class='circle'><span class="devicons devicons-github_alt"></span></div>
          <div class='circle'><span class="devicons devicons-gulp"></span></div>
          <div class='circle'><span class="devicons devicons-wordpress"></span></div>
      </section></div>
    </div> <!-- wrapper -->
  </div> <!-- skills -->

<!-- PORTFOLIO -->
<div class='port-desktop'>
 <div id="sectionthree"></div> 
 <div class="portfolio clearfix">
    <div class='wrapper'>
        <div class='port-title'> 
          <h3>Portfolio</h3>
          <h4>Wanna see some stuff I created?</h4>
          <div class='line'></div>
        </div>
    </div> <!-- wrapper -->

        <div class='port-first'>
          <section class="left-port">
            <div class='port-text'>
              <h1> 1. </h1>
              <h2> PSD to Responsive HTML </h2>
              <p>HTML5 / CSS3 / Sass / Responsive Design</p>
              <button class='viewit'><a href="#" target='_blank'>View</a></button>
            </div>  
          </section>  
          <section class='right-port'>
            <figure><img src="<?php bloginfo('template_url')?>/images/brush.png" alt="brush website image"></figure>
          </section>   
         </div> 

        <div class='port-second'> 
          <section class="left-port">
            <figure><img src="<?php bloginfo('template_url')?>/images/whiskey.png" alt="monserrat website image"></figure>
          </section>  
          <section class='right-port'>
             <div class='port-text'>
               <h1> 2. </h1>
               <h2> API WEB APPLICATION </h2>
               <p>Javascript / jQuery / API </p>
               <button class='viewit'><a href="#" target='_blank'>View</a></button>
             </div>
          </section>   
        </div>   

         <div class='port-third'> 
          <section class="left-port">
             <div class='port-text'>
              <h1> 3. </h1>
              <h2> Client API Project </h2>
              <p>HTML5 / CSS3 / JavaScript / jQuery / API / Git</p>
              <button class='viewit'><a href="#" target='_blank'>View</a></button>
             </div>
          </section>  
          <section class='right-port'>
             <figure><img src="<?php bloginfo('template_url')?>/images/beaus.png" alt="beaus beer website image"></figure>
          </section>   
        </div> 

        <div class='port-fourth'> 
          <section class="left-port">
            <figure><img src="<?php bloginfo('template_url')?>/images/shia.png" alt="lcbo api website image"></figure>
          </section>  
          <section class='right-port'>
             <div class='port-text'>
               <h1> 4. </h1>
               <h2> API JQUERY WEB APP </h2>
               <p>AJAX / JavaScript / jQuery / Sass / Pair Programming</p>
               <button class='viewit'><a href="http://www.shialabeoufquiz.com/" target='_blank'>View</a></button>
               </div>
          </section>   
        </div> 
    </div>    
  </div> <!-- /portfolio -->

  <!-- port-mobile -->
  <div class='port-mobile'>
  <div id="sectionthree"></div> 
  <div class="portfolio clearfix">
     <div class='wrapper'>
         <div class='port-title'> 
           <h3>Portfolio</h3>
           <h4>Wanna see some stuff I created?</h4>
           <div class='line'></div>
         </div>
     </div> <!-- wrapper -->

         <div class='port-first'>
           <section class="left-port">
             <div class='port-text'>
               <h1> 1. </h1>
               <h2> PSD to Responsive HTML </h2>
               <p>HTML5 / CSS3 / Sass / Responsive Design</p>
               <button class='viewit'><a href="#" target='_blank'>View</a></button>
             </div>  
           </section>  
           <section class='right-port'>
             <figure><img src="<?php bloginfo('template_url')?>/images/brush.png" alt="brush website image"></figure>
           </section>   
          </div> 

         <div class='port-second'> 
           <section class="left-port">
           <section class='right-port'>
              <div class='port-text'>
                <h1> 2. </h1>
                <h2> API WEB APPLICATION </h2>
                <p>Javascript / jQuery / API </p>
                <button class='viewit'><a href="#" target='_blank'>View</a></button>
              </div>
           </section>   
             <figure><img src="<?php bloginfo('template_url')?>/images/whiskey.png" alt="monserrat website image"></figure>
           </section>  
         </div>   

          <div class='port-third'> 
           <section class="left-port">
              <div class='port-text'>
               <h1> 3. </h1>
               <h2> Client API Project </h2>
               <p>HTML5 / CSS3 / JavaScript / jQuery / API / Git</p>
               <button class='viewit'><a href="#" target='_blank'>View</a></button>
              </div>
           </section>  
           <section class='right-port'>
              <figure><img src="<?php bloginfo('template_url')?>/images/beaus.png" alt="beaus beer website image"></figure>
           </section>   
         </div> 

         <div class='port-fourth'> 
           <section class='right-port'>
              <div class='port-text'>
                <h1> 4. </h1>
                <h2> API JQUERY WEB APP </h2>
                <p>AJAX / JavaScript / jQuery / Sass / Pair Programming</p>
                <button class='viewit'><a href="http://www.shialabeoufquiz.com/" target='_blank'>View</a></button>
                </div>
           </section>   
           <section class="left-port">
             <figure><img src="<?php bloginfo('template_url')?>/images/shia.png" alt="lcbo api website image"></figure>
           </section>  
         </div> 
   </div>
</div>

  <!--  CONTACT -->
  <div id="sectionfour"></div> 
  <div class='contact'>
      <!-- <div class='blue-overlay'></div> -->
        <div class='contact-title'> 
          <h3>Contact</h3>
          <h4>Want to say hi? I would love to hear from you, even if you just want to tell me somewhere really great to travel or where I can find the best tacos! <br>
          You can email me at <a href="mailto:dawnbalgobin@gmail.com" target="_top" class='emailyellow'>dawnbalgobin@gmail.com </a>or simply fill out the form!</h4>
          <div class='line'></div>
        </div>
        <form>
          <?php the_field('contact') ?>
        </form>
   </div>     
      
       
<!--   </div> -->

<?php get_footer(); ?>












