<?php
// Header Menu Component
?>
<div class="header-menu">
    <div class="container">
        <a href="index.php" class="header-logo"><img src="assets/images/bg.png" alt="5ThAD"></a>
        <nav class="nav-menu" id="navMenu">
            <ul class="nav-menu-list">
                <li>
                    <a href="#" class="dropdown-toggle">Advertiser</a>
                    <ul class="dropdown">
                        <li><a href="advertiser-dashboard.php">Dashboard</a></li>
                        <li><a href="create-campaign.php">Create Campaign</a></li>
                        <li><a href="manage-ads.php">Manage Ads</a></li>
                        <li><a href="analytics.php">Analytics</a></li>
                        <li><a href="billing.php">Billing</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">Publisher</a>
                    <ul class="dropdown">
                        <li><a href="publisher-dashboard.php">Dashboard</a></li>
                        <li><a href="available-jobs.php">Available Jobs</a></li>
                        <li><a href="my-projects.php">My Projects</a></li>
                        <li><a href="earnings.php">Earnings</a></li>
                        <li><a href="profile.php">Profile</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        
        <div class="header-icons">
            <a href="account.php" title="Account">
                <i class="fas fa-user"></i>
            </a>
            <a href="login.php" title="Login">
                <i class="fas fa-sign-in-alt"></i>
            </a>
        </div>
        
        <button class="mobile-menu-toggle" id="mobileMenuToggle">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</div>
