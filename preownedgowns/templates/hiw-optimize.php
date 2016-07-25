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
                	<?php include("includes/hiw-bar.php"); ?>
                </div>
                <div id="right-column-m">
                    <div id="right-heading-msi">
                        <p>Optimize Your PreOwnedGowns.com Listing</p>
                    </div>
                    <div id="main-frame-hiw">
						<p>Provide details, images, and specific information to optimize your listing. Make sure you visit the Gowns 101 and Street Sizing Guide to include accurate details. </p><br />
                        
                        <p><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">Price it Reasonably</span></p><br />
                         
                        <p>The best way to determine what your pre-owned or used gown should go for is to look at the date it was made and bought, the designer, the condition, the original price, and the demand. </p><br />
                        
                        <p>Some guidelines:</p><br />
                        
                        <ul>
                        <li style="margin-left: 15px;">New gowns or those that have not been used should go around 25-35% off</li>
                        <li style="margin-left: 15px;">Sample gowns should around 35-50% off original price</li>
                        <li style="margin-left: 15px;">Used gowns, less than 3 years old, in excellent condition, should around 50-60% off</li>
                        </ul><br />
                        
                        <p>Other Factors:</p><br />
                        
                        <ul>
                        <li style="margin-left: 15px;">Age of the gown is tremendously important. The price of the gown should reflect the age. The older the gown is, the lower the price should be</li>
                        
                        <li style="margin-left: 15px;">If the dress has imperfections, the price should reflect it</li>
                        <li style="margin-left: 15px;">Dress alterations</li>
                        </ul><br />
                        
                        <p>If your gown is not selling as fast as you would like, try lowering the price. It could be the discount people are looking for!</p><br />
                        
                        <p><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">Make the Pictures AMAZING</span></p>
                        <p>Try using your own wedding/prom pictures. You can crop your head off if you do not feel comfortable. People want to see the actual dress, and most times, the actual dress on a body. Show precise detailing, and make sure pictures are clear! </p><br />
                        
                        <p><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">Include Your Wedding Dress in the Correct Categories</span></p>
                        <p>Be sure to fill out all categories. Buyers may search specific categories and your gown may not appear if not filled in. Visit our Gowns 101 or Street Sizing page for help.</p><br />
                        
                        <p><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">Full Disclosure Is Important</span></p>
                        <p>Please make sure your listings are honest and precise! Pick apart every element of your gown or accessory until every detailed is explained!</p><br />
                        
                        <p><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">Facebook "Like" Button</span></p>
                        <p>Each PreOwnedGown.com has a Facebook Like button. Clicking this button will immediately share a 'like" for your gown with your social network. Spreading the word is a great way to help sell or buy your dress.</p><br />
                        

                        
                        
                    </div>
                    <?php include("includes/seals.php"); ?>
                    <?php include("includes/ads.php"); ?>
                </div>
                	<div class="clear"></div>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
</body>
</html>