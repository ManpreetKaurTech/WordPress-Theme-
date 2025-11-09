<?php
/*
Template Name: Services
*/
get_header();
?>

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h1 class="display-3 text-white animated slideInDown"><?php the_title(); ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="<?php echo home_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page"><?php the_title(); ?></li>
                        </ol>
                    </nav>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Services Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp mb-5" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Our Services</h6>
            <h1 class="mb-4">Experience Our Services</h1>
        </div>

        <!-- Row 1 -->
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center p-4 shadow-sm rounded">
                    <i class="fa fa-3x fa-user-nurse text-primary mb-3"></i>
                    <h5 class="mb-3">Stay In Caregiver</h5>
                    <p>Provides 24/7 care and support at home, helping with daily needs, medication, and personal assistance.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center p-4 shadow-sm rounded">
                    <i class="fa fa-3x fa-stethoscope text-primary mb-3"></i>
                    <h5 class="mb-3">Stay Out Caregiver</h5>
                    <p>Offers part-time home care, assisting with meals, hygiene, mobility, and medication as needed.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center p-4 shadow-sm rounded">
                    <i class="fa fa-3x fa-ambulance text-primary mb-3"></i>
                    <h5 class="mb-3">Hospital Sitter</h5>
                    <p>Provides constant monitoring and emotional support for patients in hospitals or nursing homes.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center p-4 shadow-sm rounded">
                    <i class="fa fa-3x fa-heartbeat text-primary mb-3"></i>
                    <h5 class="mb-3">Palliative Care</h5>
                    <p>Focuses on comfort and quality of life for patients with serious or life-limiting illnesses.</p>
                </div>
            </div>
        </div>

        <!-- Row 2 -->
        <div class="row g-4 mt-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center p-4 shadow-sm rounded">
                    <i class="fa fa-3x fa-hand-holding-heart text-primary mb-3"></i>
                    <h5 class="mb-3">Hospice Care</h5>
                    <p>Provides end-of-life care focusing on comfort, dignity, and emotional support for patients and families.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center p-4 shadow-sm rounded">
                    <i class="fa fa-3x fa-hands-helping text-primary mb-3"></i>
                    <h5 class="mb-3">Assisted Living</h5>
                    <p>Offers safe and supportive environments for seniors who need help with daily activities and medication.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center p-4 shadow-sm rounded">
                    <i class="fa fa-3x fa-heart text-primary mb-3"></i>
                    <h5 class="mb-3">Life Care</h5>
                    <p>Supports elderly and chronically ill patients with daily care, medication, and compassionate companionship.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center p-4 shadow-sm rounded">
                    <i class="fa fa-3x fa-dumbbell text-primary mb-3"></i>
                    <h5 class="mb-3">Physiotherapy</h5>
                    <p>Helps restore strength, mobility, and flexibility for individuals recovering from injuries or aging effects.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

<?php get_footer(); ?>
