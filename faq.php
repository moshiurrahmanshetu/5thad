<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Blogs</title>
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
    <div class="banner d-flex align-items-center justify-content-center"
      style="background-image: url(assets/faq.jpg);">
      <figcaption class="caption">
        <div class="caption-content" data-aos="fade-up">
          <h1>Frequently Asked Questions</h1>
        </div>
      </figcaption>
    </div>
  </section>
  <section class="faq-section py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <p class="text-center mb-5" style="font-size: 18px;">Find answers to common questions about <a style="color: var(--ad-pr-cl-deep);" href="/"><b> 5ThAD</b></a>, our products, and services.</p>
          <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
              <h3 class="accordion-header" id="faq1-heading">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1"
                  aria-expanded="true" aria-controls="faq1">
                  What is this platform about?
                </button>
              </h3>
              <div id="faq1" class="accordion-collapse collapse show" aria-labelledby="faq1-heading"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  This platform connects advertisers and publishers, helping them collaborate for effective marketing and earning opportunities.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h3 class="accordion-header" id="faq2-heading">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                  How do I become an advertiser?
                </button>
              </h3>
              <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faq2-heading"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Simply create an account, verify your details, and you can start creating ad campaigns instantly.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h3 class="accordion-header" id="faq3-heading">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                  How can I earn as a publisher?
                </button>
              </h3>
              <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faq3-heading"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Register as a publisher, integrate your ad spaces, and get paid for valid impressions and clicks on the ads displayed.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h3 class="accordion-header" id="faq4-heading">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                  Is registration free?
                </button>
              </h3>
              <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faq4-heading"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, signing up as both an advertiser or publisher is completely free.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h3 class="accordion-header" id="faq5-heading">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                  How do I withdraw my earnings?
                </button>
              </h3>
              <div id="faq5" class="accordion-collapse collapse" aria-labelledby="faq5-heading"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  You can withdraw your earnings securely through multiple payment methods like bank transfer or PayPal once you reach the minimum payout limit.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h3 class="accordion-header" id="faq6-heading">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                  What is the minimum payout amount?
                </button>
              </h3>
              <div id="faq6" class="accordion-collapse collapse" aria-labelledby="faq6-heading"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  The minimum payout threshold depends on your selected payment method, typically starting from $10.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h3 class="accordion-header" id="faq7-heading">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq7" aria-expanded="false" aria-controls="faq7">
                  How are campaigns approved?
                </button>
              </h3>
              <div id="faq7" class="accordion-collapse collapse" aria-labelledby="faq7-heading"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Every campaign is reviewed by our moderation team to ensure it meets quality and compliance standards before going live.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h3 class="accordion-header" id="faq8-heading">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq8" aria-expanded="false" aria-controls="faq8">
                  Can I pause or stop a running campaign?
                </button>
              </h3>
              <div id="faq8" class="accordion-collapse collapse" aria-labelledby="faq8-heading"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, advertisers can pause, resume, or stop campaigns anytime from the dashboard.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h3 class="accordion-header" id="faq13-heading">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq13" aria-expanded="false" aria-controls="faq13">
                  How secure is my account and data?
                </button>
              </h3>
              <div id="faq13" class="accordion-collapse collapse" aria-labelledby="faq13-heading"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Your account is protected with industry-standard encryption, and we never share your data with third parties.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h3 class="accordion-header" id="faq14-heading">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq14" aria-expanded="false" aria-controls="faq14">
                  How can I contact support?
                </button>
              </h3>
              <div id="faq14" class="accordion-collapse collapse" aria-labelledby="faq14-heading"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  You can reach our support team anytime via the “Contact Us” page or live chat for quick assistance.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h3 class="accordion-header" id="faq15-heading">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq15" aria-expanded="false" aria-controls="faq15">
                  Do small businesses need digital marketing?
                </button>
              </h3>
              <div id="faq15" class="accordion-collapse collapse" aria-labelledby="faq15-heading"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, digital marketing helps small businesses compete with larger companies by reaching customers effectively at a lower cost.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>
</body>
</html>
