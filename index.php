<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="stylesheet" 
  href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">

</head>
<body>

<?php include 'menu.php'; ?>  
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/bg1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Make it work, make it right, make it fast. </h3>
        <p> </p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/bg5.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Computers are fast; developers keep them slow.</h3>
        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/bg3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Clean code always looks like it was written by someone who cares. </h3>
        <p></p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
</div>
<div class="container-fluid">
<div class="row">
  <div class="col-lg-6 col-md-6 col-12">
   <img src="img/bg6.jpg" class="img-fluid aboutimg">
  </div>
  <div class="col-lg-6 col-md-6 col-12">
   <h2 class="display-4">I am Ananya Rawat</h2>
     <p class="py-3"> I specialize in creating interactive and user-friendly websites and management of responsive websites.
                            Skilled in  HTML, CSS, and JavaScript and ReactJs. I'm a strong advocate for writing clean, maintainable code and 
                            staying up-to-date with the latest industry trends and best practices. Adept at conceptualizing inventive ideas.I believe in a collaborative and 
                            client-centered approach to web development. By understanding your unique goals and requirements, 
                            I ensure that every project I work on is tailored to meet your specific needs. </p>
     <a href="about.php" class="btn btn-success">Check More</a>
  </div>
 </div>
</div>
</section>

<section class="my-5">
    <div class="py-5">
    <h1 class ="text-center">Profesional Skills</h1>   
    <p class="skill__text"> Proficiency in these fundamental web technologies is essential for creating the structure,
                             style, and interactivity of websites.</p>   
</div>
<h3>HTML</h3>
<div class="container">
<div class="html">75%</div>
</div>
<h3>CSS</h3>
<div class="container">
<div class="css">70%</div>
</div>
<h3>PHP</h3>
<div class="container">
<div class="php">60%</div>
</div>
<h3>JAVASCRIPT</h3>
<div class="container">
<div class="javascript">40%</div>
</div>
</section>

<section class="my-5">
    <div class="py-5">
    <h1 class ="text-center">Skill</h1>      
    </div>

    <div class="w-50 m-auto">
        <form action="info.php" method="post">
            <div class="form-group">
               <label>Username</label>
               <input type="text" name="User" autocomplete="off"
               class="form-control">
            </div>  
            <div class="form-group">
               <label>Email Id</label>
               <input type="text" name="email" autocomplete="off"
               class="form-control">
            </div>  
            <div class="form-group">
               <label>Mobile No.</label>
               <input type="text" name="mobile" autocomplete="off"
               class="form-control">
            </div>  
            <div class="form-group">
               <label>Comments</label>
               <textarea class="form-control" name="Comments">

               </textarea>
               <input type="text" name="User" autocomplete="off"
               class="form-control">
            </div>  
 <button type="submit" class="btn btn-success">Submit</button>

    </form>
  </div>
</section>


<footer>
    <p class="p-3 bg-dark text-white text-center">Portfolio</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>