<?php
include_once '../templates/header.php';
include_once '../includes/connect.php';

if(isset($_SESSION['u_id']) && !empty($_SESSION['u_id'])) {
  echo 'Set and not empty, and no undefined index error!';
}else{
  header("location:../admin/index.php?error=nopass");
}

var_dump($_SESSION);

?>

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

            <a class="blog__slide__label" href="../includes/logout.inc.php">Logout</a>


            <!--================ End of Content =================-->
            
        
          </div>
        </div>




    </div>
    </section>
    <!--================ End Blog Post Area =================-->
    </main>

    <?php 
    include_once '../templates/footer.php';
    ?>