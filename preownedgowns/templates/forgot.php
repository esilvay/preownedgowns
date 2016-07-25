<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("includes/head.php"); ?>

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
                        <p>Send Password Reminder</p>
                    </div><br /><br /><br />
                    <form id="forgot-password" action="/assets/scripts/reset-password.php" method="post" name="login">
   						
                        <div class="error_message" style="float: right;">
                        <?php print isset($_SESSION['model']['errormsg']['email']) ? $_SESSION['model']['errormsg']['email'] : '';?>
                        </div>
                        <br />
                        
                        
                        <span>Email:</span> <input type="text" name="email" value="<?php print isset($_SESSION['model']['params']['email'])?$_SESSION['model']['params']['email']:'';?>"/><br /><br /><br /><br />
        				<input type="hidden" name="reset-password" value="1"/><br />
                        <input id="submit-f" type="submit" value=" "/>
                        
                   </form>
                   <?php print isset($_SESSION['model']['errormsg']['success']) ? $_SESSION['model']['errormsg']['success'] : '';?>
                   <?php print isset($_SESSION['model']['errormsg']['fail']) ? $_SESSION['model']['errormsg']['fail'] : '';?>
                   <?php print isset($_SESSION['model']['errormsg']['error']) ? $_SESSION['model']['errormsg']['error'] : '';?>
                    <div class="clear"></div>
                </div>
                <div id="right-column-r">
                    <div id="right-heading-r">
                        <p>Sign-Up Today for your Free Account!</p>
                    </div>
                    <p>PreOwnedGowns.com is a service that assists buyers and sellers with new and used gowns. The seller pays a flat rate to list a dress on the site for a period of time. All communications and transactions are between the buyer and seller. You can use Paypal or another protected site for payment. </p><br />
                        
                        <p>Why blow your entire budget on your dress when there are other options? PreOwnedGowns.com wants you to be ecstatic on your special day. We offer a dependable search ranging from designers, styles, prices, and sizes. Our goal is to make everyone’s dreams come true.</p><br />
                    <a href="/register"><span style="font-weight: bold; float: right; font-size: 16px;">Sign-Up Today »</span></a>
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