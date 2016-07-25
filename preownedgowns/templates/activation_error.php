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
                <div id="left-column-s">
                	<div id="left-heading-s">
                        <p>Account Validation</p>
                    </div>
                    <br />
                    <br />
					<p>Unable to activate account. Please try again later.</p>
                    <!--<h1>Register</h1>-->
                    <div class="clear"></div>
                </div>
                <!--<div id="right-column-r">
                        <div id="right-heading-r">
                        </div>
                	</div>
                <div class="clear"></div>
                
                <div id="featured-gowns">
                    <div id="fg-heading">
                    </div>
                        <div id="featured-scroller">
                        </div>
                </div>-->
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