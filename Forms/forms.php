<?php

class forms{
   public function signup(){

?>
<form method="post" action="try_mail.php">
   <div class="mb-3">
      <label for="inputname" class="form-label">Name:</label>
      <input type="text" class="form-control" id="inputname" aria-describedby="namehelp" name="name">
      <div id="namehelp" class="form-text"></div>
   </div>
    <div class="mb-3">
      <label for="inputemail" class="form-label">Email Adress: </label>
      <input type="email" class="form-control" id="inputemail" aria-describedby="emailHelp" name="email">
      <div id="emailHelp" class="form-text"></div>
   </div>
    <div class="mb-3">
      <label for="inputPassword" class="form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword" name="password"> >
      <div id="namehelp" class="form-text"></div>
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
   public function signin(){
?>

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