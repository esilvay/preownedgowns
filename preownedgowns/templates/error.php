<?php
	session_start();
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
                <div id="left-column-s">
                	<div class="left-heading-s">
                        <p>Ooops...</p>
                    </div>
                    <br />
                    <br />
					<p>The page you are trying to get to doesn't exsist yet. In the meantime check out some of our <a href="/gowns" style="font-weight:bold;">Gowns</a>.</p>
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