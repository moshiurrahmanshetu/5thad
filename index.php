<?php
// Main Homepage
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreelanceHub - Connect Talent with Opportunity</title>
    <meta name="description" content="Find the best freelancers and freelance jobs. Connect talented professionals with businesses worldwide.">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Header Top Bar -->
    <?php include 'includes/header-topbar.php'; ?>
    
    <!-- Header Menu -->
    <?php include 'includes/header-menu.php'; ?>
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-background" id="heroBackground"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Find Your Perfect Match</h1>
            <p>Connect with top freelancers or discover amazing opportunities. Whether you're hiring talent or looking for work, we've got you covered.</p>
            <div class="hero-buttons">
                <a href="advertiser-dashboard.php" class="btn-primary">I Need Talent</a>
                <a href="publisher-dashboard.php" class="btn-secondary">I Am Talent</a>
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
    
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="assets/js/main.js"></script>
</body>
</html>
