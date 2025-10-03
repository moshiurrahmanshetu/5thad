<?php
// Login Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - FreelanceHub</title>
    <meta name="description" content="Login to your FreelanceHub account to access your dashboard and projects.">
    
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
    
    <!-- Login Section -->
    <section class="section" style="min-height: 70vh; display: flex; align-items: center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-card">
                        <div class="text-center mb-4">
                            <h2>Welcome Back</h2>
                            <p class="text-muted">Sign in to your account</p>
                        </div>
                        
                        <form>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" required>
                            </div>
                            
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">
                                    Remember me
                                </label>
                            </div>
                            
                            <button type="submit" class="btn btn-primary w-100 mb-3">
                                <i class="fas fa-sign-in-alt me-2"></i>Sign In
                            </button>
                            
                            <div class="text-center">
                                <a href="#" class="text-decoration-none">Forgot your password?</a>
                            </div>
                        </form>
                        
                        <hr class="my-4">
                        
                        <div class="text-center">
                            <p class="mb-3">Don't have an account?</p>
                            <a href="register.php" class="btn btn-outline-primary w-100">
                                <i class="fas fa-user-plus me-2"></i>Create Account
                            </a>
                        </div>
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

<style>
.login-card {
    background: var(--background-white);
    padding: 40px;
    border-radius: 10px;
    box-shadow: var(--shadow-medium);
    border: 1px solid var(--border-color);
}

.login-card .btn {
    padding: 12px;
    font-weight: 600;
}

.login-card .form-control {
    padding: 12px 15px;
    border-radius: 8px;
    border: 1px solid var(--border-color);
}

.login-card .form-control:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 0.2rem rgba(224, 168, 0, 0.25);
}
</style>
