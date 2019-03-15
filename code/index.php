<!-- Generates 'header' content -->
<?php get_header(); ?>

<!-- Body - contents of the page goes here -->
    <div id="main-content-container">
        <main>
					<br>	
					<div id="introText">
						<h2>Introduction</h2>
            <p>Welcome to the Blue Pages. This is a directory of property flood products and services put together to advise and inform you of what’s available to help reduce the risk of flooding to your home or business.</p>

						<p>We all have a role in managing water.  Measures to stop water getting in to your property or reducing its impact if it does get in, will be most appropriate for some. But for the rest of us, slowing water down through water butts and leaky raised flower beds and greywater systems will not only reduce the risk of flooding for us and our neighbours, but will also provide us with water during dry period.  The range of things available is huge, with something for everyone.  This directory is the only place where the full range of product types can be seen.</p>

            <p>At the top of each category page you will find a short description of what the product or service should do. Where applicable, the relevant standards or criteria that should be met is also detailed.</p>

						<p>If you have any questions you can contact the National Flood Forum Helpline on 01299 403055.</p>

						<p>Please note that the National Flood Forum does <u>not</u> endorse any of these products or services.  We are happy to provide this platform to help people to make informed decisions, but for some of these you may wish to take independent advice.  Please note that organisations pay to advertise their products and services.
						</p>
					 
					</div>
						
          <section id="page-content">
						<h2 id="featured-heading">Featured List</h2>
				
				
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

				<section id="important-info">
					<h2>Ethos</h2>
					<p>You can find out if you’re:

					at immediate risk of flooding - check current flood warnings and river and sea levels<br>
					at risk of flooding in the next 5 days
					in an area that’s likely to flood in the future - check your long term risk of flooding and view your area’s flood maps<br>
					Check the risk of flooding if you’re in Scotland, Wales or Northern Ireland.<br>

					Sign up for warnings<br>
					Sign up for flood warnings if your property is at risk of flooding. This service is free.<br>

					Get the flooding history for a property<br>
					You can get the flooding history of a property based on Environment Agency records.<br>

					Send an email to enquiries@environment-agency.gov.uk including:<br>

					the property’s address or a map of the area if the postcode is not known (you can attach a file or link to an online map)
					the period you’d like the report to cover<br>
					your daytime telephone number<br>
					You’ll be sent the report by email within 20 working days.<br>

					The report is free unless it takes more than 18 hours to put together. If it takes longer, the Environment Agency will contact you. They may decide not to do the report. 
					<br>If they do it, they charge £25 per hour, including for the first 18 hours.</p>
        </section>

			</main>
		</div> <!-- End of 'main-content-container' div -->

		<!-- JavaScript code to load carousel -->
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