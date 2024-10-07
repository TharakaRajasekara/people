<!DOCTYPE html>
<html lang="en" xmlns:color="http://www.w3.org/1999/xhtml">


<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
    Department of Civil Engineering
    </title>

<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../assets/css/main.css">

<link rel="stylesheet" type="text/css" href="../assets/css/custom.css">

<link rel="stylesheet" type="text/css" href="../assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="../assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">

<link rel="stylesheet" media="screen" href="../assets/fonts/font-awesome/font-awesome.min.css">
<link rel="stylesheet" media="screen" href="../assets/fonts/simple-line-icons.css">

<link rel="stylesheet" type="text/css" href="../assets/extras/owl/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../assets/extras/owl/owl.theme.css">
<link rel="stylesheet" type="text/css" href="../assets/extras/animate.css">
<link rel="stylesheet" type="text/css" href="../assets/extras/normalize.css">

<link rel="stylesheet" type="text/css" href="../assets/css/colors/green.css" media="screen" />

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
    </script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
    </script>
    <![endif]-->
</head>
<body>

<?php require '../assets/php/headerpeople.php'; ?>

<section class="shortcode-accordion-section section-padding pt-0 pb-0">
    <div class="container-fluid"  style="background-image: url(../assets/img/1.png)"><br><br><br>
        <div class="row">
            
<div class="col-md-3" id="grad1"><br>
  <h5 class="pt-3 pb-3" style="margin-bottom: 0px;color: rgba(255,255,255,0.87);font-align: center;text-align: center;border-left: 5px solid #1468aa;border-bottom: 1px solid #1468aa;border-right: 1px solid #1468aa;border-top: 1px solid #1468aa;"> 
    PEOPLE</h5>
  <div class="row"> 
    <div class="col-md-12"> 
      <div class="panel-group accordion nav-side" id="accor"> 
        <div class="panel accordion-group"> 
          <div class="accordion-heading "> <a class="accordion-toggle icon-toggle acc-on collapsed" data-toggle="collapse" data-parent="#accor" href="#accor-2" aria-expanded="false" > 
            Academic Staff </a> </div>
          <div id="accor-2" class="accordion-body collapse in" aria-expanded="true" style=""> 
            <div class="accordion-inner"> 
              <ul class="list-unstyled">
                <li> <a class="" href="academicstaff.php">Lecturers</a> </li>
                <li> <a class="" href="emiratus.php">Emeritus Professors</a> </li>
				<li> <a class="" href="visitinglecturers.php">Visiting Lecturers</a> </li>
                <li> <a class="" href="visiting.php">Visiting Academics</a> </li>
              </ul>
            </div>
          </div>
          <div class="accordion-heading"> <a class=" accordion-toggle" href="nonacademic.php"> 
            Non-Academic Staff </a> </div>
          <div class="accordion-heading"> <a class=" accordion-toggle" href="RA.php"> 
            Research Assistants </a> </div>
          <div class="accordion-heading"> <a class=" accordion-toggle" href="resstudents.php"> 
            Research Students </a> </div>
        </div>
      </div>
    </div>
  </div>
  <br>
</div>

        <div class="col-md-9 mb-lg-5" >

            <div class="h4-title" >RESEARCH ASSISTANTS</div>


        </div>
</section>


<?php require '../assets/php/footer.php'; ?>


<a href="#" class="back-to-top">
<i class="fa fa-angle-up">
</i>
</a>

<script src="../assets/js/jquery-min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!--<script src="../assets/js/color-switcher.js"></script>-->
<script src="../assets/js/jquery.mixitup.js"></script>
<script src="../assets/js/smoothscroll.js"></script>
<script src="../assets/js/wow.js"></script>
<script src="../assets/js/owl.carousel.js"></script>
<script src="../assets/js/waypoints.min.js"></script>
<script src="../assets/js/jquery.counterup.min.js"></script>
<script src="../assets/js/jquery.slicknav.js"></script>
<script src="../assets/js/jquery.appear.js"></script>
<script src="../assets/js/form-validator.min.js"></script>
<script src="../assets/js/contact-form-script.min.js"></script>
<script src="../assets/js/main.js"></script>


<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("img-slider");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>


</body>


</html>