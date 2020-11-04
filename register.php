
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

<?php include_once 'assets/private/init.php'; ?>

<title>royaldiamondcom</title>
<link href="https://fonts.googleapis.com/css?family=Cairo|Oswald:300,400,700|Roboto+Condensed|Roboto:400,500" rel="stylesheet">
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="faqstyle.css" type="text/css" />
<link rel="stylesheet" href="animate.css" type="text/css" />
<link rel="stylesheet" href="calcpopupstyle.css" type="text/css" />
 
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<!--- banner tab script --->

 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="../images/js/prefixfree.min.js"></script>

<!--- banner tab script --->

<!--
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="../images/js/back_move.js"></script>
-->
<!---- Wow script --->

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
<script src="images/js/wow.js"></script>


<script>
       new WOW().init();
    </script>

<!---- Wow script --->


<!---- menu script --->

<script>
$(document).ready(function(){
  $('.menu ul li').click(function(){
   /* $('li').removeClass("active");
    $(this).addClass("active");*/
});
});
    </script>

<!---- menu script --->


<!-- PHP -->

<?php
  if (isset($_POST['userReg'])) {
    // Check for required fields
    $required_fields = array('email', 'password', 'fullname', 'username');

    // Loop through the $_POST array to check for required fields
    foreach($_POST as $key=>$value) {
      if (empty($value) && in_array($key, $required_fields)) {
        $errors[] = "Fields with red asterisk are required.";
        break;
      }
    }

    // If no error
    if (empty($errors)) {
      // Assign values to user and profile classes
      $user->email = trim($_POST['email']);
      $confirm_email = trim($_POST['confirm_email']);
      $user->username = trim($_POST['username']);
      $user->password = trim($_POST['password']);
      $confirm =trim($_POST['confirm_password']);
      $user->usergroup = 2305; // 2305 (admin), 4392 (user)

     
      $profile->fullname = sanitize('fullname');
      $profile->username = $user->username;
      // Validate the user's input
      if (!filter_var($user->email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "E-mail is invalid";
      }
      if ($user->email !== $confirm_email) {
        $errors[] = "Confirm Email";
      }
      if (strlen($user->password) < 6) {
        $errors[] = "Enter at least 6 characters for password";
      }
      if ($user->password !== $confirm) {
        $errors[] = "Passwords do not match";
      }
      if (strlen($profile->fullname) < 3) {
        $errors[] = "Initials not allowed for Full Name";
      }
      if (strlen($profile->username) < 3) {
        $errors[] = "Initials not allowed for User Name";
      }

      // If no error
      if (empty($errors)) {
        // Create profile record in database
        if ($profile->create()) {
          $user->profileid = $profile->id;
          // Hash password
          $user->password = md5($user->password);
          // Commit to database
          if ($user->create()) {
            $session->message('User account created. Please login');
            redirectTo('login.php');
          }
        }
      }
    }
  }
?>

<!-- END PHP -->
</head>

<body>

<!----- header logo and menus ---->

<header>
<div id="wrapper" class="banner-bg">
<div class="wrap">
        	<div class="tops" align="center">                                       
                   <div class="left wow fadeInDown">
                	<a href="index.php">  
                        <img src="images/logo.png" /> 
                     </a>
                </div>
                <div class="right wow fadeInDown">
                	<div class="content">
                        <div class="img"><img src="images/mail.png" /></div>
                        <a href="contact.php" class="mail" style="padding-top: 15px;"><span>EMAIL SUPPORT</span> <br />contact@royaldiamond.com</a>
                    </div>
                	<div class="content1">
                    	<div class="img"><img src="images/fb.png" /></div>
                        <a href="contact.php" class="fb" style="font-size:25px;"><span>Contact Us</span> Email</a>
                    </div>
                </div>
            </div>         
        </div>                                                                                                                      
	<div id="wrapper" class="menu-bg">
     	<div class="wrap">
        	<div class="menu" align="center">
            	<div class="left">
                    <ul style="margin:0px; padding:0">
                    	<li><a href="index.php">Home</a></li>
                    	<li><a href="about.php">About Us</a></li>
                    	<li><a href="register.php">Signup</a></li>
                    	
                                             	<li><a href="login.php">login</a></li>
                                              
                        <li><a href="?a=rules">Rules</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                    
                      
                        <li><a href="contact.php">support</a></li>
                   	</ul>
                </div>
                <div class="right">
                	                   	<a href="login.php"> <i class="fa fa-lock"></i> Login</a>
                                    	                   	<a href="register.php"><i class="fa fa-user "></i> Sign up</a>
                                    </div>
            </div>         
        </div>
    </div>
     

     	      

<!----- header logo and menus ---->

<!------- banner ------>


</div>     
    
</header>



<div class="clear"></div>

<!------- banner ------>


<div id="wrapper" class="sup_title-bg">
	<div class="wrap">
    	<div class="sup_title">
            <h1 >REGISTER AN ACCOUNT</h1>
            <p><a href="index.php">Home</a>&#8250;&#8250;<a href="register.php" class="active">Register</a></p>
        </div>
	</div>
</div>


<div id="wrapper" class="contanierbg" style=" background-color:#030200; display:inline-table;">
<div class="wrap">
<div class="box6" style=" padding-top:30px; ">

<style>



</style>




<!-- <script language=javascript>
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Please enter your full name!");
    document.regform.fullname.focus();
    return false;
  }
 
  
  if (document.regform.username.value == '') {
    alert("Please enter your username!");
    document.regform.username.focus();
    return false;
  }
  if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
    alert("For username you should use English letters and digits only!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '') {
    alert("Please enter your password!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Please check your password!");
    document.regform.password2.focus();
    return false;
  }
 
  
  if (document.regform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.email.value != document.regform.email1.value) {
    alert("Please retupe your e-mail!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.agree.checked == false) {
    alert("You have to agree with the Terms and Conditions!");
    return false;
  }
  return true;
 }
 function IsNumeric(sText) {
  var ValidChars = "0123456789";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
 }
 </script> -->
  
 
 
 <center>
 
 <form method=post onsubmit="return checkform()" name="regform" style="width:100%; margin:0;"><input type="hidden" name="form_id" value="16034033776103"><input type="hidden" name="form_token" value="50492c4a7042d3e4a5dc4bed2c84b4fa">
<input type=hidden name=a value="signup">
<input type=hidden name=action value="signup">


<div class="reg_form">
	
    <div class="left">
    	
        <div class="reg_title">YOUR ACCOUNT INFORMATION</div>

        <div class="reg_box">
        	<div class="reg_input">
            <div class="reg_img"><i class="fa fa-user" aria-hidden="true"></i></div>
            <input type=text name=fullname id="fullname" value="<?php echo stickyForm('fullname'); ?>" class=inpts size=30 placeholder="Fullname"></div>
        </div>
        
        <div class="reg_box">
        	<div class="reg_input">
            <div class="reg_img"><i class="fa fa-user" aria-hidden="true"></i></div>
            <input type=text name=username id="username" value="<?php echo stickyForm('username'); ?>" class=inpts size=30 placeholder="username"></div>
        </div>
        
        <div class="reg_box">
        	<div class="reg_input">
            <div class="reg_img"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
            <input type=password name=password id="password" value="" class=inpts size=30 placeholder="password"></div>
        </div>
        
        <div class="reg_box">
        	<div class="reg_input">
            <div class="reg_img"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
           <input type=password name="confirm_password" id="confirm_password" value="" class=inpts size=30 placeholder="Retype-password"></div>
        </div>
        
        <div class="reg_box">
        	<div class="reg_input">
            <div class="reg_img"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
           	<input type=text name="email" id="email" value="<?php echo stickyForm('email'); ?>" class=inpts size=30 placeholder="E-mail"></div>
        </div>
        
        <div class="reg_box">
        	<div class="reg_input">
            <div class="reg_img"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
           	<input type=text name="confirm_email" id="confirm_email" value="<?php echo stickyForm('confirm_email'); ?>" class=inpts size=30 placeholder="Retype E-mail"></div>
        </div>
        
        <div class="reg_box">
        	<div class="reg_input">
            <div class="reg_img"><i class="fa fa-user-secret" aria-hidden="true"></i></div>
           	<input type=text name=sq value="" id="secret" class=inpts size=30 placeholder="Secret question"></div>
        </div>
        
        <div class="reg_box">
        	<div class="reg_input">
            <div class="reg_img"><i class="fa fa-user-secret" aria-hidden="true"></i></div>
           	<input type=text name=sa value="" id="secret_answer" class=inpts size=30 placeholder="Secret answer"></div>
        </div>
        
                
        
        
        <div class="pay_info">
        
        <div class="reg_title">PAYMENT INFORMATION</div>
                <div class="reg_box">
        	<div class="reg_input">
            <div class="reg_img"><i class="fa fa-money" aria-hidden="true"></i></div>
           	<input type=text class=inpts size=30 name=pay_account[48] value="" placeholder="Bitcoin"></div>
        </div>
		                
        </div>
  
        <div class="val_info">
       
        <div class="reg_title">VALIDATION IMAGE</div>
        			        
        		        				        
        
        
        
        
              	
            <div style="border:none; display:flex; justify-content: center; width: 100%; line-height:50px; padding: 20px 0 0;">
                <input type=checkbox name=agree value=1  style="height:30px; width:30px; margin: 10px;" > 
                <p style="color:#fff;">I agree with <a href=?a=rules style="color:#ffa300; text-decoration:none;">Terms and conditions</a></p>
            </div>
            
            
        </div>
        
     
        
        
        <div style="border:none; text-align:center; padding:20px;"><input type=submit name="userReg" value="Create Account" class=sbmt></div>
        
    
    </div>

	<div class="right">
    	<div class="reg_choose">
        	<div class="reg_tie">Why to choose us?</div>
            <div class="ch_img"><img src="images/bit_vid.png" />Royal Diamond Investment is a global financial platform that is designed to provide investment services that is open and accessible to everyone. Our company outlines long term goals in both financial and cryptocurrency development to improve Royal Diamond financial network.</div>
            <p>.&nbsp;&nbsp;&nbsp;<a href="about.php">Read More</a>
            </p>
        </div>
        <div class="reg_cert"><div class="reg_tie">Our Certificate</div><a href="images/CER.pdf" target="_blank"><img src="images/certificate.png" class="thumbnail"></a></div>
    </div>	
        

</div>




</form>


</form>
</center>
 
</div>
</div>
</div><div class="clear"></div>

<!------------- footer ------------->



<section>
	<div id="wrapper" class="pay-bg">
    	<div class="wrap ">
        	<div class="pay wow fadeInUp" align="center">
                <img src="images/pay.png" />
           	</div>
        </div>
     </div>
</section>
  
<footer>
	<div id="wrapper" class="bottom-bg">
       	<div class="wrap">
        	<div class="bottom wow fadeInUp">
            	<div class="left">Copyright &copy; 2020 <br /> Royal Diamond<br /><br /> All Rights Reserved.
                </div>
                <div class="middle">
                            <ul style="margin:0;">
                            	<li><a href="about.php">About Us</a></li>
                                                    			<li><a href="register.php">Get Started</a></li>
                        		                                <li><a href="faq.php">FAQ</a></li>
                              	<li><a href="?a=rules">Rules</a></li>
                            </ul>
                            <ul style="margin:0;">
                            	<li><a href="login.php"> <i class="fa fa-lock"></i> Login</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                
                                <li><a href="#">Confidential Policy</a></li>
                            </ul>
                </div>
                <div class="right">
                	<div class="loc"> <i class="fa fa-map "></i> Scheelegatan 112 28 Stockholm, Sweden</div>
                    
                    <div class="loc2"> <i class="fa fa-globe "></i> Ticket support</div>
                </div>
            </div>        
        </div>
     </div>
</footer>


</body>
</html>

<div class="clear"></div>


<!------------- footer ------------->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f4b4a711e7ade5df4452639/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


</body>
</html>
