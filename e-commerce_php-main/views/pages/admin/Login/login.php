<?php
	$title = 'Login';
	$category = 'active';
	ob_start();
  $emailValue = isset($_COOKIE['remember_email']) ? $_COOKIE['remember_email'] : '';

?>


<script>
    const loginError = <?php echo $error ? 'true' : 'false'; ?>;
</script>



<div class="row justify-content-center">
  <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

    <div class="d-flex justify-content-center py-4">
      <a href="index.html" class="logo d-flex align-items-center w-auto">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
    </div><!-- End Logo -->

    <div class="card mb-3">

      <div class="card-body">

        <div class="pt-4 pb-2">
          <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
          <p class="text-center small">Enter your username & password to login</p>
        </div>

        <form class="row g-3 needs-validation" action="" method="POST" novalidate onsubmit="return validateForm()">

          <div class="col-12">
            <label for="yourUsername" class="form-label">Email</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">@</span>
              <input type="email" name="email" class="form-control" id="yourUsername" value="<?php echo htmlspecialchars($emailValue); ?>" >
              <div class="invalid-feedback">Please enter your Email.</div>
            </div>
          </div>

          <div class="col-12">
            <label for="yourPassword" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="yourPassword" >
            <div class="invalid-feedback">Please enter your Password!</div>
          </div>

          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
              <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary w-100" type="submit">Login</button>
          </div>
        </form>

      </div>
    </div>

  </div>
</div>






<?php
  $content = ob_get_clean();
  require "./views/pages/admin/layout.php";
?>
