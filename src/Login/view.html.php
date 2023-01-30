
<?php echo $msg ?? ''; ?>
<form method="POST" action="">
 <div id="form">
        <form name="form" method="POST">
            <h1>Login form</h1>

            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="example@gmail.com" name="email" required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <!-- <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" id="pass" class="form-control" placeholder="Password" required><br><br>
            </div> -->
            <div class="form-group">
  <label for="exampleInputPassword1">Password</label>
  <div class="input-group">
    <input type="password" name="password" id="pass" class="form-control" placeholder="Password" required>
    <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="button" onclick="showPassword()">
      <i class="fa-solid fa-eye-slash"></i>
      </button>
    </div>
  </div>
</div>

            
            <br>
            <input type="submit" name="Login" id="btn" value="Login" class="btn btn-primary">
            <button type="button" class="btn btn-primary" onclick="location.href='<?php echo 'index.php?module=Register' ?>'">SignIn</button>


          </form>


    </div>



</form>
