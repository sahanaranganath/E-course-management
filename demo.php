<?php
  include('./dbConnection.php');
  // Header Include from mainInclude 
  include('./mainInclude/header.php'); 
?>  

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

    <style>
			@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');



.testi-wrap {
	width: 100%;
	height: 70vh;
	display: grid;
	align-items: center;
  
	background-repeat: no-repeat;
	background-size: cover;
}

.testi-in {
	width: auto;
	height: auto;
	margin: 0 20px;
}

.testi-in-content {
	width: 100%;
	height: auto;
	position: relative;
	background: #fff;
	padding: 25px 15px;
	border-radius: 10px;
	text-align: center;
}

.testi-in-content:before {
	width: 30px;
	height: 30px;
	position: absolute;
	content: '';
	bottom: -10px;
	left: 0;
	right: 0;
	margin: auto;
	background: #fff;
	transform: rotate(45deg);
}

.testi-in-content h1 {
	font-size: 20px;
	text-transform: uppercase;
	color: #262626;
	font-weight: 500;
}

.testi-in-content p {
	font-size: 18px;
	color: #A9A9A9;

	line-height: 25px;
}

.testi-in-image {
	width: auto;
	height: auto;
	text-align: center;
	padding-top: 40px;
   
}

.testi-in-image img {
	width: 60px;
	height: 60px;
	margin-bottom: 10px;
  border: 3px solid #c82333;
}

.testi-in-image h2 {
	font-size: 16px;
	color: #fff;
	font-weight: 500;
}

.testi-in-image h2 span {
	font-size: 14px;
	color: #ffc33c;
	font-weight: bold;
	line-height: 25px;
}

.owl-theme .owl-controls {
	margin-top: 0;
}

.owl-theme .owl-controls .owl-page span {
	background: #aaa !important;
	opacity: 1 !important;
	transition: .5s;
}

.owl-theme .owl-controls .owl-page.active span {
	background: #fff !important;
}

		</style>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
		<script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
    


    <!-- Custom Style CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <title>DBMS</title>


    <style>
      .container1{
        background-color: #f5f5f5;
        margin-left: 100px;
      }


      .shadow-effect {
		    background: #fff;
		    padding: 20px;
		    border-radius: 4px;
		    text-align: center;
	border:1px solid #ECECEC;
		    box-shadow: 0 19px 38px rgba(0,0,0,0.10), 0 15px 12px rgba(0,0,0,0.02);
		}
		#customers-testimonials .shadow-effect p {
		    font-family: inherit;
		    font-size: 17px;
		    line-height: 1.5;
		    margin: 0 0 17px 0;
		    font-weight: 300;
		}
		.testimonial-name {
		    margin: -17px auto 0;
		    display: table;
		    width: auto;
		    background: #3190E7;
		    padding: 9px 35px;
		    border-radius: 12px;
		    text-align: center;
		    color: #fff;
		    box-shadow: 0 9px 18px rgba(0,0,0,0.12), 0 5px 7px rgba(0,0,0,0.05);
		}
		#customers-testimonials .item {
		    text-align: center;
		    padding: 50px;
				margin-bottom:80px;
		    opacity: .2;
		    -webkit-transform: scale3d(0.8, 0.8, 1);
		    transform: scale3d(0.8, 0.8, 1);
		    -webkit-transition: all 0.3s ease-in-out;
		    -moz-transition: all 0.3s ease-in-out;
		    transition: all 0.3s ease-in-out;
		}
		#customers-testimonials .owl-item.active.center .item {
		    opacity: 1;
		    -webkit-transform: scale3d(1.0, 1.0, 1);
		    transform: scale3d(1.0, 1.0, 1);
		}
		.owl-carousel .owl-item img {
		    transform-style: preserve-3d;
		    max-width: 90px;
    		margin: 0 auto 17px;
		}
		#customers-testimonials.owl-carousel .owl-dots .owl-dot.active span,
#customers-testimonials.owl-carousel .owl-dots .owl-dot:hover span {
		    background: #3190E7;
		    transform: translate3d(0px, -50%, 0px) scale(0.7);
		}
#customers-testimonials.owl-carousel .owl-dots{
	display: inline-block;
	width: 100%;
	text-align: center;
}
#customers-testimonials.owl-carousel .owl-dots .owl-dot{
	display: inline-block;
}
		#customers-testimonials.owl-carousel .owl-dots .owl-dot span {
		    background: #3190E7;
		    display: inline-block;
		    height: 20px;
		    margin: 0 2px 5px;
		    transform: translate3d(0px, -50%, 0px) scale(0.3);
		    transform-origin: 50% 50% 0;
		    transition: all 250ms ease-out 0s;
		    width: 20px;
		}
    </style>
  </head>


    <!-- Start Video Background-->
   
      <div class="vid-parent">
      <img src="./image/coo3.jpg" alt="courses" style="height:500px; width:100%; object-fit:cover; box-shadow:10px;"/>
        
      </div>
      <div class="vid-content" >
        <h1 class="my-content" style="color: black;">Welcome to E-learning</h1>
        <small class="my-content" style="color: black;">No limit to learning</small><br />
        <?php    
              if(!isset($_SESSION['is_login'])){
                echo '<a class="btn btn-success mt-3" href="#" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>';
              } else {
                echo '<a class="btn btn-primary mt-3" href="student/studentProfile.php">My Profile</a>';
              }
          ?> 
       
      </div>
    </div> <!-- End Video Background -->


    <div class="container-fluid  txt-banner" style="background-color: #225470;"> <!-- Start Text Banner -->
        <div class="row bottom-banner">
          <div class="col-sm">
            <h5> <i class="fas fa-book-open mr-3"></i> 50+ Online Courses</h5>
          </div>
          <div class="col-sm">
            <h5><i class="fas fa-users mr-3"></i> 1000+ students</h5>
          </div>
          <div class="col-sm">
            <h5><i class="fas fa-keyboard mr-3"></i> Acessible</h5>
          </div>
          <div class="col-sm">
            <h5><i class="fas fa-rupee-sign mr-3"></i> Affordable</h5>
          </div>
        </div>
    </div> <!-- End Text Banner -->


    <section class="page-section bg-light"  id="education">
            <div class="container1">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase" style="  text-align: center; color: black;  font-size: 40px; margin-top:20px; margin-bottom: 20px; "> POPULAR FIELDS</h2>
                <!--<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->    
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="./image/coo6.jpg" alt="..." style=" border-radius: 50%;  width: 300px; height: 300px; border: 5px solid #dc3545"/>
                            <h4>Science and Technology</h4>
                            <p class="text-muted">Coding, AR&VR, IoT, Artificial Intelligence, Web Development</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="./image/coo1.png" alt="..." style=" border-radius: 50%;  width: 300px;height: 300px; border: 5px solid #dc3545"/>
                            <h4>Architecture</h4>
                            <p class="text-muted">Visual Arts and Basic Design, Visual Arts and Basic Design,Computer Applications, Building Construction, Theory of Structures </p>
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="./image/coo.png" alt="..." style=" border-radius: 50%; width: 300px; height: 300px; border: 5px solid #dc3545" />
                            <h4>Economics & Finance</h4>
                            <p class="text-muted">corporate finance, corporate governance, the microeconomics of banking; pricing of financial instruments</p>
                            
                        </div>
                    </div>
                </div>
                <!--<div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>-->
            </div>
        </section>

   
    
    <div class="container mt-5"> <!-- Start Most Popular Course -->
      <h1 class="text-center">Popular Course</h1>
      <div class="card-deck mt-4"> <!-- Start Most Popular Course 1st Card Deck -->
        <?php
        $sql = "SELECT * FROM course LIMIT 3";
        $result = $conn->query($sql);
        if($result->num_rows > 0){ 
          while($row = $result->fetch_assoc()){
            $course_id = $row['course_id'];
            echo '
            <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px; margin:0px;">
              <div class="card">
                <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="Guitar" />
                <div class="card-body">
                  <h5 class="card-title">'.$row['course_name'].'</h5>
                  <p class="card-text">'.$row['course_desc'].'</p>
                </div>
                <div class="card-footer">
                  <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small> <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span></p> <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Register</a>
                </div>
              </div>
            </a>  ';
          }
        }
        ?>   
      </div>  <!-- End Most Popular Course 1st Card Deck -->   
      <div class="card-deck mt-4"> <!-- Start Most Popular Course 2nd Card Deck -->
        <?php
          $sql = "SELECT * FROM course LIMIT 3,3";
          $result = $conn->query($sql);
          if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){
              $course_id = $row['course_id'];
              echo '
                <a href="coursedetails.php?course_id='.$course_id.'"  class="btn" style="text-align: left; padding:0px;">
                  <div class="card">
                    <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="not found" />
                    <div class="card-body">
                      <h5 class="card-title">'.$row['course_name'].'</h5>
                      <p class="card-text">'.$row['course_desc'].'</p>
                    </div>
                    <div class="card-footer">
                      <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small> <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span></p> <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Register</a>
                    </div>
                  </div>
                </a>  ';
            }
          }
        ?>
      </div>   <!-- End Most Popular Course 2nd Card Deck --> 
      <div class="text-center m-2">
        <a class="btn  btn-sm" href="courses.php" style="background-color: #225470; color: white">View All Course</a> 
      </div>
    </div>  <!-- End Most Popular Course -->

    








    <div style ="background-color: #E9ECEF ;" id="Contact">
    <div class="container" style="   background-color: #E9ECEF ;margin-top:80px; margin-bottom: 20px; ">
    <h1 style="color:#ed213a; text-align: center; margin-top:20px;"> CONTACT US </h1>
      
            <form action="" name="form1" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Enter name" name="firstname" >
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone number</label>
                        <input type="text" class="form-control" id="contact" placeholder="Enter contact" name="contact">
                        <div id="emailHelp" class="form-text">We'll never share your number with anyone else.</div><br>
                        <div class="input-group">

                            <span class="input-group-text">Information</span>
                            <textarea class="form-control" id="description" placeholder="Enter description" name="description" rows="4"></textarea>
                          </div>


                        </div>
          <button  type="submit" name="insert" class="btn btn-success" onclick="showAlert()" style="margin-bottom: 20px">Submit</button>
      
        </form>
      </div>
        </div>
      <?php
      if(isset($_POST["insert"]))
{
    

   mysqli_query($conn, "insert into contact values(NULL, '$_POST[firstname]',  '$_POST[email]', '$_POST[contact]','$_POST[description]')");
  
   // header('Location: index.php'); //this prevents from adding the same details again and again  after refreshing the page
 
   //the next few lines of the script code is mainly written so that we dont have to refresh the page everytime and the the changes will be shown automatically
   ?>

<script type="text/javascript">
alret('Details Submitted. We will contact you soon');
</script>

<?php

}

?>




<div  style="background-color: rgb(95, 93, 93); background: url(./image/bbb.jpg); background-repeat: no-repeat;
	background-size: cover;">

     <!-- Start Students Testimonial -->
    <div class="container-fluid mt-5 container"  id="Feedback">
    <h1 class="text-center testyheading p-4"> Student's Feedback </h1>
    <div class="testi-wrap">
			<div class="container">
				<div class="row">
        <div class="col-md-12">
					<div id="testimonial-slider" class="owl-carousel">
					<?php 
              $sql = "SELECT s.stu_name, s.stu_occ, s.stu_img, f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id = f.stu_id";
              $result = $conn->query($sql);
              if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                  $s_img = $row['stu_img'];
                  $n_img = str_replace('../','',$s_img)
            ?>
						<!-- 1 -->
						<div class="testi-in">
							<div class="testi-in-content">
								<h1>"</h1>
								<p > <?php echo $row['f_content'];?></p>
								<h1>"</h1>
							</div>
							<div class="testi-in-image">
							<img src="<?php echo $n_img; ?>" alt="" style="border-radius: 50%"/>
								<h2><?php echo $row['stu_name']; ?>
								<br>
								<span><?php echo $row['stu_occ']; ?></span>
								</h2>
							</div>
						</div>
						<?php }} ?>
                </div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#testimonial-slider").owlCarousel({
					items:3,
					navigation:false,
					pagination:true,
					autoPlay:true
				});
			});
		</script>

    </div>

    </div>
    <!-- End Students Testimonial -->




    <div class="container-fluid " style="background-color: #225470;"> <!-- Start Social Follow -->
        <div class="row text-white text-center p-1">
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
          </div>
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> Twitter</a>
          </div>
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i> WhatsApp</a>
          </div>
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i> Instagram</a>
          </div>
        </div>
    </div> <!-- End Social Follow -->

    <!-- Start About Section -->
    <div class="container-fluid p-4" style="background-color:#E9ECEF">
      <div class="container" style="background-color:#E9ECEF">
        <div class="row text-center">
          <div class="col-sm">
            <h5>About Us</h5>
              <p>We wish you a merry Christmas
We wish you a merry Christmas
We wish you a merry Christmas and a happy new year
Good tidings we bring to you and your kin
We wish you a merry Christmas and a happy new year
Oh, bring us some figgy pudding
Oh, bring us some figgy pudding

And bring it right here</p>
          </div>
          <div class="col-sm">
            <h5>Fields</h5>
            <a class="text-dark" href="#">Computer Science</a><br />
            <a class="text-dark" href="#">Architecture</a><br />
            <a class="text-dark" href="#">Business and Finance</a><br />
            <a class="text-dark" href="#">Law and Order</a><br />
            <a class="text-dark" href="#">Aeronautics</a><br />
          </div>
          <div class="col-sm">
            <h5>Contact Us</h5>
            <p>e-Learning<br> Shiganshina <br> Titan, Land<br> Ph. 000000000 </p>
          </div>
        </div>
      </div>
    </div> <!-- End About Section -->
    <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497698.6600798865!2d77.35073573336324!3d12.954517008640543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1630433877186!5m2!1sen!2sin" width="1600" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                   <br> <div class="col-lg-4 text-lg-start">Copyright @leviackerman</div>
                   <br> <div class="col-lg-4 my-3 my-lg-0" style="margin-top: 10px;">
                        
                    </div>
                    
                </div>
            </div>
        </footer>
  <?php 
    // Footer Include from mainInclude 
    include('./mainInclude/footer.php'); 
    
  ?>  

