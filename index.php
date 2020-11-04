<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <!-- Bootstrap -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
<title> Home | Royal Diamond Investment Company</title>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
 
<?php include_once 'assets/private/init.php'; ?>

<title>royaldiamondinvestment.com</title>
<link href="https://fonts.googleapis.com/css?family=Cairo|Oswald:300,400,700|Roboto+Condensed|Roboto:400,500" rel="stylesheet">
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="faqstyle.css" type="text/css" />
<link rel="stylesheet" href="animate.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
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
                    	
                        <?php if (loggedIn()): ?>
                            <div class="img"><img src="images/user_mem_left_icon.png" /></div>
                            <a href="contact.php" class="fb" style="font-size:25px;"><span> <?php echo $profile->getName($_SESSION['profile']); ?></span></a>
                            <?php else: ?>
                         <div class="img"><img src="images/fb.png" /></div>
                        <a href="contact.php" class="fb" style="font-size:25px;"><span>Contact Us</span> Email</a>
                            <?php endif; ?>
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
                <?php if (loggedIn()): ?>

                <!-- Dropdown -->

                <a href="dash.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                <a href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
              </li>
                <?php else: ?>
            	<a href="login.php"> <i class="fa fa-lock"></i> Login</a>
                <a href="register.php"><i class="fa fa-user "></i> Sign up</a>
                <?php endif; ?>
                                       

                                    </div>
            </div>         
        </div>
    </div>
     

<!----- header logo and menus ---->

<!------- banner ------>

     	<div class="wrap">
             <!-- <marquee behavior="slide" direction="up" class="text-center" style="color: #fec303;opacity: 50%;"><h1> BMUIZZ && BOUJIE Royal Diamond investment company  </h1></marquee> -->
         <div class="banner">
         	<div class="left">
                <div class="title"><div class="per">4%</div><div class="text">PROFIT <br /><span>DAILY</span></div></div>
                <div class="content">FOR SIX DAYS</div>
                <div class="banner_btn" align="center">
                	<a href="register.php" class="wobble-horizontal">Start Earing Now</a>
                 </div>
            </div>
            <div class="right">
            	<img src="images/bitcoin.png" />
            </div>
        </div>
	</div>
</div>     
    
</header>


<div class="clear"></div>

<!------- banner ------>

<!----- plans ------>


<section>
	<div id="wrapper" class="trust-bg">
    	<div class="wrap">
        	<div class="trust" align="center">
                <div class="left wow bounceInLeft">
                	<div class="screen"><img src="images/bit_vid.png" />
                    <img src="images/vid.png" class="screen_1" /></div>
                </div>
                <div class="right wow bounceInRight">
               		<p>Royal Diamond investment is a global financial platform that is designed to provide investment services that is open and accessible to everyone. Our company outlines long term goals in both financial and cryptocurrency development to improve Royal Diamonds financial network.

We are promoting an open global investment product that give access and investment literacy by providing access to low-cost investment services through cryptocurrency applications.

Royal Diamond investment platform is 100% open to all people globally where all income level can access our user friendly, easy to use and low cost investment services. Through our cryptocurrency application we are empowering different useful technology to create different financial products for our community.

  </p>
                </div>
           	</div>
        </div>
     </div>
</section>


<section>
	<div id="wrapper" class="secure-bg">
    	<div class="wrap">
        	<div class="secure wow zoomIn" align="center">
            	<div class="sub_title">The benefits of cooperation with </div>
                <div class=" title">Royal Diamond</div>
            	<div class="assets">
                    <div class="content">
                        <div class="img">
                            <img src="images/reg1.png" />
                        </div>
                        <div class="tie">REGIONAL MANAGEMENT</div>
                        <div class="cont">To be become a regional representative and start earning 3,000 $ monthly. steps ,you must have 100 active member from your downline both indirect referral is included</div>
                    </div>
                    <div class="content">
                        <div class="img">
                            <img src="images/reg2.png" />
                        </div>
                        <div class="tie">MAXIMUM TRANSPARENCY</div>
                        <div class="cont">The company provides daily reports on all transactions with Royal Diamonds, as well as investment forecasts for the future.</div>
                    </div>
                    <div class="content">
                        <div class="img">
                            <img src="images/reg3.png" />
                        </div>
                        <div class="tie">SIMPLE AND AFFORDABLE</div>
                        <div class="cont">Invest, starting from $100 with professional traders. To do this, you do not need knowledge or experience of the investment.</div>
                    </div>
                    <div class="content">
                        <div class="img">
                            <img src="images/reg4.png" />
                        </div>
                        <div class="tie">AFFILIATE PROGRAM</div>
                        <div class="cont">Develop your own team to generate income without investment. Thanks to a multilevel bonus system. Double affiliate program.</div>
                    </div>
                </div>
           	</div>
        </div>
     </div>
</section>



<section>
	<div id="wrapper" class="plan-bg">
    	    	<div class="wrap">
            <div class="plan wow fadeInDownBig" align="center">
            	<div class="title">INVESTMENT PACKAGES WE OFFER</div>
                <div class="sub_title">All the investment plans are potentially solid</div>
                <div class="sub_plan">
                    <div class="content">
                        <div class="tie">Silver plan</div>
                        <div class="amt">Min <span>$100</span> To <span>$19,999</span></div>
                        <div class="text">  
                            <div class="per">2.5% daily</div>                  
                            <div class="days">For 6 days</div>
                        </div>
                        <div class="cont">  
                            <p>Instant Payout</p>
                            <p>Hourly Earnings</p>
                        </div>
                        <div class="plan_btn">ROI 15%</div>
                    </div>
                    
                    <div class="content">
                        <div class="tie">Gold plan</div>
                        <div class="amt">Min <span>$20,000</span> TO <span>$39,999</span></div>
                        <div class="text">  
                            <div class="per">3.0% daily</div>                  
                            <div class="days">For 6 daily</div>
                        </div>
                        <div class="cont">  
                            <p>Instant Payout</p>
                            <p>Hourly Earnings</p>
                        </div>
                        <div class="plan_btn">ROI 18%</div>
                    </div>
                    
                    <div class="content">
                        <div class="tie">Diamond plan</div>
                        <div class="amt">Min <span>$40,000</span> TO <span>$unlimited</span></div>
                        <div class="text">  
                            <div class="per">4% daily</div>                  
                            <div class="days">For 6 days</div>
                        </div>
                        <div class="cont">  
                            <p>Instant Payout</p>
                            <p>Hourly Earnings</p>
                        </div>
                        <div class="plan_btn">ROI 24%</div>
                    </div>
                </div>    
			</div>
            
            <div class="calc wow fadeInLeft" align="center">
            
            
            <div class="left">Profit calculator</div>
            	
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="../images/js/calcs.js"></script>


<div class="calculator">
	
    <div class="content">
        <div class="title">SELECT PLAN</div>
        <div class="num"><select id="calc_plan" class="opts" style="padding:0px;  min-width: 180px;">

 		 <option value>Select</option>

		<option value="1" class="opts">2.5% daily For 6 days</option>

		<option value="2" class="opts">3% daily For 6 days</option>

		<option value="3" class="opts">4% daily For 6 days</option>

				</select></div>
    </div>
    
    <div class="content">
        <div class="title">Amount Deposit:</div>
        <div class="num"><input id="inv_amount" value="0" name="limitedtextfield" type="text" onkeydown="limitText(this.form.limitedtextfield,this.form.countdown,8);" onkeyup="limitText(this.form.limitedtextfield,this.form.countdown,8);" maxlength="8" class="inpts1"  style=" min-width:60px; font-size:14px; font-weight:bold; "/></div>
    </div>
    
    <div class="content">
        <div class="title">Interest Rate:</div>
		<div class="num"><input value="" id="assign_per" disabled="disabled" type="text" class="inpts1" style="min-width: 180px;font-size:16px; font-weight:bold;" value="370%" /></div>
    </div>
    
    <div class="content">
        <div class="title">Total Returns:</div>
        <div class="num"><input value="" id="total_return" disabled="disabled" type="text" class="inpts1"  style=" width: 196px; font-size:14px; font-weight:bold;  font-size:21px; font-weight:bold;" value="$925"/></div>
    </div>
      
</div>
            
                               
        </div>
     </div>
</section>
                                                                                    

<section>
	<div id="wrapper" class="stat-bg">
    	<div class="wrap">
        	<div class="stat wow fadeInRight" align="center">
            	<div class="title">The scheme of the company work</div>
                
            	<div class="stat_list">
                    <div class="content">
                        <div class="img">
                            <img src="images/stat1.png" />
                        </div>
                        <div class="cont">
                            <div class="num">01</div>
                            <div class="text">Free registration. To open an account, it's sufficient to enter your e-mail.</div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="img">
                            <img src="images/stat2.png" />
                        </div>
                        <div class="cont">
                            <div class="num">02</div>
                        	<div class="text">Transfer of investment funds in trust to our traders.</div>
                        </div>   
                    </div>
                    <div class="content">
                        <div class="img">
                            <img src="images/stat3.png" />
                        </div>
                        <div class="cont">
                            <div class="num">03</div>
                        	<div class="text">Trading with Gold on the cryptocurrency exchanges and weekly reporting of traders.</div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="img">
                            <img src="images/stat4.png" />
                        </div>
                        <div class="cont">
                            <div class="num">04</div>
                        	<div class="text">Equal division of final profit between the company and its investors.</div>
                        </div>
                    </div>                   
                </div>
           	</div>
        </div>
     </div>
</section>

<section>
	<div id="wrapper" class="invest-bg">
    	<div class="wrap">
        	<div class="invest " align="center">
            	<div class="left">
                	<div class="title">Multilevel referral bonus system</div>
                    <div class="sub_title">for new deposits and daily accruals</div>
                    <div class="referral_list">
                    	<div class="content">
                        	<div class="tie">1-st Level Referral</div>
                            <div class="cont">
                            	<div class="img"><img src="images/coin1.png" /></div>
                                <div class="num">10%</div>
                            </div>
                        </div>
                        <div class="content">
                        	<div class="tie">2-nd Level Referral</div>
                            <div class="cont">
                            	<div class="img"><img src="images/coin2.png" /></div>
                                <div class="num">10%</div>
                            </div>
                        </div>
                        <div class="content">
                        	<div class="tie">3-rd Level Referral</div>
                            <div class="cont">
                            	<div class="img"><img src="images/coin3.png" /></div>
                                <div class="num">10%</div>
                            </div>
                        </div>
                    </div>
                    <div class="title">Representative affiliate program</div>
                    <div class="affiliate_list">
                            <div class="cont">
                            	<div class="img"><img src="images/coin1.png" /></div>
                                <div class="num">10%</div>
                            </div>
                        <div class="cont">
                            	<div class="img"><img src="images/coin1.png" /></div>
                                <div class="num">10%</div>
                        </div>
                        <div class="cont">
                            	<div class="img"><img src="images/coin1.png" /></div>
                                <div class="num">10%</div>
                        </div>
                    </div>
                    <p>Click �Read more� to find out more about becoming our representative and receiving extra bonus interest by joining our referral program.</p>
                    <div class="ref_btn">
                        <a href="?a=cust&page=representative" class="wobble-horizontal">Referral representatives</a> 
                        <a href="?a=cust&page=aboutus" class="wobble-horizontal">Read More</a>
                    </div>
                </div>
                <div class="right">
                	<div class="title">LAST transactions</div>
                     <table cellspacing=0 cellpadding=2 border=0 width=100%><tbody>
 
 
 
<tr>
 <td class=menutxt>csc</td>
  <td class=menutxt style="">$50.00</td>
  <td class=menutxt>withdrawals</td>
<td class=menutxt ><img src="images/50.gif"></td>
</tr>
 
<tr>
 <td class=menutxt>csc</td>
  <td class=menutxt style="">$50.00</td>
  <td class=menutxt>withdrawals</td>
<td class=menutxt ><img src="images/50.gif"></td>
</tr>
<tr>
 <td class=menutxt>csc</td>
  <td class=menutxt style="">$50.00</td>
  <td class=menutxt>withdrawals</td>
<td class=menutxt ><img src="images/50.gif"></td>
</tr>
<tr>
 <td class=menutxt>csc</td>
  <td class=menutxt style="">$50.00</td>
  <td class=menutxt>withdrawals</td>
<td class=menutxt ><img src="images/50.gif"></td>
</tr>
<tr>
 <td class=menutxt>csc</td>
  <td class=menutxt style="">$50.00</td>
  <td class=menutxt>withdrawals</td>
<td class=menutxt ><img src="images/50.gif"></td>
</tr> 
 
 
</tbody>
</table>

               <!--     <table cellspacing="0" cellpadding="0" border="0">
                    	<tbody>
                        	<tr>
                            	<td>kasalife</td>
                                <td>0.01000000</td>
                                <td>0.01000000</td>
                            </tr>
                            <tr>
                            	<td>kasalife</td>
                                <td>0.01000000</td>
                                <td>0.01000000</td>
                            </tr>
                            <tr>
                            	<td>kasalife</td>
                                <td>0.01000000</td>
                                <td>0.01000000</td>
                            </tr>
                        </tbody>
                    </table>-->
                </div>
           	</div>
        </div>
     </div>
</section>


<section>
	<div id="wrapper" class="live_stat-bg">
    	<div class="wrap">
        	<div class="live_stat wow fadeInUp" align="center">
              
                
                
                <div class="content">
                	<div class="img"><img src="images/st2.png" /></div>
                    <div class="tie">Days online</div>
                    <div class="num">1310</div>
                </div>
                
                <div class="content">
                	<div class="img"><img src="images/st3.png" /></div>
                    <div class="tie">Total Deposit</div>
                    <div class="num">2862918.97</div>
                </div>
                
                <div class="content">
                	<div class="img"><img src="images/st4.png" /></div>
                    <div class="tie">Total withdraw</div>
                    <div class="num">2634489.23</div>
                </div>
                
                
                
           	</div>
        </div>
     </div>
</section>



   <section>
	<div id="wrapper" class="news-bg">
    	<div class="wrap">
        	<div class="news wow fadeInUp" align="center">
                <div class="title">
                	<div class="left_title">Latest News</div>
                    <div class="right_title">Our Certificates</div>
                </div>   
                <div class="content">
                	<div class="left_cont">
                    	





<!--<table cellspacing=0 cellpadding=2 border=0 width=100% style="padding-left:30px; padding-top:30px;">
<tr>
 <th colspan=2><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
	<th colspan=2 class=title>News</th>
</tr>
<tr>
 <td><a href="?a=news">All news</a>
 </td>
</tr>
</table>
<br>-->

                    	<!--<div class="tie">INSTANT PAYMENT- GLITCH</div>
                        <div class="sub_tie">Hello friends, good morning :)</div>
                        <div class="cont">One of the member woke me up saying that withdrawals are moving into Pending List. I will look into this issue now although its 4 am here. <br />

Probably it is just API setting issue which can be solved in 1 hour. If its not the case, we need to contact script provider and wait for their reply. Meanwhile I will also do manual payment in morning if this process it taking time</div>
						<div class="news_btn">
                            <div class="day">Dec-8-2016 06:00:43 AM</div>
                            <a href="#">Read More</a>
                    	</div>-->
                    </div> 
                    <div class="right_cont">
                    	<div class="set_secure">
                        	<ul style="margin:0; padding:0;">
                            	<li><img src="images/sec1.png" /></li>
                                <li><img src="images/sec2.png" /></li>
                                <li><img src="images/sec3.png" /></li>
                                <li><img src="images/sec4.png" /></li>
                                <li><img src="images/sec5.png" /></li>
                                <li><img src="images/sec6.png" /></li>
                            </ul>
                            <ul style="margin:0; padding:15px 0;">
                            	<li><img src="images/sec1.png" /></li>
                                <li><img src="images/sec2.png" /></li>
                                <li><img src="images/sec3.png" /></li>
                                <li><img src="images/sec4.png" /></li>
                                <li><img src="images/sec5.png" /></li>
                                <li><img src="images/sec6.png" /></li>
                            </ul>
                        </div>
                        <div class="certificate">
                        <div class="img">
                        	<a href="images/CER.pdf" target="_blank"><img src="images/certificate.png" /></a>
                            <a href="images/CERTIFICATE.pdf" target="_blank">Check company</a>
                        </div>
                    </div>
                </div>
           	</div>
        </div>
     </div>
</section>  

 

<div class="clear"></div>


<!--------------- transacrion list -------------------->



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
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="appp.js"></script>
</body>
</html>