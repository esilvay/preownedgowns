<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("includes/head.php"); ?>

<script type="text/javascript">
	$(document).ready(function() { 
	   $('.messagesent').click(function() { 
		   $.growlUI('Message Received', 'Thank You!'); 
	   }); 
	});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15780110-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
	<div id="main">
    	<div id="top-holder">
    		<?php include("includes/heading.php"); ?>
            
            <div class="clear"></div>
            <?php include("includes/nav.php"); ?>
        </div>
        
        <div id="main_body">
            <div class="spacer"></div>
            <div id="content">
                <div id="left-column-s">
                	<div class="left-heading-s">
                        <p>Contact Us</p>
                    </div>
                    <p>We'd love to hear your thoughts and comments about our site, and to answer any questions you might have.</p>
                    <br />
                    <!--<h1>Register</h1>-->
                    <div id="contact-holder">
            <form id="contact" action="/assets/scripts/contact.php" method="post" name="contact">
            	<p><span>Inquiry Type:</span></p><select name="inquirytype">
                        <option value="1" selected="selected" <?php isset($_SESSION['model']['params']['inquirytype']) && $_SESSION['model']['params']['inquirytype'] == '1' ? print 'selected="selected"' : ''; ?>>Support</option> 
                        <option value="2" <?php isset($_SESSION['model']['params']['inquiry-type']) && $_SESSION['model']['params']['inquiry-type'] == '2' ? print 'selected="selected"' : ''; ?>>Info/Question/Comment</option> 
                        <option value="3" <?php isset($_SESSION['model']['params']['inquiry-type']) && $_SESSION['model']['params']['inquiry-type'] == '3' ? print 'selected="selected"' : ''; ?>>Advertise with Us</option>  
                        </select><br /><br />
                        
            	<p><span>*Name:</span> <input type="text" name="name" value="<?php print isset($_SESSION['model']['params']['name'])?$_SESSION['model']['params']['name']:'';?>"/><?php print isset($_SESSION['model']['errormsg']['name']) ? $_SESSION['model']['errormsg']['name'] : '';?></p><br />
                
                <p><span>*Email:</span> <input type="text" name="email" value="<?php print isset($_SESSION['model']['params']['email'])?$_SESSION['model']['params']['email']:'';?>" /><?php print isset($_SESSION['model']['errormsg']['email']) ? $_SESSION['model']['errormsg']['email'] : '';?></p><br />
                
                <p><span>Listing Number:</span> <input type="text" name="listid" value="<?php print isset($_SESSION['model']['params']['listid'])?$_SESSION['model']['params']['listid']:'';?>"/></p><br />
                
                	
                <p><span>*Comments:</span> <textarea id="message" name="message" rows="6" cols="30"><?php print isset($_SESSION['model']['params']['message'])?$_SESSION['model']['params']['message']:'';?></textarea><?php print isset($_SESSION['model']['errormsg']['message']) ? $_SESSION['model']['errormsg']['message'] : '';?></p><br /><br />
                
                <p><span>Security Code:</span><input id="security_code" name="security_code" type="text" /></p><img src="/assets/scripts/CaptchaSecurityImages.php?width=100&height=40&characters=5" alt="captcha" /><br />
                
                <input type="hidden" name="form_submitted" value="1"/>
                <input id="submit-c" class="messagesent" type="submit" value=" " />
           </form>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
</body>
</html>
<?php
	if(isset($_SESSION['model'])) unset($_SESSION['model']);
?>