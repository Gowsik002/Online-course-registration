<?php
require ("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>VIRTUAL X| Online COURSE SUBSCRIPTION</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
</head>
<body style="overflow-x:hidden; padding-bottom:100px;">
<style>
        p {
            text-align: justify;
        }
    </style>
  <?php
        include 'includes/header_menu.php';
    ?>
  <div>
    <div class="container mt-5 ">
      <div class="row justify-content-around">
        <div class="col-md-5 mt-3">
          <h3 class="text-warning pt-3 title">Who We Are ?</h3>
          <hr />
          <img
            src="images/back4.png"
            class="img-fluid d-block rounded mx-auto image-thumbnail">
          <p class="mt-2">
Title: Unlocking Knowledge: The Rise of Online Course Subscription Websites

In today's fast-paced world, continuous learning has become imperative for personal and professional growth. With the advent of technology, traditional learning methods have evolved, paving the way for online course subscription websites. These platforms offer a plethora of courses spanning various disciplines, empowering learners to acquire new skills at their own pace and convenience.

Revolutionizing Education: Online course subscription websites have revolutionized the education landscape by democratizing access to knowledge. Unlike traditional educational institutions constrained by geographical boundaries and rigid schedules, these platforms break down barriers, allowing individuals from diverse backgrounds to embark on a learning journey tailored to their interests and aspirations.

Diverse Course Catalog: One of the key attractions of online course subscription websites is their extensive catalog of courses. From programming and data science to photography and creative writing, there is something for everyone. Users can explore a wide range of subjects and delve deep into niche areas that align with their passions or career objectives.</p>
        </div>
        <div class="col-md-5 mt-3">
          <span class="text-warning pt-3">
            <h1 class="title">LIVE SUPPORT</h1>
            <h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3>
          </span>
          <hr>
          <p>Flexibility and Convenience: Flexibility is a hallmark of online learning, and subscription-based platforms epitomize this attribute. Learners have the freedom to choose when and where they want to study, fitting learning into their busy schedules. Whether it's early morning before work, during lunch breaks, or late at night, the flexibility offered by these platforms caters to the diverse needs of modern learners.

Cost-Effectiveness: Compared to traditional education, online course subscription websites often offer cost-effective alternatives. Instead of paying hefty tuition fees for individual courses, users can access a multitude of resources for a fraction of the cost. This affordability makes quality education accessible to a broader audience, including students, working professionals, and lifelong learners.

Interactive Learning Experience: Many online course subscription platforms leverage interactive multimedia elements to enhance the learning experience. From video lectures and quizzes to discussion forums and assignments, these platforms engage learners through immersive content delivery methods. Additionally, features such as progress tracking






          </p>

        </div>
      </div>
    </div>
  </div>
  <div class="container pb-3">
  </div>
  <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6">

    <form class="col-md-12" action="https://formspree.io/EnterYourEmail" method="POST" name="_next">
      <h3 class="text-warning pt-3 title mx-auto">Contact Form</h3>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email"
          name="email">
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"></textarea>
      </div>
      <input type="hidden" name="_next" value="http://localhost/foody/about.php" />
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


  </div>
  <!--footer -->
  <?php include 'includes/footer.php'?>
  <!--footer end-->


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function () {

    if (window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }

  });
</script>
<?php if(isset($_GET['error'])){ $z=$_GET['error']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
<?php if(isset($_GET['errorl'])){ $z=$_GET['errorl']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
</html>
