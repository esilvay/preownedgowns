<?PHP
session_start();

$old_sessionid = session_id();
session_regenerate_id(TRUE);
$new_sessionid = session_id();

if (isset($_SESSION['is_logged_in'])) {
     header("Location:/member");
     die();     // just to make sure no scripts execute
}

elseif (!isset($_SESSION['admin_logged_in'])) {
     header("Location:/login");
     die();     // just to make sure no scripts execute
}

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
                <div id="left-column-m">
                	<?php include("includes/admin-bar.php"); ?>
                </div>
                <div id="right-column-m">
                    <div id="right-heading-m">
                        <p>Welcome, <?php print isset($_SESSION['firstname']) ? $_SESSION['firstname'] : '';?></p>
                    </div>
                    <span>PreOwnedGowns.com can help you find the dress you’ve always dreamed about. Our guided searches showcase the best deals, the dresses we love and the hottest listings of the week. And our advanced search can conveniently narrow by designer, size, price and other criteria. With thousands of wedding gowns listed for sale, your dream dress is waiting.</span><br /><br />
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