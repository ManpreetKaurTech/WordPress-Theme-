<?php
/*
Template Name: Career
*/
get_header();
?>

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-10 text-center">
        <h1 class="display-3 text-white animated slideInDown">Career</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-white" href="<?php echo home_url(); ?>">Home</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">Career</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- Header End -->

<!-- Career Section Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">Join Our Team</h6>
      <h1 class="mb-5">Start Your Career with Us</h1>
      <p class="mb-5">We’re always looking for passionate caregivers and healthcare professionals who want to make a difference.</p>
    </div>

    <div class="row g-4">
      <div class="col-md-6">
        <div class="bg-light p-4 rounded-3 shadow-sm h-100">
          <h4 class="text-primary mb-3">Why Work With Us?</h4>
          <ul class="list-unstyled">
            <li>✅ Supportive team environment</li>
            <li>✅ Competitive salary and benefits</li>
            <li>✅ Continuous training and growth opportunities</li>
            <li>✅ Meaningful work helping others</li>
          </ul>
		  <div class="text-center my-4">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/new10.jpg" 
			 alt="Why Work With Us - Nanny Care Hospital"
			 class="img-fluid rounded shadow">
	</div>

        </div>
      </div>

      <div class="col-md-6">
        <div class="bg-light p-4 rounded-3 shadow-sm h-100">
          <h4 class="text-primary mb-3">Apply Now</h4>
          <p>Fill in the form below and we’ll contact you if your profile matches our openings.</p>
          <?php
          // Example form (replace with Contact Form 7 shortcode if installed)
          echo do_shortcode('[contact-form-7 id="29a88ee" title="Contact form 1"]');
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Career Section End -->

<?php get_footer(); ?>
