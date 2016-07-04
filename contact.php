<?php 
session_start();
error_reporting(0);
if( isset($_POST['submit'])) {

if($_POST['fname']==''){ $error .='First name missing.\n'; }
if($_POST['email']==''){ $error .='Email missing.\n'; }
if($_POST['phone']==''){ $error .='Phone missing.\n'; }
if($_POST['address']==''){ $error .='Address missing.\n'; }
if($_POST['country']==''){ $error .='Country missing.\n'; }
if($_POST['message']==''){ $error .='Message missing.\n'; }
	
	if( $_SESSION['security_code'] != $_POST['security_code']) {
	$error .='Invalid security code';
	}
if($_POST['postcode']!='') $error .='Error in form.\n';

if($error){
	echo '<script type="text/javascript"> alert("Error : \r'.$error.'"); </script>';	
}else{
	
	$to='info@gravitas.co.in, gravitas60@gmail.com, gravitas@gravitas.co.in, prem@abacusdesk.co.in'; 
	$sub="Enquiry/Feedback Form - Gravitas Website";
	
	$data='<table width="837" border="0" cellpadding="5" cellspacing="0" style="font-family:Tahoma, Geneva, sans-serif; font-size:12px;">
  <tr>
    <td width="248"  bgcolor="#CCCCCC"><strong>Information</strong></td>
    <td width="569"  bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td >First Name:</td>
    <td>'.$_POST['fname'].'</td>
  </tr>
  <tr>
    <td>Last Name:</td>
    <td>'.$_POST['lname'].'</td>
  </tr>
  <tr>
    <td> Email:</td>
    <td>'.$_POST['email'].'</td>
  </tr>
  <tr>
    <td>Phone:</td>
    <td>'.$_POST['phone'].'</td>
  </tr>
  <tr>
    <td>Address:</td>
    <td>'.$_POST['address'].'</td>
  </tr>
  <tr>
    <td>Country:</td>
    <td>'.$_POST['country'].'</td>
  </tr>
  <tr>
    <td>State:</td>
    <td>'.$_POST['state'].'</td>
  </tr>
  <tr>
    <td>Message/Feedback:</td>
    <td>'.$_POST['message'].'</td>
  </tr>
</table>';
	
	$header  = "From: ".$_POST['fname'].' '.$_POST['lname']." <".$_POST['email'].">"."\r\n"; 
	$header .= "Reply-To: ".$_POST['fname'].' '.$_POST['lname']." <".$_POST['email'].">"."\r\n";
	$header .= "Return-Path: ".$_POST['fname'].' '.$_POST['lname']." <".$_POST['email'].">"."\r\n";
	$header .= "X-Mailer: PHP/" . phpversion(). "\r\n";
	$header .= 'MIME-Version: 1.0' . "\r\n"; 
	$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
	
	$send=mail($to,$sub,$data,$header);
	if($send) echo '<script type="text/javascript"> window.location.href="thanks.html"; </script>';
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gravitas Enterprises Private Limited</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<script type="text/javascript" src="js/jquery.core.js"></script>
<script type="text/javascript" src="js/jquery.superfish.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="js/jquery.easing.js"></script>
<script type="text/javascript" src="js/jquery.scripts.js"></script>
<link rel="stylesheet" type="text/css" href="anylinkmenu.css" />
<script type="text/javascript" src="js/menucontents.js"></script>
<script type="text/javascript" src="js/anylinkmenu.js"></script>
<script type="text/javascript">
//anylinkmenu.init("menu_anchors_class") //Pass in the CSS class of anchor links (that contain a sub menu)
anylinkmenu.init("menuanchorclass")
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
<style type="text/css">
input.rounded {
border: 1px solid #ccc;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius: 5px;
-moz-box-shadow: 1px 1px 2px #b9b8b8;
-webkit-box-shadow: 1px 1px 2px #b9b8b8;
box-shadow: 1px 1px 2px #b9b8b8;
font-size: 15px;
padding: 4px 7px;
outline: 0;
width:250px;
-webkit-appearance: none;
}
input.rounded:focus {
border-color:#666666;
}

textarea.rounded1 {
border: 1px solid #ccc;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius: 5px;
-moz-box-shadow: 1px 1px 2px #b9b8b8;
-webkit-box-shadow: 1px 1px 2px #b9b8b8;
box-shadow: 1px 1px 2px #b9b8b8;
font-size: 15px;
padding: 4px 7px;
outline: 0;
width:350px;
height:100px;
-webkit-appearance: none;
}

textarea.rounded1:focus {
border-color:#666666;
}
</style>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41200059-1', 'gravitas.co.in');
  ga('send', 'pageview');

</script>
</head>

<body>
<div id="wrap">
    <div class="top_corner"></div>
    <div id="main_container">
    
        <div id="header">
            <div id="logo"><a href="index.html"><img src="images/gravitas-enterprises-logo.png" alt="" title="" border="0" /></a></div>
            <div id="logo1"><a href="index.html"><img src="images/contacts.jpg" width="288" height="55" border="0" /></a></div>
           
<br /> <div id="menu">
                <ul>                                                                                            
                    <li><a href="index.html" title="">Home</a></li>
                    <li><a  href="about.html" title="Profile">Profile</a></li>
                    <li><a href="#" title="Product" class="menuanchorclass" rel="anylinkmenu1">Products</a></li>
                    <li><a href="infrastructure.html" title="">Infrastructure</a></li>                    
                    <li><a href="Quality.html" title="Quality">Quality</a></li>
                    <li><a href="clients.html" title="Clients">Clients</a></li>
                    <li><a class="current" href="contact.php" title="Contact">Contact </a></li>
                </ul>
            </div>
        </div>
        
        <div class="center_content_pages">
        
        
        <div class="financial-application-form">
             <h2>Contact Us</h2>             
             <iframe width="590" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=213136312108577252987.0004dd845681565abb8e5&amp;hl=en&amp;ie=UTF8&amp;ll=28.305821,77.306076&amp;spn=0,0&amp;t=m&amp;output=embed"></iframe><br /><small>View <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=213136312108577252987.0004dd845681565abb8e5&amp;hl=en&amp;ie=UTF8&amp;ll=28.305821,77.306076&amp;spn=0,0&amp;t=m&amp;source=embed" style="color:#0000FF;text-align:left">GRAVITAS ENTERPRISES PVT. LTD.</a> in a larger map</small>
             <p><strong><img src="images/contact-us.jpg" width="170" height="157" align="right" />GRAVITAS ENTERPRISES PVT. LTD.</strong><br />
               Plot No. - 60, Sector - 59,<br /> 
               HSIIDC Industrial Estate,
             Ballabhgarh, <br />
             Faridabad – 121004,
             Haryana, India.</p>
<p class="email">               Phone/Fax : +91 129 2307033, 96, 97, 98<br />
               Mobile : +91 987 340 2331, 981 110 2332<br />
                  E-mail : <a href="mailto:gravitas@gravitas.co.in">gravitas@gravitas.co.in</a>, <a href="mailto:gravitas60@gmail.com">gravitas60@gmail.com</a><br />
               Website : <a href="http://www.gravitas.co.in">www.gravitas.co.in</a></p>
             <div >
         <form action="" method="post">
<table width="505" border="0" cellpadding="5" cellspacing="0" style="font-family:Tahoma, Geneva, sans-serif; font-size:12px;">
  <tr>
    <td width="110" > Name*:</td>
    <td width="375">
      <input type="text" class="rounded" name="fname" id="fname" value="<?php echo $_REQUEST['fname'] ;?>"></td>
  </tr>
  <tr>
    <td>Designation:</td>
    <td><input type="text"  class="rounded" name="lname" id="lname" value="<?php echo $_REQUEST['lname'] ;?>"></td>
  </tr>
  <tr>
    <td> Email*:</td>
    <td><input type="text" class="rounded" name="email" id="email" value="<?php echo $_REQUEST['email'] ;?>"></td>
  </tr>
  <tr>
    <td>Deptt *:</td>
    <td><input type="text" class="rounded" name="phone" id="phone" value="<?php echo $_REQUEST['phone'] ;?>"></td>
  </tr>
  <tr>
    <td>Mobile:</td>
    <td><input type="text" class="rounded" name="mobile" id="mobile" value="<?php echo $_REQUEST['phone'] ;?>" /></td>
  </tr>
  <tr>
    <td>Landline:</td>
    <td><input type="text" class="rounded" name="landline" id="landline" value="<?php echo $_REQUEST['phone'] ;?>" /></td>
  </tr>
  <tr>
    <td>Address*:</td>
    <td><input type="text" class="rounded" name="address" id="address" value="<?php echo $_REQUEST['address'] ;?>" /></td>
  </tr>
  <tr>
    <td>City/State:</td>
    <td><input type="text"  class="rounded" name="state" id="state" value="<?php echo $_REQUEST['state'] ;?>"></td>
  </tr>
  <tr>
    <td>Country*:</td>
    <td><input type="text"  class="rounded"name="country" id="country" value="<?php echo $_REQUEST['country'] ;?>"></td>
  </tr>
  <tr>
    <td>Message/Query*</td>
    <td><textarea name="message"  class="rounded1" id="message"><?php echo $_REQUEST['message'] ;?></textarea></td>
  </tr>
  <tr>
    <td>Security Code: </td>
    <td><input class="rounded" id="security_code" name="security_code" type="text" />
      <img src="captcha_images.php?width=100&amp;height=25&amp;characters=5" align="right" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" id="submit" value="Submit">
      <input type="hidden" name="postcode" id="postcode"></td>
  </tr>
</table>
</form>
             </div>
          </div>
        
        
<div class="right_block">
            	<h2>Product Range</h2>                
                <div class="home_news">
                <p><a href="Products_Reciprocating_Air_Compressors.html">Reciprocating Small Air Compressors</a></p> 
                <p><a href="Products_Air_Dryers_&_Accessories.html">Air Dryers & Air Purifier Systems</a></p> 
                
 			
               <p><a href="Products_Pressure_Vessels.html">Pressure Vessels</a></p>               
               <p><a href="Products_Fabrication.html">Fabrication</a></p>
                </div>                
            </div>
                        <div class="right_block2">
            	<h2>Our Clients</h2>      
              <p><a href="#"><img src="images/clients.gif" border="0" /></a></p>                
          </div>  
            
			 

            
   
        
        <div class="clear"></div>
        </div>
        
        <div class="footer">
        	<div class="copyright"><a href="http://gravitas.co.in/" target="_blank">Gravitas © 2013</a> | <a href="http://www.abacusdesk.com/" target="_blank">Site by Abacus Desk</a></div>
        
        	<div class="footer_links">
                <a class="current" href="index.html" title="">Home</a>
                <a href="#" title="">About Company</a>
                <a href="#" title="">Projects</a>
                <a href="#" title="">Clients</a>
                <a href="#" title="">Testimonials</a>
                <a href="contact.php" title="">Contact</a>            
            </div>
        </div>
      
      
    
    </div>
</div>
</body>
</html>
