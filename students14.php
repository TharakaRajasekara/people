<?php 


function readCSV($csvFile) {
		$file_handle = fopen($csvFile, 'r');
		while (!feof($file_handle)) {
			$line_of_text[] = fgetcsv($file_handle, 1024);
		}
		fclose($file_handle);
		return $line_of_text;
	}
	//$i=1;
	// Set path to CSV file
	


?>

<!DOCTYPE html>
<html lang="en" xmlns:color="http://www.w3.org/1999/xhtml">

<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../assets/css/main.css">

<link rel="stylesheet" type="text/css" href="../assets/css/custom.css">

<link rel="stylesheet" type="text/css" href="../assets/css/custom/custom1.css">

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
                <li> <a class="" href="visitinglecturers.php">Visiting Lecturers</a> 
                </li>
                <li> <a class="" href="visiting.php">Visiting Academics</a> </li>
                <li> <a class="" href="stu_advisor.php">Academic Advisers</a> 
                </li>
                <li> <a class="" href="sem_coordinator.php">Semester Coordinators</a> 
                </li>
              </ul>
            </div>
          </div>
          <div class="accordion-heading"> <a class=" accordion-toggle" href="nonacademic.php"> 
            Non-Academic Staff </a> </div>
          <div class="accordion-heading"> <a class=" accordion-toggle" href="resstudents.php"> 
            PG Research Students </a> </div>
          <div class="accordion-heading "> <a class="accordion-toggle icon-toggle acc-on collapsed" data-toggle="collapse" data-parent="#accor" href="#accor-3" aria-expanded="false" > 
            Undergraduate Students </a> </div>
          <div id="accor-3" class="accordion-body collapse in" aria-expanded="true" style=""> 
            <div class="accordion-inner"> 
              <ul class="list-unstyled">
                 <ul class="list-unstyled">
                <!--<li> <a class="" href="students15.php">Undergraduate Students 
                  (E15) - Final Year</a> </li>
                <li> <a class="" href="students16.php">Undergraduate Students 
                  (E16) - Final Year</a> </li>
               <li> <a class="" href="students17.php">Undergraduate Students 
                  (E17) - Final Year</a> </li>-->
                  <li> <a class="" href="students18.php">Undergraduate Students 
                  (E18) - Final Year</a> </li>
                  <li> <a class="" href="students19.php">Undergraduate Students 
                  (E19) - Third Year</a> </li>
                  <li> <a class="" href="students20.php">Undergraduate Students 
                  (E20) - Second Year</a> </li>
                <!--<li> <a class="" href="#">Undergraduate Students 
                      - First Year</a> </li>-->
              </ul>
            </div>
          </div>
          <div class="accordion-heading "> <a class="accordion-toggle icon-toggle acc-on collapsed" data-toggle="collapse" data-parent="#accor" href="#accor-4" aria-expanded="false" > 
            Past Students </a> </div>
          <div id="accor-4" class="accordion-body collapse in" aria-expanded="true" style=""> 
            <div class="accordion-inner"> 
              <ul class="list-unstyled">
					<li> <a class="" href="students17.php">E/17 Students</a> </li>
                  <li> <a class="" href="students16.php">E/16 Students</a> </li>
                  <li> <a class="" href="students15.php">E/15 Students</a> </li>
                <li> <a class="" href="students14.php">E/14 Students</a> </li>
                <li> <a class="" href="students13.php">E/13 Students</a> </li>
              </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
    </div>

  <div class="col-md-9 mb-lg-5" >

            <div class="h4-title" >UNDERGRADUATE STUDENTS </div>

            <section id="team" class="section" style="padding-top: 25px;">
 
            <div class="h7">E/14 Students</div><br>
<div class="row ml-1 mt-5 mb-5 mr-1"> 
		
		<?php
			 
			  $csvFile = "../assets/csv/E14_stud_db.csv";
				$csv = readCSV($csvFile);
          		foreach ($csv as $key) {
															
                 	if($key[0]=="E/14"){
						$dir = "../assets/img/students/2014/".$key[8].".jpg";		

			 
			 if (file_exists($dir)) {
             			print("<div class='col-sm-3 col-md-2'>");
							print("<div class='span'><img src='../assets/img/students/2014/".$key[8].".jpg' class='img-polaroid' style='margin:5px 0px 15px;'></div>");
							print("<div class='span'>");
								print("".$key[2]."<br/>(".$key[3].")".$key[4]." ".$key[5]."<br/> ");
							print("</div><br/>");
                        print("</div>");
						
						}else{
						print("<div class='span4 studentdet'>");
							print("<div class='span3'><img src='http://placehold.it/200x300' class='img-polaroid' style='margin:5px 0px 15px;'></div>");
							print("<div class='span9'>");
								print("".$key[2]."<br/>(".$key[3].") ".$key[4]." ".$key[5]."<br/> ");
							print("</div><br/>");
                        print("</div>");
						}
					}
				}

			 					
	?>
                        </div> 
						 </div> 
                                  
                </div>
				
                <div class="span1" > </div>
        </div>
        <div id="footerInnerSeparator"></div>
    </div>

</div>
</section>

<?php
	 require '../assets/php/footer.php'; ?>
	



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



</body>
</html>
			
	  

	 
	