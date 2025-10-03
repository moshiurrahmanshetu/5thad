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
<section class="section referral-section" style="background: linear-gradient(135deg, #4f8cff 0%, #6dd5ed 100%); color: #fff; position: relative; overflow: hidden;">
    <div class="container">
        <div class="referral-content" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 2rem;">
            <div class="referral-text" style="flex: 1 1 320px; min-width: 280px;">
                <h2 style="font-weight: 700; font-size: 2.2rem; margin-bottom: 10px; letter-spacing: 1px;">Refer &amp; Earn <span style="color: #ffe066;">10% Commission</span></h2>
                <p style="font-size: 1.1rem; margin-bottom: 20px;">Invite your friends to FreelanceHub and earn 10% commission on their earnings. Share your unique referral link and start earning today!</p>
                <div class="referral-actions" style="display: flex; gap: 10px;">
                    <input type="text" class="referral-link" value="https://freelancehub.com/ref/yourusername" readonly style="padding: 10px 15px; border-radius: 6px; border: none; width: 220px; background: #fff; color: #333; font-weight: 500;">
                    <button class="btn-copy" onclick="copyReferralLink()" style="background: #ffe066; color: #222; border: none; border-radius: 6px; padding: 10px 18px; font-weight: 600; cursor: pointer; transition: background 0.3s;">Copy</button>
                </div>
                <span id="copy-msg" style="display:none; margin-left:10px; color:#ffe066; font-weight:600;">Copied!</span>
            </div>
            <div class="referral-graphic" style="flex: 1 1 320px; min-width: 260px; text-align: center;">
                <img src="assets/images/referral-illustration.svg" alt="Refer & Earn" style="max-width: 320px; width: 100%; filter: drop-shadow(0 8px 24px rgba(0,0,0,0.12)); transition: transform 0.4s;">
            </div>
        </div>
    </div>
</section>

<!-- Payment Options Section -->
<section class="section payment-section" style="background: #f7faff; position: relative; overflow: hidden;">
    <div class="container">
        <h2 style="text-align:center; font-weight:700; color:#2b2d42; margin-bottom: 10px;">Multiple Payment Options</h2>
        <p style="text-align:center; color:#555; margin-bottom: 30px;">With dozznes of payment options, we are always ready to offer business.</p>
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-6">
                <div class="payment-card" style="background: #fff; border-radius: 14px; box-shadow: 0 4px 24px rgba(79,140,255,0.08); padding: 30px 24px; min-width: 180px; max-width: 220px; flex: 1 1 180px; display: flex; flex-direction: column; align-items: center; transition: transform 0.3s, box-shadow 0.3s;">
                    <img src="assets/images/pp.png" alt="PayPal" style="width:48px; margin-bottom: 12px;">
                    <span style="font-weight:600; color:#0070ba;">PayPal</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-6">
                <div class="payment-card" style="background: #fff; border-radius: 14px; box-shadow: 0 4px 24px rgba(79,140,255,0.08); padding: 30px 24px; min-width: 180px; max-width: 220px; flex: 1 1 180px; display: flex; flex-direction: column; align-items: center; transition: transform 0.3s, box-shadow 0.3s;">
                    <img src="assets/images/btc.png" alt="Bitcoin" style="width:48px; margin-bottom: 12px;">
                    <span style="font-weight:600; color:#f7931a;">Bitcoin</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-6">
                <div class="payment-card" style="background: #fff; border-radius: 14px; box-shadow: 0 4px 24px rgba(79,140,255,0.08); padding: 30px 24px; min-width: 180px; max-width: 220px; flex: 1 1 180px; display: flex; flex-direction: column; align-items: center; transition: transform 0.3s, box-shadow 0.3s;">
                    <img src="assets/images/wm.png" alt="WebMoney" style="width:48px; margin-bottom: 12px;">
                    <span style="font-weight:600; color:#0060a9;">WebMoney</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-6">
                <div class="payment-card" style="background: #fff; border-radius: 14px; box-shadow: 0 4px 24px rgba(79,140,255,0.08); padding: 30px 24px; min-width: 180px; max-width: 220px; flex: 1 1 180px; display: flex; flex-direction: column; align-items: center; transition: transform 0.3s, box-shadow 0.3s;">
                    <img src="assets/images/pr.png" alt="Payeer" style="width:48px; margin-bottom: 12px;">
                    <span style="font-weight:600; color:#0098e9;">Payeer</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-6">
                <div class="payment-card" style="background: #fff; border-radius: 14px; box-shadow: 0 4px 24px rgba(79,140,255,0.08); padding: 30px 24px; min-width: 180px; max-width: 220px; flex: 1 1 180px; display: flex; flex-direction: column; align-items: center; transition: transform 0.3s, box-shadow 0.3s;">
                    <img src="assets/images/pm.png" alt="Perfect Money" style="width:48px; margin-bottom: 12px;">
                    <span style="font-weight:600; color:#e60000;">Perfect Money</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-6">
                <div class="payment-card" style="background: #fff; border-radius: 14px; box-shadow: 0 4px 24px rgba(79,140,255,0.08); padding: 30px 24px; min-width: 180px; max-width: 220px; flex: 1 1 180px; display: flex; flex-direction: column; align-items: center; transition: transform 0.3s, box-shadow 0.3s;">
                    <img src="assets/images/adv.png" alt="AdvCash" style="width:48px; margin-bottom: 12px;">
                    <span style="font-weight:600; color:#1abc9c;">AdvCash</span>
                </div>
            </div>
        </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div id="lottie-container" style="width:300px; height:300px;"></div>
            </div>
        </div>
    </div>
</section>

<!-- Custom Styles & Effects -->
<style>
    /* Referral Section Effects */
    .referral-section {
        padding: 60px 0 40px 0;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .referral-section .referral-graphic img:hover {
        transform: scale(1.05) rotate(-2deg);
    }

    .referral-section .referral-actions .btn-copy:hover {
        background: #ffd700;
        color: #222;
    }

    .referral-section .referral-link:focus {
        outline: 2px solid #ffe066;
    }

    @media (max-width: 900px) {
        .referral-content {
            flex-direction: column;
            text-align: center;
        }

        .referral-graphic {
            margin-top: 30px;
        }
    }

    /* Payment Section Effects */
    .payment-section {
        padding: 60px 0 40px 0;
    }

    .payment-grid {
        gap: 1.5rem;
    }

    .payment-card {
        cursor: pointer;
        box-shadow: 0 4px 24px rgba(79, 140, 255, 0.08);
        transition: transform 0.3s, box-shadow 0.3s, background 0.3s;
        will-change: transform;
        margin-bottom: 20px;
    }

    .payment-card:hover {
        transform: translateY(-10px) scale(1.04);
        box-shadow: 0 8px 32px rgba(79, 140, 255, 0.18);
        background: linear-gradient(120deg, #e0e7ff 0%, #f7faff 100%);
    }

    @media (max-width: 900px) {
        .payment-grid {
            flex-direction: column;
            align-items: center;
        }

        .payment-card {
            width: 100%;
            max-width: 340px;
        }
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js"></script>

<script>
    var animation = lottie.loadAnimation({
        container: document.getElementById('lottie-container'), // target element
        renderer: 'svg', // renders as SVG (scalable, clean)
        loop: true, // set false if you don’t want loop
        autoplay: true, // animation starts automatically
        path: 'assets/images/payment.json' // relative path to your JSON file
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
        document.querySelectorAll('.referral-section, .payment-section .payment-card').forEach(el => {
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