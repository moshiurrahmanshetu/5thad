<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertiser Dashboard</title>
    <meta name="description" content="Find the best freelancers and freelance jobs. Connect talented professionals with businesses worldwide.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
                                    <a href="#jobs">
                                        <i class="fas fa-search"></i>
                                        <span>Find Jobs</span>
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
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-lg-9 col-md-8">
                    <div class="dashboard-content">
                        <div class="dashboard-header">
                            <h1>Publisher Dashboard</h1>
                            <div class="dashboard-actions">
                                <button class="btn btn-primary">
                                    <i class="fas fa-search"></i> Find Jobs
                                </button>
                            </div>
                        </div>

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

                        <div class="dashboard-section">
                            <div class="section-header">
                                <h2>Available Jobs</h2>
                                <a href="#" class="btn btn-outline-primary">View All</a>
                            </div>

                            <div class="jobs-grid">
                                <div class="job-card">
                                    <div class="job-header">
                                        <h4>E-commerce Website Development</h4>
                                        <span class="job-budget">$3,000</span>
                                    </div>
                                    <p>Looking for an experienced web developer to build a complete e-commerce solution with React and Node.js</p>
                                    <div class="job-meta">
                                        <span><i class="fas fa-clock"></i> Posted 2 hours ago</span>
                                        <span><i class="fas fa-users"></i> 15 proposals</span>
                                        <span><i class="fas fa-tag"></i> Web Development</span>
                                    </div>
                                    <div class="job-skills">
                                        <span class="skill-tag">React</span>
                                        <span class="skill-tag">Node.js</span>
                                        <span class="skill-tag">MongoDB</span>
                                    </div>
                                    <button class="btn btn-primary btn-sm">Apply Now</button>
                                </div>

                                <div class="job-card">
                                    <div class="job-header">
                                        <h4>Mobile App UI/UX Design</h4>
                                        <span class="job-budget">$1,500</span>
                                    </div>
                                    <p>Need a creative designer to design a modern mobile app interface for a fitness tracking application</p>
                                    <div class="job-meta">
                                        <span><i class="fas fa-clock"></i> Posted 5 hours ago</span>
                                        <span><i class="fas fa-users"></i> 8 proposals</span>
                                        <span><i class="fas fa-tag"></i> UI/UX Design</span>
                                    </div>
                                    <div class="job-skills">
                                        <span class="skill-tag">Figma</span>
                                        <span class="skill-tag">Adobe XD</span>
                                        <span class="skill-tag">Sketch</span>
                                    </div>
                                    <button class="btn btn-primary btn-sm">Apply Now</button>
                                </div>

                                <div class="job-card">
                                    <div class="job-header">
                                        <h4>Database Optimization</h4>
                                        <span class="job-budget">$800</span>
                                    </div>
                                    <p>Seeking a database expert to optimize MySQL database performance and improve query speed</p>
                                    <div class="job-meta">
                                        <span><i class="fas fa-clock"></i> Posted 1 day ago</span>
                                        <span><i class="fas fa-users"></i> 12 proposals</span>
                                        <span><i class="fas fa-tag"></i> Database</span>
                                    </div>
                                    <div class="job-skills">
                                        <span class="skill-tag">MySQL</span>
                                        <span class="skill-tag">Database Design</span>
                                        <span class="skill-tag">Performance</span>
                                    </div>
                                    <button class="btn btn-primary btn-sm">Apply Now</button>
                                </div>
                            </div>
                        </div>

                        <div class="dashboard-section">
                            <div class="section-header">
                                <h2>My Active Projects</h2>
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