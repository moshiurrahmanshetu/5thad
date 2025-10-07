<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertiser Dashboard</title>
    <meta name="description" content="Find the best freelancers and freelance jobs. Connect talented professionals with businesses worldwide.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/dashboard.css">
    <link rel="icon" type="image/x-icon" href="assets/icon.png">
</head>
<body>

<?php include 'includes/header-topbar.php'; ?>
<?php include 'includes/header-menu.php'; ?>

<div class="dashboard-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="dashboard-sidebar">
                    <div class="user-profile">
                        <div class="profile-avatar">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="User Avatar" class="avatar-img">
                        </div>
                        <div class="profile-info">
                            <h4>Mike Chen</h4>
                            <p>Business Owner</p>
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-text">4.8 (89 reviews)</span>
                            </span>
                        </div>
                    </div>

                    <nav class="dashboard-nav">
                        <ul>
                            <li class="active">
                                <a href="#overview">
                                    <i class="fas fa-tachometer-alt"></i>
                                    <span>Overview</span>
                                </a>
                            </li>
                            <li>
                                <a href="#campaigns">
                                    <i class="fas fa-bullhorn"></i>
                                    <span>My Campaigns</span>
                                </a>
                            </li>
                            <li>
                                <a href="#freelancers">
                                    <i class="fas fa-users"></i>
                                    <span>Find Freelancers</span>
                                </a>
                            </li>
                            <li>
                                <a href="#messages">
                                    <i class="fas fa-envelope"></i>
                                    <span>Messages</span>
                                    <span class="badge">5</span>
                                </a>
                            </li>
                            <li>
                                <a href="#billing">
                                    <i class="fas fa-credit-card"></i>
                                    <span>Billing</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <i class="fas fa-cog"></i>
                                    <span>Settings</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="dashboard-content">
                    <div class="dashboard-header">
                        <h1>Advertiser Dashboard</h1>
                        <div class="dashboard-actions">
                            <button class="btn btn-primary">
                                <i class="fas fa-plus"></i> Create Campaign
                            </button>
                        </div>
                    </div>
                    <div class="dash-info-sec">
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="stat-card">
                                    <div class="stat-icon">
                                        <i class="fas fa-bullhorn"></i>
                                    </div>
                                    <div class="stat-content">
                                        <h3>8</h3>
                                        <p>Active Campaigns</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="stat-card">
                                    <div class="stat-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <h3>24</h3>
                                        <p>Hired Freelancers</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="stat-card">
                                    <div class="stat-icon">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>
                                    <div class="stat-content">
                                        <h3>$15,200</h3>
                                        <p>Total Spent</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="stat-card">
                                    <div class="stat-icon">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="stat-content">
                                        <h3>4.7</h3>
                                        <p>Avg. Rating</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dashboard-section">
                        <div class="section-header">
                            <h2>Recent Campaigns</h2>
                            <a href="#" class="btn btn-outline-primary">View All</a>
                        </div>

                        <div class="projects-grid">
                            <div class="project-card">
                                <div class="project-header">
                                    <h4>Website Development</h4>
                                    <span class="status status-active">Active</span>
                                    <button style="border: none;" class="status edit-btn"><i class="fa-regular fa-pen-to-square"></i> Edit</button>
                                </div>
                                <p>Looking for a skilled web developer to build an e-commerce website</p>
                                <div class="project-meta">
                                    <span><i class="fas fa-calendar"></i> Posted: Dec 1, 2024</span>
                                    <span><i class="fas fa-dollar-sign"></i> Budget: $3,000</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 60%"></div>
                                </div>
                            </div>

                            <div class="project-card">
                                <div class="project-header">
                                    <h4>Logo Design</h4>
                                    <span class="status status-completed">Completed</span>
                                </div>
                                <p>Need a professional logo design for our new startup</p>
                                <div class="project-meta">
                                    <span><i class="fas fa-calendar"></i> Completed: Nov 25, 2024</span>
                                    <span><i class="fas fa-dollar-sign"></i> Paid: $500</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%"></div>
                                </div>
                            </div>

                            <div class="project-card">
                                <div class="project-header">
                                    <h4>Mobile App Development</h4>
                                    <span class="status status-pending">Pending</span>
                                </div>
                                <p>Seeking an experienced mobile app developer for iOS and Android</p>
                                <div class="project-meta">
                                    <span><i class="fas fa-calendar"></i> Posted: Dec 5, 2024</span>
                                    <span><i class="fas fa-dollar-sign"></i> Budget: $5,000</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 20%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dashboard-section">
                        <div class="section-header">
                            <h2>Recommended Freelancers</h2>
                            <a href="#" class="btn btn-outline-primary">View All</a>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="freelancer-card">
                                    <div class="freelancer-avatar">
                                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=80&q=80" alt="Freelancer">
                                    </div>
                                    <div class="freelancer-info">
                                        <h5>John Doe</h5>
                                        <p>Web Developer</p>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>4.9 (127 reviews)</span>
                                        </div>
                                        <div class="freelancer-rate">
                                            <strong>$50/hour</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-3">
                                <div class="freelancer-card">
                                    <div class="freelancer-avatar">
                                        <img src="assets/img_avatar2.png" alt="Freelancer">
                                    </div>
                                    <div class="freelancer-info">
                                        <h5>Sarah Johnson</h5>
                                        <p>UI/UX Designer</p>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>4.8 (89 reviews)</span>
                                        </div>
                                        <div class="freelancer-rate">
                                            <strong>$45/hour</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-3">
                                <div class="freelancer-card">
                                    <div class="freelancer-avatar">
                                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=80&q=80" alt="Freelancer">
                                    </div>
                                    <div class="freelancer-info">
                                        <h5>Alex Smith</h5>
                                        <p>Mobile Developer</p>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>4.9 (156 reviews)</span>
                                        </div>
                                        <div class="freelancer-rate">
                                            <strong>$60/hour</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>
