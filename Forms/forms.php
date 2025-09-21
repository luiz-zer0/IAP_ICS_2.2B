<?php

class forms{
   public function signup($conf,$ObjFncs){
      $error=$ObjFncs->getMsg('errors');
      print $ObjFncs->getMsg('msg');
      $err = isset($error) && is_array($error) ? $error : [];
?>
<h2>Sign up here</h2>
<form method="post" action="" autocomplete="off">
   <div class="mb-3">
      <label for="inputname" class="form-label">Name:</label>
      <input type="text" class="form-control" id="inputname" aria-describedby="namehelp" name="fullname" maxlength="50" placeholder="Enter your full name" value="<?php echo isset($_SESSION['fullname']) ? $_SESSION['fullname'] : ''; ?>" required>
      <?php if (isset($err['fullname_error'])) { ?><div id="nameHelp" class="alert alert-danger" role="alert"><?php echo $err['fullname_error']; ?></div><?php } ?>
   </div>
    <div class="mb-3">
      <label for="inputemail" class="form-label">Email Adress: </label>
      <input type="email" class="form-control" id="inputemail" aria-describedby="emailHelp" name="email" maxlength="60" placeholder="Enter your email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" required>
        <?php if(isset($err['mailFormat_error'])) { ?><div id="emailHelp" class="alert alert-danger" role="alert"><?php echo $err['mailFormat_error']; ?></div><?php } ?>
    <?php if(isset($err['mailDomain_error'])) { ?><div id="emailHelp" class="alert alert-danger" role="alert"><?php echo $err['mailDomain_error']; ?></div><?php } ?>
   </div>
    <div class="mb-3">
      <label for="inputPassword" class="form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword" name="password"  placeholder="Enter your password" value="<?php echo isset($_SESSION['password']) ? $_SESSION['password'] : ''; ?>" required>
      <?php if(isset($err['password_error'])) { ?><div id="passwordHelp" class="alert alert-danger" role="alert"><?php echo $err['password_error']; ?></div><?php } ?>

   </div>
   <?php
      $this->submit_button('Sign Up','signup');
   ?>
   <a href="signin.php">Already have an account? Login</a>
</form>

<?php
  }
  private function submit_button($value,$name){

?>
<button type="submit" class="btn btn-primary" name="<?php echo $name; ?>"><?php echo $value; ?></button>

<?php
  }
   public function signin($conf,$ObjFncs){
?>
<h2>Sign in here</h2>

<form >
   <div class="mb-3">
      <label for="inputemail" class="form-label">Email Adress: </label>
      <input type="email" class="form-control" id="inputemail" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
   </div>
      <div class="mb-3">
         <label for="inputPassword" class="form-label">Password</label>
         <input type="password" class="form-control" id="inputPassword" >
         <div id="namehelp" class="form-text"></div>
      </div>
      <?php
         $this->submit_button('Sign In','signin');
      ?>
      <a href="signup.php">Don't have an account? Sign Up</a>
</form>
<?php
   }
}