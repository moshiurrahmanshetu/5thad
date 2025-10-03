<?php
// Publisher Dashboard Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publisher Dashboard - FreelanceHub</title>
    <meta name="description" content="Manage your freelance projects and find new opportunities to grow your business.">
    
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
    
    <!-- Publisher Dashboard Content -->
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
                
                <!-- Main Content -->
                <div class="col-lg-9 col-md-8">
                    <div class="dashboard-content">
                        <!-- Dashboard Header -->
                        <div class="dashboard-header">
                            <h1>Publisher Dashboard</h1>
                            <div class="dashboard-actions">
                                <button class="btn btn-primary">
                                    <i class="fas fa-search"></i> Find Jobs
                                </button>
                            </div>
                        </div>
                        
                        <!-- Stats Cards -->
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
                        
                        <!-- Available Jobs -->
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
                        
                        <!-- My Projects -->
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

<style>
.jobs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 20px;
}

.job-card {
    background: var(--background-white);
    border-radius: 10px;
    padding: 25px;
    border: 1px solid var(--border-color);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.job-card:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-light);
}

.job-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.job-header h4 {
    margin: 0;
    color: var(--text-dark);
    font-size: 1.1rem;
}

.job-budget {
    background: var(--gradient-primary);
    color: white;
    padding: 5px 12px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 14px;
}

.job-card p {
    color: var(--text-light);
    margin-bottom: 15px;
    line-height: 1.5;
}

.job-meta {
    display: flex;
    gap: 15px;
    margin-bottom: 15px;
    font-size: 14px;
    color: var(--text-light);
    flex-wrap: wrap;
}

.job-meta span {
    display: flex;
    align-items: center;
    gap: 5px;
}

.job-skills {
    display: flex;
    gap: 8px;
    margin-bottom: 15px;
    flex-wrap: wrap;
}

.skill-tag {
    background: var(--background-light);
    color: var(--text-dark);
    padding: 4px 10px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 500;
}

.job-card .btn {
    width: 100%;
    margin-top: 10px;
}

@media (max-width: 768px) {
    .jobs-grid {
        grid-template-columns: 1fr;
    }
    
    .job-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
    
    .job-meta {
        flex-direction: column;
        gap: 8px;
    }
}
</style>
