<!-- Generates 'header' content -->
<?php get_header(); ?>

<!-- Body - contents of the page goes here -->
    <div id="main-content-container">
        <main>
						<h1>Introduction</h1>
						
					<div id="introText">
            <p>Welcome to the Blue Pages. This is a directory of property flood products and services put together to advise and inform you of what’s available to help reduce the risk of flooding to your home or business.</p>

            <p>In the directory you will be able to search different categories of flood products and services. At the top of each category page you will find a short description of what the product or service should do. Where applicable, the relevant standards or criteria that should be met is also detailed.</p>

            <p>If you have any questions you can contact the National Flood Forum Helpline on 01299 403055.</p>

            <p>Whilst the National Flood Forum does not endorse any of these products, we are happy to provide this platform in order to enable people to make informed decisions.</p>
					 
					</div>
						<section id="important-info">
                <h2>Ethos</h2>
                <p>Blue Pages Ethos here</p>
            </section>

            <section id="page-content">

                <h2>Featured List</h2>
                <!-- <p>Any home page specific content</p> -->
				
				
				<!-- Slideshow container -->
			<div class="advert_slideshow">

			  <!-- Full-width images with number and caption text -->
			  <div class="mySlides fade">
				<div class="numbertext"></div>
				<img src= "<?php echo get_theme_file_uri('Image_Folder/MainPage/Adverts/flood-divert-ltd.jpg');?>" alt = "Flood Divert" style="width:100%">
				<div class="text">Flood Divert</div>
			  </div>

			  <div class="mySlides fade">
				<div class="numbertext"></div>
				<img src= "<?php echo get_theme_file_uri('Image_Folder/MainPage/Adverts/logo-25-9-2018.jpg');?>" alt = "Weirbags" style="width:100%">
				<div class="text">Weirbags</div>
			  </div>

			  <div class="mySlides fade">
				<div class="numbertext"></div>
				<img src="<?php echo get_theme_file_uri('Image_Folder/MainPage/Adverts/Sandside-Cumbria.jpg');?>" alt = "Sandside Cumbria" style="width:100%">
				<div class="text">Sandside Cumbria</div>
			  </div>

			  <!-- Next and previous buttons -->
			  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			  <a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>

			<!-- The dots/circles -->
			<div style="text-align:center">
			  <span class="dot" onclick="currentSlide(1)"></span> 
			  <span class="dot" onclick="currentSlide(2)"></span> 
			  <span class="dot" onclick="currentSlide(3)"></span> 
			</div>
		</section>

		</main>
	</div> <!-- End of 'main-content-container' div -->
	
			<script>
			
			var slideIndex = 1;
		showSlides(slideIndex);

		// Next/previous controls
		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		// Thumbnail image controls
		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}


		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  if (n > slides.length) {slideIndex = 1} 
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
			  slides[i].style.display = "none"; 
		  }
		  for (i = 0; i < dots.length; i++) {
			  dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block"; 
		  dots[slideIndex-1].className += " active";
		}
			
			
			</script>
				
<!-- Generates 'footer' content -->
<?php get_footer(); ?>

