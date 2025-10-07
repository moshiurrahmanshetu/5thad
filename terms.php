<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <meta name="description" content="Find the best freelancers and freelance jobs. Connect talented professionals with businesses worldwide.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" type="image/x-icon" href="assets/icon.png">
</head>
<body>

<?php include 'includes/header-topbar.php'; ?>
<?php include 'includes/header-menu.php'; ?>
 

  <!-- Hero -->
  <section class="terms-hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h3 class="fw-bold mb-2"><i class="fa fa-file-contract me-2"></i> Terms & Conditions</h3>
          <p class="lead mb-0">Please read these terms carefully. They set out the rules for using Meser (the “Service”). By using our Service you agree to these terms.</p>
        </div>
        <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
          <div class="d-inline-block text-start shadow-soft p-3 rounded">
            <div class="small text-white">Last updated</div>
            <div class="h5 mb-0"><?php echo date('F j, Y'); ?></div>
            <div class="muted-small">Please check periodically for changes.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <main class="container my-5">
    <div class="row g-4">

      <!-- Left: Terms content -->
      <div class="col-lg-8">
        <div class="card p-4 shadow-soft terms-section">
          <div class="mb-3">
            <span class="badge bg-secondary"><i class="fa fa-info-circle me-1"></i> Agreement</span>
          </div>

          <p class="muted-small">
            These Terms & Conditions govern your access to and use of Meser. By accessing or using the Service you agree to be bound by these Terms. If you do not agree, please do not use the Service.
          </p>

          <!-- Accordion for sections -->
          <div class="accordion mt-4" id="termsAccordion">

            <!-- 1. Use of the Service -->
            <div class="accordion-item mb-3">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                  1. Use of the Service
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  <p>Users must use the Service lawfully and in accordance with these Terms. You agree not to misuse the Service, interfere with other users, or attempt to gain unauthorized access to our systems.</p>
                  <ul class="terms-list">
                    <li>Keep your account information secure;</li>
                    <li>Provide accurate information when required;</li>
                    <li>Respect other users and our community guidelines.</li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- 2. User Responsibilities -->
            <div class="accordion-item mb-3">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                  2. User Responsibilities
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  <p>Users are responsible for their actions when using the Service. You must not post illegal content, infringe others’ rights, or use the Service for malicious purposes.</p>
                </div>
              </div>
            </div>

            <!-- 3. Intellectual Property -->
            <div class="accordion-item mb-3">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                  3. Intellectual Property
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  <p>All content on the Service (text, images, logos, code) is owned by Meser or licensed to Meser. You may not copy, reproduce, publish or create derivative works without our permission.</p>
                </div>
              </div>
            </div>

            <!-- 4. Payments & Refunds -->
            <div class="accordion-item mb-3">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                  4. Payments & Refunds
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  <p>If the Service includes paid features, payment terms, billing cycles, and refund policy will be explained at checkout. Refunds are provided according to the policy posted at the time of purchase.</p>
                </div>
              </div>
            </div>

            <!-- 5. Privacy -->
            <div class="accordion-item mb-3">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                  5. Privacy
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  <p>Your privacy is important. Our Privacy Policy explains how we collect, use, and share your personal data. By using the Service you also agree to our Privacy Policy.</p>
                </div>
              </div>
            </div>

            <!-- 6. Limitation of Liability -->
            <div class="accordion-item mb-3">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                  6. Limitation of Liability
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  <p>To the maximum extent permitted by law, Meser will not be liable for indirect, special, incidental, or consequential damages arising from your use of the Service.</p>
                </div>
              </div>
            </div>

            <!-- 7. Termination -->
            <div class="accordion-item mb-3">
              <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven">
                  7. Termination
                </button>
              </h2>
              <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  <p>We may suspend or terminate accounts that violate these Terms. Upon termination, your right to use the Service ceases immediately.</p>
                </div>
              </div>
            </div>

            <!-- 8. Governing Law -->
            <div class="accordion-item mb-3">
              <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight">
                  8. Governing Law
                </button>
              </h2>
              <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  <p>These Terms are governed by the laws of the country where Meser operates. Any disputes will be subject to the exclusive jurisdiction of the competent courts.</p>
                </div>
              </div>
            </div>

            <!-- 9. Changes to Terms -->
            <div class="accordion-item mb-3">
              <h2 class="accordion-header" id="headingNine">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine">
                  9. Changes to Terms
                </button>
              </h2>
              <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  <p>We may modify these Terms from time to time. We will post the updated Terms with a new "Last updated" date. Continued use of the Service after changes constitutes acceptance of the new Terms.</p>
                </div>
              </div>
            </div>

            <!-- 10. Contact -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen">
                  10. Contact
                </button>
              </h2>
              <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  <p>If you have questions about these Terms, please contact us at <a href="mailto:info@example.com">info@example.com</a> or through our <a href="contact.php">Contact page</a>.</p>
                </div>
              </div>
            </div>

          </div>

          <div class="d-flex justify-content-between align-items-center mt-4">
            <div class="muted-small">By using this site you agree to the terms above.</div>
            <div>
              <a href="/" class="btn btn-outline-secondary me-2"><i class="fa fa-check-circle me-1"></i> Agree & Continue</a>
              <a href="contact.php" class="btn btn-outline-secondary"><i class="fa fa-envelope me-1"></i> Contact Us</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card p-3 shadow-soft toc">
          <h6 class="mb-3">Quick Navigation</h6>
          <nav class="nav flex-column">
            <a class="nav-link py-1" href="#collapseOne" onclick="document.getElementById('collapseOne')?.scrollIntoView({behavior:'smooth'})"><i class="fa fa-angle-right me-2"></i> Use of the Service</a>
            <a class="nav-link py-1" href="#collapseTwo"><i class="fa fa-angle-right me-2"></i> User Responsibilities</a>
            <a class="nav-link py-1" href="#collapseThree"><i class="fa fa-angle-right me-2"></i> Intellectual Property</a>
            <a class="nav-link py-1" href="#collapseFour"><i class="fa fa-angle-right me-2"></i> Payments & Refunds</a>
            <a class="nav-link py-1" href="#collapseFive"><i class="fa fa-angle-right me-2"></i> Privacy</a>
            <a class="nav-link py-1" href="#collapseSix"><i class="fa fa-angle-right me-2"></i> Limitation of Liability</a>
            <a class="nav-link py-1" href="#collapseSeven"><i class="fa fa-angle-right me-2"></i> Termination</a>
            <a class="nav-link py-1" href="#collapseEight"><i class="fa fa-angle-right me-2"></i> Governing Law</a>
            <a class="nav-link py-1" href="#collapseNine"><i class="fa fa-angle-right me-2"></i> Changes</a>
            <a class="nav-link py-1" href="#collapseTen"><i class="fa fa-angle-right me-2"></i> Contact</a>
          </nav>

          <hr />

          <div class="small text-muted">
            <strong>Summary</strong>
            <p class="mb-0">This page explains rules for using Meser: user obligations, IP rights, payments, privacy, liability limits and how changes are handled.</p>
          </div>
        </div>

        <!-- Helpful card -->
        <div class="card mt-3 p-3 shadow-soft">
          <h6><i class="fa fa-shield-halved me-2"></i> Safety & Security</h6>
          <p class="small text-muted mb-0">Keep your account details private. Report suspicious activity to our support team immediately.</p>
        </div>
      </div>
    </div>
  </main>

<?php include 'includes/footer.php'; ?>
</body>
</html>

<style>
  
  .terms-hero{
    background: linear-gradient(135deg, rgba(18,65,112,0.95) 0%, rgba(39,55,77,0.85) 100%);
    color: #fff;
    padding: 48px 0;
  }
  .terms-hero .lead{ color: rgba(255,255,255,0.92); }
  .terms-section h5 {
    font-weight: 600;
    color: var(--ad-sec-cl);
  }
  .shadow-soft { box-shadow: 0 6px 20px rgba(39,55,77,0.06); border-radius: 12px; }
  .muted-small { color: var(--muted); font-size: .95rem; }
  .agree-btn { background: var(--accent); border-color: var(--accent); color: #000000; }
  .agree-btn:hover { filter: brightness(.95); }
  .shadow-soft .nav a {
    color: var(--ad-sec-cl);
    transition: 0.3s all ease-in-out;
  }
.shadow-soft .nav a:hover {
  margin-left: 5px;
  text-shadow: 2px 3px 4px #0000006e;
}

  @media (max-width: 991px) {
    .toc { position: static; margin-top: 1rem; }
  }
  .terms-list li { margin-bottom: .5rem; }


</style>
