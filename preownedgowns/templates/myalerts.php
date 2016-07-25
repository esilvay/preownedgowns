<?PHP
session_start();
$old_sessionid = session_id();
session_regenerate_id(TRUE);
$new_sessionid = session_id();

if (!isset($_SESSION['is_logged_in'])) {
     header("Location:/login");
     die();     // just to make sure no scripts execute
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
        <div id="img_scroller">
            	<?php include("includes/banner.php"); ?>
            </div>
            <div class="spacer"></div>
            <div id="content">
                <div id="left-column-m">
                	<?php include("includes/member-bar.php"); ?>
                </div>
                <div id="right-column-m">
                    <div id="right-heading-m">
                        <p>Gown Alerts</p>
                    </div>
                    <span>Coming Soon</span><br /><br />
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