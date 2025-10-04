// Dashboard specific JavaScript functionality
$(document).ready(function () {

    // Dashboard navigation
    $('.dashboard-nav a').click(function (e) {
        e.preventDefault();

        // Remove active class from all nav items
        $('.dashboard-nav li').removeClass('active');

        // Add active class to clicked item
        $(this).parent().addClass('active');

        // Get the target section
        var target = $(this).attr('href');

        // Show loading state
        $('.dashboard-content').html('<div class="text-center p-5"><i class="fas fa-spinner fa-spin fa-2x"></i><p class="mt-3">Loading...</p></div>');

        // Simulate loading delay
        setTimeout(function () {
            loadDashboardSection(target);
        }, 500);
    });

    // Load dashboard section content
    function loadDashboardSection(section) {
        var content = '';

        switch (section) {
            case '#overview':
                content = getOverviewContent();
                break;
            case '#projects':
                content = getProjectsContent();
                break;
            case '#messages':
                content = getMessagesContent();
                break;
            case '#earnings':
                content = getEarningsContent();
                break;
            case '#profile':
                content = getProfileContent();
                break;
            case '#settings':
                content = getSettingsContent();
                break;
            default:
                content = getOverviewContent();
        }

        $('.dashboard-content').html(content);
    }

    // Overview content
    function getOverviewContent() {
        return `
            <div class="dashboard-header">
                <h1>Dashboard</h1>
                <div class="dashboard-actions">
                    <button class="btn btn-primary">
                        <i class="fas fa-plus"></i> New Project
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
                </div>
            </div>
        `;
    }

    // Projects content
    function getProjectsContent() {
        return `
            <div class="dashboard-header">
                <h1>My Projects</h1>
                <div class="dashboard-actions">
                    <button class="btn btn-primary">
                        <i class="fas fa-plus"></i> New Project
                    </button>
                </div>
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
        `;
    }

    // Messages content
    function getMessagesContent() {
        return `
            <div class="dashboard-header">
                <h1>Messages</h1>
                <div class="dashboard-actions">
                    <button class="btn btn-primary">
                        <i class="fas fa-plus"></i> New Message
                    </button>
                </div>
            </div>
            
            <div class="messages-list">
                <div class="message-item">
                    <div class="message-avatar">
                        <img src="../assets/images/img_avatar2.png" alt="User">
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
        `;
    }

    // Earnings content
    function getEarningsContent() {
        return `
            <div class="dashboard-header">
                <h1>Earnings</h1>
                <div class="dashboard-actions">
                    <button class="btn btn-primary">
                        <i class="fas fa-download"></i> Download Report
                    </button>
                </div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-4 mb-3">
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
                
                <div class="col-md-4 mb-3">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-calendar"></i>
                        </div>
                        <div class="stat-content">
                            <h3>$1,200</h3>
                            <p>This Month</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-3">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="stat-content">
                            <h3>$450</h3>
                            <p>Pending</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="dashboard-section">
                <h3>Recent Transactions</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Project</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nov 28, 2024</td>
                                <td>Mobile App Design</td>
                                <td>$1,200</td>
                                <td><span class="status status-completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>Nov 15, 2024</td>
                                <td>Website Redesign</td>
                                <td>$800</td>
                                <td><span class="status status-completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>Nov 5, 2024</td>
                                <td>Logo Design</td>
                                <td>$300</td>
                                <td><span class="status status-completed">Completed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        `;
    }

    // Profile content
    function getProfileContent() {
        return `
            <div class="dashboard-header">
                <h1>Profile</h1>
                <div class="dashboard-actions">
                    <button class="btn btn-primary">
                        <i class="fas fa-edit"></i> Edit Profile
                    </button>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="User Avatar" class="avatar-img mb-3">
                        <h4>John Doe</h4>
                        <p>Web Developer</p>
                        <button class="btn btn-outline-primary">Change Photo</button>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" value="John">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" value="Doe">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" value="john.doe@example.com">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Bio</label>
                            <textarea class="form-control" rows="4">Experienced web developer with 5+ years of experience in React, Node.js, and modern web technologies.</textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Skills</label>
                            <input type="text" class="form-control" value="React, Node.js, JavaScript, HTML, CSS, PHP, MySQL">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        `;
    }

    // Settings content
    function getSettingsContent() {
        return `
            <div class="dashboard-header">
                <h1>Settings</h1>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="dashboard-section">
                        <h3>Account Settings</h3>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Email Notifications</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked>
                                    <label class="form-check-label">New project notifications</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked>
                                    <label class="form-check-label">Message notifications</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">Marketing emails</label>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Privacy</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked>
                                    <label class="form-check-label">Show profile to public</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">Show earnings publicly</label>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Save Settings</button>
                        </form>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="dashboard-section">
                        <h3>Security</h3>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Current Password</label>
                                <input type="password" class="form-control">
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <input type="password" class="form-control">
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Change Password</button>
                        </form>
                    </div>
                </div>
            </div>
        `;
    }

    // Animate stat cards on scroll
    $(window).scroll(function () {
        $('.stat-card').each(function () {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();

            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                $(this).addClass('animate-in');
            }
        });
    });

    // Project card interactions
    $(document).on('click', '.project-card', function () {
        $(this).toggleClass('selected');
    });

    // Message item interactions
    $(document).on('click', '.message-item', function () {
        $('.message-item').removeClass('selected');
        $(this).addClass('selected');
    });
});