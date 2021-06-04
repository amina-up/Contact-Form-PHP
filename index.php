
<?php
//check if User Coming From A request
if(isset($_REQUEST['submit'])){
  $user =filter_var($_REQUEST['username'],FILTER_SANITIZE_STRING);
  $mail =filter_var($_REQUEST['email'],FILTER_SANITIZE_EMAIL);
  $cell =filter_var($_REQUEST['mobile'],FILTER_SANITIZE_NUMBER_INT);
  $msg =filter_var($_REQUEST['message'],FILTER_SANITIZE_STRING);


 
  $formErrors=array();
  
  if(strlen($user) <=3){
    $formErrors[]=' Username Must be Larger <strong>Than 3 Characters</strong>';
   }
   if(strlen($msg) <=10){
    $formErrors[]=' Message can\'t be Less <strong>Than 10 Characters</strong> ';
 
 
   }
   $headers='From:' . $mail . '\r\n';
   $myEmail='aminalaabidi2018@gmail.com';
   $subject='Contact Form';
if(empty($formErrors)){
  mail($myEmail,$subject,$msg,$headers);
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
 <div class="container mt-5">
 <h2 class="text-center">Contact Me</h2>

 
 




	<div class="row">
    <div class="col-md-6 ">
			<img alt="Bootstrap Image Preview" class="ml-5"src="fonts/contact-image.png" />
		</div>
		<div class="col-md-6">
			<form role="form" class="contact-form" method="POST" action="index.php">
				
                  <input type="text" class="form-control username"name="username" id="username" placeholder="Type your Username" 
                  value="<?php if(isset($user)){echo $user;}?>"/>
                    <i class="fa fa-user fa-fw"></i>
                   
                    <div class="alert alert-danger custom-alert">Username Must be Larger <strong>Than 3 Characters</strong></div>
                    <input type="email" class="form-control email" name="email" id="email" placeholder="Please Type a Valid Email " 
                    value="<?php if(isset($mail)){echo $mail;}?>" />
                    <i class="fa fa-envelope fa-fw"></i>
                    <div class="alert alert-danger custom-alert custom-alert-user">Email can't be <strong>Empty</strong></div>
                    <input type="text" class="form-control cell"name="mobile" id="mobile" placeholder="Type your cell phone"
                    value="<?php if(isset($cell)){echo $cell;}?>"/>
                  <i class="fa fa-phone fa-fw"></i>
                    <textarea class="form-control message" placeholder="Your Message!"name="message" id="message"
                     value="<?php if(isset($msg)){echo $msg;}?>"></textarea>
               
                     <div class="alert alert-danger custom-alert">Message Must be Larger <strong>Than 10 Characters</strong></div>
				
				
            

        <input  type="submit" name="submit" class="btn "
         value=" Send Message">
       
      </form>
		</div>
		
	
</div>
</div>
 <!--End Form-->








<!-- JQuery CDN -->

<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<!-- JavaScript SCRIPT CDN-->
  <script src="js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


</body>
</html>