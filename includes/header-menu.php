<div class="header-menu">
    <div class="container">
        <a href="/" class="header-logo"><img src="assets/logo.png" alt="5ThAD"></a>
        <nav class="nav-menu" id="navMenu">
            <ul class="nav-menu-list">
                <li>
                    <a href="javascript:void(0)" class="dropdown-toggle">Advertiser</a>
                    <ul class="dropdown">
                        <li><a href="/advertiser-dashboard.php">Dashboard</a></li>
                        <li><a href="/create-campaign.php">Create Campaign</a></li>
                        <li><a href="/manage-ads.php">Manage Ads</a></li>
                        <li><a href="/analytics.php">Analytics</a></li>
                        <li><a href="/billing.php">Billing</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="dropdown-toggle">Publisher</a>
                    <ul class="dropdown">
                        <li><a href="/publisher-dashboard.php">Dashboard</a></li>
                        <li><a href="/available-jobs.php">Available Jobs</a></li>
                        <li><a href="/my-projects.php">My Projects</a></li>
                        <li><a href="/earnings.php">Earnings</a></li>
                        <li><a href="/profile.php">Profile</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="header-icons">
            <a href="#" class="icon-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightLabel" aria-controls="offcanvasRightLabel" title="User">
                <i class="fa-regular fa-user"></i> <span class="hide-in-mobile" > Account </span>
                <span class="dropdown-toggle"></span>
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

<div class="offcanvas offcanvas-end user-offcanvas" tabindex="-1" id="offcanvasRightLabel" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
        <h5 class="offcanvas-title text-white" id="userMenuLabel"><i class="fa-regular fa-user"></i>  Account</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="list-unstyled">
          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user-circle"></i> My Profile</a></li>
          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-heart"></i> My Favorites</a></li>
          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-users"></i> My Referrals</a></li>
          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-wallet"></i> Balance Withdrawal</a></li>
          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-headset"></i> Support Chat</a></li>
          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-key"></i> Reset Password</a></li>
          <li>
            <hr class="dropdown-divider text-light">
          </li>
          <li><a class="dropdown-item log-out-btn" href="#"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
        </ul>
      </div>
</div>