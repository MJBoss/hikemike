<?php
  include_once '../templates/header.php';
  include_once "../includes/connect.php";

    $message = "Please Log-in";
    

    if(empty($_GET)){
      $message = "Please Log-in!";
    }else if($_GET["error"] == "wrongpass"){
      $message = "Wrong Password!";
    }else if($_GET["error"] == "logout"){
      $message = "Logged Out!";
    }else{
      $message = "Invalid Account";
    }




?>



  

  <style>
    .prompt {
      display: block;
      text-align: center;
      color: red;
      font-weight: bolder;
    }
  </style>

  <link rel="stylesheet" href="css/style-admin.css">

  <!--================ Hero sm Banner start =================-->    
  <section class="mb-30px">
    <div class="container">
      <div class="hero-banner hero-banner--sm">
        <div class="hero-banner__content">
          <h1>Empty Page</h1>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Create your Account</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->    

  

  <!--================ Start Blog Post Area =================-->
  <section class="blog-post-area section-margin">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">

            <!--================ Start of Content =================-->
            <form action="../includes/login.inc.php" method="post">
           
              <div class="imgcontainer">
              <h1>Sign-In</h1>
              <img src="../img/author.jpg" alt="Avatar" class="avatar" style="margin-top: 20px;width: 220px;">
                
              </div>

              <div class="container">
                <div class="prompt"><?php echo $message ?></div>
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                    
                <button type="submit" name="login" style="width: 100%; padding: 8px 0; margin-top: 20px; ">Login</button>
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
              </div>

              <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
              </div>
            </form>
          


            <!--================ End of Content =================-->
            
        
          </div>
        </div>

    <?php 
      include_once '../templates/sidebar.php';
    ?>


    </div>
    </section>
    <!--================ End Blog Post Area =================-->
    </main>

    <?php 
      include_once '../templates/footer.php';
    ?>