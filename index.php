<!DOCTYPE html>
<html lang="en">
<head>
    
<?php
    @include "include/headie.php";
?>
   
</head>

<body>


<?php
    @include "include/navbar.php";
?>

<div class="main-container">



<!-- Carousel wrapper -->
<div class="container-fluid">
  <div class ="vidcontainer" >
    <div id="carouselVideo" class="carousel slide carousel-fade" data-mdb-ride="carousel"> 
      <!-- Inner -->
      <div class="carousel-inner">
          <!-- Single item -->
          <div class="carousel-item active">
              <video class="img-fluid img-thumbnail" width="100%" style="object-fit:contain" autoplay loop muted >
                  <source src="media/vid/video-bg.mp4" type="video/mp4" />
              </video>

          <div class="carousel-caption d-none d-md-block">
              <h1>U.G.C.S.D HUB</h1>      
              <p class="lead" >Your One Stop For Everything Related to Computer Science</p>
          </div>
      </div>

  </div>

</div>

</div>
<!-- Carousel wrapper -->
  
<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>Updates & Announcements</p>
      <a href="updates.php">
        <img src="media/img/compsci.jpg" class="img-responsive" style="width:50%" alt="Image">
      </a>
    </div>
    <div class="col-sm-3"> 
      <p>News Feed</p>
      <a href="feed.php">
        <img src="media/img/compsci.jpg" class="img-responsive" style="width:50%" alt="Image">
      </a>
    </div>
    <div class="col-sm-3"> 
      <p>Undergraduate & Graduate Courses</p>
      <a href="course_page.php">
        <img src="media/img/compsci.jpg" class="img-responsive" style="width:50%" alt="Image">
      </a>
    </div>
    <div class="col-sm-3">
      <p>Admission Requirements</p>
      <a href="adm_requirements.php">
        <img src="media/img/compsci.jpg" class="img-responsive" style="width:50%" alt="Image">
      </a>
      
    </div>
  </div>
</div><br>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>Free Course Materials</p>
      <a href="download_page.php">
        <img src="media/img/compsci.jpg" class="img-responsive" style="width:50%" alt="Image">
      </a>
    </div>
    <div class="col-sm-3"> 
      <p>International Students</p>
      <a href="int_students.php">
        <img src="media/img/compsci.jpg" class="img-responsive" style="width:50%" alt="Image">
      </a>
    </div>
    <div class="col-sm-3"> 
      <p>Head of Department & Faculty</p>
      <a href="hod_faculty.php">
        <img src="media/img/compsci.jpg" class="img-responsive" style="width:50%" alt="Image">
      </a>
    </div>
    <div class="col-sm-3">
      <p>Campus Life & Events</p>
      <a href="campus_events.php">
        <img src="media/img/compsci.jpg" class="img-responsive" style="width:50%" alt="Image">
      </a>
    </div>
  </div>
</div><br><br>

</div>

<?php
    @include "include/footer.php";
?> 
</body>

</html>