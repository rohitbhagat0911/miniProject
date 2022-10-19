

<?php
include_once './components/upperindex.php';

session_start();
ob_start();

if (isset($_SESSION['isLoggedIn'])) {
  header('Location: adminPage.php');
}

?>

<div class="content-pos" style="border: 0px solid black; width: 50vw; display:block; margin-left:auto; margin-right: auto; margin-top: 14em;"   >

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
  <!-- Email input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form2Example1">Email address</label>
    <input type="email" id="form2Example1" name="user" class="form-control inputcu" required/>
   
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form2Example2">Password</label>
    <input type="password" id="form2Example2" name="pass" class="form-control inputcu" required />
    
  </div>

  <button type="submit" class="btn btn-success btn-block mb-4" name="submit">Sign in</button>

 
  
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $user = $_REQUEST['user'];
  $pass = $_REQUEST['pass'];

  include_once 'server/adminVerifier.php';

  

  if ($row_count == 1) {
      
    $_SESSION['username'] = $_REQUEST['user'];
    $_SESSION['isLoggedIn'] = true;
    header("Location: adminHome.php");
    ob_end_flush();
  } else if($row_count == 0 && isset($_REQUEST['submit'])) {
        ?>
         
          <div class="alert alert-danger" role="alert">
               Please enter valid email or password
          </div>
        <?php
  }

}


?>


</div>


<?php include_once './components/lowerindex.php'; ?>

