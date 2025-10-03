<?php
// Main Homepage
?>

<!-- Header Top Bar -->
<?php include 'includes/header-topbar.php'; ?>

<!-- Header Menu -->
<?php include 'includes/header-menu.php'; ?>

<!-- Hero Section -->
<section class="hero-section">
    <!-- <div class="hero-overlay"></div> -->
    <div class="hero-content">
        <h1>Find Your Perfect Match</h1>
        <p>Connect with top freelancers or discover amazing opportunities. Whether you're hiring talent or looking for work, we've got you covered.</p>
        <div class="hero-buttons">
            <a href="advertiser-dashboard.php" class="btn-primary">Advertiser</a>
            <a href="publisher-dashboard.php" class="btn-secondary">Publisher</a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section">
    <div class="container">
        <h2>Why Choose FreelanceHub?</h2>
        <p>We provide the tools and platform you need to succeed in the freelance economy.</p>

        <div class="features-grid">
            <div class="feature-card">
                <i class="fas fa-search"></i>
                <h3>Smart Matching</h3>
                <p>Our advanced algorithm matches the right talent with the right projects, saving you time and ensuring quality results.</p>
            </div>

            <div class="feature-card">
                <i class="fas fa-shield-alt"></i>
                <h3>Secure Payments</h3>
                <p>Your payments are protected with our secure escrow system. Get paid safely and on time for every project.</p>
            </div>

            <div class="feature-card">
                <i class="fas fa-chart-line"></i>
                <h3>Track Progress</h3>
                <p>Monitor project progress in real-time with our comprehensive dashboard and communication tools.</p>
            </div>

            <div class="feature-card">
                <i class="fas fa-users"></i>
                <h3>Global Community</h3>
                <p>Join millions of freelancers and businesses from around the world in our thriving community.</p>
            </div>

            <div class="feature-card">
                <i class="fas fa-mobile-alt"></i>
                <h3>Mobile Ready</h3>
                <p>Work from anywhere with our mobile-optimized platform. Manage projects on the go.</p>
            </div>

            <div class="feature-card">
                <i class="fas fa-headset"></i>
                <h3>24/7 Support</h3>
                <p>Get help when you need it with our dedicated support team available around the clock.</p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="section section-light">
    <div class="container">
        <h2>How It Works</h2>
        <p>Getting started is simple. Follow these easy steps to begin your freelance journey.</p>

        <div class="row">
            <div class="col-md-4">
                <div class="feature-card">
                    <i class="fas fa-user-plus"></i>
                    <h3>1. Create Profile</h3>
                    <p>Sign up and create your professional profile. Showcase your skills, experience, and portfolio.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card">
                    <i class="fas fa-search"></i>
                    <h3>2. Find Projects</h3>
                    <p>Browse thousands of available projects or post your own. Use our smart filters to find the perfect match.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card">
                    <i class="fas fa-handshake"></i>
                    <h3>3. Start Working</h3>
                    <p>Connect with clients, discuss project details, and start working. Get paid securely through our platform.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="section">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="feature-card">
                    <i class="fas fa-users" style="font-size: 3rem; color: var(--primary-color);"></i>
                    <h3 style="font-size: 2.5rem; color: var(--primary-color); margin: 15px 0;">2M+</h3>
                    <p>Active Users</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
                <div class="feature-card">
                    <i class="fas fa-briefcase" style="font-size: 3rem; color: var(--primary-color);"></i>
                    <h3 style="font-size: 2.5rem; color: var(--primary-color); margin: 15px 0;">500K+</h3>
                    <p>Projects Completed</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
                <div class="feature-card">
                    <i class="fas fa-dollar-sign" style="font-size: 3rem; color: var(--primary-color);"></i>
                    <h3 style="font-size: 2.5rem; color: var(--primary-color); margin: 15px 0;">$50M+</h3>
                    <p>Earned by Freelancers</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
                <div class="feature-card">
                    <i class="fas fa-star" style="font-size: 3rem; color: var(--primary-color);"></i>
                    <h3 style="font-size: 2.5rem; color: var(--primary-color); margin: 15px 0;">4.9/5</h3>
                    <p>Average Rating</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Referral Section -->
<section class="section referral-section">
    <div class="container">
        <div class="referral-content" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 2rem;">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="referral-text mb-4">
                        <h2 class="text-white" style="font-weight: 700; font-size: 2.2rem; margin-bottom: 10px; letter-spacing: 1px;">Refer &amp; Earn <span style="color: #ebbd05ff;">10% Commission</span></h2>
                        <p class="text-white" style="font-size: 1.1rem; margin-bottom: 20px;">Invite your friends to FreelanceHub and earn 10% commission on their earnings. Share your unique referral link and start earning today!</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="referral-graphic">
                        <div id="ref-lottie" class="lottie-box"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Payment Options Section -->
<section class="section payment-section" style="position: relative; overflow: hidden;">
    <div class="container">
        <h2 style="text-align:center; font-weight:700; color:#2b2d42; margin-bottom: 10px;">Multiple Payment Options</h2>
        <p style="text-align:center; color:#555; margin-bottom: 30px;">With dozznes of payment options, we are always ready to offer business.</p>
        <div class="row">
            <div class="col-lg-4 col-md-6 order-sm-12 d-flex justify-content-center align-items-center">
                <div class="mb-4" id="pay-lottie" style="width:300px; height:300px;"></div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card digital text-center">
                            <div class="card-image">
                                <img class="img-responsive" src="assets/images/pp.png">
                            </div>
                            <span style="font-weight:600; color:#0070ba;">PayPal</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card digital text-center">
                            <div class="card-image">
                                <img class="img-responsive" src="assets/images/btc.png">
                            </div>
                            <span style="font-weight:600; color:#0070ba;">Bitcoin</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card digital text-center">
                            <div class="card-image">
                                <img class="img-responsive" src="assets/images/wm.png">
                            </div>
                            <span style="font-weight:600; color:#0070ba;">WebMoney</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card digital text-center">
                            <div class="card-image">
                                <img class="img-responsive" src="assets/images/pr.png">
                            </div>
                            <span style="font-weight:600; color:#0070ba;">Payeer</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card digital text-center">
                            <div class="card-image">
                                <img class="img-responsive" src="assets/images/pm.png">
                            </div>
                            <span style="font-weight:600; color:#0070ba;">Perfect Money</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card digital text-center">
                            <div class="card-image">
                                <img class="img-responsive" src="assets/images/adv.png">
                            </div>
                            <span style="font-weight:600; color:#0070ba;">AdvCash</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card digital text-center">
                            <div class="card-image">
                                <img class="img-responsive" src="assets/images/g-pay.png">
                            </div>
                            <span style="font-weight:600; color:#0070ba;">Google Pay</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card digital text-center">
                            <div class="card-image">
                                <img class="img-responsive" src="assets/images/mc-logo.png">
                            </div>
                            <span style="font-weight:600; color:#0070ba;">Master Card</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js"></script>

<script>
    const animations = [{
            id: 'ref-lottie',
            file: 'assets/images/referal.json'
        },
        {
            id: 'pay-lottie',
            file: 'assets/images/payment.json'
        }
    ];

    animations.forEach(anim => {
        lottie.loadAnimation({
            container: document.getElementById(anim.id),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: anim.file
        });
    });
</script>
<!-- Scroll Animation (Intersection Observer) -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animate on scroll
        const observerOptions = {
            threshold: 0.15
        };
        const animateOnScroll = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        };
        document.querySelectorAll('.referral-section').forEach(el => {
            el.style.opacity = 0;
            el.style.transform = 'translateY(40px)';
            new IntersectionObserver(animateOnScroll, observerOptions).observe(el);
        });
    });

    // Copy referral link
    function copyReferralLink() {
        const input = document.querySelector('.referral-link');
        input.select();
        input.setSelectionRange(0, 99999);
        document.execCommand('copy');
        document.getElementById('copy-msg').style.display = 'inline';
        setTimeout(() => {
            document.getElementById('copy-msg').style.display = 'none';
        }, 1500);
    }
</script>




<!-- Footer -->
<?php include 'includes/footer.php'; ?>