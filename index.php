<?php 
	/*
	*	author: Elumalai Danotharan
	*	Date: 20/05/2018
	*/
	
?>



<?php
	require_once('header.php');
		
	/* urlRewrite(); */
?>


<div class="banner" id="home">

    <div class="container">
           <div class="banner-info">
                     <div class="col-md-6 banner-slider">
                       <div  id="top" class="callbacks_container">
                        <ul class="rslides" id="slider4">
                        <li>
                          <div class="banner-info two">
                             <h3>30+ points full service</h3>
                             <h4>@ just Rs.499/- ...!</h4>
                          </div>
                        </li>
                          <div class="banner-info two">
                           <h3>No spare replacement</h3> 
                           <h4>And labour charges ...!</h4>      
                         </div>
                        <li>
                          <div class="banner-info two">
                             <h3>Inspection & Adjustment</h3>
                             <h4>Repair or Replacement ...!</h4>
                          </div>
                        </li>
                    </ul>
                 </div>
               </div>
              <div class="col-md-6 banner-pic">
               <img class="img-responsive " src="img/bmw-brand.png" alt="" />  
             </div>
			<div class="clearfix"></div>
            </div>
            <!--banner-slide-->
            <script src="js/responsiveslides.min.js"></script>
           <script>
            // You can also use "$(window).load(function() {"
            $(function () {
              // Slideshow 4
              $("#slider4").responsiveSlides({
                destination: true,
                pager: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                  $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                  $('.events').append("<li>after event fired.</li>");
                }
              });
        
            });
          </script>
     <!--//banner-slide-->

    </div>
</div>
<!--//banner-->

<!--welcome-->
<div class="welcome" id="about">
   <div class="container">
      <div class="wel-top">
        <h2>Welcome to our <span>Bike World</span></h2>
			<!-- <img src="img/harley-tank.png" alt="" width="100%" /> -->
        <p>
          BikeWorld service located in Chennai, India, that has 18 years of experience in providing bike repair services. Our repair services include oil change, filter change, electrical issues, general service, re-painting services, chain and sprocket issues, etc. We offer home based service for clients as and when requested by the clients. Our mechanics are well-trained and experienced in providing quality and budget-friendly services to all brands of bikes. We strive to provide repair service that extends the longevity of the bike, which has earned a host of trusted and satisfied clients. Contact us for your bike repair needs.  
        </p>
       
      </div>
  </div>
</div>
<!--//welcome-->
        
    
    <!--start-team-->
        <!-- <div class="team" id="team">
          <div class="container">
             <h3 class="tittle">Our Team</h3>
                <ul class="ch-grid">
                    <li>
                        <div class="ch-item">               
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-1"></div>
                                <div class="ch-info-back">
                                        <h3>BikeWorld</h3>
                                    <p>by Alexander Shumihin <a href="#">View on Dribbble</a></p>
                                </div>  
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-2"></div>
                                <div class="ch-info-back">
                                        <h3>BikeWorld</h3>
                                    <p>by Zoe Ingram  <a href="#">View on Dribbble</a></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-3"></div>
                                <div class="ch-info-back">
                                        <h3>BikeWorld</h3>
                                    <p>by Eileen Tjan <a href="#">View on Dribbble</a></p>
                                </div>
                            </div>
                        </div>
                    </li>
                     <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-4"></div>
                                <div class="ch-info-back">
                                        <h3>BikeWorld</h3>
                                    <p>by Eileen Tjan  <a href="#">View on Dribbble</a></p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                
          </div>
       </div> -->

    
 


<?php
	require_once('footer.php');
?>