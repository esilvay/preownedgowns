<?php
	session_start();

	if (isset($_SESSION['is_logged_in'])) {
		header("location:/member");
	}
	else{
		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("includes/head.php"); ?>
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
                <div id="left-column-r">
                	<div id="left-heading-r">
                        <p>Login</p>
                    </div><br /><br /><br />
                    <form id="login" action="/assets/scripts/login.php" method="post" name="login">
   						
                        <div class="error_message" style="float: right;">
                        	<?php print isset($_SESSION['model']['errormsg']['email']) ? $_SESSION['model']['errormsg']['email'] : '';?>
                        </div>
                        <br />
                        
                        
                        <span>Email:</span> <input type="text" name="email" value="<?php print isset($_SESSION['model']['params']['email'])?$_SESSION['model']['params']['email']:'';?>"/><br /><br /><br />
                        <div class="error_message" style="float: right;">
                        	<?php print isset($_SESSION['model']['errormsg']['password']) ? $_SESSION['model']['errormsg']['password'] : '';?>
                        </div>
                        <br />
                        
                        
                        <span>Password:</span> <input type="password" name="password" value="<?php print isset($_SESSION['model']['params']['password'])?$_SESSION['model']['params']['password']:'';?>"/><br /><br />
                        
        				<input type="hidden" name="login_submitted" value="1"/><br />
                        <a href="/login/forgot">Forget Password?</a>
                        <input id="submit-l" type="submit" value=" "/>
                        
                   </form><br />
                   <?php print isset($_SESSION['model']['errormsg']['active']) ? $_SESSION['model']['errormsg']['active'] : '';?><br /><br /><br />
                   <?php print isset($_SESSION['model']['errormsg']['inactive']) ? $_SESSION['model']['errormsg']['inactive'] : '';?><br /><br />
                    <div class="clear"></div>
                </div>
                <div id="right-column-r">
                    <div id="right-heading-r">
                        <p>Still don't have a PreOwnedGowns Account?</p>
                    </div>
                    <p>PreOwnedGowns.com is a service that assists buyers and sellers with new and used gowns. The seller pays a flat rate to list a dress on the site for a period of time. All communications and transactions are between the buyer and seller. You can use Paypal or another protected site for payment. </p><br />
                        
                        <p>Why blow your entire budget on your dress when there are other options? PreOwnedGowns.com wants you to be ecstatic on your special day. We offer a dependable search ranging from designers, styles, prices, and sizes. Our goal is to make everyone’s dreams come true.</p><br />
                    <?php
						if (isset($_SESSION['is_logged_in'])) {
							echo '<a href="/member"><span style="font-weight: bold; float: right; font-size: 16px;">Get Started Today! »</span></a>';
						}
						else{
							echo '<a href="/register"><span style="font-weight: bold; float: right; font-size: 16px;">Sign-Up Today »</span></a>';
						}
					?>
                </div>
                <div class="clear"></div>
                
                <!--<div id="featured-gowns">
                	<div id="fg-heading">
                    	<span>Featured Gowns</span>
                    </div>
                    <div id="featured-scroller">
                   		  
                    </div>
                </div>-->
            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
</body>
</html>
<?php
	if(isset($_SESSION['model'])) unset($_SESSION['model']);
?>