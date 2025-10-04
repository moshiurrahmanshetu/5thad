<?php
// User Dashboard Page
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - FreelanceHub</title>
    <meta name="description" content="Manage your freelance projects and earnings with our comprehensive dashboard.">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>

<body>
    <!-- Header Top Bar -->
    <?php include 'includes/header-topbar.php'; ?>

    <!-- Header Menu -->
    <?php include 'includes/header-menu.php'; ?>

    <!-- Dashboard Content -->
    <div class="dashboard-container">
        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-3 col-md-4">
                    <div class="dashboard-sidebar">
                        <div class="user-profile">
                            <div class="profile-avatar">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="User Avatar" class="avatar-img">
                            </div>
                            <div class="profile-info">
                                <h4>John Doe</h4>
                                <p>Web Developer</p>
                                <span class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="rating-text">4.9 (127 reviews)</span>
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
                                    <a href="#projects">
                                        <i class="fas fa-briefcase"></i>
                                        <span>My Projects</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#messages">
                                        <i class="fas fa-envelope"></i>
                                        <span>Messages</span>
                                        <span class="badge">3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#earnings">
                                        <i class="fas fa-dollar-sign"></i>
                                        <span>Earnings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#profile">
                                        <i class="fas fa-user"></i>
                                        <span>Profile</span>
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

                <!-- Main Content -->
                <div class="col-lg-9 col-md-8">
                    <div class="dashboard-content">
                        <!-- Dashboard Header -->
                        <div class="dashboard-header">
                            <h1>Dashboard</h1>
                            <div class="dashboard-actions">
                                <button class="btn btn-primary">
                                    <i class="fas fa-plus"></i> New Project
                                </button>
                            </div>
                        </div>

                        <!-- Stats Cards -->
                        <div class="dash-info-sec">
                            <div class="row mb-4">
                                <div class="col-lg-3 col-md-6 mb-3">
                                    <div class="stat-card">
                                        <div class="stat-icon">
                                            <i class="fas fa-briefcase"></i>
                                        </div>
                                        <div class="stat-content">
                                            <h3>12</h3>
                                            <p>Active Projects</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 mb-3">
                                    <div class="stat-card">
                                        <div class="stat-icon">
                                            <i class="fas fa-dollar-sign"></i>
                                        </div>
                                        <div class="stat-content">
                                            <h3>$8,450</h3>
                                            <p>Total Earnings</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 mb-3">
                                    <div class="stat-card">
                                        <div class="stat-icon">
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="stat-content">
                                            <h3>4.9</h3>
                                            <p>Average Rating</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 mb-3">
                                    <div class="stat-card">
                                        <div class="stat-icon">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                        <div class="stat-content">
                                            <h3>98%</h3>
                                            <p>On-Time Delivery</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Projects -->
                        <div class="dashboard-section">
                            <div class="section-header">
                                <h2>Recent Projects</h2>
                                <a href="#" class="btn btn-outline-primary">View All</a>
                            </div>

                            <div class="projects-grid">
                                <div class="project-card">
                                    <div class="project-header">
                                        <h4>E-commerce Website</h4>
                                        <span class="status status-active">Active</span>
                                    </div>
                                    <p>Building a complete e-commerce solution with React and Node.js</p>
                                    <div class="project-meta">
                                        <span><i class="fas fa-calendar"></i> Due: Dec 15, 2024</span>
                                        <span><i class="fas fa-dollar-sign"></i> $2,500</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 75%"></div>
                                    </div>
                                </div>

                                <div class="project-card">
                                    <div class="project-header">
                                        <h4>Mobile App Design</h4>
                                        <span class="status status-completed">Completed</span>
                                    </div>
                                    <p>UI/UX design for a fitness tracking mobile application</p>
                                    <div class="project-meta">
                                        <span><i class="fas fa-calendar"></i> Completed: Nov 28, 2024</span>
                                        <span><i class="fas fa-dollar-sign"></i> $1,200</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 100%"></div>
                                    </div>
                                </div>

                                <div class="project-card">
                                    <div class="project-header">
                                        <h4>Database Optimization</h4>
                                        <span class="status status-pending">Pending</span>
                                    </div>
                                    <p>Optimizing MySQL database for better performance</p>
                                    <div class="project-meta">
                                        <span><i class="fas fa-calendar"></i> Due: Dec 20, 2024</span>
                                        <span><i class="fas fa-dollar-sign"></i> $800</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 25%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Messages -->
                        <div class="dashboard-section">
                            <div class="section-header">
                                <h2>Recent Messages</h2>
                                <a href="#" class="btn btn-outline-primary">View All</a>
                            </div>

                            <div class="messages-list">
                                <div class="message-item">
                                    <div class="message-avatar">
                                        <img src="assets/images/img_avatar2.png" alt="User">
                                    </div>
                                    <div class="message-content">
                                        <h5>Sarah Johnson</h5>
                                        <p>Thanks for the great work on the website! When can we discuss the next phase?</p>
                                        <span class="message-time">2 hours ago</span>
                                    </div>
                                </div>

                                <div class="message-item">
                                    <div class="message-avatar">
                                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80" alt="User">
                                    </div>
                                    <div class="message-content">
                                        <h5>Mike Chen</h5>
                                        <p>I have a new project that might interest you. Can we schedule a call?</p>
                                        <span class="message-time">5 hours ago</span>
                                    </div>
                                </div>

                                <div class="message-item">
                                    <div class="message-avatar">
                                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80" alt="User">
                                    </div>
                                    <div class="message-content">
                                        <h5>Emily Davis</h5>
                                        <p>The design mockups look amazing! Ready to move forward.</p>
                                        <span class="message-time">1 day ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/dashboard.js"></script>
</body>

</html>