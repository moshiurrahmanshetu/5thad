<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <meta name="description" content="Find the best freelancers and freelance jobs. Connect talented professionals with businesses worldwide.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" type="image/x-icon" href="assets/icon.png">
</head>
<body>

<?php include 'includes/header-topbar.php'; ?>
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

<?php include 'includes/footer.php'; ?>
</body>
</html>


<style>
  .login-section{
    position: relative;
    width: 100%;
    height: auto;
    margin: 0 auto;
    background: var(--ad-gradient-bg);
    background-size: 400% 400%;
    animation: gradientBG 12s ease infinite;
  }
  @keyframes gradientBG {
    0% {background-position: 0% 50%;}
    50% {background-position: 100% 50%;}
    100% {background-position: 0% 50%;}
  }
  .login-section .form-container {
    position: relative;
    max-width: 600px;
    margin: 0 auto;
  }
  @media screen and (min-width:320px) and (max-width:625px) {
  .login-section .form-container {
    margin: 0 10px;
  }
  .login-section .card {
      padding: 28px 16px !important;
  }
  }
  .login-section .card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border-radius: 12px;
    padding: 40px;
    text-align: center;
    box-shadow: 0 8px 32px rgba(0,0,0,0.3);
    color: #fff;
    border: 1px solid rgba(255,255,255,0.2);
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    transition: all 0.6s ease;
    opacity: 1
  }
  .login-section .card.active {
    opacity: 1;
    transform: translateY(0);
    pointer-events: auto;
  }
  .login-section .card h2 {
    margin-bottom: 20px;
    font-size: 24px;
    font-weight: bold;
  }
  .login-section .form-group {
    position: relative;
    margin-bottom: 20px;
    text-align: left;
  }
  .login-section .form-group input {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 6px;
    outline: none;
    font-size: 14px;
    background: rgba(255,255,255,0.2);
    color: #fff;
  }
  .login-section .form-group input::placeholder {
    color: transparent;
  }
  .login-section .form-group label {
    position: absolute;
    top: 12px;
    left: 12px;
    color: #ddd;
    font-size: 14px;
    pointer-events: none;
    transition: 0.3s ease;
  }
  .login-section .form-group input:focus + label,
  .login-section .form-group input:not(:placeholder-shown) + label {
    top: -8px;
    left: 10px;
    font-size: 12px;
    color: #fff;
  }
  .password-wrapper {
    position: relative;
  }
  .toggle-password {
    position: absolute;
    top: 50%;
    right: 12px;
    transform: translateY(-50%);
    cursor: pointer;
    font-size: 14px;
    color: #fff;
  }
  .login-options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 10px 0 20px;
    font-size: 12px;
  }
  .login-options label {
    display: flex;
    align-items: center;
    gap: 5px;
    cursor: pointer;
  }
  .login-options a {
    color: var(--ad-white);
    text-decoration: none;
  }
  .login-options a:hover{
    color: var(--ad-sec-cl);
    text-decoration: underline;
  }
  .login-btn, .google-btn {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 25px;
    font-size: 16px;
    cursor: pointer;
    margin-bottom: 15px;
    transition: all 0.3s ease;
  }
  .login-btn {
    background: #fff;
    color: #000;
    font-weight: bold;
  }
  .login-btn:hover {
    background: #ddd;
  }
  .google-btn {
    position: relative;
    display: flex; justify-content: center; align-items: center; gap: 8px; color: #fff; padding: 12px 28px; background: #111; border: none; border-radius: 20px; font-weight: 600; cursor: pointer; z-index: 1; overflow: hidden;
  }
  .google-btn::before {
    content: "";
    position: absolute;
    inset: -3px;
    border-radius: 20px;
    background: var(--ad-gg-bg);
    background-size: 400% 400%;
    animation: moveGradient 10s linear infinite;
    z-index: -1;
  }
  .google-btn::after {
    content: "";
    position: absolute;
    inset: 3px;
    background: #1b1b1b;
    border-radius: 17px;
    z-index: -1;
  }
  @keyframes moveGradient {
    0% {
      background-position: 0% 50%;
    }
    100% {
      background-position: 400% 50%;
    }
  }
  .google-btn:hover::after {
    background: #0c0c0c;
  }

  .facebook-btn {
    color: var(--ad-black);
    background: var(--ad-pr-cl);
  }
  .facebook-btn img{
    height: 25px;
    width: 25px;
  }
  .facebook-btn:hover {
    background: #c09102;
  }
  .register-link {
    font-size: 14px;
    margin-top: 10px;
  }
  .register-link a {
    color: #fff;
    font-weight: bold;
    text-decoration: none;
    cursor: pointer;
  }
  .register-link a:hover{
    text-decoration: underline;
    color: var(--ad-pr-cl);
  }
  .toggle-password {
    position: absolute; top: 50%; right: 12px; transform: translateY(-50%); cursor: pointer; font-size: 16px; color: #fff; background: none; border: none;
  }
  .register-link span{
    color: #ffffffff;
    font-weight: bold;
    cursor: pointer;
  }
  .register-link span:hover{
    text-decoration: underline
  }

  .user-type-radio {
    display: inline-block;
    margin-right: 30px;
  }
</style>
