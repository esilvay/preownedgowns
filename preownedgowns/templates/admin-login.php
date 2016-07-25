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
        
        <div id="main_body-ad">
            <div class="spacer"></div>
            <div id="content-ad">
                <div id="left-column-ad">
                	<div id="left-heading-r">
                        <p>Login</p>
                    </div><br /><br /><br />
                    <form id="login" action="/assets/scripts/admin.php" method="post" name="login">
   						
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
                        <input id="submit-l" type="submit" value=" "/>
                        
                   </form><br />
                   <?php print isset($_SESSION['model']['errormsg']['active']) ? $_SESSION['model']['errormsg']['active'] : '';?><br />
                   <?php print isset($_SESSION['model']['errormsg']['inactive']) ? $_SESSION['model']['errormsg']['inactive'] : '';?><br />
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
</body>
</html>
<?php
	if(isset($_SESSION['model'])) unset($_SESSION['model']);
?>