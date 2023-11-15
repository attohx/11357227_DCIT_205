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


<section class="bannerbg">
    <div class="overlay-bg">
        <div class="video-box"></div>
    </div>
</section>

<section class="sect-gap">
    <div class="events-area" >
        <div class="events-area-container" >
            <div class="events-image" ></div>
            <div class="events-menu-content">
                <div class = "title">
                    <h1>Departmental Events</h1>
                    <p>Programmes, Seminars, and events organised by the department</p>
                    <a href="events.php">
                        <b>View Upcoming and Ongoing Events</b>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sect-gap">
    <div class="container2">
        <div class="popular-courses-section-align">
            <div class="popular-courses-menu-content">
                <div class="title">
                    <h1>Short Courses we offer</h1>
                    <p>Our eight week intensive certificate course is open to senior high school graduates, tertiary students, school graduates, workers and the general public.</p>
                    <h6>Evening and weekend session only</h6>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="search-courses">
    <div id="shortCourse"></div>
    <div class="overlay"></div>
    <div class="container2">
        <div class="search-courses-content" >
            <div class="search-courses-left">
                <h1 class="white-text" >
                    "Join our Short Course Program"
                    <br>
                </h1>
                <p class="white-text" >
                    "To be able to take full advantage of the opportunities available to this technology driven era, 
                    it is important to acquire new skills. 
                    Skills in ICT that will springboard your career"
                </p>
                <div class="details-content" >
                    <div class="single-details">
                        <span class=""></span>
                        <h4>Expert Instructors</h4>
                        <p>
                        "Our instructors have years of industry
                         experience which presents students with
                          a unique opportunity of learning
                           from the best"
                        </p>
                    </div>
                    <div class="single-details">
                        <span class=""></span>
                        <h4>Certification</h4>
                        <p>
                        "You earn a certificate of completion
                         from the department after completing
                          and passing the prescribed exam"
                        </p>
                    </div>
                </div>
                <a class="generic-button" href="github.com">Register</a>
            </div>
        </div>
    </div>

</section>

</div>

<?php
    @include "include/footer.php";
?> 
</body>

</html>