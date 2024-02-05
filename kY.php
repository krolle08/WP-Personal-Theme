<?php
/*
Template Name: kY
*/

get_header();
?>

<!-- Include the external HTML file -->
<?php include get_template_directory() . '/templates/kY.html'; ?>


<div class="page-content">
    <div class="profile-page">
        <div class="wrapper">
            <div class="page-header page-header-small" filter-color="green">
                <div class="page-header-image" data-parallax="true"
                     style="background-image: url('<?php echo get_template_directory_uri(); ?>assets/images/cc-bg-1.jpg')"></div>
            </div>
        </div>
    </div>
    <div class="section" id="about">
        <div class="container">
            <div class="h4 text-center mb-4 title">Kommunernes Ydelsessystem</div>
            <div class="container text-center" data-aos="fade-up" data-aos-offset="10">
                <div class="card-body">
                    <p>Here is a short sample of pictures showing how the system is structured, how it structured to
                        use by the citizens and some examples of the UI.</p>
                    <div class="section" id="KY">
                        <div class="container text-center" data-aos="fade-up" data-aos-offset="10">
                            <div class="row">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/KY1.png"
                                     alt="Image" class="img-fluid mb-3 scaled-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/KY2.png"
                                     class="img-fluid mb-3 scaled-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/KY3.png"
                                     class="img-fluid mb-3 scaled-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/KY3.png"
                                     class="img-fluid mb-3 scaled-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
