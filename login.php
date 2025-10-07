<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <meta name="description" content="Find the best freelancers and freelance jobs. Connect talented professionals with businesses worldwide.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" type="image/x-icon" href="assets/icon.png">
</head>
<body>

<?php include 'includes/header-topbar.php'; ?>
<?php include 'includes/header-menu.php'; ?>
    
<section class="login-section py-5">
  <div class="form-container">
    <div class="card active" id="loginCard">
      <h2>Login</h2>
      <form>
        <button type="button" class="google-btn">
          <img src="https://www.svgrepo.com/show/355037/google.svg" width="18"> Continue With Google
        </button>
        <hr>
        <div class="form-group">
          <input type="email" id="loginEmail" placeholder=" ">
          <label for="loginEmail">Email</label>
        </div>
        <div class="form-group password-wrapper">
          <input type="password" id="loginPassword" placeholder=" ">
          <label for="loginPassword">Password</label>
          <button type="button" class="toggle-password" onclick="togglePassword('loginPassword', this)">
            <i class="fa-regular fa-eye"></i>
          </button>
        </div>
        <div class="login-options">
          <label><input type="checkbox"> Remember Me</label>
          <a href="#">Forgot Password?</a>
        </div>
        <button type="submit" class="login-btn">Login</button>
        
      </form>
      <div class="register-link">
        Don’t have an account? <a href="register.php">Register</a>
      </div>
    </div>
  </div>
</section>

<script>
    function togglePassword(id, el) {
      const passwordField = document.getElementById(id);
      const icon = el.querySelector('i');
      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        icon.classList.remove('fa-regular', 'fa-eye');
        icon.classList.add('fa-solid', 'fa-eye-slash');
      } else {
        passwordField.type = 'password';
        icon.classList.remove('fa-solid', 'fa-eye-slash');
        icon.classList.add('fa-regular', 'fa-eye');
      }
    }
</script>

<?php include 'includes/footer.php'; ?>
</body>
</html>
