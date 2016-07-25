<?PHP
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("includes/head.php"); ?>
<script type="text/javascript">

// perform JavaScript after the document is scriptable.
$(function() {
	// setup ul.tabs to work as tabs for each div directly under div.panes
	$("ul.tabs").tabs("div.panes > div");
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
                <div id="left-column-m">
                	<?php include("includes/gen-bar.php"); ?>
                </div>
                <div id="right-column-m">
                    <div id="right-heading-msi">
                        <p>Advertise With PreOwnedGowns.com</p>
                    </div>
                    <div id="main-frame-hiw">
                    <p><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">Available Ad Slots:</span></p>
					<p><strong>300 x 250 Square:</strong> Located top right, above the fold on all search result pages, and other informational pages.</p><br />

					<p><strong>728 x 90 Horizontal Banner:</strong> Located on bottom of search pages and individual dress listings (directly below seller’s contact information).</p><br />
                    
                    <p><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">Terms:</span></p>
					<p>Payment and creative art due a minimum of 5-7 days before campaign begins.</p><br />

					<p>For more information and for rates, please <a href="/contact" ><strong>Contact Us</strong></a></p>

                    </div>
                    <?php include("includes/seals.php"); ?>
                    
                </div><div class="clear"></div>
            </div>
            <?php include("includes/ads2.php"); ?>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
</body>
</html>