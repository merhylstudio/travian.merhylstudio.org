<div class="container">

  <div id="login-form">
  <form method="post" autocomplete="off">

    <div class="col-md-12">
      <div class="form-group">
        <h2>Sign In.</h2>
      </div>

      <div class="form-group">
        <hr />
      </div>
<?php
if ( isset($errMSG) ) {
?>
<div class="form-group">
  <div class="alert alert-danger">
     <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
  </div>
</div>
<?php
}
?>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
          <input type="email" name="email" class="form-control" placeholder="Your Email" required />
        </div>
      </div>

      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
          <input type="password" name="pass" class="form-control" placeholder="Your Password" required />
        </div>
      </div>

      <div class="form-group">
        <hr />
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-block btn-primary" name="btn-login">Sign In</button>
      </div>

      <div class="form-group">
        <hr />
      </div>

      <div class="form-group">
        <a href="register.php">Sign Up Here...</a>
      </div>
    </div>
  </form>
  </div>	
</div>
