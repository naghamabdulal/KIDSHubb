<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=b, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="resp.css">
   
    <title>KIDS HUB</title>
</head>




<body>


  <!-- computer nav -->
  <nav class="navbar navbar-expand-lg navbar-light bg">
  <a class="navbar-brand" href="#">
    <img src="pic/l.png" alt="Logo" class="logo">
  </a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto listcom">
      <li class="nav-item">
        <a class="nav-link" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#child">Child info</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#join">Join Us</a>
      </li>
      
    </ul>
  </div>
</nav>

<!-- header end -->


 <!-- start home -->
 <section class="home-container" id="home">
    <div class="row">
        <div class="image">
            <img id="img" src="pic/DR.png" 
                class="img" alt="" />
        </div>
        <div class="content">
            <h1 id="landing" class="hh1"> Kids Hub</h1>
            
            <button  class="btn2" id="login" >
                <h2>Login</h2>
            </button>
        </div>
    </div>
</section>
<!-- end home -->
 <hr style="border: 1px dashed #5d3d3d; margin: 10px;">
   <!-- about section start-->


   <section class="about-container" id="about">
    <div class="row2">
        
            <img src="pic/about.png" alt=""
                class="img2">
        
        <div class="content">
            <h3 class="h"> 
            <p class="para">Welcome to Kid Hub Web dedicated to supporting mothers in caring for their children with love and confidence.
              We provide guidance, reliable information, and practical tools for every stage of child care, from development and nutrition to daily routines. Our mission is to empower moms, making motherhood easier with trusted advice and ongoing support every step of the way.</p>
            </h3>


            
<button class="btn" id="contact-btn"><a href="#join">joinus</a></button>
            
        </div>
    </div>

</section>

<hr style="border: 1px dashed #5d3d3d; margin: 10px;">
<!-- end about us -->

<div class="card-container" id="child">
  <div class="card border-primary mb-3" style="max-width: 19rem;">
      <div class="card-header">For infants after 6 month</div>
      <div class="card-body text-primary">
          <h5 class="card-title">Nutrition</h5>
          <p class="card-text">Introduce iron-fortified cereals as the first solid food</p>
      </div>
  </div>
  <div class="card border-secondary mb-3" style="max-width: 18rem;">
      <div class="card-header">Children between 1-3 years </div>
      <div class="card-body text-secondary">
          <h5 class="card-title">Nutrition</h5>
          <p class="card-text">Small, frequent meals containing vegetables and fruits..</p>
      </div>
  </div>
  <div class="card border-success mb-3" style="max-width: 18rem;">
      <div class="card-header">Children between 1-5</div>
      <div class="card-body text-success">
          <h5 class="card-title">Nutrition</h5>
          <p class="card-text">They need calcium for proper bone growth.</p>
      </div>
  </div>

  <div class="card border-danger mb-3" style="max-width: 18rem;">
      <div class="card-header">6-12 months</div>
      <div class="card-body text-danger">
          <h5 class="card-title"> Child development and growth  </h5>
          <p class="card-text"> encourage him to play with toys that help improve his balance</p>
      </div>
  </div>
  <div class="card border-warning mb-3" style="max-width: 18rem;">
      <div class="card-header">Child</div>
      <div class="card-body text-warning">
          <h5 class="card-title">healthy sleep </h5>
          <p class="card-text">Put your child to bed at the same time every day.</p>
      </div>
  </div>
  <div class="card border-info mb-3" style="max-width: 18rem;">
      <div class="card-header">Child</div>
      <div class="card-body text-info">
          <h5 class="card-title"> vaccination</h5>
          <p class="card-text">Make sure to follow the routine vaccination schedule.</p>
      </div>
  </div>

  <div class="card border-light mb-3" style="max-width: 18rem;">
      <div class="card-header"> Child</div>
      <div class="card-body">
          <h5 class="card-title">Home Safety</h5>
          <p class="card-text">Place barriers on stairs and watch for sharp corners on furniture.</p>
      </div>
  </div>
  <div class="card border-dark mb-3" style="max-width: 18rem;">
      <div class="card-header">Child</div>
      <div class="card-body text-dark">
          <h5 class="card-title">In public places</h5>
          <p class="card-text">Teach your child not to stray far from you, and use a safety harness .</p>
      </div>
  </div>
</div>
<!-- end card -->
<hr style="border: 1px dashed #5d3d3d; margin: 10px;">
 <!-- joinus -->
 <div class="co" id="join">
  <section class="container" id="joinus">
      <h1 class="heading"> Join<span>Us</span></h1>

 

  <form action="connect.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" class="text" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required class="email">

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required class="password">

      <input type="submit" value="Create Account" class="submit" name="joinus">
      
      
  </form>

</section>

<footer style="text-align: center ; " >
    <?php include 'foooter.php'; ?>
</footer>



<script src="main.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>