
    <!-- Header Top Bar -->
<?php include 'includes/header-topbar.php'; ?>
    <!-- Header Menu -->
<?php include 'includes/header-menu.php'; ?>


<!-- banner section start  -->
<section class="all-banner">
  <div class="banner d-flex align-items-center justify-content-center" style="background-image: url(assets/contact-bg-2.jpg);">
    <figcaption class="caption">
      <div class="caption-content" data-aos="fade-up">
        <h1>Contact Us</h1>
      </div>
    </figcaption>
  </div>
</section>

<section class="contact-section py-5">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center">
        <h3 class="mb-3 msg-title">We'd Love to Hear From You!</h3>
        <p class="text-white">
          Whether you have a question about our products, need assistance, or just want to share your feedback, our
          team is ready to answer all your questions.
        </p>
      </div>
    </div>
    <div class="row g-4 align-items-stretch justify-content-center">
      <div class="col-lg-8">
        <form class="p-4 h-100 rounded-4 shadow contact-form-inner">
          <h4 class="mb-4 msg-title text-center">Leave Us a Message</h4>
          <div class="row">
            <div class="col-md-6">
              <div class="floating-group mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                  required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="floating-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                  placeholder="Email" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="floating-group mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" class="form-control" id="phone" name="phone"
                  placeholder="Phone">
              </div>
            </div>
            <div class="col-md-6">
              <div class="floating-group mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"
                  required>
              </div>
            </div>
            <div class="col-md-12">
              <div class="floating-group mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control rounded-4" id="message" name="message" rows="5"
                  placeholder="Type your message here..." required></textarea>
              </div>
            </div>
          </div>
          <button type="submit" class="btn py-2"> Send Message <i class="fa-solid fa-paper-plane ms-2"></i></button>
        </form>
      </div>
    </div>
  </div>
</section>


    <!-- Footer -->
<?php include 'includes/footer.php'; ?>
