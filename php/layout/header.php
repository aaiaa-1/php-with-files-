
<?php

require_once './ifconnect.php';
require_once "./informationsUser.php";

?>

<style>
  *{
    font-family: 'Montserrat', sans-serif;
  }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href=<?php echo "http://localhost/folder/php-main/php/profile.php?uid=".$uid.""; ?> >
      <img src="pics/setup/logo.png" style="width: 70px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href= <?php echo "http://localhost/folder/php-main/php/infos.php?uid=".$uid.""; ?>  >Profile</a>
        </li>       
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/folder/php-main/php/produitPage.php" tabindex="-1" aria-disabled="true">product</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" >
            <form action="" method="post">
              <input type="submit" value="logout" name="logout" style="background-color: #4c956c; border:none; border-radius:15px; padding:8px;">
            </form>
          </a>       
        </li>

      </ul>
     
    </div>
  </div>
</nav>


<!-- ----------------LOG OUT SYSTEM---------------------------------- -->

<?php

if(!empty($_POST['logout'])){
  $token = fopen("./token.txt","w");

  fclose($token);
  
  $res = unlink("./token.txt");
  
  if($res){
      header("Location: http://localhost/folder/php-main/php/signin.php");   
  }else{
     exit('error in sigout !');
  }
}
?>
<!-- ----------------------------------------------------------------- -->