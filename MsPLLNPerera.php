<!DOCTYPE html>
<html lang="en" xmlns:color="http://www.w3.org/1999/xhtml">

<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

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
        <div class="container">
            <div class="h4-title"> Ms. P. L. L. N. Perera  </div><br>
            <h5 class="ml-4">  M.Sc.Eng. Student </h5>
            <div class="row">
                <div class="col-md-3 col-sm-6 p-5">

                    <img class="img-responsive6" style="background-color: #666666" src="../assets/img/resstudents/MsPLLNPerera.jpg">
                </div>
                <div class="col-md-9 col-sm-6" style="line-height: normal">
                 <br><br>
                    <p style="font-weight: bold">Email: <a href="#" style=" font-weight: normal"> lakmininadeesha95@gmail.com  </a></p>
                    <p style="font-weight: bold">Telephone: <a style="font-weight:normal">+94-70-3263736</a></p>
                </div>
            </div>
             
			 
Ms. P. L. L. N. Perera  is an M.Sc.Eng. candidate  affiliated to  Fluid Mechanics Laboratory in the Department of Civil Engineering, University of Peradeniya.
			 
 <br><br>
			 
          
          <table class="table table-hover table-responsive table-bordered ">
            <tbody>
              <tr> 
                <td width="20%" style="text-align: top-left"><b>Research Title</b></td>
                <td width="85%" style="text-align: top-left"> Forecasting compound flooding in Kelani river basin <br>
                    <br>
                  </td>
              </tr>
              <tr> 
                <td width="20%" style="text-align: top-left"><b>Research Supervisors</b></td>
                <td width="85%" style="text-align: top-left"> Dr. N. G. P. B. Neluwala
				
                  </td>
              </tr>
             
            </tbody>
          </table>
					  

          
            <div class="panel panel-default">
                <div class="panel-heading"  role="tab" id="headingSix-6">
                    <h4 class="panel-title1">
                        <a data-toggle="collapse" data-parent="#accordionDefault" href="#collapseSix-6" aria-expanded="false" aria-controls="collapseSix-6" style="font-size: 0.7em" class="active collapsed">
                            <i class="fa fa-file-text-o"></i>Publications
                        </a>
                    </h4>
                </div>
                <div id="collapseSix-6" class="collapse " role="tabpanel" aria-labelledby="headingSix-6">
                    <div class="panel-body clearfix panel-border">



                        <ul>
                            

                          
                        </ul>

                    </div>
                </div>
            </div>

        </div>

















           
          
          
            
        <br><br><br>
    </div>

</section>



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