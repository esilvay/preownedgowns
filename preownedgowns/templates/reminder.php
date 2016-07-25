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
                        
                        
                        <span>Email:</span> <input type="text" name="email" value="<?php print isset($_SESSION['model']['params']['email'])?$_SESSION['model']['params']['email']:'';?>"/></p><br /><br /><br /><br />
                        
        				<input type="hidden" name="reset-password" value="1"/><br />
                        <input id="submit" type="submit" value=" "/>
                        
                   </form>
                    <div class="clear"></div>
                </div>
                <div id="right-column-r">
                    <div id="right-heading-r">
                        <p>Sign-Up Today for your Free Account!</p>
                    </div>
                    <span>PreOwnedGowns.com can help you find the dress you’ve always dreamed about. Our guided searches showcase the best deals, the dresses we love and the hottest listings of the week. And our advanced search can conveniently narrow by designer, size, price and other criteria. With thousands of wedding gowns listed for sale, your dream dress is waiting.</span><br /><br />
                    
                    <span>PreOwnedGowns.com can help you find the dress you’ve always dreamed about. Our guided searches showcase the best deals, the dresses we love and the hottest listings of the week.</span><br /><br />
                    <a href="/register"><span style="font-weight: bold; float: right;">Sign-Up Today »</span></a>
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