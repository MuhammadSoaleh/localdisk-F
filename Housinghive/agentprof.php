<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
if(isset($_POST['sub']))
{
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$yemail=$_POST['yemail'];
	$cont=$_POST['content'];
	$utype=$_POST['utype'];
	$sql="INSERT INTO `cont_agent`( `cname`, `c_email`, `y_email`, `c_phone`, `c_message`, `c_type`) VALUES ('$name','$email','$yemail','$phone','$cont','$utype')";
	$result=mysqli_query($con,$sql);
	
}	

				
?>

<!DOCTYPE html>
<html lang="en">

<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.png">


<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">


<title>Housing Hive</title>
</head>
<body>
    

<!-- 
 <div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div> -->
</div>  
<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
      
         <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Contact Agent</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active ">Contact Agent</li>
                                 </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div> 
         <!--	Banner   --->
		 
		 
		 
        	<div class="page-wrappers full-row bg-gray ">
            
            	<div class="container ">
					<div class="row">
                	<div class="col-lg-7">
                        
							
								<h1>Contact Agent</h1> <br>
								
								
								<!-- Form -->
								<form method="post" action="agent.send.php">
								
									<div class="form-group">
										<input type="email"  name="email" class="form-control" placeholder="Enter Agent's Email*" required>
									</div>
									<div class="form-group">
										<input type="text"  name="yemail" id="yemail" class="form-control" placeholder="Enter Your Name*" required>
									</div>
									<div class="form-group">
                                    
                                    <textarea class="form-control" name="content" id="content" rows="7" placeholder="Enter Your contact number and requirements here..." required></textarea>
                                </div>
                                  

						
								 <br>
									
								
									<button  class="btn btn-success" name="sub" value="Send" type="submit">Send</button>
									
								</form>
								
						
								
							
								
							
                        
                    </div>
			
				
						<?php 
						$id=$_GET['uid'];
							$query=mysqli_query($con,"SELECT * FROM user WHERE utype='agent' AND `uid` ='$id'");
							$row=mysqli_fetch_array($query);
                            ?>
                            
                    <div class="col-md-6 col-lg-4"> <br> <br>
                        <div class=" bg-white shadow-one p-5">
                            <div class="overflow-hidden"> <img src="admin/user/<?php echo $row['6'];?>" alt="aimage" height="300px" width="300px
							"> </div>
                            <div class="py-3 text-center">
                                <h5 class="text-secondary hover-text-success">Name: <?php echo $row['1'];?></h5>
                               <h5 class="text-secondary hover-text-success">Email: <?php echo $row['2'];?></h5>
                                <h5 class="text-secondary hover-text-success">Contact: <?php echo $row['3'];?></h5>
                                
                
            </div>
                   
                    
                
                  
                </div>
					</div>
            	</div>
				</div>
				
        	</div>
		

		<?php include("include/footer.php");?>
		
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
      
    </div>

</div>

<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>