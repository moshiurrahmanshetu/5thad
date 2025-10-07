<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <meta name="description" content="Find the best freelancers and freelance jobs. Connect talented professionals with businesses worldwide.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" type="image/x-icon" href="assets/icon.png">
</head>
<body>

<?php include 'includes/header-topbar.php'; ?>
<?php include 'includes/header-menu.php'; ?>

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

<?php include 'includes/footer.php'; ?>
</body>
</html>
 <style>
  
.all-banner .banner .caption {
    transition: all 0.9s ease-in-out;
    background: rgba(0, 0, 0, 0.486);
    width: 100%;
    display: flex;
    height: 100%;
    justify-content: center;
    align-items: center;
}
.banner {
    background-size: cover;
    background-position: center;
    height: 300px;
    background-repeat: no-repeat;
    -webkit-transition: all 0.9s ease-in-out;
    -moz-transition: all 0.9s ease-in-out;
    -ms-transition: all 0.9s ease-in-out;
    -o-transition: all 0.9s ease-in-out;
    transition: all 0.9s ease-in-out;
}
.all-banner .banner .caption .caption-content {
    color: var(--ad-white);
}
.contact-section {
  background: var(--ad-gradient-bg);
  background-size: 400% 400%;
  animation: gradientBG 12s ease infinite;
}
.contact-form-inner{
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px); border-radius: 12px; padding: 40px; text-align: center; box-shadow: 0 8px 32px rgba(0,0,0,0.3); color: #fff; border: 1px solid rgba(255,255,255,0.2);
}
.contact-section .msg-title{
  color: var(--ad-white);
  font-weight: 700;
}
.form-control{
  border: 1px solid var(--ad-pr-cl);
  box-shadow: none;
}
.form-control:focus{
  box-shadow: 0px 2px 0px 2px rgb(58 58 58 / 25%);
  border-color: var(--ad-pr-cl);
}
.floating-group { position: relative; }
.floating-group .form-label {
    position: absolute; top: 12px; left: 12px; color: var(--ad-white); font-size: 14px; pointer-events: none; transition: 0.3s ease;
}
.floating-group input, .floating-group textarea {
    width: 100%; padding: 12px; border: none; border-radius: 6px; outline: none; font-size: 14px; background: rgba(255, 255, 255, 0.2); color: var(--ad-white);
}
.floating-group input:focus, .floating-group textarea:focus {
    background: rgba(255, 255, 255, 0.3);
    color: var(--ad-white);
}
.floating-group .form-control::placeholder { opacity: 0; }

.floating-group:focus-within .form-label {
  top: -0.6rem; transform: none; font-size: 12px; color: var(--ad-white);
}
.floating-group:has(.form-control:not(:placeholder-shown)) .form-label {
  top: -0.6rem; transform: none; font-size: 12px;
}
.contact-form-inner button{
  text-align: center; border: 1px solid var(--ad-pr-cl); background: var(--ad-pr-cl); color: var(--ad-white); display: block; margin: 0 auto;
}
.contact-form-inner button:hover{
  border: 1px solid var(--ad-pr-cl-deep);
  background: var(--ad-pr-cl-deep);
}

 </style>