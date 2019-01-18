<!-- Generates 'header' content -->
<?php get_header(); ?>

<!-- Body - contents of the page goes here -->
    <div id="main-content-container">
        <main>
            <h1>Main Section (red border)</h1>
            <p>This is where everything between the header and footer will go.</p>
            <p>Orange border: header</p>
            <p>Blue border: specific sections of the site</p>
            <p>Green border: footer</p>
            <section id="important-info">
                <h2>Important Information here</h2>
            </section>

            <section id="page-content">
                <h2>Page Specific Content here</h2>
            </section>

        </main>
    </div> <!-- End of 'main-content-container' div -->
    
<!-- Generates 'footer' content -->
<?php get_footer(); ?>

