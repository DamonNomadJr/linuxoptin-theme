<?php

get_header();
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-lg-9">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">

                    <?php
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post();
                            the_title('<h1>', '</h1>');
                            the_content();
                        }
                    }
                    ?>
                </main>
            </div>

        </div>
    </div>
</div>



<?php

get_footer();
