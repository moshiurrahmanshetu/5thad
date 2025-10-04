
    <!-- Header Top Bar -->
<?php include 'includes/header-topbar.php'; ?>
    
    <!-- Header Menu -->
<?php include 'includes/header-menu.php'; ?>
    
<section class="login-section py-5">
  <div class="form-container">
    <div class="card" id="registerCard">
      <h2>Register</h2>
      <form>
        <button type="button" class="google-btn">
          <img src="https://www.svgrepo.com/show/355037/google.svg" width="18"> Continue With Google
        </button>
        <hr>
        <div class="form-group">
          <input type="text" id="name" placeholder=" ">
          <label for="name">Full Name</label>
        </div>
        <div class="form-group">
          <input type="email" id="regEmail" placeholder=" ">
          <label for="regEmail">Email</label>
        </div>
        <div class="form-group password-wrapper">
          <input type="password" id="regPassword" placeholder=" ">
          <label for="regPassword">Password</label>
          <button type="button" class="toggle-password" onclick="togglePassword('regPassword', this)">
            <i class="fa-regular fa-eye"></i>
          </button>
        </div>
        <div class="form-group password-wrapper">
          <input type="password" id="confirmPassword" placeholder=" ">
          <label for="confirmPassword">Confirm Password</label>
          <button type="button" class="toggle-password" onclick="togglePassword('confirmPassword', this)">
            <i class="fa-regular fa-eye"></i>
          </button>
        </div>
        <button type="submit" class="login-btn">Register</button>
        
      </form>
      <div class="register-link">
        Already have an account? <a href="login.php">Login</a>
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

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
