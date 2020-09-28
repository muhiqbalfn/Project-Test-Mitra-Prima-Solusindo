<div class="container">
  <div class="card-body" align="center">
    <div align="center">
        <a href="#"><h4><i>Form Login</i></h4></a>
    </div>
    <div class="login-form-container col-md-3" id="login-form">
      <div class="login-form-content">
        <form action="<?=base_url('Controller/proses_login')?>" method="post" class="login-form">
          <div class="input-container">
            <i class="fa fa-envelope"></i>
            <input type="text" class="input" name="user" placeholder="Username" required/>
          </div>
          <div class="input-container">
            <i class="fa fa-lock"></i>
            <input type="password"  id="login-password" class="input" name="pass" placeholder="Password" required/>
          </div>
          <div class="rememberme-container">
            <input type="checkbox" name="rememberme" id="rememberme"/>
            <label for="rememberme" class="rememberme"><span>Biarkan tetap masuk</span></label>
          </div>
          <input type="submit" name="login" value="Login" class="button"/>
        </form>
      </div>
    </div><br>
    <div>
      <h5>User/pass : iqbal/iqbal</h5>
    </div>

  </div>
</div>