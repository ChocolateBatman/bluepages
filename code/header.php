<!-- Header section of the website -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Site content will fit into smaller screens -->
        <?php wp_head();?>
    </head>

    <body <?php body_class(); ?>> <!-- body_class() - displays information about page currently being viewed -->
        <header>
            <div id = "phone_number"><p> Call Us on: 01299 403055</p></div>
            <img src= "<?php echo get_theme_file_uri('Image_Folder/MainPage/BluePages_Logo.png');?>" alt = "BluePages Logo" class = "MainpgLogo">
            <div id="title"><h1>Blue Pages</h1></div>
            
            <nav>
                <a href="<?php echo site_url(); ?>">Home</a>
                <div class="dropdown">
                    <button class="dropbtn">Categories</button>
                    <div class="dropdown-content">
                        <a href="<?php echo site_url('index.php/flooding'); ?>">Flooding</a>
                        <a href="<?php echo site_url('index.php/slow-the-flow'); ?>">Slow the Flow</a>
                        <a href="<?php echo site_url('index.php/other'); ?>">Other</a>
                    </div>
                </div>
                <a href="#">Add Listing</a>
                <a href="#">My Account</a>
                <a href="#">Contact Us</a>
            </nav>
        </header>
    
        
    