
<?php
//check if User Coming From A request
if(isset($_REQUEST['submit'])){
  $user = $_REQUEST['username'];
  $mail = $_REQUEST['email'];
  $cell = $_REQUEST['mobile'];
  $msg = $_REQUEST['message'];
  $userError='';
  $msgError='';
  if(strlen($user) <=3){
   $userError=' Username Must be Larger <strong>Than 3 Characters</strong>';
   }
   if(strlen($msg) <=10){
    $formErrors[]=' Message can\'t be Less <strong>Than 10 Characters</strong> ';
 
 
   }

 
}



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="Css/contact.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet"/>
    <title>Contact Form</title>
</head>
<body>
 <!--Start Form-->
 <h2 class="text-center">Contact Me</h2>

 
 
 <div class="container mt-5">
 <?php if(isset($formErrors)){?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

<?php
 foreach($formErrors as $error){
   echo $error.'<br/>';
 }
}
 ?>
</div>
	<div class="row">
    <div class="col-md-6 ">
			<img alt="Bootstrap Image Preview" class="ml-5"src="fonts/contact-image.png" />
		</div>
		<div class="col-md-6">
			<form role="form" class="contact-form" method="POST" action="index.php">
					<input type="text" class="form-control"name="username" id="username" placeholder="Type your Username"/>
                    <i class="fa fa-user fa-fw"></i>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Please Type a Valid Email " />
                    <i class="fa fa-envelope fa-fw"></i>
                    <input type="text" class="form-control"name="mobile" id="mobile" placeholder="Type your cell phone"/>
                  <i class="fa fa-phone fa-fw"></i>
                    <textarea class="form-control" placeholder="Your Message!"name="message" id="message"></textarea>
               
					 
				
				
            

        <input  type="submit" name="submit" class="btn "
         value=" Send Message">
       
      </form>
		</div>
		
	
</div>
 <!--End Form-->

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<!-- JQuery CDN -->
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
</body>
</html>