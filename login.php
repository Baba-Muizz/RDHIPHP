

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

<?php include_once 'assets/private/init.php'; ?>

<title>royaldiamondinvestmnet.com</title>
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



<!-- PHP TAG  -->

<?php
  if (isset($_POST['userLogin'])) {
    // Check for required fields
    $required_fields = array('username', 'password');

    // Loop through the $_POST array to check for required fields
    foreach($_POST as $key=>$value) {
      if (empty($value) && in_array($key, $required_fields)) {
        $errors[] = "All fields are required.";
        break;
      }
    }

    // If no error
    if (empty($errors)) {
      // Assign values to user and profile classes
      $user->username = trim($_POST['username']);
      $user->password = trim($_POST['password']);

      // If no error
      if (!empty($user->username) && !empty($user->password)) {
        // Hash Password
        $user->password = md5($user->password);

        if ($user->login()) {
          $session->message('Logged in successfully');
          redirectTo('dash.php');
        }
        else {
          $errors[] = "Authentication failed.";
        }
      }
      else {
        $errors[] = "All fields are required.";
      }
    }
  }
?>


<!-- PHP END TAG   -->
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
            <h1 class="">access account</h1>
            <p><a href="index.php">Home</a>&#8250;&#8250;<a href="login.php" class="active">login</a></p>
        </div>
	</div>
</div>

<div id="wrapper" class="contanierbg" style=" background-color:#030200; display:inline-table;">

<div class="wrap">

<div class="box6">

<center>
<!-- 
<script language=javascript>
function checkform() {
  if (document.mainform.username.value=='') {
    alert("Please type your username!");
    document.mainform.username.focus();
    return false;
  }
  if (document.mainform.password.value=='') {
    alert("Please type your password!");
    document.mainform.password.focus();
    return false;
  }
  return true;
}
</script> -->



<form method=post name=mainform onsubmit="return checkform()" action="login.php"  style="width:100%; margin:0;"><input type="hidden" name="form_id" value="16034034187646"><input type="hidden" name="form_token" value="2df99cc2672b9b52f73887c828acf6cf">
<input type=hidden name=a value='do_login'>
<input type=hidden name=follow value=''>
<input type=hidden name=follow_id value=''>



<div class="log_form">


	
    <div class="left">
    
            <div class="log_title">LOG INTO YOUR ACCOUNT</div>
            
            <?php success($message); error($errors); ?>

             <div class="log_box">
         	<div class="log_input">
                <div class="log_img"><i class="fa fa-user" aria-hidden="true"></i></div>
                <input type=text name=username value="<?php echo stickyForm('username'); ?>" class=inpts size=30 autofocus="autofocus" placeholder="Username">
            </div>
        </div>
        
        <div class="log_box">
        	<div class="log_input">
                <div class="log_img"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                <input type=password name=password value='' class=inpts size=30  placeholder="Password">
            </div>
        </div>
         
        
        	<div class="log_val">
                <a href="dash.php">DB</a>
                <div class="log_text"><input type=submit value="Login"  name="userLogin" class=sbmt></div>
            </div>
            
            <div class="rest_val">
                <div class="log_text">Forgot password? <a href="?a=forgot_password" style="color:#ffa300;">Click here,</a> to reset your password.</div>
            </div>
        
    </div>

	<div class="right">
    
    <img src="images/bit_vid.png" />

       <!--<div class="log_content">
       		<div class="cont_img"><img src="images/security.png" /></div>
            <div class="cont_text">
            	<h2>Make Investment Safely</h2>
                <p>Do not provide your login and password to anyone!</p>
            </div>
       </div>
       
       <div class="log_content">
       		<div class="cont_img"><img src="images/password.png" /></div>
            <div class="cont_text">
            	<h2>Forgotten the password ?</h2>
                <p>It is very easy to restore the password. For this purpose select the "Forgot password?" button.</p>
            </div>
       </div>
        
	</div>-->

</div>



</form>

</center>
</div>

</div>

</div>
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

