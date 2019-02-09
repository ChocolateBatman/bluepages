<!-- Header section of the website -->
<!DOCTYPE html>
<html>
    <head>
        <?php wp_head();?>
    </head>

    <header>
	 <h1>Blue Pages</h1>
	<img src= "<?php echo get_theme_file_uri('Image_Folder/MainPage/BluePages_Logo.png');?>" alt = "BluePages Logo" class = "MainpgLogo">
      <div id = "title">  <h1>Blue Pages</h1> </div>
        <div id = "phone_number"><p> Call Us on: 01299 403055</p></div>
        <nav>
            <a href="#">Home</a>
            <a href="#">Categories</a>
            <a href="#">Add Listing</a>
            <a href="#">My Account</a>
            <a href="#">Contact Us</a>
        </nav>
    </header>
    <body>
        
    