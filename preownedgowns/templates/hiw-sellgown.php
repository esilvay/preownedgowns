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
                        <p>Why Sell on PreOwnedGowns.com?</p>
                    </div>
                    <div id="main-frame-hiw">
						<p>PreOwnedGowns.com has been connecting buyers and sellers since 2004.  In that time, we’ve received recognition by top media like Martha Stewart Wedding, InStyle Weddings, CNN.com, The Wall Street Journal and a host of other trusted sources.</p><br />
                        
                        <p>Here’s what makes PreOwnedGowns.com a better way to sell your wedding dress.</p><br />
                        
                        <p><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">Seller Privacy</span></p>
                        <p>Your email address will never be displayed publicly on our website. Additionally we will never sell, rent or otherwise disclose your information to a 3rd party. For more information see our privacy policy.</p>
                        
                        <p><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">Seller Protection</span></p>
                        <p>We filter initial buyer emails to help prevent scams inquiries from ever reaching your inbox. And we employ sophisticated measures to protect your email address from spam.</p>
                        
                        <p><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">Successful Stats</span></p>
                        <p>PreOwnedGowns.com has more than 30 million pages views a year. And wedding dresses average over 2000 views each.</p>
                        
                        <p><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">Unlimited Description</span></p>
                        <p>There is no limit to the amount of description you can give about your wedding dress - and you can post up to five pictures - allowing you to give buyers a great idea of how fantastic your gown is. And you can login and update your listing as often as you would like, always without a fee.</p>
                        
                        <p><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">More Money</span></p>
                        <p>You ONLY pay the one time $25 listing fee, and your dress is listed until it sells.  We don't charge any commission on the sale price.</p>
                        
                        
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