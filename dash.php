
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<?php include_once 'assets/private/init.php'; ?>
<title>zenocapitals.com</title>
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




</head>

<body>

<!----- header logo and menus ---->

<header>
<div id="wrapper" class="banner-bg">
    	<div class="wrap">
        	<div class="tops" align="center">                                       
                   <div class="left wow fadeInDown">
                	<a href="index.php"><img src="images/logo.png" /></a>
                </div>
                <div class="right wow fadeInDown">
                	<div class="content">
                        <div class="img"><img src="images/mail.png" /></div>
                        <a href="contact.php" class="mail" style="padding-top: 15px;"><span>EMAIL SUPPORT</span> <br />contact@zenocapitals.com</a>
                    </div>
                        <div class="content1">
                    	<div class="img"></div>
                        <a href="contact.php" class="fb text-center" style="font-size:25px; font-weight:bolder;"><span><h2><?php echo $profile->getName($_SESSION['profile']); ?></h2></span> </a>
                    </div>
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
                    	
                                                 <li><a href="logout.php">logout</a></li>
                                              
                        <li><a href="?a=rules">Rules</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                    
                      
                        <li><a href="contact.php">support</a></li>
                   	</ul>
                </div>
                <div class="right">
                	                    <a href="logout.php">signout</a>
                                    	                    <a href="?a=account">Account</a>
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

<!--






  <tr> 



    <td valign="top">



	 <table cellspacing=0 cellpadding=1 border=0 width=100% height=100%  class=line>



	   <tr>



	     <td>



           <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">



             <tr class=bgcolorleft valign="top"> 



              <td width=300 align=center><img src="images/q.gif" width=180 height=1>



				   <!-- Image Table: Start -->


<div id="wrapper" style="background-image:url(images/sm-bg.jpg); background-repeat:repeat;  display: inline-table;">

<div class="wrap">

<div class="alls1" style="width: 250px; vertical-align: top; float: left;">



<div class="navigation" style=" border:0px solid; vertical-align:top; display:inline-block; width:250px;">

<table class="navigations" cellspacing=5 cellpadding=5 border=0px solid  style="border-width:0.01em;width:250px;">







<tr><td class=menutxt><a href=?a=account class="menutxt"><span id="menu-icon" style="background:url(images/menu1.png) no-repeat;"></span>Account</a></td></tr>

<tr><td class=menutxt><a href=deposit.php class="menutxt"><span id="menu-icon" style="background:url(images/menu2.png) no-repeat;"></span>Make Deposit</a></td></tr>

<tr><td class=menutxt><a href=?a=deposit_list class=menutxt><span id="menu-icon" style="background:url(images/menu4.png) no-repeat;"></span>Your Deposits</a></td></tr>

<tr><td class=menutxt><a href=?a=deposit_history class=menutxt><span id="menu-icon" style="background:url(images/menu5.png) no-repeat;"></span>Deposits History</a></td></tr>

<tr><td class=menutxt><a href=?a=earnings class=menutxt><span id="menu-icon" style="background:url(images/menu6.png) no-repeat;"></span>Earnings History</a></td></tr>

<tr><td class=menutxt><a href=?a=earnings&type=commissions class=menutxt><span id="menu-icon" style="background:url(images/menu7.png) no-repeat;"></span>Referrals History</a></td></tr>

<tr><td class=menutxt><a href=?a=withdraw class=menutxt><span id="menu-icon" style="background:url(images/menu8.png) no-repeat;"></span>Withdraw</a></td></tr>

<tr><td class=menutxt><a href=?a=withdraw_history class=menutxt><span id="menu-icon" style="background:url(images/menu9.png) no-repeat;"></span>Withdraw History</a></td></tr>

<tr><td class=menutxt><a href=?a=referals class=menutxt><span id="menu-icon" style="background:url(images/menu1.png) no-repeat;"></span>Your Referrals</a></td></tr>

<tr><td class=menutxt><a href=?a=referallinks class=menutxt><span id="menu-icon" style="background:url(images/menu10.png) no-repeat;"></span>Referral Links</a></td></tr>

<tr><td class=menutxt><a href=?a=edit_account class=menutxt><span id="menu-icon" style="background:url(images/menu11.png) no-repeat;"></span>Edit Account</a></td></tr>

<tr><td class=menutxt><a href=?a=security class=menutxt><span id="menu-icon" style="background:url(images/menu12.png) no-repeat;"></span>Security</a></td></tr>

<tr><td class=menutxt><a href=?a=logout class=menutxt><span id="menu-icon" style="background:url(images/menu13.png) no-repeat;"></span>Logout</a></td></tr>

</table>


</div>

</div>


				   

                                   




					<!-- Stats Table: End -->
					<!-- Image Table: End -->





              </td>



              <td class=line valign="top" width=1><img src=images/q.gif width=1 height=1></td>          



              <td class=bgcolormain valign="top" width=99%>
            <!-- Main: Start -->



           <!-- <table width="100%" height="100%" border="0" cellpadding="10" cellspacing="0" class="forTexts">



              <tr>



                <td width=100% height=100% valign=top>



<div class=framebody>



-->

<div class="alls" style="border: 0px solid; width: 75%; vertical-align: top; float: left; margin: 0 20px; padding-bottom:30px;">

<div class="navigation">

<style>
.tables thead tr th {
padding:13px 20px;
background-color: #ffa300;
border-radius:5px;
font-size:18px;
}
.tables tbody tr td span {
float:right;
}
.tables thead tr th img {
width:41.5%;
}
.tables tbody tr td {
border-bottom:1px solid #ffa300;
color:#171717;
}
.tables tfoot tr td {
background-color:#e3dbbe;
border-radius:5px;
text-align:center;
}
.tables tfoot tr td a {
color:#2a2d2f;
}
.tables tfoot tr td:hover{
background-color:#171717;
border-radius:5px;
text-align:center;
transition:0.8s;
}
.tables tfoot tr td:hover a {
color:#fff;
}
</style>

<div style="    width: 100%;
    color: #2a2d2f;
    font-size: 27px;
    border-bottom: 1px solid #3b3772;
    line-height: 38px;float:left;">Your Dashboard 
    <a href="?a=deposit" style="    float: right;
    background: #34495e;
    width: 14%;
    text-align: center;
    line-height: 0px;
    padding: 16px 4px;
    border-radius: 3px;
    font-size: 14px;
    color: #fff;">Make a deposit</a></div><div class="clear"></div><br />
    

<div class="table_r" align="center" style="margin-top:5px; display: flex; justify-content: space-around;">
<div class="table_r1" align="center">
<div style="float:left; margin: 22px 0 22px 10px; width: 24%;">
<img src="images/user_mem_left_icon.png" />
</div>
<table style="font-size:16px; font-size: 22px; margin: 19px auto; width: 60%;">
<!--<tr><td><img src="../images/users.png" height="130" width="130"/></td></tr>-->
<tr><td style="color:#2a2d2f; line-height:44px; text-align:center;">WELCOME </td><tr>
<tr><td style="color:#2a2d2f; line-height:12px; text-align:center;"><?php echo $profile->getName($_SESSION['profile']); ?></td></tr>
<!--<tr><td style="color:#FFFFFF; line-height:12px;">Last Access:</td><td style="color:#FFFFFF;">Oct-27-2020 03:46:39 PM&nbsp;</td></tr>
<tr><td style="color:#FFFFFF; line-height:12px;">Account Balance:</td><td style="color:#FFFFFF;">$0.00</td></tr>-->
</table>
<div style="    width: 100%;
      background: #171717;
    margin: 23px 0px 0px 0px;
    height: 32px;
    color: #fff;
    text-transform: inherit;
    font-size: 16px;    border-radius: 0px 0px 3px 3px;
"><span style="position: relative; text-align: center; top: 5px;">User Details</span></div>
</div>
<!--<div class="table_center">
<img src="../images/user_accounts_png.png" width="150" height="150"/>
</div>-->
<!--
<h3 id="formname_mem" style="width:284px; float:left;     margin: -57px 0px 0px 7px;">USER STATS</h3>-->
<div class="table_r2" align="center">
<div style="float:left; margin: 22px 0 22px 10px; width: 24%;">
<img src="images/money-bag_mem.png" />
</div>
<table style="font-size:22px; font-size: 22px; margin: 29px auto; width: 60%;">
<!--<tr><td><img src="../images/acc_bal.png"/></td></tr>-->
<tr><td style="color:#2a2d2f; line-height:44px; text-align:center;">$0.00</td><tr>
<!--<tr><td style="color:#FFFFFF; line-height:12px;">Account Balance</td></tr>-->
</table>

<div style="    width: 100%;
      background: #171717;
    margin: 20px 0px 0px 0px;
    height: 32px;
    color: #fff;
    text-transform: inherit;
    font-size: 16px;    border-radius: 0px 0px 3px 3px;
"><span style="    position: relative; text-align: center; top: 5px;">Account Balance</span></div>

</div>

<div class="table_r3" align="center">
<div style="float:left; margin: 22px 0 22px 10px; width: 24%;">
<img src="images/eatned_tot_icon.png" />
</div>
<table style="font-size:22px; font-size: 22px; margin: 30px auto; width: 60%;">
<!--<tr><td><img src="../images/er_tot.png"/></td></tr>-->
<tr><td style="color:#2a2d2f; line-height:44px; text-align:center;">$0.00</td></tr>
<!--<tr><td style="color:#FFFFFF; line-height:12px;     text-align: center;">Earned Total</td></tr>-->
</table>

<div style="    width: 100%;
      background: #171717;
    margin: 20px 0px 0px 0px;
    height: 32px;
    color: #fff;
    text-transform: inherit;
    font-size: 16px;    border-radius: 0px 0px 3px 3px;
"><span style="    position: relative; text-align: center; top: 5px;">Earned Total</span></div>

</div>


</div><br />


<div class="member_detailref">
<!--<h3 id="formname_mem" style="width:820px; float:left;     margin: -62px 0px 0px 0px;">YOUR UPLINE AND REFERRAL DETAILS</h3>-->
<!--<p style="color:#FFFFFF; padding: 5px 0px 0px 16px;"><b>Your upline:</b>&nbsp;<b style="color:#5bc236;"></b></p>-->
<b style="color: #fff;">Your Referral link:</b>&nbsp;https://zenocapitals.com/?ref=<?php echo $profile->getName($_SESSION['profile']); ?>


</div>


<!--<table class="account_table">
<tr>
<td><a href="?a=edit_account"><img src="../images/acc_set_but.png" /></a></td>
<td><a href="?a=security"><img src="../images/sec_set_but.png" /></a></td>
<td><a href="?a=deposit"><img src="../images/male_but.png" /></a></td>
<td><a href="?a=withdraw_history"><img src="../images/with_dw_but.png" /></a></td>
</tr>
</table>--><br />
<div align="center" style="margin-top:5px;">
<div class="left">
        	<table cellpadding="10" cellspacing="15" width="48%" style=" border:1px solid #ffa300; border-radius:3px;" class="tables" align="left">
                	<thead>
                	<tr>
                    	<th>User Information</th>
                    </tr>
                    <tr>
                    	<th style="background-color:transparent;" colspan="2"><img src="images/users.png" /></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr >
                    	<td>Username: <span><?php echo $profile->getName($_SESSION['profile']); ?></span></td>
                    </tr>
                    <tr>
                    	<td>Registration Date: <span>Oct-26-2020</span></td>
                    </tr>
                    <tr>
                    	<td>Last Access: <span>Oct-27-2020 03:46:39 PM&nbsp;</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="right">
        		<table cellpadding="10" cellspacing="15" width="48%" style=" border:1px solid #ffa300; border-radius:3px; height:442px;" class="tables" align="right">
            	
                	<thead>
                	<tr>
                    	<th  colspan="2">Deposit & Withdraw Information</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    	<td  colspan="2">Total Deposit: <span>$<b>0.00</b></span></td>
                    </tr>
                    <tr>
                    	<td  colspan="2">Total Withdrawal: <span>$<b>0.00</b></span></td>
                    </tr>
                    <tr>
                    	<td  colspan="2">Pending Withdrawal: <span>$<b>0.00</b></span></td>
                    </tr>
                    <tr>
                    	<td  colspan="2">Last Deposit: <span>$<b>n/a</b> &nbsp;</span></td>
                    </tr>
                    <tr>
                    	<td  colspan="2">Last Withdrawal: <span>$<b>n/a</b> &nbsp;</span></td>
                    </tr>
                     </tbody>
                    <tfoot>
                    	<tr>
                        	<td><a href="?a=deposit" style="line-height:36px; width:180px;">Deposit</a></td>
                            <td><a href="?a=withdraw"  style="line-height:36px; width:180px;">Withdrawal</a></td>
                        </tr>
                    </tfoot>
            </table>
        </div>





<div class="member_detail1" align="center" style="    margin: 0px 0px 0px 48px;">








  



<br><br>


<br>










</div></div>



</div></div>





<br><br>


</div></div>



</div></div><div class="clear"></div>


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
            	<div class="left">Copyright &copy; 2017 <br /> Zenocapitals<br /><br /> All Rights Reserved.
                </div>
                <div class="middle">
                            <ul style="margin:0;">
                            	<li><a href="?a=cust&page=aboutus">About Us</a></li>
                                                        		<li><a href="?a=account">Account</a></li>
                        		                                <li><a href="?a=faq">FAQ</a></li>
                              	<li><a href="?a=rules">Rules</a></li>
                            </ul>
                            <ul style="margin:0;">
                            	<li><a href="?a=login">Login</a></li>
                                <li><a href="?a=support">Contact Us</a></li>
                                
                                <li><a href="#">Confidential Policy</a></li>
                            </ul>
                </div>
                <div class="right">
                	<div class="loc">Scheelegatan 112 28 Stockholm, Sweden</div>
                    
                    <div class="loc2">Ticket support</div>
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
